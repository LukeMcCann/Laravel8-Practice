<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class FormController extends Controller
{
    public function getData(Request $request)
    {
        return $request->input();
    }
}
