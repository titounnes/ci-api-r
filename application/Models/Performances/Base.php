<?php namespace App\Models\Performances;

class Base extends \CodeIgniter\Model
{
    protected $table = 'performances p';
    protected $allowedFields = ['title'];
    
}