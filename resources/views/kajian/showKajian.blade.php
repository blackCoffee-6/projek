@extends('layouts.main')

@section('title', 'Menunggu Kajian')

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
            List Kajian
        </h1>
        <div class="container my-4">
            <div class="input-group">
                <form action="/searchKaj2" method="GET" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Usulan" aria-label="Search Usulan" name="query" value="{{Request::input('query')}}">
                    <a href="/FUP/"><button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>  Cari</button></a>
                </form>
                <a href='/List/Menunggu/Kajian'><button class="btn btn-danger mx-3">Reset</button></a>
            </div>

            <table class="table table-bordered my-3">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Bidang</th>
                        <th scope="col">Nomor Usulan Perubahan</th>
                        <th scope="col">Tanggal Usulan</th>
                        <th scope="col">Usulan Perubahan</th>
                        <th scope="col">Status</th>
                        @if(Auth::user()->role == 'Admin')
                        <th scope="col">Aksi</th>
                        @endif
                        <th>File (*Jika Ada)</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($fups as $fup)
                    <tr>
                        <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                        <td>{{$fup->Bidang->name}}</td>
                        <td>{{$fup->no_usulan}}</td>
                        <td>{{$fup->date}}</td>
                        <td>
                            {{$fup->ket_usulan}}
                        </td>
                        <td class="text-center">
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
                                @if(!($stats))
                                <span class="badge rounded-pill bg-warning">Sedang di Proses</span>
                                @elseif(strcasecmp($stats,'disetujui') == 0)    
                                <span class="badge rounded-pill bg-success text-light">Disetujui</span>
                                @elseif(strcasecmp($stats,'ditolak') == 0)
                                <span class="badge rounded-pill bg-danger text-light">Ditolak</span>
                                @endif
                            @endif
                        </td>
                        <!-- button masih berantakan -->
                        @if(Auth::user()->role == 'Admin')
                        <td class="text-center">
                        <?php $status = '';?>
                        @foreach($kajians as $kajian)
                            @if($fup->id == $kajian->fup_id)
                                <?php $status = $kajian->ch_status?>
                                @if($status)
                                    <a href="/Baca-kajian/{{$kajian->id}}" class="btn btn-success rounded my-2 my-sm-0"><i class="fa fa-folder"></i>  Lihat</a>
                                @else
                                @endif
                            @endif
                        @endforeach
                        </td>
                        @endif
                        <td>
                            <!-- button masih berantakan -->
                            <?php $flag = 0;?>
                            @foreach($files as $f)
                                @foreach($kajians as $kajian)
                                    @if($kajian->id == $f->kajian_id)
                                        <?php $flag++?>
                                    @endif
                                @endforeach
                                    @if($f->kj_files)
                                        <a href="/kajian file/{{$f->kj_files}}" target="_blank"  class="btn btn-success my-2 my-sm-0 rounded" type="submit"><i class="fa fa-eye"></i> Lihat</a>
                                    @else
                                    @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{-- ADD PAGINATION --}}
            {{$fups->links()}}
        </div>
    </div>
@endsection