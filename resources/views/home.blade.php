@extends('layouts.main')

@section('title', 'Dashboard')

@section('header')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/approve" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Menunggu Kajian</p>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-5">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/List/Tanggapan" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Menunggu Tanggapan</p>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/kajian" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Menunggu Kajian</p>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/kontrol" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Kontrol Perubahan</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart4"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs mb-3">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Entry Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/FUP" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Usulan Perubahan</p>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/review" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Kajian Perubahan</p>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <a href="/review" class="btn bg-transparent theme-toggle text-light">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Kontrol Perubahan</p>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection