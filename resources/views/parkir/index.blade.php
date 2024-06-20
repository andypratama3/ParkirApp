@extends('layouts.landing')
@section('title', 'Data Parkir')

@section('content')
 <!-- Hero Section -->
 <section id="hero" class="hero section">

    <img src="{{ asset('assets/img/dishub-transformed.png') }}" alt="" data-aos="fade-in" class="">

    <div class="container">

      <div class="col-md-12" data-aos="fade-up">
        <div class="container">
            <div class="card" style="background-color: #2d3436; background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%); trasparent: 20%;">
                <div class="card-body  text-white">
                    <h5 class="card-title text-center">Pengisian Data Pengguna Parkir</h5>
                    @if(!$parkir)
                    <form action="{{ route('parkirs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="name" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $parkir->name) }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="nik">KTP</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <input type="file" name="ktp" class="form-control @error('ktp') is-invalid @enderror" value="{{ old('ktp', $parkir->name) }}">
                                            @error('ktp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="plat">Plat</label>
                                    <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text font-weight-bold" id="basic-addon1"
                                                style="color: black;">KT</span>
                                        </div>
                                        <input type="text" class="form-control @error('plat') is-invalid @enderror"
                                            name="plat" value="{{ old('plat', $parkir->name) }}">
                                        @error('plat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">STNK</label>
                                    <div class="col-sm-10">
                                    <input type="file" name="stnk"
                                        class="form-control @error('stnk') is-invalid @enderror" accept="image/*"
                                        value="{{ old('stnk', $parkir->name) }}">
                                    @error('stnk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Warna</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="warna"
                                        class="form-control @error('warna') is-invalid @enderror"
                                        value="{{ old('warna', $parkir->name) }}">
                                    @error('warna')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            value="{{ old('tanggal_lahir', $parkir->name) }}">
                                        @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="hp">Hp/Wa</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror"
                                        value="{{ old('hp', $parkir->name) }}">
                                    @error('hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="alamat"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ old('alamat', $parkir->name) }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="lokasi">lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lokasi"
                                            class="form-control @error('lokasi') is-invalid @enderror"
                                            value="{{ old('lokasi', $parkir->name) }}">
                                        @error('lokasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-2">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="tipe_roda">Tipe Roda</label>
                                    <div class="col-sm-10">
                                    <select name="tipe_roda" id="tipe_roda"
                                        class="form-control form-select @error('tipe_roda') is-invalid @enderror"
                                        style="width: 100%;">
                                        <option value="" disabled {{ old('tipe_roda', $parkir->name) ? '' : 'selected' }}>Pilih Tipe
                                            Roda</option>
                                        <option value="2" {{ old('tipe_roda', $parkir->name) === '2' ? 'selected' : '' }}>2</option>
                                        <option value="4" {{ old('tipe_roda', $parkir->name) === '4' ? 'selected' : '' }}>4</option>
                                        <option value="6" {{ old('tipe_roda', $parkir->name) === '6' ? 'selected' : '' }}>6</option>
                                    </select>
                                    @error('tipe_roda')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <h5 class="card-title text-center mt-4">Pembayaran</h5>

                            <div class="col-md-12">
                                <div class="form-group row">

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="">Bank</label>
                                    {{-- <span></span> --}}
                                    <input type="text" class="form-control" name="bank" value="8976545468798765 ( BNI )" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="">Bukti Pembayaran</label>
                                    <input type="file" class="form-control" name="foto_pembayaran" value="{{ old('foto_pembayaran', $parkir->name) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="">Tanggal Transfer</label>
                                    <input type="date" class="form-control" name="tanggal_transfer" value="{{ old('tanggal_transfer', $parkir->name) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="">Jumlah Transfer</label>
                                    <input type="text" class="form-control" name="jumlah_transfer" value="{{ old('jumlah_transfer', $parkir->name) }}">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <a href="{{ route('landing.index') }}" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-primary float-end">Simpan</button>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $parkir->name) }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nik">KTP</label>
                                <div class="col-sm-10">
                                    <input type="file" name="ktp" class="form-control @error('ktp') is-invalid @enderror" value="{{ old('ktp', $parkir->ktp) }}">
                                    @error('ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <a target="__blank" href="{{ asset('storage/ktp/'.$parkir->ktp ?? '') }}" class="input-group-text font-weight-bold" id="basic-addon1" style="color: black; margin-top: 10px;">Lihat KTP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="plat">Plat</label>
                                <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text font-weight-bold" id="basic-addon1"
                                            style="color: black;">KT</span>
                                    </div>
                                    <input type="text" class="form-control @error('plat') is-invalid @enderror"
                                        name="plat" value="{{ old('plat', $parkir->plat) }}">
                                    @error('plat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">STNK</label>
                                <div class="col-sm-10">
                                <input type="file" name="stnk"
                                    class="form-control @error('stnk') is-invalid @enderror" accept="image/*"
                                    value="{{ old('stnk', $parkir->stnk) }}">
                                @error('stnk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <a target="__blank" href="{{ asset('storage/stnk/'.$parkir->stnk ?? '') }}" class="input-group-text font-weight-bold" id="basic-addon1" style="color: black; margin-top: 10px;" class="mt-2">Lihat KTP</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Warna</label>
                                <div class="col-sm-10">
                                <input type="text" name="warna"
                                    class="form-control @error('warna') is-invalid @enderror"
                                    value="{{ old('warna', $parkir->warna) }}">
                                @error('warna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_lahir"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        value="{{ old('tanggal_lahir', $parkir->tanggal_lahir) }}">
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="hp">Hp/Wa</label>
                                <div class="col-sm-10">
                                <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror"
                                    value="{{ old('hp', $parkir->hp) }}">
                                @error('hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ old('alamat', $parkir->alamat) }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="lokasi">lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lokasi"
                                        class="form-control @error('lokasi') is-invalid @enderror"
                                        value="{{ old('lokasi', $parkir->lokasi) }}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="tipe_roda">Tipe Roda</label>
                                <div class="col-sm-10">
                                <select name="tipe_roda" id="tipe_roda"
                                    class="form-control form-select @error('tipe_roda') is-invalid @enderror"
                                    style="width: 100%;">
                                    <option value="" disabled {{ old('tipe_roda', $parkir->tipe_roda) ? '' : 'selected' }}>Pilih Tipe
                                        Roda</option>
                                    <option value="2" {{ old('tipe_roda', $parkir->tipe_roda) === '2' ? 'selected' : '' }}>2
                                        Roda</option>
                                    <option value="4" {{ old('tipe_roda', $parkir->tipe_roda) === '4' ? 'selected' : '' }}>4
                                        Roda</option>
                                    <option value="6" {{ old('tipe_roda', $parkir->tipe_roda) === '6' ? 'selected' : '' }}>6
                                        Roda</option>
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


                        <h5 class="card-title text-center mt-4">Pembayaran</h5>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Bank</label>
                                <input type="text" class="form-control" name="bank" value="8976545468798765 ( BNI )" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Bukti Pembayaran</label>
                                <div class="input-group">
                                    <a target="__blank" href="{{ asset('storage/pembayaran/'.$parkir->foto_pembayaran ?? '') }}" class="input-group-text font-weight-bold" id="basic-addon1" style="color: black;">Lihat Bukti Pembayaran</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="status">Status</label>
                                <input type="text" name="status" readonly
                                    class="form-control @error('status') is-invalid @enderror"
                                    value="{{ $parkir->status ?? old('status', $parkir->name) }}">
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Tanggal Transfer</label>
                                <input type="text" class="form-control" name="tanggal_transfer" value="{{ $parkir->tanggal_transfer ?? old('tanggal_transfer', $parkir->name) }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Jumlah Transfer</label>
                                <input type="text" class="form-control" name="jumlah_transfer" value="{{ $parkir->jumlah_transfer ?? old('jumlah_transfer', $parkir->name) }}" readonly>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

</section><!-- /Hero Section -->

@endsection
