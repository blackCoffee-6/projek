@extends('layouts.main')

@section('title', 'Detail FUP')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
    Usulan Perubahan
    </h1>
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
                        {{$fup->Bidang->name}}
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
                            <input class="form-control" type="text" name="produk" placeholder="{{$fup->produk}}" value="{{$fup->produk}}" disabled>
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
                <tbody>
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
                </tbody>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="pic_asman" value="{{$fup->pic_asman}}" placeholder="{{$fup->pic_asman}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="pic_nama" value="{{$fup->pic_nama}}" placeholder="{{$fup->pic_nama}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="pic_date" disabled>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="col">Manager :</th>
                        <th scope="col">Nama :</th>
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="cip_manager" value="{{$fup->cip_manager}}" placeholder="{{$fup->cip_manager}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="cip_nama" value="{{$fup->cip_nama}}" placeholder="{{$fup->cip_nama}}" disabled>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="cip_date" disabled>
                        </td>
                    </tr>
                </tbody>
                </table>
                @if(Auth::user()->role == "Staff")
                <a href="/home" id="test" type="button" class="btn btn-primary my-2 mx-2">Kembali</a>
                @elseif(Auth::user()->role == "Approval" OR Auth::user()->role == "Admin")
                <table class="table table-bordered my-3">
                <form action="/store/{{$fup->id}}" method="post">
                    @csrf
                <thead>
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
                            <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-control @error('qa_asman') is-invalid @enderror" type="text" name="qa_asman" value="{{ old('qa_asman') }}">
                                @error('qa_asman')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>*Asman Harus diisi!</strong>
                                    </span>
                                @enderror                        
                            </td>
                            <td>
                                <input class="form-control @error('qa_nama') is-invalid @enderror" type="text" name="qa_nama">
                                @error('qa_nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>*Nama harus diisi!</strong>
                                    </span>
                                @enderror                       
                            </td>
                            <td>
                                <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="qa_date">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check form-check-inline" type="radio" name="tanggapan" id="tidak" value="tidak" onclick="document.getElementById('tanggapan2').style.display = 'none'"
                                    {{ (old('tanggapan') == 'tidak') ? 'checked' : ''}}>
                                    <label class="form-check-label" for="tidak">Tidak</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check form-check-inline" type="radio" name="tanggapan" id="perlu" value="perlu" onclick="document.getElementById('tanggapan2').style.display = 'block'"
                                    {{ (old('tanggapan') == 'perlu') ? 'checked' : ''}}>
                                    <label class="form-check-label" for="perlu">Perlu, dari Bidang :</label>
                                </div>
                                <br><br>
                                <label 
                                    @error('tanggapan') 
                                    class="text-danger"
                                    @enderror>@error('tanggapan')
                                    *Tanggapan Bidang Lain harus dipilih!
                                    @enderror
                                </label>                             
                            </td>
                            <td id="tanggapan2">
                                @foreach($bidang as $bidang)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cb" name="tanggapan2[]" value="{{$bidang->id}}" {{ (is_array(old('tanggapan2')) && in_array($bidang2->id, old('tanggapan2'))) ? ' checked' : '' }}>
                                        <label class="form-check-label">{{$bidang->name}}</label>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Berdasarkan Usulan Diatas, Apakah Disetujui?</th>
                    </tr>
                </thead>
                <tbody>
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

    // var value = $('#tanggapan').val()
    // if(value === 'tidak'){
    //     $("#tidak").attr('checked', 'checked');
    // }
    // else{
    //     $("#perlu").attr('checked', 'checked');
    // }

</script>

</div>
@endsection
