<?php namespace App\Models\Courses;


class Base extends \CodeIgniter\Model
{
    protected $table = 'courses c';
    protected $allowedFields = ['title','description'];
}