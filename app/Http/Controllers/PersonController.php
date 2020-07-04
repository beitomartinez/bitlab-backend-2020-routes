<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show()
    {
        return view('person')->with('name', self::randomName());
    }

    public static function randomName()
    {
        $names = ['Roberto', 'Luis', 'Carmen', 'Diego'];
        $random = rand(0, count($names) - 1);
        return $names[$random];
    }
}