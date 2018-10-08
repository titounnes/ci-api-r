<?php namespace App\Models\Evaluations;

class Base extends \CodeIgniter\Model
{
    protected $table = 'evaluations e';
    protected $allowedFields = ['title'];
    
}