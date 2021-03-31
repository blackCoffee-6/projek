@extends('layouts.main')

@section('title', 'Detail FUP')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
    Usulan Perubahan
    </h1>
    <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
        @csrf
        @method('PUT')
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
                        {{Auth::user()->Bidang->name}}
                    </td>
                    <td>04/USL/IV/2020</td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="date" disabled>
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
                            <select class="form-control" id="inputGroupSelect01" name="produk" disabled>
                                <option value="{{$fup->Product->id}}">{{$fup->Product->name}}</option>
                                @foreach($product as $pro)
                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endforeach
                            </select>
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
                            <textarea class="form-control" rows="3" name="ket_ketentuan" placeholder="{{$fup->ket_ketentuan}}" disabled>{{$fup->ket_ketentuan}}</textarea>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_usulan" placeholder="{{$fup->ket_usulan}}" disabled>{{$fup->ket_usulan}}</textarea>
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_alasan" placeholder="{{$fup->ket_alasan}}" disabled>{{$fup->ket_alasan}}</textarea>
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
                            <input class="form-control" type="text" name="pic_asman" value="{{$fup->pic_asman}}" placeholder="{{$fup->pic_asman}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="pic_nama" value="{{$fup->pic_nama}}" placeholder="{{$fup->pic_nama}}" disabled>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="pic_date" disabled>
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
                            <input class="form-control" type="text" name="cip_manager" value="{{$fup->cip_manager}}" placeholder="{{$fup->cip_manager}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="cip_nama" value="{{$fup->cip_nama}}" placeholder="{{$fup->cip_nama}}" disabled>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="cip_date" disabled>
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
                            <input class="form-control" type="text" name="qa_asman" value="{{$fup->qa_asman}}" placeholder="{{$fup->qa_asman}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="qa_nama" value="{{$fup->qa_nama}}" placeholder="{{$fup->qa_nama}}" disabled>
                        </td>
                        <td>
                            <textarea class="form-control" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="qa_date" disabled>
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
                                <input class="form-check form-check-inline" type="radio" name="tanggapan" id="tidak" value="tidak" onclick="document.getElementById('tanggapan2').style.display = 'none'" disabled>
                                <label class="form-check-label" for="tidak">Tidak</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check form-check-inline" type="radio" name="tanggapan" id="perlu" value="perlu" onclick="document.getElementById('tanggapan2').style.display = 'block'" disabled>
                                <label class="form-check-label" for="perlu">Perlu, dari Bidang :</label>
                            </div>
                        </td>
                        @if($fup->tanggapan != "tidak")
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked="checked" disabled>
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
                <form action="/store/{{$fup->id}}" method="post">
                    @csrf
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="decision" id="setuju" value="setuju">
                                <label class="form-check-label" for="inlineRadio1">Disetujui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="decision" id="tidak" value="tidak">
                                <label class="form-check-label" for="inlineRadio2">Tidak Setuju</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="decision" id="revisi" value="revisi">
                                <label class="form-check-label" for="inlineRadio2">Perlu Di Revisi</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success my-2">Submit</button>
            <a href="/home" id="test" type="button" class="btn btn-danger my-2 mx-2">Cancel</a>
            </form>
            @endif
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
