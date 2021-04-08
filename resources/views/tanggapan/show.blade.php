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
                    <td>04/USL/IV/2020</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="/Store/Tanggapan/{{$fup->id}}" method="POST">
    @csrf
    <div class="container my-4">
        @if(Auth::user()->bidang_id == 1)
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>A. Tanggapan dari Bidang R&D</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tg_rnd"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Tinjauan terhadap Regulasi :</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="1">
                            <label class="form-check-label" for="inlineRadio1">Perubahan dapat langsung dilaksanakan tanpa menunggu izin dari BPOM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="2">
                            <label class="form-check-label" for="inlineRadio2">Perubahan perlu izin BPOM terlebih dahulu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="3">
                            <label class="form-check-label" for="inlineRadio1">Perubahan telah disetujui BPOM</label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td>Jenis Registrasi :</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" value="major">
                            <label class="form-check-label" for="inlineRadio1">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" value="minor">
                            <label class="form-check-label" for="inlineRadio2">Minor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" value="notifikasi">
                            <label class="form-check-label" for="inlineRadio1">Notifikasi</label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Dokumen yang Diperlukan :</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="dynamic_field_append">
                            <div class="input-group mb-3 dynamic_field_div">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">1</span>
                                </div>
                                <input name="dok_perlukan[]" type="text" class="form-control dynamic_field_focus" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                <a id="dynamic_field_add" href="#"><i class="fa fa-plus fa-fw text-success"></i></a>
                                <!-- <a href="#" class="dynamic_field_remove"><i class="fa fa-close fa-fw text-danger"></i></a> -->
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="tg_nama">
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date">
                    </td>
                </tr>
            </tbody>
        </table>

        @else
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>A. Tanggapan dari Bidang R&D</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tg_rnd" disabled></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Tinjauan terhadap Regulasi :</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="1" disabled>
                            <label class="form-check-label" for="inlineRadio1">Perubahan dapat langsung dilaksanakan tanpa menunggu izin dari BPOM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="2" disabled>
                            <label class="form-check-label" for="inlineRadio2">Perubahan perlu izin BPOM terlebih dahulu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="3" disabled>
                            <label class="form-check-label" for="inlineRadio1">Perubahan telah disetujui BPOM</label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td>Jenis Registrasi :</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" disabled value="major">
                            <label class="form-check-label" for="inlineRadio1">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" disabled value="minor">
                            <label class="form-check-label" for="inlineRadio2">Minor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" disabled value="notifikasi">
                            <label class="form-check-label" for="inlineRadio1">Notifikasi</label>
                        </div>
                    </td>
                </tr>
            </tbody>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Dokumen yang Diperlukan :</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="dynamic_field_append">
                            <div class="input-group mb-3 dynamic_field_div">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">1</span>
                                </div>
<<<<<<< HEAD:resources/views/tanggapan/show.blade.php
                                <input disabled name="dok_perlukan[]" type="text" class="form-control dynamic_field_focus" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                <a id="dynamic_field_add" href="#"><i class="fa fa-plus fa-fw text-success" hidden></i></a>
=======
                                <input name="dok_perlukan[]" type="text" class="form-control dynamic_field_focus" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="{{$tanggapan->dok_perlukan}}" disabled>
                                <a id="dynamic_field_add" href="#"><i class="fa fa-plus fa-fw text-success"></i></a>
                                <a href="#" class="dynamic_field_remove"><i class="fa fa-close fa-fw text-danger"></i></a>
>>>>>>> 8a0687ce4cb9a8ce3d087303f4f6bd932b580cb7:resources/views/baca-tanggapan.blade.php
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="tg_nama" disabled>
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date" disabled>
                    </td>
                </tr>
            </tbody>
        </table>
        @endif
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
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="gt_nama">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
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
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="nama_tg">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="date_tg">
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