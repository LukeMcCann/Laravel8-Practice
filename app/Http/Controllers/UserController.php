<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

final class UserController extends Controller 
{
    public function testRequest(Request $request) 
    {
        return $request->input();
    }
}