@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="backdrop-color:  none !important;">
                <h5>Data Pengguna Parkir Berbayar</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr></tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>123.456</td>
                            <td>123.456</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <a href="{{ route('admin.parkirs.edit', 1) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('admin.parkirs.destroy', 1) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
