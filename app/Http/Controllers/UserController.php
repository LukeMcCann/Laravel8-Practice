<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class UserController extends Controller
{
    public function viewRender()
    {
        $data = [
            'Luke',
            'Martin',
            'Mike',
            'Darryl'
        ];
        return view('users', ['users' => $data]);
    }
}
