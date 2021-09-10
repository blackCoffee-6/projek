@extends('layouts.main')

@section('content')
<style>
    table.table-bordered
    {
        border: 1px solid black;
        margin-top: 20px;
    }
    table.table-bordered > thead > tr > th
    {
        border: 1px solid black;
    }
    table.table-bordered > tbody > tr > td
    {
        border: 1px solid black;
    }
</style>
<div class="main">
    <h1 class="display-5 mx-5">
        List Data Bidang
    </h1> 
    <!-- <a href="javascript:history.back()" class="btn btn-primary mx-5 mt-2 mb-2"><i class="fa fa-reply"></i>  Kembali</a> -->
    <div class="container my-4">
        @if(session('alert'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('alert')}}
            </div>
        @endif
        <table class="table table-bordered my-3">
        <a href="/Bidang/create"><button class="btn rounded btn-success"><i class="fa fa-plus-square"></i> Tambah Bidang</button></a>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Nomor ID</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bidang as $job)
                <tr>
                    <td class="text-center" style="font-weight: bold">{{$job->id}}</td>
                    <td>{{$job->name}}</td>
                    <td class="text-center">
                        <a href="/Bidang/{{$job->id}}/edit"><button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-edit"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection