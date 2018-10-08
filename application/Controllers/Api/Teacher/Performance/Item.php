<?php 
namespace App\Controllers\Api\Teacher\Performance;

Use App\Models\Performances\Teacher\Data;
    
class Item extends \App\Controllers\Api\Base 
{
    function index()
    {

        return $this->success(
            (new Data())->getByClassroomCourse(
                $this->request->getPost('classroom_id'), 
                $this->request->getPost('course_id')
            ),
            'Sukses'
        );
        
    }
}