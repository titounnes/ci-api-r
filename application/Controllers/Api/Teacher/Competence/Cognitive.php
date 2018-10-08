<?php 
namespace App\Controllers\Api\Teacher\Competence;

Use App\Models\Competences\Teacher\Data;
    
class Cognitive extends \App\Controllers\Api\Base 
{
    function index()
    {

        return $this->success(
            (new Data())->getByClassroomCourseDomain(
                $this->request->getPost('classroom_id'), 
                $this->request->getPost('course_id'),
                1 
            ),
            'Sukses'
        );
        
    }
}