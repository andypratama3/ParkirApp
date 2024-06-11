<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parkir;
class DaftarPrakirController extends Controller
{
    public function index(Request $request)
    {
        $limit = request(15);
        $parkirs = Parkir::where('status', 'pending');

        if($request->search){
            $parkirs->where('name', 'like', '%' . $request->any . '%');
        }else{

        }
        $parkirs = $parkirs->orderBy('name','asc')->paginate($limit);
        return view('admin.daftar.index', compact('parkirs'));
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
        $parkir->status = 'pending';
        $parkir->tipe_roda = $request->tipe_roda;
        $parkir->user_id = Auth::id();
        $parkir->save();

        return redirect()->route('admin.pendaftar.parkir.index')->with('success','Berhasil Menyimpan Data');
    }

    public function show($slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();
        return view('admin.daftar.show', compact('parkir'));
    }

    public function edit($slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();
        return view('admin.daftar.edit', compact('parkir'));
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

        return redirect()->route('admin.pendaftar.parkir.index')->with('success','Berhasil Update Data');
    }

    public function destroy($slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();
        $parkir->delete();

    }

}
