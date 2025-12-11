<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $projects = [
            [
                'name' => 'Wave!',
                'description' => 'A 2D game that tests your reflexes.',
                'link' => url('https://github.com/juni-vv/wave')
            ]
        ];

        return view('home', compact('projects'));
    }
}
