@extends('layouts.main')

@section('title', 'List Tanggapan Bidang')

@section('content')
<div class="main">
  <h1 class="display-5 mx-5">
    List Tanggapan Bidang
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
          <th scope="col">Nomor Usul</th>
          <th scope="col">Bidang Usul</th>
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
                    <th>{{$loop->iteration}}</th>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>07/04/2020</td>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>
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
                    <td>
                      @if($tanggapanFlag < 1)
                        <span class="badge rounded-pill badge-secondary">Menunggu di tanggapi</span>
                      @else
                        <span class="badge rounded-pill bg-success text-light">Sudah di tanggapi</span>
                      @endif
                    </td>
                    <td>
                    @if($tanggapanFlag < 1)
                      <a href="/Tanggapan/{{$fup->id}}"><button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Menanggapi</button></a>
                    @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- ADD PAGINATION -->
            {{ $fups->links() }}
        </div>
@endsection