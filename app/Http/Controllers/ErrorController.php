<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //error
    public function error(Request $request) {
        return view('error');
    }
}
