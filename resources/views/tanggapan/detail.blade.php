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
    Detail Tanggapan
  </h1>
  <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
  <div class="container my-4">
    <div class="input-group">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <a href="#"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button></a>
      </form>
      <a href="#"><button class="btn btn-danger mx-3">Reset</button></a>    
    </div>
    <table class="table table-bordered my-3">
      <thead class="thead-dark">
        <tr align="center">
          <th scope="col">No.</th>
          <th scope="col">Bidang Menanggapi</th>
          <th scope="col">Tanggal Menanggapi</th>
          <th scope="col">Usulan Perubahan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
                <tbody>
                  @foreach($tanggapans as $tanggapan)
                <tr>
                    <td align="center" class="font-weight-bold">{{$loop->iteration}}</td>
                    @if($tanggapan->bidang_id != "0")
                    <td>{{$tanggapan->Bidang->name}}</td>
                    @else
                    <td>QA <span class="text-danger">*</span></td>
                    @endif
                    <td>{{$fups->date}}</td>
                    <td>
                        {{$fups->ket_usulan}}
                    </td>
                    <td class="text-center">
                        <!-- kalo yg login R&D abis dia isi button lihat nya harusnya ilang -->
                          <a href="/Tanggapan/{{$tanggapan->id}}/edit" class="btn btn-success my-2 my-sm-0" type="submit" ><i class="fa fa-folder"></i>  Lihat</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- ADD PAGINATION -->
            {{ $tanggapans->links() }}
        </div>
@endsection