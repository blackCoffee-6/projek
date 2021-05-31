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
    <div class="container my-4" id="dynamic_field_append">
        <div id="dynamic_field_tanggapan">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>
                        A. Tanggapan dari Bidang :
                        @if(Auth::user()->role == 'Admin')
                            <br><br>
                            <select name="tg_bidangs[]">
                                <option>Select Bidang</option>
                                @foreach($bidangs as $bidang)
                                <option value="{{$bidang->Bidang->name}}">{{$bidang->Bidang->name}}</option>
                                @endforeach
                            </select>
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_bidang[]"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <div id="dynamic_field_nama">
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
                        <input class="form-control" type="text" name="tg_nama[]">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date[]">
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
        <div class="container text-right mx-2">
            <button type="button" class="btn btn-success" id="add_btn"><i class="fa fa-plus"></i></button>
        </div>
    
    <div class="container">
        <button class="btn btn-success my-2  mx-3">Submit</button>
        <a href="/home" class="btn btn-danger my-3">Cancel</a>
        </form>
    </div>

<script type="text/javascript">
    $(function(){
        var count=0;
        $('#add_btn').click(function(e){
            e.preventDefault();
            $("#dynamic_field_append").append('<div id="dynamic_field_tanggapan"><table class="table table-bordered"><thead><tr><th>Tanggapan dari Bidang :@if(Auth::user()->role == "Admin")<br><br><select name="tg_bidangs[]"><option>Select Bidang</option>@foreach($bidangs as $bidang)<option value="{{$bidang->Bidang->name}}">{{$bidang->Bidang->name}}</option>@endforeach</select>@endif</th></tr></thead><tbody><tr><td><textarea class="form-control" rows="3" name="tg_bidang[]"></textarea></td></tr></tbody></table><div class="container text-right"><a class="btn btn-danger dynamic_field_remove" id="dynamic_field_remove"><i class="fa fa-close fa-fw"></i></a></div></div><div id="dynamic_field_nama><table class="table table-bordered"><thead><tr><th scope="col">Nama :</th><th scope="col">Tanggal :</th></tr></thead><tbody><tr><td><input class="form-control" type="text" name="tg_nama[]"></td><td><input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date[]"></td></tr></tbody></table></div></div>');
            $(".dynamic_field_focus").last().focus();
        });
        $(document).on('click', '#dynamic_field_remove', function (e) {
            e.preventDefault();
            $(this).closest('.dynamic_field_tanggapan').remove();
        });
    });
</script>
@endsection