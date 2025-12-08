<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class AgeController extends Controller
{
    public function about()
    {
        $birthday = Carbon::create(2005, 4, 16);
        $age = $birthday->age;

        return view('about', compact('age'));
    }
}
