@extends('layouts.admin')
@section('title', 'Tambah')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Tambah Data</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.parkirs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
                                <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" value="{{ old('plat') }}">
                                @error('plat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Stnk</label>
                            <input type="file" name="stnk" class="form-control @error('stnk') is-invalid @enderror" accept="image/*" value="{{ old('stnk') }}">
                            @error('stnk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror" value="{{ old('warna') }}">
                            @error('warna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hp">No. Hp</label>
                            <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror" value="{{ old('hp') }}">
                            @error('hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipe_roda">Tipe Roda</label>
                            <select name="tipe_roda" id="tipe_roda" class="form-control form-select @error('tipe_roda') is-invalid @enderror" style="width: 100%;">
                                <option value="" disabled {{ old('tipe_roda') ? '' : 'selected' }}>Pilih Tipe Roda</option>
                                <option value="2" {{ old('tipe_roda') === '2' ? 'selected' : '' }}>2</option>
                                <option value="4" {{ old('tipe_roda') === '4' ? 'selected' : '' }}>4</option>
                                <option value="6" {{ old('tipe_roda') === '6' ? 'selected' : '' }}>6</option>
                            </select>
                            @error('tipe_roda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.parkirs.index') }}" class="btn btn-danger float-start">Kembali</a>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

