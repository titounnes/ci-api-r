<?php 
namespace App\Controllers\Api\Teacher\Course;

Use App\Models\Courses\Teacher\Data;
    
class Item extends \App\Controllers\Api\Base 
{
    function index()
    {

        return $this->success(
            (new Data())->getByTitle(
                $this->request->getPost('title')
            ),
            'Sukses'
        );
        
    }
}