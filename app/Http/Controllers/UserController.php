<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

final class UserController extends Controller
{
    public function callExternalApi()
    {
        $users = Http::get('https://reqres.in/api/users?page=1');

        return view('users', [ 'users' => $users['data']]);
    }
}
