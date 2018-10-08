<?php namespace App\Models\Projects\Teacher;

class Data extends \App\Models\Projects\Base
{
    function getByClassroomCourse($classroom_id, $course_id)
    {
        return $this
            ->distinct(true)
            ->select('p.id, p.title, ifnull(ccp.submission,0) submission, ccp.duration_submission, ccp.duration_peer, ccp.duration_revision')
            ->join('classrooms_courses_projects ccp',"ccp.project_id=p.id and ccp.classroom_id={$classroom_id} and ccp.course_id={$course_id}",'inner')
            ->join('lecturers l',"l.course_id=ccp.course_id and l.teacher_id=".Config('App')->session->id,'inner')
            ->join('period d','d.semester=l.semester','inner')
            ->orderBy('ccp.submission,p.title')
            ->asObject()
            ->findAll();
    }

    function getById($id)
    {
        return $this
            ->distinct(true)
            ->select('p.id')
            ->join('classrooms_courses_projects ccp',"p.id=ccp.project_id and p.id={$id}",'inner')
            ->join('lecturers l',"l.course_id=ccp.course_id and l.teacher_id=".config('App')->session->id,'inner')
            ->find();
    }

}
