<?php namespace App\Models\Evaluations\Teacher;

class Data extends \App\Models\Evaluations\Base
{
    function getByClassroomCourse($classroom_id, $course_id)
    {
        return $this
            ->distinct(true)
            ->select('e.id, e.title, cce.token, cce.quiz_type, qt.name label_quiz_type, cce.start, cce.duration, cce.random, cce.token_required, cce.navigation')
            ->join('classrooms_courses_evaluations cce',"cce.evaluation_id=e.id and cce.classroom_id={$classroom_id} and cce.course_id={$course_id}",'inner' )
            ->join('quiz_type qt','qt.id=cce.quiz_type','left')
            ->join('lecturers l',"l.course_id=cce.course_id and l.teacher_id=".(Config('App')->session->id),'inner')
            ->join('period d','d.semester=l.semester','inner')
            ->orderBy('cce.start,e.title')
            ->asObject()
            ->findAll();
    }

}
