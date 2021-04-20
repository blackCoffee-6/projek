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
                @foreach($fups as $fup)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$fup->Bidang->name}}</td>
                        <td>04/USL/IV/2020</td>
                        <td>{{$fup->date}}</td>
                        <td>
                            {{$fup->ket_usulan}}
                        </td>
                        <td>
                            <?php $flag = 0; $stats = ''; ?>
                        @foreach($kajians as $kajian)
                        @if($fup->id == $kajian->fup_id)
                            <?php $flag++;
                                $stats = $kajian->ch_status;
                            ?>
                            @endif
                            @endforeach
                            @if($flag < 1) <span class="badge rounded-pill bg-secondary text-light">Menunggu Dikaji</span>
                            @else 
                                @if(strcasecmp($stats,'disetujui') == 0)    
                                <span class="badge rounded-pill bg-success text-light">Disetujui</span>
                                @elseif(strcasecmp($stats,'ditolak') == 0)
                                <span class="badge rounded-pill bg-danger text-light">Ditolak</span>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if($flag > 0) 
                            <a href="/Baca-kajian" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-folder"></i>  Lihat</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection