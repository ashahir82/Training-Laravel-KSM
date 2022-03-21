<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function cubaan()
    {
        return 'Cubaan';
    }

    public function welcome()
    {
        return view('cubaan.test');
    }
}
