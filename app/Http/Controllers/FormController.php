<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

final class FormController extends Controller
{
    public function getData(LoginRequest $request)
    {
        return $request->input();
    }
}
