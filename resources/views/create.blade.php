@extends('layouts.app')

@section('content')
    <div class="sidebar">
        <nav class="mt-2">
            <a href="#dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a>
            <a href="#masterData">Master Data</a>
            <a href="#services">Transaksi</a>
            <a href="#clients">Report</a>
        </nav>
    </div>
    <div class="main">
        <h1 class="display-5 mx-5">
            List Usulan Perubahan Kajian
        </h1>
        <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a>
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
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>IT</td>
                    <td>04/USL/IV/2020</td>
                    <td>07/04/2020</td>
                    <td>
                        Tanggapan
                    </td>
                    <td>
                        <a href="/tanggapan"><button class="btn btn-warning my-2 my-sm-0" type="submit"><i class="fa fa-user-plus"></i>  Tanggapi</button></a>
                    </td>
                    <td>Pending</td>
                </tr>
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