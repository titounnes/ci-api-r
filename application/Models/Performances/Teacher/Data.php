<?php namespace App\Models\Performances\Teacher;

class Data extends \App\Models\Performances\Base
{
    function getByClassroomCourse($classroom_id, $course_id)
    {
        return $this
            ->distinct(true)
            ->select('p.id, p.title, ifnull(ccp.start,0) start, ccp.duration')
            ->join('classrooms_courses_performances ccp',"ccp.performance_id=p.id and ccp.classroom_id={$classroom_id} and ccp.course_id={$course_id}",'inner')
            ->join('lecturers l',"l.course_id=ccp.course_id and l.teacher_id=".(Config('App')->session->id),'inner')
            ->join('period d','d.semester=l.semester','inner')
            //->where('p.deleted', 0)
            ->orderBy('ccp.start,p.title')
            ->asObject()
            ->findAll();
    }

    function getById($id)
    {
        return $this
            ->distinct(true)
            ->select('p.id')
            ->join('classrooms_courses_performances ccp',"p.id=ccp.performance_id and p.id={$id}",'inner')
            ->join('lecturers l',"l.course_id=ccp.course_id and l.teacher_id=".config('App')->session->id,'inner')
            ->find();
    }

}
