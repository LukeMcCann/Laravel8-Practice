<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

final class UserController extends Controller
{
    public function show()
    {
        return User::all();
    }
}
