@extends('layouts.main')

@section('content')
<style>
    table.table-bordered{
        border: 1px solid black;
        margin-top: 20px;
    }
    table.table-bordered > thead > tr > th{
        border: 1px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border: 1px solid black;
    }
</style>
<div class="main">
    <h1 class="display-5 mx-5">
        List Kontrol Perubahan
    </h1>
    <div class="container my-4">
        <div class="input-group">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <a href="#" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</a>
            </form>
        </div>

        <table class="table table-bordered my-3">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Nomor Usulan Perubahan</th>
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
                    <td>28/04/2021</td>
                    <td>New AC</td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-success my-2 my-sm-0"><i class="fa fa-folder"></i>  Lihat</a>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- ADD PAGINATION --}}
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a href="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
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