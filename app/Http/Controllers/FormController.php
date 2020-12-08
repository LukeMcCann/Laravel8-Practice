<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class FormController extends Controller
{
    public function getData(Request $request)
    {
        // Should be in a Request object really
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        return $request->input();
    }
}
