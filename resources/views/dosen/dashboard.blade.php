@extends('layouts.dashboard.base')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">{{ $title }}</h1>
    </div>
    <!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
    </div>
    <!-- /.col -->
@endsection

@section('content')

    <div class="row text-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Halo {{ Auth::user()->name }}, Selamat Datang Di E-Learning UI</h3>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

@endsection
