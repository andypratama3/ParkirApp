@extends('layouts.admin')
@section('title', 'Detail Data')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Data Parkir</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $parkir->name }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{ $parkir->nik }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="plat">Plat</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text font-weight-bold" id="basic-addon1"
                                    style="color: black;">KT</span>
                            </div>
                            <input type="text" class="form-control" name="plat" value="{{ $parkir->plat }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Stnk</label>
                        <div class="input-group">
                            {{-- <input type="file" name="stnk" class="form-control" accept="image/*" value="{{ $parkir->stnk }}" readonly> --}}
                            <div class="input-group-prepend">
                                <a target="__blank" href="{{ asset('storage/stnk/'.$parkir->stnk) }}" class="input-group-text font-weight-bold form-control" style="color: black;">Lihat Foto</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ $parkir->warna }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $parkir->tanggal_lahir }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hp">No. Hp</label>
                        <input type="text" name="hp" class="form-control" value="{{ $parkir->hp }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $parkir->alamat }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control" value="{{ $parkir->status }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipe_roda">Tipe Roda</label>
                        <input type="text" name="tipe_roda" class="form-control" value="{{ $parkir->tipe_roda }}" readonly>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <a href="{{ route('admin.parkirs.index') }}" class="btn btn-danger btn-sm float-start">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection


