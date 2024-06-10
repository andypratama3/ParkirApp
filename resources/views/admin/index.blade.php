@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="row">

    <div class="col-md-4 grid-margin stretch-card">
        <div class="card social-card card-colored twitter-card">
          <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
            <i class="icon-speedometer flex-shrink-0"></i>
            <div class="wrapper ms-3">
              <h5 class="mb-0">Total Parkir</h5>
              <h1 class="mb-0">{{ $total_parkirs }}</h1>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card social-card card-colored facebook-card">
          <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
            <i class="icon-user flex-shrink-0"></i>
            <div class="wrapper ms-3">
              <h5 class="mb-0">Jumlah User</h5>
              <h1 class="mb-0">{{ $total_users }}</h1>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
