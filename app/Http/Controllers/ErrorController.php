<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function __call($name, $arguments)
    {
        return view('error', ['codigo' => '404']);
    }
}
