<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class NonICPController extends Controller
{
    //
    public function index() 
    {
      
        return Inertia::render('NonICP');
    }
}
