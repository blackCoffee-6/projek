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
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor Usulan</th>
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col" width="20%">Usulan Perubahan</th>
                    <th scope="col">Status</th>
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
                        <td>
                            {{$fup->ket_usulan}}
                        </td>
                        <td class="text-center">
                        <?php $flag = 0; $revisi = 0; ?>
                        @foreach($apps as $app)
                            @if($app->fup_id == $fup->id)
                            <?php $flag = 1; ?>
                            @endif
                            @if($app->fup_id == $fup->id AND $app->decision == "setuju")
                                    <span class="badge rounded-pill bg-success text-light">Approved</span>

                                @elseif($app->fup_id == $fup->id AND $app->decision == "tidak")
                                    <span class="badge rounded-pill bg-danger text-dark">Not Approved</span>
                                    
                                @elseif($app->fup_id == $fup->id AND $app->decision == "revisi")
                                <?php $revisi = 1; ?>
                                    <span class="badge rounded-pill bg-warning text-dark">Perlu di Revisi</span>
                            @endif
                        @endforeach
                        @if($flag == 0)
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection