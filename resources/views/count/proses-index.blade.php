@extends('layouts.main')

@section('title', 'List UP Proses')

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
            UP Dalam Tahap Proses
        </h1>
        <div class="container my-4">
            <table class="table table-bordered my-3">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor Usulan</th>
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col" width="20%">Usulan Perubahan</th>
                    <th scope="col" width="10%">Tanggal Berlaku</th>
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
                        <td>12/05/2021</td>
                        <td class="text-center">
                            @if($fup->status == 'Closed')
                                <span class="badge rounded-pill bg-success text-light">Closed</span>
                            @elseif($fup->status == 'Ditolak')
                                <span class="badge rounded-pill bg-danger text-light">Rejected</span>
                            @elseif($fup->status == 'Pending')
                                <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                            @elseif($fup->status == 'Ditanggapi' OR $fup->status == 'null' OR $fup->status == 'Dikaji')
                                <span class="badge rounded-pill bg-warning text-dark">Tahap di Proses</span>
                            @endif
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
              {{-- {{ $fups->links() }} --}}
        </div>
    </div>
@endsection