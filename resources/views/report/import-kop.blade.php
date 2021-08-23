@extends('layouts.main')

@section('title', 'Rekap Kontrol Perubahan')

@section('content')
<style>

</style>
<div class="main">
    <h1 class="display-5 mx-5">
        List Keseluruhan Kontrol Perubahan
    </h1>
    <div class="container my-4">
        <form action="/searchKop" method="GET">
        <div class="row mx-1">
            <label for="from" class="col-form-label">From</label>
            <div class="col-md-3">
                <input type="date" class="form-control" id="from" name="from">
            </div>
            <label for="to" class="col-form-label">To</label>
            <div class="col-md-3">
                <input type="date" class="form-control" name="to" id="to">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary rounded" name="search">Search</button>
            </div>
        </form>
        <button type="submit" class="btn btn-success rounded" name="exportExcel">Export Excel</button>
        </div>
    </div>

    <table class="table table-bordered my-3">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Bidang</th>
                <th scope="col">Nomor Usulan</th>
                <th scope="col" width="20%">Usulan Perubahan</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 1;?>
            @foreach ($fups as $fup)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$number++}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>{{$fup->no_usulan}}</td>
                    <td>{{$fup->date}}</td>
                    <td>{{$fup->ket_usulan}}</td>
                    <td class="text-center">
                        @if ($fup->status == 'Closed')
                            <span class="badge rounded-pill bg-success text-light">Closed</span>
                        @elseif($fup->status == 'Ditolak')
                            <span class="badge rounded-pill bg-danger text-light">Rejected</span>
                        @elseif($fup->status == 'Pending')
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @elseif($fup->status == 'Ditanggapi' OR $fup->status == 'null' OR $fup->status == 'Dikaji')
                            <span class="badge rounded-pill bg-warning text-dark">Tahap di Proses</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$fups->links()}}
</div>
@endsection