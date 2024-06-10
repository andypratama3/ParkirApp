<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Parkir;
class ParkirController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $parkir = Parkir::where('user_id', Auth::id())->get();
            return view('parkir.index', compact('parkir'));
        }else {
            return redirect()->route('login')->with('errro','Silahkan Login Terlebih Dahulu');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'unique:parkirs|required',
            'plat' => 'unique:parkirs|required',
            'warna' => 'required',
            'tanggal_lahir' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe_roda' => 'required',
            'stnk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',

        ]);

        $parkir = new Parkir();

        $foto_stnk = $request->stnk;

        if($foto_stnk) {
            $ext = $foto_stnk->getClientOriginalExtension();
            $picture_name = 'stnk_'.$request->name.'.'.$ext;
            $foto_stnk->storeAs('public/stnk', $picture_name);
        }

        $parkir->name = $request->name;
        $parkir->nik = $request->nik;
        $parkir->plat = $request->plat;
        $parkir->stnk = $picture_name;
        $parkir->warna = $request->warna;
        $parkir->tanggal_lahir = $request->tanggal_lahir;
        $parkir->hp = $request->hp;
        $parkir->alamat = $request->alamat;
        $parkir->status = $request->status;
        $parkir->tipe_roda = $request->tipe_roda;
        $parkir->user_id = Auth::id();
        $parkir->save();

        return redirect()->back();
    }
}
