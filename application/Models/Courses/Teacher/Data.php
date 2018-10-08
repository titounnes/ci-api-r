<?php namespace App\Models\Courses\Teacher;


class Data extends \App\Models\Courses\Base
{
    function getByTitle($title = '')
    {
        return $this
            ->distinct(true)
            ->select('c.id,c.title')
            ->join('lecturers l','l.course_id=c.id','inner')
            ->join('period p','p.semester=l.semester and p.year=l.year','inner')
            ->where('l.teacher_id',config('App')->session->id)
            ->where('p.id',1)
            //->where('c.deleted', 0)
            ->like('c.title',$title)
            ->asObject()
            ->findAll();
    }
}