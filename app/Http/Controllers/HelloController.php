<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //index
    public function index(Request $request) {
        $coolString = 'Hello from Controller.';
        return view('hellobbb', compact('coolString'));
    }
}
