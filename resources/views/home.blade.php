@extends('layouts.main')

@section('title', 'Dashboard')

<style>
    .gambar i{
        display: block;
    }
</style>
@section('header')
<div class="content">
    <div class="col-sm-6 col-lg-3 mt-4">
        <div class="card text-white bg-flat-color-1 rounded">
            <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
                <div class="dropdown float-right">
                    <a href="/Dashboard/TotalUP" class="btn bg-transparent theme-toggle text-light">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <p class="text-light" style="font-size: 105%">Total Usulan Perubahan</p>
                <h3 class="mb-0">
                    <span class="count">{{$fup}}</span>
                </h3>
                <div class="dropdown mt-1 float-right">
                    <i class="fa fa-archive" style="font-size: 70px;"></i>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3 mt-4">
        <div class="card text-white bg-flat-color-5 rounded">
            <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
                <div class="dropdown float-right">
                    <a href="/approve" class="btn bg-transparent theme-toggle text-light">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <p class="text-light" style="font-size: 105%">Sedang di Proses</p>
                <h3 class="mb-0">
                    <span class="count">{{$proses_count}}</span>
                </h3>
                <div class="dropdown mt-1 float-right">
                    <i class="fa fa-gear" style="font-size: 70px;"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3 mt-4">
        <div class="card text-white bg-flat-color-3 rounded">
            <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
                <div class="dropdown float-right">
                    <a href="/Dashboard/Rejected" class="btn bg-transparent theme-toggle text-light">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <p class="text-light" style="font-size: 105%">UP Rejected</p>
                <h3 class="mb-0">
                    <span class="count">{{$reject_count}}</span>
                </h3>
                <div class="dropdown mt-1 float-right">
                    <i class="fa fa-calendar-times-o" style="font-size: 70px;"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3 mt-4">
        <div class="card text-white bg-flat-color-4 rounded">
            <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
                <div class="dropdown float-right">
                    <a href="/Dashboard/Closed" class="btn bg-transparent theme-toggle text-light">
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <p class="text-light" style="font-size: 105%">Closed</p>
                <h3 class="mb-0">
                    @if(Auth::user()->role == 'Admin')
                    <span class="count">{{$closed_count}}</span>
                    @else
                    <span class="count">0</span>
                    @endif
                </h3>
                <div class="dropdown mt-1 float-right">
                    <i class="fa fa-area-chart" style="font-size: 70px;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="breadcrumbs my-2">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1 rounded">
        <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
            <div class="dropdown float-right">
                <a href="/approve" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">{{$mdup_count}}</span>
            </h4>
            <p class="text-light">Menunggu Disetujui Usulan Perubahan</p>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-5 rounded">
        <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
            <div class="dropdown float-right">
                <a href="/Tanggapan" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">{{$tanggapan_count}}</span>
            </h4>
            <p class="text-light">Menunggu Tanggapan</p>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3 rounded">
        <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
            <div class="dropdown float-right">
                <a href="/List/Menunggu/Kajian" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                @if(Auth::user()->role == 'Admin')
                <span class="count">{{$kajian_count}}</span>
                @else
                <span class="count">0</span>
                @endif        
            </h4>
            <p class="text-light">Kajian</p>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-4 rounded">
        <div class="card-body pb-0" style="max-width: 18rem; height: 11rem;">
            <div class="dropdown float-right">
                <a href="/List/Kontrol/Perubahan" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                @if(Auth::user()->role == 'Admin')
                <span class="count">{{$kontrol_count}}</span>
                @else
                <span class="count">0</span>
                @endif
            </h4>
            <p class="text-light">Kontrol Perubahan</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart4"></canvas>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection