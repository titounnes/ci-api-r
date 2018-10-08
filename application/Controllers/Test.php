<?php 
namespace App\Controllers;

Use CodeIgniter\Controller;
    
class Test extends Controller
{
    function index()
    {
        return view('welcome_message');
    }
}