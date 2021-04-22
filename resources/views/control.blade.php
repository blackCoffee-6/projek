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
            List Entry Data Kontrol Perubahan
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
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Nomor Usul</th>
                    <th scope="col">Bidang Usul</th>
                    <th scope="col">Tanggal Disetujui</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row" class="font-weight-bold text-center">1</td>
                    <td>04/USL/IV/2020</td>
                    <td>Produksi</td>
                    <td>07/04/2020</td>
                    <td>
                        Mesin Cetak
                    </td>
                    <td class="text-center">
                      <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center">
                      <a href="#"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-plus"></i>  Kontrol</button></a>
                    </td>
                </tr>
                </tbody>
            </table>
            {{-- ADD PAGINATION --}}
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