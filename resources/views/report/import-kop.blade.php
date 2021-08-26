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
        <form action="/searchRekop" method="GET">
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
                <th scope="col">No.</th>
                <th scope="col">Bidang</th>
                <th scope="col">Nomor Usulan</th>
                <th scope="col">Tanggal Disetujui</th>
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
                    <td>
                        <?php $flag = '';?>
                        @foreach ($kajians as $kajian)
                            @if($fup->id == $kajian->fup_id)
                                <?php $flag = $kajian->aq_date?>
                            @endif
                        @endforeach
                        {{$flag}}
                    </td>
                    <td>{{$fup->ket_usulan}}</td>
                    <td class="text-center">
                        <?php $count = 0; $date = ''; $mitigasi = '';?>
                        @foreach ($kontrols as $kontrol)
                            @if ($fup->id == $kontrol->fup_id)
                                <?php $count++; $date = $kontrol->hasil_mitigasi_date; $mitigasi = $kontrol->hasil_mitigasi?>
                            @endif
                        @endforeach
                        @if ($count < 1)
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @else
                            @if (!($mitigasi))
                                <span class="badge rounded-pill bg-warning">Sedang di Proses</span>
                            @elseif($date OR $mitigasi)
                                <span class="badge rounded-pill bg-danger">Closed</span>
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection