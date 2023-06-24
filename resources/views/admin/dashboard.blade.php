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

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>150</h3>
                    <p>Jumlah Pemilih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Jumlah Kandidat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>150</h3>
                    <p>Pemilih yang sudah memilih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>150</h3>
                    <p>Pemilih yang belum memilih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Grafik</h3>
                        <a href="javascript:void(0);">Hasil Voting</a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="text-center">Data Hasil Perhitungan Suara</h5>
                    <!-- Persentase dari jumlah 100% pemilih untuk setiap kandidat -->
                    <div class="row text-center mt-4 ml-4">
                        @foreach ($kandidats as $item)
                            <div class="col-4">{{ number_format(($voting[$loop->iteration - 1] / $total) * 100)  }}%</div>
                        @endforeach
                    </div>
                    <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <i class="fas fa-square" style="color:#86bad8;"></i> Persentase Vote
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Kandidat</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nomor Urut</th>
                                <th scope="col">Nama Kandidat</th>
                                <th scope="col">Jumlah Suara</th>
                                <th scope="col">Grafik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kandidats as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration <= 9 ? '0'.$loop->iteration : $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $voting[$loop->iteration - 1] }}</td>
                                <td>
                                    @if (!empty($total) && $total != NULL && $total > 0)
                                    <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="{{ number_format(($voting[$loop->iteration - 1] / $total) * 100)  }}" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar text-bg-warning" style="width: {{ number_format(($voting[$loop->iteration - 1] / $total) * 100)  }}%">{{ number_format(($voting[$loop->iteration - 1] / $total) * 100)  }}%</div>
                                    </div>
                                    @else
                                    0%
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row --> --}}

@endsection
