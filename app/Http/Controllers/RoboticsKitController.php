<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoboticsKitController extends Controller
{
    public function index()
    {
        return view('kits.index');;
    }
}
