@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:  none !important;">
                <h5>Data Pengguna Parkir Berbayar</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.parkirs.create') }}" class="btn btn-primary btn-sm float-end"><i class="fa fa-plus">Tambah</i></a>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr></tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Plat</th>
                                <th>Hp</th>
                                <th>Tipe</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($parkirs as $parkir)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $parkir->name }}</td>
                                <td>{{ $parkir->nik }}</td>
                                <td>{{ $parkir->plat }}</td>
                                <td>{{ $parkir->hp }}</td>
                                <td>{{ $parkir->tipe_roda }}</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="{{ route('admin.parkirs.edit', $parkir->slug) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('admin.parkirs.destroy', $parkir->slug) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
