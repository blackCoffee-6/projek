@extends('layouts.main')

@section('title','List Kontrol Perubahan')

@section('content')
<style>
    table.table-bordered{
        border: 1px solid black;
        margin-top: 20px;
    }
    table.table-bordered > thead > tr > th{
        border: 1px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border: 1px solid black;
    }
</style>
<div class="main">
    <h1 class="display-5 mx-5">
        List Kontrol Perubahan
    </h1>
    <div class="container my-4">
        <div class="input-group">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <a href="#" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</a>
            </form>
        </div>

        <table class="table table-bordered my-3">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Nomor Usulan Perubahan</th>
                    <th scope="col">Bidang Usul</th>
                    <th scope="col">Tanggal Disetujui</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($fups as $fup)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>{{$fup->date}}</td>
                    <td>{{$fup->ket_usulan}}</td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-success my-2 my-sm-0"><i class="fa fa-folder"></i>  Lihat</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- ADD PAGINATION --}}
        {{$fups->links()}}
    </div>
</div>
@endsection