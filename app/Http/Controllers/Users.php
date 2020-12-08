<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class Users extends Controller 
{
    public function index()
    {
        echo "Hello, from " . get_class($this);
    }
}