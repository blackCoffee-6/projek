@extends('layouts.main')

@section('title', 'List FUP')

@section('content')
    <div class="main">
        <h1 class="display-5 mx-5">
            List Data Masuk Usulan Perubahan
        </h1>
        <div class="container my-4">
            <div class="input-group mb-4">
                <a href="/FUP/create"><button class="btn btn-success"><i class="fa fa-plus-square"></i>   Buat Ulasan Perubahan</button></a> 
            </div>
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
        
            <table class="table table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Tanggal Berlaku</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($fups as $fup)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$fup->Bidang->name}}</td>
                        <td>04/USL/IV/2020</td>
                        <td>{{$fup->date}}</td>
                        <td>
                            {{$fup->ket_usulan}}
                        </td>
                        <td>12/05/2021</td>
                        <td>
                        @foreach($app as $app)
                        @if($app->decision == "setuju")
                            <span class="badge rounded-pill {{($app->decision == "setuju") ? 'bg-success text-light' : 'bg-warning text-dark'}}">{{($app->decision == "setuju") ? 'Approved' : 'Not Approved'}}</span>
                        @endif
                        @endforeach
                        </td>
                        <td>
                            <form action="/FUP/{{$fup->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <a href="/FUP/{{$fup->id}}/edit" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
              {{ $fups->links() }}
        </div>
    </div>
@endsection