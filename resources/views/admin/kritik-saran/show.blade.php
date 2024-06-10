@extends('layouts.admin')
@section('title', 'Detail Data')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Data Kritik dan Saran</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $kritik->name }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $kritik->email }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ $kritik->subject }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea name="message" class="form-control" rows="5" readonly>{{ $kritik->message }}</textarea>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <a href="{{ route('admin.kritik.index') }}" class="btn btn-danger btn-sm float-start">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection

