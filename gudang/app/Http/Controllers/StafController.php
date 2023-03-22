<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StafController extends Controller
{
    public function staf()
    {
        return view('staf.dashboard');
    }
}
