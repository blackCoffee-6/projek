@extends('layouts.main')

@section('title', 'Report Kontrol Perubahan')

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
        Report Kontrol Perubahan
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
                @foreach($fups as $fup)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>{{$fup->no_usulan}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>
                        <?php $flag = ''; ?>
                        @foreach($kajians as $kajian)
                        @if($fup->id == $kajian->fup_id)
                        <?php $flag = $kajian->aq_date ?>
                        @endif
                        @endforeach
                        {{$flag}}
                    </td>
                    <td>{{$fup->ket_usulan}}</td>
                    <td class="text-center">
                        <?php $count = 0; $date = ''; $mitigasi ='';?>
                        @foreach($kontrols as $kontrol)
                            @if($fup->id == $kontrol->fup_id)
                                <?php $count++; $date = $kontrol->hasil_mitigasi_date; $mitigasi = $kontrol->hasil_mitigasi?>
                            @endif
                        @endforeach
                        @if($count < 1)
                        @elseif($date)
                            <a href="/Report/KontrolPerubahan/Export/{{$kontrol->id}}" target="_blank" class="btn btn-primary my-2 my-sm-0 rounded" type="submit"><i class="fa fa-cloud-download"></i> Download</a>
                        @elseif($mitigasi)
                            <a href="/Report/KontrolPerubahan/Export/{{$kontrol->id}}" target="_blank" class="btn btn-primary my-2 my-sm-0 rounded" type="submit"><i class="fa fa-cloud-download"></i> Download</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $fups->links() }}
    </div>
</div>
@endsection