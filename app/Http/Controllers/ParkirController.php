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
            $parkir = Parkir::where('user_id', Auth::id())->first();
            return view('parkir.index', compact('parkir'));
        }else {
            return redirect()->route('login')->with('errro','Silahkan Login Terlebih Dahulu');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'plat' => 'unique:parkirs|required',
            'warna' => 'required',
            'tanggal_lahir' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe_roda' => 'required',
            'lokasi' => 'required',
            'tanggal_transfer' => 'required',
            'jumlah_transfer' => 'required',
            'stnk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'foto_pembayaran' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',

        ]);

        $parkir = new Parkir();

        $foto_stnk = $request->stnk;

        if($foto_stnk) {
            $ext = $foto_stnk->getClientOriginalExtension();
            $picture_name = 'stnk_'.$request->name.'.'.$ext;
            $foto_stnk->storeAs('public/stnk', $picture_name);
        }

        $foto_pembayaran = $request->foto_pembayaran;

        if($foto_pembayaran) {
            $ext = $foto_pembayaran->getClientOriginalExtension();
            $picture_name_pembayaran = 'Pembayaran_'.$request->name.'.'.$ext;
            $foto_pembayaran->storeAs('public/pembayaran', $picture_name_pembayaran);
        }

        $foto_ktp = $request->ktp;
        if($foto_ktp) {
            $ext = $foto_ktp->getClientOriginalExtension();
            $picture_name_ktp = 'ktp_'.$request->name.'.'.$ext;
            $foto_ktp->storeAs('public/ktp', $picture_name_ktp);
        }


        $parkir->name = $request->name;
        $parkir->plat = $request->plat;
        $parkir->stnk = $picture_name;
        $parkir->warna = $request->warna;
        $parkir->tanggal_lahir = $request->tanggal_lahir;
        $parkir->hp = $request->hp;
        $parkir->alamat = $request->alamat;
        $parkir->status = 'pending';
        $parkir->tipe_roda = $request->tipe_roda;
        $parkir->lokasi = $request->lokasi;
        $parkir->tanggal_transfer = $request->tanggal_transfer;
        $parkir->jumlah_transfer = $request->jumlah_transfer;
        $parkir->ktp = $picture_name_ktp;
        $parkir->foto_pembayaran = $picture_name_pembayaran;
        $parkir->user_id = Auth::id();
        $parkir->save();

        return redirect()->route('parkir.index')->with('success','Berhasil Mendaftar Parkir');
    }
}
