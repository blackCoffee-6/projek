@extends('layouts.main')

@section('content')
    <div class="main">
        <h1 class="display-5 mx-5">
            List Data Untuk Ditanggapi
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
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($fup as $fup)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>04/USL/IV/2020</td>
                      <td>{{$fup->Bidang->name}}</td>
                      <td>{{$fup->date}}</td>
                      <td>
                          {{$fup->ket_usulan}}
                      </td>
                      <td>
                          <a href="/Detail/Tanggapan/{{$fup->id}}"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-plus-square"></i>  Tanggapi</button></a>
                      </td>
                      <td>Menunggu Untuk di Tanggapi</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>
@endsection