@extends('layouts.main')

@section('title', 'Tanggapan Bidang')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Tanggapan Bidang Atas Usulan Perubahan
    </h1>
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">No. Usulan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>{{$fup->no_usulan}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="/Update/Tanggapan/{{$tanggapan->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="container" id="dynamic_field_append">
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th>
                            A. Tanggapan dari Bidang {{$tanggapan->tg_bidangs}} :
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        @if(Auth::user()->role == 'Admin')
                            <textarea class="form-control" rows="3" name="tg_bidang">{{$tanggapan->tg_bidang}}</textarea>
                        @else
                            <textarea class="form-control" rows="3" name="tg_bidang">{{$tanggapan->tg_bidang}}</textarea>
                        @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama :</th>
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        @if(Auth::user()->role == 'Admin')
                            <input class="form-control" type="text" name="tg_nama" value="{{$tanggapan->tg_nama}}">
                        @else
                            <input class="form-control" type="text" name="tg_nama" value="{{$tanggapan->tg_nama}}">
                        @endif
                        </td>
                        <td>
                        @if(Auth::user()->role == 'Admin')
                            <input class="form-control" type="date" value="{{ $tanggapan->tg_date }}" name="tg_date">
                        @else
                            <input class="form-control" type="date" value="{{ $tanggapan->tg_date }}" name="tg_date">
                        @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container">
            <button class="btn btn-success my-2 mx-3">Submit</button>
            <a href="/Tanggapan" class="btn btn-danger my-3">Cancel</a>
            </form>
        </div>
@endsection