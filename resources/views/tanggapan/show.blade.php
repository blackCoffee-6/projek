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
    <form action="/Store/Tanggapan/{{$fup->id}}" method="POST">
    @csrf
        <div class="container" id="dynamic_field_append">
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th>
                            @if(Auth::user()->role == 'Admin')
                            A. Tanggapan dari Bidang :
                                <br><br>
                                <select name="tg_bidangs[]">
                                    Select Bidang
                                    @foreach($bidangs as $bidang)
                                    <option value="{{$bidang->Bidang->name}}">{{$bidang->Bidang->name}}</option>
                                    @endforeach
                                </select>
                            @else
                            A. Tanggapan dari Bidang {{Auth::user()->Bidang->name}} :
                            @endif
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        @if(Auth::user()->role == 'Admin')
                            <textarea class="form-control" rows="3" name="tg_bidang[]"></textarea>
                        @else
                            <textarea class="form-control" rows="3" name="tg_bidang"></textarea>
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
                            <input class="form-control" type="text" name="tg_nama[]">
                        @else
                            <input class="form-control" type="text" name="tg_nama">
                        @endif
                        </td>
                        <td>
                        @if(Auth::user()->role == 'Admin')
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date[]">
                        @else
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date">
                        @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @if(Auth::user()->role == 'Admin')
        <div id="newRow"></div>
        <div class="container text-right mx-3"><button type="button" class="btn btn-success mt-2" id="add_btn"><i class="fa fa-plus"></i> Add more</button></div>
        @endif

        <div class="container">
            <button class="btn btn-success my-2 mx-3">Submit</button>
            <a href="/home" class="btn btn-danger my-3">Cancel</a>
            </form>
        </div>
<script>
    // add table
    $("#add_btn").click(function () {
        var html = '';
        html+='<div id="dynamic_field_append" class="container my-3"><table class="table table-bordered my-3"><thead><tr><th>A. Tanggapan dari Bidang :@if(Auth::user()->role == 'Admin')<br><br><select name="tg_bidangs[]"><option>Select Bidang</option>@foreach($bidangs as $bidang)<option value="{{$bidang->name}}">{{$bidang->name}}</option>@endforeach</select>@endif</th></tr></thead><tbody><tr><td><textarea class="form-control" rows="3" name="tg_bidang[]"></textarea></td></tr></tbody></table><table class="table table-bordered"><thead><tr><th scope="col">Nama :</th><th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th></tr></thead><tbody><tr><td><input class="form-control" type="text" name="tg_nama[]"></td><td><input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date[]"></td></tr></tbody></table><div class="container text-right"><button type="button" class="btn btn-danger" id="remove_btn"><i class="fa fa-minus"></i>  Delete</button></div></div><div class="container text-right mx-2"></div>';

        $('#newRow').append(html);
    });

    // remove table
    $(document).on('click', '#remove_btn', function () {
        $(this).closest('#dynamic_field_append').remove();
    });
</script>
@endsection