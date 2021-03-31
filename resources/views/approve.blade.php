@extends('layouts.main')

@section('title', 'Approve List')

@section('content')
    <div class="main">
        <h1 class="display-5 mx-5">
            List Data Entry Untuk Di Setujui
        </h1>
        <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
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
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fups as $fup)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->date}}</td>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>
                        @foreach($apps as $app)
                            @if($app->decision != null)
                                @if($app->decision == "setuju")
                                <span class="badge rounded-pill {{($app->decision == "setuju") ? 'bg-success text-light' : 'bg-warning text-dark'}}">{{($app->decision == "setuju") ? 'Approved' : 'Not Approved'}}</span>
                                @else
                                none
                                @endif
                    </td> 
                    <td>
                                @if($app->decision != "setuju")
                                <a href="/lihat-data/{{$fup->id}}"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Lihat</button></a>
                                @else
                                none
                                @endif
                            @endif
                        @endforeach
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            {{$fups->links()}}
        </div>
    </div>
@endsection