<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name','asc')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function edit()
    {
        return view('admin.users.edit');
    }

    public function update()
    {

    }

    public function show()
    {
        return view('admin.users.show');
    }

    public function destroy()
    {

    }
}
