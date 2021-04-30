@extends('layouts.main')

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
        List Entry Data Kajian
    </h1>
    <div class="container my-4">
        <div class="input-group">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <a href="#"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button></a>
            </form>  
          </div>
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
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Bidang</th>
                <th scope="col">Nomor Usulan</th>
                <th scope="col">Tanggal Usulan</th>
                <th scope="col">Usulan Perubahan</th>
                <th scope="col">Tanggal Pemberlakuan</th>
                <th scope="col">
                    @if(Auth::user()->bidang_id == NULL)
                    Aksi
                    @else
                    Status
                    @endif
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; ?>
            @foreach($fups as $fup)
                @if(Auth::user()->bidang_id == $fup->bidang_id OR $user->bidang_id == NULL)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->date}}</td>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>20/05/2021</td>
                    <td class="text-center">
                        
                        @if(Auth::user()->bidang_id == NULL)
                        <?php $flag = 0; ?>
                            @foreach($kajians as $kajian)
                                @if($fup->id == $kajian->fup_id)
                                    <?php $flag++; ?>
                                @endif
                            @endforeach
                            @if($flag < 1) 
                                <a href="/Detail/Kajian/{{$fup->id}}"><button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-database"></i>  Kaji</button></a>
                            @else
                                <?php $flag = 0; ?>
                            @foreach($kajians as $kajian)
                                @if($fup->id == $kajian->fup_id)
                                    <?php $flag++; ?>
                                <a href="/Edit/Kajian/{{$kajian->id}}" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-edit"></i></a>
                                @endif
                            @endforeach
                            @endif
                        @else
                        <?php $flag = 0; $stats = ''; ?>
                        @foreach($kajians as $kajian)
                            @if($fup->id == $kajian->fup_id)
                                <?php $flag++;
                                    $stats = $kajian->ch_status;
                                ?>
                            @endif
                        @endforeach
                            <span class="badge rounded-pill bg-secondary text-light">Menunggu Dikaji</span>
                        @if($flag < 1) <span class="badge rounded-pill bg-secondary text-light">Menunggu Dikaji</span>
                            @else 
                                @if(strcasecmp($stats,'disetujui') == 0)    
                                <span class="badge rounded-pill bg-success text-light">Disetujui</span>
                                @elseif(strcasecmp($stats,'ditolak') == 0)
                                <span class="badge rounded-pill bg-danger text-light">Ditolak</span>
                                @endif
                            @endif
                        @endif
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    {{$fups->links()}}
</div>
@endsection