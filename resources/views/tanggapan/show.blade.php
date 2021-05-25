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
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>A. Tanggapan dari Bidang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_bidang"></textarea>
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
                        <input class="form-control" type="text" name="tg_nama">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>B. Tanggapan dari Bidang :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="gt_bidang"></textarea>
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
                        <input class="form-control" type="text" name="gt_nama">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="gt_date">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>C. Tanggapan dari Bidang :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="bidang_tg"></textarea>
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
                        <input class="form-control" type="text" name="nama_tg">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="date_tg">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>D. Tanggapan dari Bidang :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_bidang2" ></textarea>
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
                        <input class="form-control" type="text" name="tg_nama2">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date2">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>E. Tanggapan dari Bidang :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_bidang3"></textarea>
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
                        <input class="form-control" type="text" name="tg_nama3">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date3">
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-success my-2">Submit</button>
        <a href="/home" class="btn btn-danger my-2 mx-2">Cancel</a>
        </form>
    </div>

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