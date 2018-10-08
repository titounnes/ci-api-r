<?php 
namespace App\Controllers\Api\Teacher\Lesson;

Use App\Models\Lessons\Teacher\Data;
    
class Read extends \App\Controllers\Api\Base 
{
    function index()
    {
        if( count( ( new Data())->getById( $this->request->getPost('id') ) ) === 0 )
        {
            return $this->fail('Anda tidak punya otoritas.');
        }
        
        helper('file');

        return $this->success(
            reading('lessons/' , $this->request->getPost('id')),
            'Sukses'
        );
        
    }
}