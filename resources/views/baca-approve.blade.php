@extends('layouts.main')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
    Usulan Perubahan
    </h1>
    <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
            <tr>
                <th scope="col">A. Bidang yang Mengajukan :</th>
                <th scope="col">No</th>
                <th scope="col">Tanggal (Bulan/Tanggal/Tahun)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    {{$fup->Bidang->name}}
                </td>
                <td>04/USL/IV/2020</td>
                <td>
                    {{$fup->date}}
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>B. Nama Produk / Bahan / Mesin / Dokumen :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->Product->name}}
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>C. Ketentuan / Kondisi yang Berlaku</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->ket_ketentuan}}
                    </td>
                </tr>
            </tbody>
        </tbody>
        <thead>
            <tr>
                <th>D. Usulan Perubahan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$fup->ket_usulan}}
                </td>
            </tr>
            </tbody>
            <thead>
                <tr>
                    <th>E. Alasan Perubahan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->ket_alasan}}
                    </td>
                </tr>
            </tbody>
            <thead>
                <th>F. Sifat Perubahan</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="hidden" value="{{$fup->ch_sifat}}" id="sifat">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_sifat" id="sementara" value="sementara" disabled>
                            <label class="form-check-label" for="sementara">Sementara</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_sifat" id="tetap" value="tetap" disabled>
                            <label class="form-check-label" for="tetap">Tetap</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>G. Usulan Pemberlakuan Perubahan :</th>
                </tr>
                <tr>
                    <td>Usulan Dibuat Oleh :</td>
                </tr>
                <tr>
                    <th scope="col">Asman :</th>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->pic_asman}}
                    </td>
                    <td>
                        {{$fup->pic_nama}}
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        {{$fup->pic_date}}
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col">Manager :</th>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->cip_manager}}
                    </td>
                    <td>
                        {{$fup->cip_nama}}
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        {{$fup->cip_date}}
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td>Usulan Diterima Oleh : *)</td>
                </tr>
                <tr>
                    <td class="text-danger">*) Diisi oleh QA</td>
                </tr>
                <tr>
                    <th scope="col">Asman :</th>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanda Tangan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->qa_asman}}
                    </td>
                    <td>
                        {{$fup->qa_nama}}
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        {{$fup->qa_date}}
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Perlu Tanggapan Bidang Lain :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="hidden" value="{{$fup->tanggapan}}" id="tanggapan">
                        <div class="form-check form-check-inline">
                            <input class="form-check form-check-inline" type="radio" disabled name="tanggapan" id="tidak" value="tidak" onclick="document.getElementById('tanggapan2').style.display = 'none'">
                            <label class="form-check-label" for="tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check form-check-inline" type="radio" disabled name="tanggapan" id="perlu" value="perlu" onclick="document.getElementById('tanggapan2').style.display = 'block'">
                            <label class="form-check-label" for="perlu">Perlu, dari Bidang :</label>
                        </div>
                    </td>
                    @if($fup->tanggapan != "tidak")
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$fup->tanggapan2}}" checked disabled>
                            <label class="form-check-label" for="inlineCheckbox1">{{$fup->tanggapan2}}</label>
                        </div>
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
        @if($role == "approval")
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Berdasarkan Usulan Diatas, Apakah Disetujui?</th>
                </tr>
            </thead>
            <tbody>
            <form action="/approve/store" method="POST">
                @csrf

                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="approve" id="Disetujui" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Disetujui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="approve" id="Ditolak" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak Setuju</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="approve" id="Revisi" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perlu Di Revisi</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            <button type="submit" class="btn btn-success my-2">Submit</button>
        </form>
        <a href="/home" class="btn btn-danger my-2 mx-2">Cancel</a>
    </div>

<script>
    var value = $('#sifat').val()
    if(value === 'tetap'){
        $("#tetap").attr('checked', 'checked');
    }
    else{
        $("#sementara").attr('checked', 'checked');
    }

    var value = $('#tanggapan').val()
    if(value === 'tidak'){
        $("#tidak").attr('checked', 'checked');
    }
    else{
        $("#perlu").attr('checked', 'checked');
    }

</script>
</div>
@endsection