<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parkir;
use Illuminate\Support\Facades\Auth;

class ParkirController extends Controller
{
    public function index()
    {
        $limit = 20;
        $parkirs = Parkir::orderBy('name','asc')->paginate($limit);
        return view('admin.parkir.index', compact('parkirs', 'limit'));
    }

    public function create()
    {
        return view('admin.parkir.create');
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

        return redirect()->route('admin.parkirs.index')->with('success','Berhasil Menyimpan Data');
    }

    public function show(Parkir $parkir)
    {
        return view('admin.parkir.show', compact('parkir'));
    }

    public function edit(Parkir $parkir)
    {
        return view('admin.parkir.edit', compact('parkir'));
    }

    public function update(Request $request,Parkir $parkir)
    {
        $parkir = Parkir::where('slug', $parkir->slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'plat' => 'required',
            'warna' => 'required',
            'tanggal_lahir' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe_roda' => 'required',

        ]);
        $foto_stnk = $request->stnk;

        if($foto_stnk) {
            $ext = $foto_stnk->getClientOriginalExtension();
            $picture_name = 'stnk_'.$request->name.'.'.$ext;
            $foto_stnk->storeAs('public/stnk', $picture_name);
        }else{
            $picture_name = $parkir->stnk;
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
        $parkir->update();

        return redirect()->route('admin.parkirs.index')->with('success','Berhasil Update Data');
    }

    public function destroy(Parkir $parkir)
    {
        $parkir->delete();
        return redirect()->route('admin.parkirs.index')->with('success','Berhasil Menghapus Data');
    }
}
