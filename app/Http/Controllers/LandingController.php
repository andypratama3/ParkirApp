<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkir;
use Illuminate\Support\Facades\Auth;
class LandingController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $parkir = Parkir::where('user_id', Auth::user()->id)->first();
        }else {
            $parkir = null;
        }

        return view('landing', compact('parkir'));
    }
}
