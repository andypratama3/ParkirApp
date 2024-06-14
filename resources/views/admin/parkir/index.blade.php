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
                <div class="col-md-6">
                    <form action="{{ route('admin.parkirs.index') }}" method="GET">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cari...</span>
                            <input type="text" name="search" value="{{ old('search') }}" class="form-control"
                                placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('admin.parkir.export') }}" class="btn btn-success"><i class="fa fa-solid fa-file-excel">Excel</i></a>
                </div>
                <div class="col-md-3 mb-2">
                    <a href="{{ route('admin.parkirs.create') }}" class="btn btn-primary btn-sm float-end"><i
                            class="fa fa-plus">Tambah</i></a>
                </div>

                <table class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Plat</th>
                            <th>Hp</th>
                            <th>Tipe</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($parkirs as $parkir)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $parkir->name }}</td>
                            <td>{{ $parkir->plat }}</td>
                            <td>{{ $parkir->hp }}</td>
                            <td>{{ $parkir->tipe_roda }} Roda</td>
                            <td>
                                @if($parkir->status == 'pending')
                                <span class="badge bg-warning">Pending</span>
                                @elseif($parkir->status == 'active')
                                <span class="badge bg-success">Active</span>
                                @elseif($parkir->status == 'reject')
                                <span class="badge bg-danger">Reject</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.parkirs.show', $parkir->slug) }}"
                                    class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.parkirs.edit', $parkir->slug) }}"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                 <a href="#" data-id="{{ $parkir->slug }}" class="btn btn-danger btn-sm delete"
                                    title="Hapus">
                                    <form action="{{ route('admin.parkirs.destroy', $parkir->slug) }}"
                                        id="delete-{{ $parkir->slug }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <i class="fa fa-trash"></i>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" rowspan="2" class="text-center">Tidak Ada Data</td>
                        </tr>
                        @endforelse


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    $(document).ready(function () {
        $('.table').on('click', '.delete', function(){
            let slug = $(this).attr('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus Data!',
                customClass: {
                        cancelButton: 'order-1 left-gap',
                        confirmButton: 'order-2',

                    },
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete-${slug}`).submit();
                }
                // window.location.reload();
            });
        });
    });
</script>
@endpush
@endsection
