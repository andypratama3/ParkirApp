@extends('layouts.admin')
@section('title', 'Detail Data')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Detail Data </h4>
        </div>

        <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $parkir->name) }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik', $parkir->nik) }}" readonly>
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
                                <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" value="{{ old('plat', $parkir->nik) }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Stnk</label>
                            <div class="input-group">
                                <input type="file" name="stnk" class="form-control @error('stnk') is-invalid @enderror" accept="image/*" value="{{ old('stnk', $parkir->stnk) }}" readonly>
                            @error('stnk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                                <div class="input-group-prepend">
                                    <a target="__blank" href="{{ asset('storage/stnk/'.$parkir->stnk) }}" class="input-group-text font-weight-bold" style="color: black;">Lihat Foto</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror" value="{{ old('warna', $parkir->warna) }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir', $parkir->tanggal_lahir) }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hp">No. Hp</label>
                            <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror" value="{{ old('hp', $parkir->hp) }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $parkir->alamat) }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" readonly>
                                <option value="{{ $parkir->status }}">{{ $parkir->status }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipe_roda">Tipe Roda</label>
                            <select name="tipe_roda" id="tipe_roda" class="form-control form-select @error('tipe_roda') is-invalid @enderror" style="width: 100%;" readonly>
                                <option value="{{ $parkir->tipe_roda }}">{{ $parkir->tipe_roda ? '2' : '4' }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Foto Pembayaran</label>
                            <div class="input-group">
                                <input type="file" name="stnk" readonly accept="image/*" value="{{ old('stnk') }}">
                                <div class="input-group-prepend">
                                    <a target="__blank" href="{{ asset('storage/pembayaran/'.$parkir->foto_pembayaran ?? '') }}" class="input-group-text font-weight-bold" id="basic-addon1"
                                        style="color: black;">Lihat Foto Pembayaran</a>
                                </div>
                            </div>
                            @error('stnk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>


                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.pendaftar.parkir.index') }}" class="btn btn-danger btn-sm float-start">Kembali</a>
                </div>

        </div>
    </div>
</div>
@endsection

