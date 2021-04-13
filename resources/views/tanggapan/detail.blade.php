@extends('layouts.main')

@section('title', 'List Tanggapan Bidang')

@section('content')
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
      <thead>
        <tr>
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
                    <th>{{$loop->iteration}}</th>
                    <td>{{$tanggapan->Bidang->name}}</td>
                    <td>{{$fups->date}}</td>
                    <td>
                        {{$fups->ket_usulan}}
                    </td>
                    <td>
                      
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