<?php namespace App\Models\Competences\Teacher;

class Data extends \App\Models\Competences\Base
{
    function getByClassroomCourseDomain($classroom_id, $course_id, $domain_id)
    {
        return $this
            ->distinct(true)
            ->select('c.id,c.topic, c.competence')
            ->join('courses_classrooms_competences ccc','c.id=ccc.competence_id','inner')
            ->join('period p','p.semester=ccc.semester','inner')
            ->join('lecturers l','l.course_id=ccc.course_id and l.semester=p.semester','inner')
            ->where('l.teacher_id', Config('App')->session->id)
            ->where('ccc.classroom_id', $classroom_id)
            ->where('ccc.course_id', $course_id)
            ->where('c.domain_id', $domain_id)
            //->where('c.deleted', 0)
            ->orderBy('c.topic')
            ->asObject()
            ->findAll();
    }

}