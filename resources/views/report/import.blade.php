@extends('layouts.main')

@section('title', 'Rekap Usulan Perubahan')

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
            List Keseluruhan Usulan Perubahan
        </h1>
        <div class="container my-4">
            <form action="/searchRek" method="GET">
            <div class="row mx-1">
                <label for="from" class="col-form-label">From</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="from" name="from">
                </div>
                <label for="to" class="col-form-label">To</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="to" name="to">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary rounded" name="search" >Search</button>
                </form>
                    <button type="submit" class="btn btn-success rounded" name="exportExcel" >Export Excel</button>
        </div>
    </div>
        
            <table class="table table-bordered my-3">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col" width="3%">No.</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Disetujui</th>
                    <th scope="col">Tanggal Kontrol Perubahan</th>
                    <th scope="col">Nomor Usulan</th>
                    <th scope="col">Jenis / Kategori</th>
                    <th scope="col">Asal Bidang</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Sifat(Sementara / Tetap)</th>
                    <th scope="col">Disetujui / Ditolak</th>
                    <th scope="col">Kontrol Perubahan</th>
                    <th scope="col">Rencana Penyelesaian</th>
                    <th scope="col">Realisasi Penyelesaian</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php $number = 1; ?>
                    @foreach ($fups as $fup)
                    <tr>
                        @if($user->id == $fup->user_id || $user->bidang_id == $fup->bidang_id || $user->role == 'Admin')
                        <td scope="row" class="font-weight-bold text-center">{{$number++}}</td>
                        <td>{{$fup->date}}</td>
                        <td></td>
                        <td>{{$fup->date}}</td>
                        <td>
                            {{$fup->no_usulan}}
                        </td>
                        <td class="text-center">
                        </td>
                        @endif
                        <td></td>
                        <td>{{$fup->produk}}</td>
                        <td>{{$fup->ket_usulan}}</td>
                        <td>{{$fup->ch_sifat}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            @if ($fup->status == 'Closed')
                            <span class="badge rounded-pill bg-success text-light">Closed</span>
                            @elseif ($fup->status == 'null')
                            <span class="badge rounded-pill bg-info text-light">Menunggu Tanggapan</span>
                            @elseif ($fup->status == 'Ditanggapi')
                            <span class="badge rounded-pill bg-primary text-light">Sudah Ditanggapi</span>
                            @elseif ($fup->status == 'Dikaji')
                            <span class="badge rounded-pill bg-warning">Disetujui</span>
                            @elseif ($fup->status == 'Ditolak')
                            <span class="badge rounded-pill bg-danger text-light">Ditolak</span>
                            @elseif ($fup->status == 'Pending')
                            <span class="badge rounded-pill bg-secondary text-light">Open</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection