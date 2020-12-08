<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

final class User extends Controller
{
    public function index(string $name) 
    {
        return view('users', ['name' => $name]);
    }
}