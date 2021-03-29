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
<<<<<<< HEAD
                        <a href="/Hapus/Data/Bidang/{{$job->id}}"><button class="btn btn-danger my-2 my-sm-0" type="submit" onclick="return confirm('Apakah anda yakin?');"><i class="fa fa-trash"></i></button></a>
=======
                        <a href="/Hapus/Data/Bidang/{{$job->id}}" class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fa fa-trash"></i></a>
>>>>>>> b56c09353bab313866bc34d1e12e8c5c9323a085
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection