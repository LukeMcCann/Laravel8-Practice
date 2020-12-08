<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class Users extends Controller 
{
    public function index(string $name)
    {
        echo "Hello $name, from " . get_class($this) . '<br /><br />';

        // API Example: Note you would usually return a  new JsonResponse for an API

        return  [
                    'Users' => [
                        'name' => $name
                    ]
                ];
    }
}