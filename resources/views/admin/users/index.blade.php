@extends('layouts.admin')
@section('title', 'Users')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr></tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->slug) }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm delete">
                                <form action="{{ route('admin.users.destroy', $user->slug) }}" method="POST"
                                    id="deleteForm{{ $user->slug }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No Data</td>
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
    $('.table').on('click', '.delete', function () {
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
                $('#deleteForm' + id).submit();
            }
            window.location.reload();
        });
    });
</script>
@endpush
@endsection
