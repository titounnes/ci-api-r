<?php namespace App\Models\Lessons\Teacher;


class Data extends \App\Models\Lessons\Base
{
    function getByTitle($topic = '')
    {
        return $this
            ->distinct(true)
            ->select('ccc.competence_id id,c.code,c.topic')
            ->join('courses_classrooms_competences ccc','c.id=ccc.competence_id','inner')
            ->join('lecturers l',"l.course_id=ccc.course_id and l.teacher_id=".config('App')->session->id,'inner')
            ->join('period p','p.semester=l.semester and p.year=l.year and p.id=1','inner')
            ->like('c.topic',$topic)
            ->asObject()
            ->findAll();
    }

    function getById($id)
    {
        return $this
            ->distinct(true)
            ->select('c.id')
            ->join('courses_classrooms_competences ccc',"c.id=ccc.competence_id and c.id={$id}",'inner')
            ->join('lecturers l',"l.course_id=ccc.course_id and l.teacher_id=".config('App')->session->id,'inner')
            ->find();
    }
}