<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class UserController extends Controller
{
    public function viewRender()
    {
        return view('users');
    }
}
