<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PubblicController extends Controller
{
    public function home(){
        return view('homepage');
    }
}
