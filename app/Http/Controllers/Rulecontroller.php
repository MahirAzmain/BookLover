<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rulecontroller extends Controller
{

    public function index(){
        return view('rules');
    }
}
