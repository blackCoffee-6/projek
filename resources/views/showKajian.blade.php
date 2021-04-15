@extends('layouts.main')

@section('title', 'Menunggu Kajian')

@section('content')
    <div class="main">
        <h1 class="display-5 mx-5">
            List Menunggu Kajian
        </h1>
        <div class="container my-4">
            <div class="input-group">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="/FUP/"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button></a>
                </form>
            </div>

            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Nomor Usulan Perubahan</th>
                        <th scope="col">Tanggal Usulan</th>
                        <th scope="col">Usulan Perubahan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Produksi</td>
                        <td>04/USL/IV/2020</td>
                        <td>14/1/2021</td>
                        <td>
                            New Ac
                        </td>
                        <td>
                            <span class="badge rounded-pill bg-secondary text-light">Menunggu Dikaji</span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Lihat</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection