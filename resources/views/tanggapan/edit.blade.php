@extends('layouts.main')

@section('title', 'Lihat Tanggapan')

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
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>
                        A. Tanggapan dari Bidang : 
                        @if($tanggapan->tg_bidangs != null)
                            {{$tanggapan->tg_bidangs}}
                        @else
                            {{$tanggapan->Bidang->name}}
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_bidang" disabled>{{$tanggapan->tg_bidang}}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                        <input class="form-control" type="text" name="tg_nama" value="{{$tanggapan->tg_nama}}" disabled>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ $tanggapan->tg_date }}" disabled name="tg_date">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        <a href="/home" class="btn btn-danger my-2 mx-2">Cancel</a>
    </form>
    
<script>
    $(function() {
        var count=0;
      $("#dynamic_field_add").click(function (e) {
        e.preventDefault();
        $("#dynamic_field_append").append('<div class="input-group mb-3 dynamic_field_div"><div class="input-group-prepend"><span class="input-group-text">1</span></div><input name="dok_perlukan[]" type="text" class="form-control dynamic_field_focus" aria-label="Default" aria-describedby="inputGroup-sizing-default"><a href="#" class="dynamic_field_remove"><i class="fa fa-close fa-fw text-danger"></i></a></div>');
        $(".dynamic_field_focus").last().focus();
      });

      $("body").on("click", ".dynamic_field_remove", function (e) {
        e.preventDefault();
        $(this).closest('.dynamic_field_div').remove();
      });
    });
  </script>
</div>
@endsection