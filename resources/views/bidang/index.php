@extends('layouts.main')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5">
        List Data Bidang
    </h1> 
    <!-- <a href="javascript:history.back()" class="btn btn-primary mx-5 mt-2 mb-2"><i class="fa fa-reply"></i>  Kembali</a> -->
        @if(session('alert'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('alert')}}
            </div>
            @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('failed')}}
            </div>
        @endif
    <div class="container my-4">
        @if(session('alert'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('alert')}}
            </div>
        @endif
        <table class="table table-bordered my-3">
        <a href="/Bidang/create"><button class="btn btn-success"><i class="fa fa-plus-square"></i>   Buat Bidang</button></a>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bidang as $job)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$job->name}}</td>
                    <td>
                        <a href="/Bidang/{{$job->id}}/edit"><button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-edit"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection