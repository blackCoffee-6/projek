@extends('layouts.app')

@section('content')
<!-- Sidebar -->
<div class="sidebar">
    <nav class="mt-2">
        <a href="/home"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="/usulan">Master Data</a>
        <a href="/tanggapan">Transaksi</a>
        <a href="/kajian">Report</a>
        <a href="/kontrol">Kontrol</a>
        <a href="#">Data Bidang</a>
        <a href="/List/Data/User">Data User</a>
    </nav>
</div>

<div class="main">
    <h1 class="display-5 mx-5">
        List Data Bidang
    </h1>
    <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a>
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 1 ?>
                @foreach ($bidang as $job)
                <tr>
                    <th scope="row">{{$number}}</th>
                    <td>{{$job->name}}</td>
                    <td>
                        <a href="/Hapus/Data/Bidang/{{$job->id}}"><button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                <?php $number++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection