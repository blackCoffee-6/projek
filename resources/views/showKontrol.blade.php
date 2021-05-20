@extends('layouts.main')

@section('title','List Kontrol Perubahan')

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
                    @if(Auth::user()->bidang_id == NULL)
                    <th scope="col">Aksi</th>
                    @else
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($fups as $fup)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>04/USL/IV/2020</td>
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
                        <?php $count = 0; $date = '';?>
                        @foreach($kontrols as $kontrol)
                            @if($fup->id == $kontrol->fup_id)
                                <?php $count++; $date = $kontrol->hasil_mitigasi_date?>
                                @if(!($date))
                                    <span class="badge rounded-pill bg-warning">Sedang di Proses</span>
                                @elseif($date)
                                    <span class="badge rounded-pill bg-danger">Closed</span>
                                @endif
                            @endif
                        @endforeach
                    </td>
                    @if(Auth::user()->bidang_id == NULL)
                    <td class="text-center">
                        @if(!($date))
                            <a href="/Edit/KP/{{$fup->id}}" class="btn btn-primary my-2 my-sm-0"><i class="fa fa-folder"></i>  Edit</a>
                        @elseif($date)
                            <a href="/Baca-KontrolPerubahan/{{$kontrol->id}}" class="btn btn-success my-2 my-sm-0"><i class="fa fa-folder"></i>  Lihat</a>
                        @endif
                    </td>
                    @else
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- ADD PAGINATION --}}
        {{$fups->links()}}
    </div>
</div>
@endsection