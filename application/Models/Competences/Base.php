<?php namespace App\Models\Competences;

class Base extends \CodeIgniter\Model
{
    protected $table = 'competences c';
    protected $allowedFields = ['competence','topic'];
    
}