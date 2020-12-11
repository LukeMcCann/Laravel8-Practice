<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class AuthController extends Controller
{
    public function login(Request $request)
    {
        $body = $request->input();

        $request->session()->put('user', $body['user']);

        return \redirect('dashboard');
    }
}
