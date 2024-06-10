@extends('layouts.admin')
@section('title', 'Kritik Saran')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header" style="background-color:  none !important;">
            <h5>Data Kritik dan Saran</h5>
        </div>

        <div class="card-body">
            <div class="row">

                <table class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kritiks as $kritikSaran)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kritikSaran->name }}</td>
                            <td>{{ $kritikSaran->subject }}</td>
                            <td>{{ $kritikSaran->email }}</td>
                            <td>
                                <a href="{{ route('admin.kritik.show', $kritikSaran->id) }}"
                                    class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $kritikSaran->id }}">
                                    <form action="{{ route('admin.kritik.destroy', $kritikSaran->id) }}" method="POST"
                                        id="deleteForm{{ $kritikSaran->id }}" >
                                        @csrf
                                        @method('DELETE')
                                        </form>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" rowspan="2" class="text-center">Tidak Ada Data</td>
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

