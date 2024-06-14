@extends('layouts.admin')
@section('title', 'Edit')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Edit Data </h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.pendaftar.parkir.update', $parkir->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $parkir->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>KTP</label>
                            <div class="input-group">
                                <input type="file" name="stnk" class="form-control @error('stnk') is-invalid @enderror" accept="image/*" value="{{ old('stnk', $parkir->stnk) }}">
                            @error('stnk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                                <div class="input-group-prepend">
                                    <a target="__blank" href="{{ asset('storage/ktp/'.$parkir->ktp) }}" class="input-group-text font-weight-bold" style="color: black;">Lihat Foto</a>
                                </div>
                            </div>
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
                                <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" value="{{ old('plat', $parkir->plat) }}">
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
                            <div class="input-group">
                                <input type="file" name="stnk" class="form-control @error('stnk') is-invalid @enderror" accept="image/*" value="{{ old('stnk', $parkir->stnk) }}">
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
                            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror" value="{{ old('warna', $parkir->warna) }}">
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
                            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir', $parkir->tanggal_lahir) }}">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_lahir">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $parkir->lokasi) }}">
                            @error('lokasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hp">No. Hp</label>
                            <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror" value="{{ old('hp', $parkir->hp) }}">
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
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $parkir->alamat) }}">
                            @error('alamat')
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
                                <option value="" disabled {{ old('tipe_roda', $parkir->tipe_roda) ? '' : 'selected' }}>{{ $parkir->tipe_roda ? 'Pilih Tipe Roda' : 'Tipe Roda'  }}</option>
                                <option value="2" {{ old('tipe_roda', $parkir->tipe_roda) === '2' ? 'selected' : '' }}>2</option>
                                <option value="4" {{ old('tipe_roda',$parkir->tipe_roda) === '4' ? 'selected' : '' }}>4</option>
                                <option value="6" {{ old('tipe_roda',$parkir->tipe_roda) === '6' ? 'selected' : '' }}>6</option>
                            </select>
                            @error('tipe_roda')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option disabled {{ old('status', $parkir->status) ? '' : 'selected' }}>{{ $parkir->status ? 'Pilih Status' : 'Status'  }}</option>
                                <option value="active" {{ old('status', $parkir->status) === 'active' ? 'selected' : '' }}>Aktif</option>
                                <option value="pending" {{ old('status', $parkir->status) === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="reject " {{ old('status', $parkir->status) === 'reject ' ? 'selected' : '' }}>Reject</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Transfer</label>
                            <input type="text" class="form-control" name="tanggal_transfer" value="{{ $parkir->tanggal_transfer ?? old('tanggal_transfer') }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Jumlah Transfer</label>
                            <input type="text" class="form-control" name="jumlah_transfer" value="{{ $parkir->jumlah_transfer ?? old('jumlah_transfer') }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
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
                    <button type="submit" class="btn btn-primary btn-sm float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

