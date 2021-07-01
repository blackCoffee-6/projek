<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUP {{$fups->no_usulan}}</title>
    <style>
    #title{
        text-align: center;
        font-size: 40px;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    .th-color {
    background-color: #dddddd;
    }
</style>
</head>
<body>
    <div class="content">
        <div class="main">
            <h1>
                <p id="title">Usulan Perubahan</p>
            </h1>
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th class="th-color">A. Bidang yang Mengajukan :</th>
                            <th class="th-color">No</th>
                            <th class="th-color">Tanggal (Bulan/Tanggal/Tahun)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->Bidang->name}}
                            </td>
                            <td>{{$fups->no_usulan}}</td>
                            <td>
                                {{$fups->date}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th class="th-color">B. Nama Produk / Bahan / Mesin / Dokumen :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->produk}}
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">C. Ketentuan / Kondisi yang Berlaku</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->ket_ketentuan}}
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">D. Usulan Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->ket_usulan}}
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">E. Alasan Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->ket_alasan}}
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">F. Sifat Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->ch_sifat}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <table>
                    <tbody>
                        <tr>
                            <th class="th-color">G. Usulan Pemberlakuan Perubahan :</th>
                        </tr>
                        <tr>
                            <td>Usulan Dibuat Oleh :</td>
                        </tr>
                        <tr>
                            <th class="th-color">Asman :</th>
                            <th class="th-color">Nama :</th>
                            <th class="th-color">Tanggal (Bulan/Tanggal/Tahun) :</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->pic_asman}}
                            </td>
                            <td>
                                {{$fups->pic_nama}}
                            </td>
                            <td>
                                {{$fups->pic_date}}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th class="th-color">Manager :</th>
                            <th class="th-color">Nama :</th>
                            <th class="th-color">Tanggal (Bulan/Tanggal/Tahun) :</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->cip_manager}}
                            </td>
                            <td>
                                {{$fups->cip_nama}}
                            </td>
                            <td>
                                {{$fups->cip_date}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th class="th-color">Dokumen :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="/file/{{$files->file}}">{{$files->file}}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                            <!-- <table class="table table-bordered my-3">
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
                        </table> -->
            </div>
        </div>
    </div>
    </div>
</body>
</html>