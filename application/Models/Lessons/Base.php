<?php namespace App\Models\Lessons;


class Base extends \CodeIgniter\Model
{
    protected $table = 'competences c';
    protected $allowedFields = ['title','description'];
}