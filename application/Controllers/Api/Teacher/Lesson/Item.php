<?php 
namespace App\Controllers\Api\Teacher\Lesson;

Use App\Models\Lessons\Teacher\Data;
    
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