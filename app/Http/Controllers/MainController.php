<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $projects = [
            [
                'name' => 'Laravel App 1',
                'description' => 'A cool Laravel project.',
                'link' => url('/project1')
            ],
            [
                'name' => 'Downloadable Tool',
                'description' => 'Some utility you can download.',
                'link' => url('/downloads/tool.zip')
            ]
        ];

        return view('home', compact('projects'));
    }
}
