<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkirController extends Controller
{
    public function index()
    {
        return view('admin.parkir.index');
    }
}
