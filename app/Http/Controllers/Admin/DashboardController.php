<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parkir;
use App\Models\User;


class DashboardController extends Controller
{
    public function __invoke()
    {
        $total_parkirs = Parkir::count();
        $total_users = User::count();
        return view('admin.index', compact('total_parkirs','total_users'));
    }
}
