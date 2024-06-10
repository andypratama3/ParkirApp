<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KritikSaran;
class KritikSaranController extends Controller
{
    public function index()
    {
        $kritiks = KritikSaran::all();
        return view('admin.kritik-saran.index', compact('kritiks'));
    }

    public function show($kritik)
    {
        $kritik = KritikSaran::where('id', $kritik)->first();
        return view('admin.kritik-saran.show', compact('kritik'));
    }

    public function destroy($kritik)
    {
        $kritik = KritikSaran::where('id', $kritik)->first();
        $kritik->delete();
        return redirect()->route('admin.kritik.index');
    }
}
