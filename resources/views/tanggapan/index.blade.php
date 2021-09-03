@extends('layouts.main')

@section('title', 'List Tanggapan Bidang')

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
    List Tanggapan Bidang
  </h1>
  <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
  <div class="container my-4">
    <div class="input-group">
      <form action="/searchTang" class="form-inline" method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Usulan" aria-label="Search Usulan" name="query" value="{{Request::input('query')}}">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button>
      </form>
      <a href='/resetTanggapan'><button class="btn btn-danger mx-3">Reset</button></a>    
    </div>
    <br>
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
          <th scope="col">Nomor Usulan</th>
          <th scope="col">Bidang</th>
          <th scope="col">Tanggal Pengkajian</th>
          <th scope="col">Usulan Perubahan</th>
          <th scope="col">Aksi</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
                <tbody>
                @foreach($fups as $fup)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>{{$fup->no_usulan}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>07/04/2020</td>
                    <td>
                    {{$fup->ket_usulan}}
                    </td>
                    <td class="text-center">
                    <?php  $count = 0; ?>
                      @foreach($tanggapans as $tanggapan)
                        @if($tanggapan->fup_id == $fup->id)
                        <?php $count++?>
                        <!-- kalo yg login R&D abis dia isi button lihat nya harusnya ilang -->
                          <a href="List/Menanggapi/{{$fup->id}}" class="btn btn-success my-2 my-sm-0" type="submit" ><i class="fa fa-folder"></i>  Lihat</a>
                          <?php break; ?>
                        @endif
                      @endforeach
                    </td>
                    <td class="text-center">
                    <?php $buttonFlag = 0; $admindFlag = 0; ?>
                      @foreach($tanggapanFlag as $flag)
                      @if($flag->fup_id == $fup->id)
                      <?php $buttonFlag++ ?>
                        @if($flag->bidang_id == "0")
                        <?php $admindFlag++ ?>
                        @endif
                      @endif
                      @endforeach
                      @if($user->role == 'Staff')
                        @if($buttonFlag < 1)
                          <span class="badge rounded-pill badge-secondary">Menunggu di tanggapi</span>
                        @else
                          <span class="badge rounded-pill bg-success text-light">Sudah di tanggapi</span>
                        @endif
                      @else
                        @if($admindFlag < 1)
                        <span class="badge rounded-pill badge-secondary">Menunggu di tanggapi</span>
                        @else
                        <span class="badge rounded-pill bg-success text-light">Sudah di tanggapi</span>
                        @endif
                      @endif
                    </td>
                    <td class="text-center">
                    @if(strcasecmp($user->role,'Staff') == 0)
                      @if($buttonFlag < 1)
                        <a href="/Tanggapan/{{$fup->id}}"><button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Menanggapi</button></a>
                      @endif
                    @else
                      @if($admindFlag < 1)
                      <a href="/Tanggapan/{{$fup->id}}"><button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Menanggapi</button></a>
                      @endif
                    @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- ADD PAGINATION -->
        </div>
@endsection