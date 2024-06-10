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
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cari...</span>
                            @csrf
                            <input type="text" name="search" value="{{ old('search') }}" class="form-control"
                                placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-warning btn-sm"><i class="fa fa-search"></i></button>
                        </div>
                </div>
                </form>
                <div class="col-md-6 mb-2">
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
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <a href="{{ route('admin.parkirs.show', $parkir->slug) }}"
                                    class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.parkirs.edit', $parkir->slug) }}"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $parkir->slug }}">
                                    <form action="{{ route('admin.parkirs.destroy', $parkir->slug) }}" method="POST"
                                        id="deleteForm{{ $parkir->slug }}" >
                                        @csrf
                                        @method('DELETE')
                                        </form>
                                    <i class="fa fa-trash"></i>
                                </a>
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
    $('.table').on('click', '.delete', function(){
        let id = $(this).attr('data-id');
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
                document.getElementById('deleteForm'+id).submit();
            }
            window.location.reload();
        });
    });
</script>
@endpush
@endsection
