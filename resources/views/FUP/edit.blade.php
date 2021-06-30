@extends('layouts.main')

@section('title', 'Edit FUP')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
    Usulan Perubahan
    </h1>
    <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
    <form action="/FUP/{{$fup->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container my-4">
            <table class="table table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">A. Bidang yang Mengajukan :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <select class="form-control @error('title') is-invalid @enderror" name="bidang">
                            <option value="{{$fup->bidang_id}}">{{$fup->Bidang->name}}</option>
                            @foreach($bidang as $bidang)
                            <option value="{{$bidang->id}}">{{$bidang->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="date">
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
                            <input class="form-control" type="text" name="produk" placeholder="{{$fup->produk}}" value="{{$fup->produk}}" id="produk">
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
                            <textarea class="form-control" rows="3" name="ket_ketentuan" placeholder="{{$fup->ket_ketentuan}}">{{$fup->ket_ketentuan}}</textarea>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_usulan" placeholder="{{$fup->ket_usulan}}">{{$fup->ket_usulan}}</textarea>
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_alasan" placeholder="{{$fup->ket_alasan}}">{{$fup->ket_alasan}}</textarea>
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
                                <input class="form-check-input" type="radio" name="ch_sifat" id="sementara" value="sementara">
                                <label class="form-check-label" for="sementara">Sementara</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ch_sifat" id="tetap" value="tetap">
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
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="pic_asman" value="{{$fup->pic_asman}}" placeholder="{{$fup->pic_asman}}">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="pic_nama" value="{{$fup->pic_nama}}" placeholder="{{$fup->pic_nama}}">
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="pic_date">
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Manager :</th>
                        <th scope="col">Nama :</th>
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="cip_manager" value="{{$fup->cip_manager}}" placeholder="{{$fup->cip_manager}}">
                        </td>
                        <td>
                            <input class="form-control" type="text" name="cip_nama" value="{{$fup->cip_nama}}" placeholder="{{$fup->cip_nama}}">
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="cip_date">
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlFile1" class="font-weight-bold">Masukan File / Dokumen (*Jika diperlukan)</label>
                                <input name="file" type="file" class="form-control-file" value="{{$fup->file}}">
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <td>
                            <button type="submit" class="btn btn-success my-2">Update</button>
                        </form>
                            <a href="/home" id="test" type="button" class="btn btn-danger my-2 mx-2">Cancel</a>
                        </td>    
                        </div>
                    </tr>
                </tbody>                
        </table>
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

    var cb = $('.cb_input').val();
    console.log(cb);
</script>

</div>
@endsection
