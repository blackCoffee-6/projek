@extends('layouts.app')

@section('content')
    <div class="sidebar">
        <nav class="mt-2">
            <a href="#dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a>
            <a href="#masterData">Master Data</a>
            <a href="#services">Transaksi</a>
            <a href="#clients">Report</a>
        </nav>
    </div>
    <div class="main">
        <h1 class="display-5 mx-5">
            List Data Entry Untuk Di Setujui
        </h1>
        <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a>
        <div class="container my-4">
            <div class="input-group">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="/FUP/"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button></a>
                </form>
                <a href="#"><button class="btn btn-danger mx-3">Reset</button></a>    
            </div>
        
            <table class="table table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fup as $fup)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->date}}</td>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>
                        <a href="/lihat-data/{{$fup->id}}"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Lihat</button></a>
                    </td>
                    <td>
                        <span class="badge rounded-pill bg-warning text-dark">{{$fup->status}}</span>
                    </td> 
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- seharusnya pake pagination aja -->
        </div>
    </div>
@endsection