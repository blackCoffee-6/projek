@extends('layouts.main')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5">
        List Kajian
    </h1>
    <div class="container my-4">
        <div class="input-group">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <a href="#"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button></a>
            </form>  
          </div>
    </div>
    <table class="table table-bordered my-3">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Bidang</th>
                <th scope="col">Nomor Usulan</th>
                <th scope="col">Tanggal Usulan</th>
                <th scope="col">Usulan Perubahan</th>
                <th scope="col">Tanggal Pemberlakuan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0; ?>
            @foreach($fups as $fup)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>04/USL/IV/2020</td>
                    <td>{{$fup->date}}</td>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>20/05/2021</td>
                    <td>
                        <a href="/Detail/Kajian/{{$fup->id}}"><button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-database"></i>  Kaji</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$fups->links()}}
</div>
@endsection