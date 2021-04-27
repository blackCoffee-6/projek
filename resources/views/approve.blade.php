@extends('layouts.main')

@section('title', 'Approve List')

@section('content')
<style>
    table.table-bordered{
        border:1px solid black;
        margin-top:20px;
      }
    table.table-bordered > thead > tr > th{
        border:1px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border:1px solid black;
    
    }
</style>

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
                <thead class="thead-dark">
                <tr class="text-center">
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
                    @if(Auth::user()->id == $fup->user_id || Auth::user()->bidang_id == $fup->bidang_id || Auth::user()->role == 'admin' || Auth::user()->role == 'approval')
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->date}}</td>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td class="text-center">
                        <?php  $count = 0; ?>
                        @foreach($apps as $app)
                            @if($app->fup_id == $fup->id)
                            <?php $count++?>
                                @if($app->decision == "setuju")
                                <span class="badge rounded-pill {{($app->decision == "setuju") ? 'bg-success text-light' : 'bg-warning text-dark'}}">{{($app->decision == "setuju") ? 'Approved' : 'Not Approved'}}</span>
                                @elseif($app->decision == "tidak")
                                <span class="badge rounded-pill bg-danger text-light">{{($app->decision == "setuju") ? 'Approved' : 'Not Approved'}}</span>
                                @else
                                <span class="badge rounded-pill bg-warning text-light">Need Revision</span>
                                @endif
                    </td> 
                    <td>
                                @if($app->decision == "revisi" )
                                <a href="/lihat-data/{{$fup->id}}"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Lihat</button></a>
                                @endif
                            @endif
                        @endforeach
                        @if($count < 1)
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
                    </td>
                    @if($count < 1)
                    <td class="text-center">
                        <a href="/lihat-data/{{$fup->id}}" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Lihat</a>
                    </td>
                    @endif
                @endif
                </tr>
                    @endforeach
                </tbody>
            </table>
            {{$fups->links()}}
        </div>
    </div>
@endsection