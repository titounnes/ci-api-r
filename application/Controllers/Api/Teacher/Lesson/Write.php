<?php 
namespace App\Controllers\Api\Teacher\Lesson;

Use App\Models\Lessons\Teacher\Data;
    
class Write extends \App\Controllers\Api\Base 
{
    function index()
    {
        if( count( ( new Data())->getById( $this->request->getPost('id') ) ) === 0 )
        {
            return $this->fail('Anda tidak punya otoritas.');
        }
        
        helper('file');

        return $this->success(
            writing('lessons/' , $this->request->getPost('id'), $this->request->getPost('lesson')),
            'Sukses'
        );
        
    }
}