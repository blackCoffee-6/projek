@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Sidebar -->
<div class="sidebar">
    <nav class="mt-2">
        <a href="/home"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="/FUP/create">Master Data</a>
        <a href="/tanggapan">Transaksi</a>
        <a href="/kajian">Report</a>
        <a href="/kontrol">Kontrol</a>
        <a href="/List/Data/Bidang">Data Bidang</a>
        <a href="/user">Data User</a>
    </nav>
</div>
  
  <div class="main">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <h1 class="display-5 mx-5">
            Dashboard
        </h1>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Menunggu Untuk Disetujui</h6>
                            <h2 class="text-right"><i class="fa fa-paper-plane f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            <a href="/approve" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-green order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Menunggu Tanggapan</h6>
                            <h2 class="text-right"><i class="fa fa-plus-square f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            <a href="/create" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Menunggu Kajian</h6>
                            <h2 class="text-right"><i class="fa fa-hourglass-half f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            <a href="/review" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-pink order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Kontrol Perubahan</h6>
                            <h2 class="text-right"><i class="fa fa-id-card f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            <a  href="/control" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="display-5 mx-5">
            Entry Data
        </h1>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-blue order-card">
                        <div class="card-block">
                            <h5 class="m-b-20 text-center">Usulan Perubahan</h5>
                            <a href="/FUP" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-green order-card">
                        <div class="card-block">
                            <h5 class="m-b-20 text-center">Kajian Perubahan</h5>
                            <a href="/create" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-block">
                            <h5 class="m-b-20 text-center">Kontrol Perubahan</h5>
                            <a href="/review" class="btn btn-outline-light btn-block">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('sweetalert::alert')
    </div>
</div>
@endsection
