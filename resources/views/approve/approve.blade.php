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
        <div class="container my-4">
            <div class="input-group">
                <form action="/searchApp" method="GET" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Usulan" aria-label="Search Usulan" name="query" value="{{Request::input('query')}}">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button>
                </form>
                <a href="/resetApprove"><button class="btn btn-danger mx-3">Reset</button></a>    
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
                    <?php $number = 1; ?>
                    @foreach($fups as $fup)
                    <tr>
                        @if(Auth::user()->id == $fup->user_id || Auth::user()->bidang_id == $fup->bidang_id || Auth::user()->role == 'Admin' || Auth::user()->role == 'Approval')
                        <td scope="row" class="font-weight-bold text-center">{{$number++}}</td>
                        <td>{{$fup->Bidang->name}}</td>
                        <td>{{$fup->no_usulan}}</td>
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
                                    <span class="badge rounded-pill bg-warning">Perlu di Revisi</span>
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