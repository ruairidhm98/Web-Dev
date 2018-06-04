<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ChocolateController extends Controller 
{

    function index() 
    {

        $chocolates = \App\Chocolate::all();
        return view('fun.chocolates', [ 'all_chocolates' => $chocolates]);

    }

}

