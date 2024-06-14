<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parkir;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParkirExport;
class ParkirController extends Controller
{
    public function index(Request $request)
    {
        $limit = 20;
        $parkirs = Parkir::where('status', 'active');

        if($request->search){
            $parkirs->where('name', 'like', '%' . $request->any . '%');
        }else{

        }
        $parkirs = $parkirs->orderBy('name','asc')->paginate($limit);

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
        }else{
            $picture_name = $parkir->stnk;
        }

        $foto_pembayaran = $request->foto_pembayaran;

        if($foto_pembayaran) {
            $ext = $foto_pembayaran->getClientOriginalExtension();
            $picture_name_pembayaran = 'Pembayaran_'.$request->name.'.'.$ext;
            $foto_pembayaran->storeAs('public/pembayaran', $picture_name_pembayaran);
        }else{
            $picture_name_pembayaran = $parkir->foto_pembayaran;
        }

        $foto_ktp = $request->ktp;
        if($foto_ktp) {
            $ext = $foto_ktp->getClientOriginalExtension();
            $picture_name_ktp = 'ktp_'.$request->name.'.'.$ext;
            $foto_ktp->storeAs('public/ktp', $picture_name_ktp);
        }else{
            $picture_name_ktp = $parkir->ktp;
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
        $parkir->update();

        return redirect()->route('admin.parkirs.index')->with('success','Berhasil Menyimpan Data');
    }

    public function show($slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();
        return view('admin.parkir.show', compact('parkir'));
    }

    public function edit($slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();
        return view('admin.parkir.edit', compact('parkir'));
    }

    public function update(Request $request,$slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'warna' => 'required',
            'tanggal_lahir' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe_roda' => 'required',
            'lokasi' => 'required',
            'tanggal_transfer' => 'required',
            'jumlah_transfer' => 'required',

        ]);

        $foto_stnk = $request->stnk;

        if($foto_stnk) {
            $ext = $foto_stnk->getClientOriginalExtension();
            $picture_name_stnk = 'stnk_'.$request->name.'.'.$ext;
            $foto_stnk->storeAs('public/stnk', $picture_name_stnk);
        }else{
            $picture_name_stnk = $parkir->stnk;
        }

        $foto_pembayaran = $request->foto_pembayaran;

        if($foto_pembayaran) {
            $ext = $foto_pembayaran->getClientOriginalExtension();
            $picture_name_pembayaran = 'Pembayaran_'.$request->name.'.'.$ext;
            $foto_pembayaran->storeAs('public/pembayaran', $picture_name_pembayaran);
        }else{
            $picture_name_pembayaran = $parkir->foto_pembayaran;
        }

        $foto_ktp = $request->ktp;
        if($foto_ktp) {
            $ext = $foto_ktp->getClientOriginalExtension();
            $picture_name_ktp = 'ktp_'.$request->name.'.'.$ext;
            $foto_ktp->storeAs('public/ktp', $picture_name_ktp);
        }else{
            $picture_name_ktp = $parkir->ktp;
        }


        $parkir->name = $request->name;
        $parkir->plat = $request->plat;
        $parkir->stnk = $picture_name_stnk;
        $parkir->warna = $request->warna;
        $parkir->tanggal_lahir = $request->tanggal_lahir;
        $parkir->hp = $request->hp;
        $parkir->alamat = $request->alamat;
        $parkir->status = $request->status;
        $parkir->tipe_roda = $request->tipe_roda;
        $parkir->lokasi = $request->lokasi;
        $parkir->tanggal_transfer = $request->tanggal_transfer;
        $parkir->jumlah_transfer = $request->jumlah_transfer;
        $parkir->ktp = $picture_name_ktp;
        $parkir->foto_pembayaran = $picture_name_pembayaran;
        $parkir->user_id = $parkir->user_id;
        $parkir->update();

        return redirect()->route('admin.parkirs.index')->with('success','Berhasil Update Data');
    }

    public function destroy($slug)
    {
        $parkir = Parkir::where('slug', $slug)->firstOrFail();
        $parkir->delete();

        return redirect()->route('admin.parkirs.index')->with('success','Berhasil Menghapus Data');

    }

    public function export()
    {
        return Excel::download(new ParkirExport, 'parkir.xlsx');
    }
}
