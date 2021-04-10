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
                    <td>04/USL/IV/2020</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>A. Tanggapan dari Bidang R&D</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_rnd" disabled>{{$tanggapan->tg_rnd}}</textarea>
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
                        <input type="hidden" value="{{$tanggapan->ch_regulasi}}" id="ch_regulasi">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="1" disabled id="langsung" >
                            <label class="form-check-label" for="inlineRadio1">Perubahan dapat langsung dilaksanakan tanpa menunggu izin dari BPOM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="2" disabled id="izin">
                            <label class="form-check-label" for="inlineRadio2">Perubahan perlu izin BPOM terlebih dahulu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ch_regulasi" value="3" disabled id="disetujui">
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
                        <input type="hidden" value="{{$tanggapan->ch_registrasi}}" id="ch_registrasi">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" value="major" disabled id="major">
                            <label class="form-check-label" for="inlineRadio1">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" value="minor" disabled id="minor">
                            <label class="form-check-label" for="inlineRadio2">Minor</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_registrasi" value="notifikasi" disabled id="notifikasi">
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
                            <!-- <div class="input-group mb-3 dynamic_field_div">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">1</span>
                                </div>
                                <input  value="{{$tanggapan->dok_perlukan}}" placeholder="{{$tanggapan->dok_perlukan}}" name="dok_perlukan[]" type="text" class="form-control dynamic_field_focus" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                <a id="dynamic_field_add" href="#"><i class="fa fa-plus fa-fw text-success"></i></a>
                            </div> -->
                            <div class="form-floating">
                                <textarea class="form-control" style="height: 100px" name="dok_perlukan" disabled>{{$tanggapan->dok_perlukan}}</textarea>
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
                        <input class="form-control" type="text" name="tg_nama" value="{{$tanggapan->tg_nama}}" disabled>
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ $tanggapan->tg_date }}" disabled name="tg_date">
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
                        <textarea class="form-control" rows="3" disabled>{{$tanggapan->gt_bidang}}</textarea>
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
                        <input class="form-control" type="text" value="{{$tanggapan->gt_nama}}" disabled>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{$tanggapan->gt_date}}" disabled>
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
                        <textarea class="form-control" rows="3" disabled>{{$tanggapan->bidang_tg}}</textarea>
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
                        <input class="form-control" type="text" value="{{$tanggapan->nama_tg}}" disabled>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{$tanggapan->date_tg}}" disabled>
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

    var value = $('#ch_regulasi').val()
    if(value === '1'){
        $("#langsung").attr('checked', 'checked');
    }
    else if(value === '2'){
        $("#izin").attr('checked', 'checked');
    }
    else{
        $("#disetujui").attr('checked', 'checked');
    }

    var value = $('#ch_registrasi').val()
    if(value === 'major'){
        $("#major").attr('checked', 'checked');
    }
    else if(value === 'minor'){
        $("#minor").attr('checked', 'checked');
    }
    else{
        $("#notifikasi").attr('checked', 'checked');
    }

  </script>
</div>
@endsection