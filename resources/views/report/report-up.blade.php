@extends('layouts.main')

@section('title', 'Report Usulan Perubahan')

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
        Report Usulan Perubahan
    </h1>
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor Usulan</th>
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 1; ?>
                @foreach ($fups as $fup)
                <tr>
                    @if($user->id == $fup->user_id || $user->bidang_id == $fup->bidang_id || $user->role == 'Admin')
                    <td scope="row" class="font-weight-bold text-center">{{$number++}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>{{$fup->no_usulan}}</td>
                    <td>{{$fup->date}}</td>
                    <td>{{$fup->ket_usulan}}</td>
                    @endif
                    <td class="text-center">
                        <a href="/cetak-pdf/{{$fup->id}}" target="_blank" class="btn btn-primary my-2 my-sm-0 rounded" type="submit"><i class="fa fa-cloud-download"></i> Download</a>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
        {{  $fups->links()  }}
    </div>
</div>
@endsection