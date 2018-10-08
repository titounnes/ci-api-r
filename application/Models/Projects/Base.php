<?php namespace App\Models\Projects;

class Base extends \CodeIgniter\Model
{
    protected $table = 'projects p';
    protected $allowedFields = ['title'];
    
}