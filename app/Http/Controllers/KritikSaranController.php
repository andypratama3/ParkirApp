<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikSaran;
use Illuminate\Support\Facades\Auth;
class KritikSaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if (Auth::check()) {
            $kritik = KritikSaran::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            return response()->json(['message' => 'berhasil Mengirim Kritik dan Saran'], 200);
        } else {
            return response()->json(['error' => 'Unauthorized', 'redirect' => '/login'], 401);
        }
    }

}
