<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController 
{

    // power our startup page
    function index()
    {

        return view('fun.index');

    }

}