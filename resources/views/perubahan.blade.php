@extends('layouts.main')

@section('content')
@section('content')
<style>
    hr{
        border: 1px solid black;
    }
</style>
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Kontrol Perubahan
    </h1>
    <form action="/Store/KP/{{$fup->id}}" method="POST">
    @csrf
    <div class="container my-4">
        <table class="table table-bordered">
            <tr>
                <th>Mitigasi Dampak Usulan Perubahan</th>
            </tr>
        </table>
        <table class="table table-bordered my-3">
            <thead>
            <tr>
                <th scope="col" width="5%" align="justify">Kategori :</th>
                <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                <th scope="col" width="7%"><center> PIC</center></th>
                <th scope="col" width="5%">
                    <center>
                        <div class="row">
                            <div class="col-md-12">
                                No.
                            </div>
                            <div class="col-md-12">
                                Dokumen
                            </div>
                        </div>
                    </center>
                </th>
                <th scope="col" width="1%">
                    <center>Status</center>
                </th>
                <th scope="col" width="5%">
                    <center>Tanggal Selesai</center>
                </th>
            </tr>
            </thead>
            <tbody>
            {{-- REGULASI --}}
            <tr>
                <td align="justify">Regulasi</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ru_tlp[]" id="surat" value="supel" {{ (is_array(old('ru_tlp')) && in_array('supel', old('ru_tlp'))) ? 'checked' : ''}}>
                        <label class="form-check-label">Surat pelaporan ke instansi pemerintah</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" name="ru_pic" id="ru_pic"></td>
                <td><input type="text" class="form-control" name="ru_dok" id="ru_dok"></td>
                <td class="text-center">
                    <span class="badge rounded-pill bg-danger text-light">Closed</span>
                </td>
                <td class="text-center" width="3%">
                    <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="ru_date" id="ru_date" width="3%">
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-bordered my-1">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" name="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" name="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- REGISTRASI --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td align="justify">Registrasi</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[1]" value="pie">
                        <label class="form-check-label">PIE / Approvable Letter</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td class="text-center">
                    <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                </td>
                <td class="text-center" width="3%">
                    <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup1" id="DDtext" width="3%">
                </td>
            </tr>
        </tbody>
        </table>
        <table class="table table-bordered my-1">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- STABILITAS --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Stabilitas</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[2]" value="protokol">
                            <label class="form-check-label">Protokol uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup2" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered my-3">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[3]" value="stabilitas">
                            <label class="form-check-label">Laporan uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup3" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- MASA EDAR --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Masa Edar</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[4]" value="daftardalu" id="daftardalu">
                            <label class="form-check-label">Daftar daluwarsa produk</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup4" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="screenrev" type="checkbox" name="object[5]">
                            <label class="form-check-label">Screenshoot revisi daluarsa pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup5" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- VALIDASI / KUALIFIKASI --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Validasi/ Kualifikasi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[6]" value="protokol2">
                            <label class="form-check-label">Protokol validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup6" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>    
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[7]" value="laval">
                            <label class="form-check-label">Laporan validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup7" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[8]" value="protokol3">
                            <label class="form-check-label">Protokol validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup8" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[9]" value="laval2">
                            <label class="form-check-label">Laporan validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[9]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[9]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup9" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="object[10]" value="protokol4">
                            <label class="form-check-label">Protokol validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[10]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[10]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup10" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laval3" type="checkbox" name="object[11]">
                            <label class="form-check-label">Laporan validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[11]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[11]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup11" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="protokol5" type="checkbox" name="object[12]">
                            <label class="form-check-label">Protokol validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[12]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[12]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup12" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laval4" type="checkbox" name="object[13]">
                            <label class="form-check-label">Laporan validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[13]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[13]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup13" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="protokol6" type="checkbox" name="object[14]">
                            <label class="form-check-label">Protokol kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[14]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[14]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup14" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laval5" type="checkbox" name="object[15]">
                            <label class="form-check-label">Laporan kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[15]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[15]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup15" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="protokol7" type="checkbox" name="object[16]">
                            <label class="form-check-label">Protokol kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[16]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[16]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup16" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laval6" type="checkbox" name="object[17]">
                            <label class="form-check-label">Laporan kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[17]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[17]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup17" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="protokol8" type="checkbox" name="object[18]">
                            <label class="form-check-label">Protokol kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[18]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[18]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup18" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laval7" type="checkbox" name="object[19]">
                            <label class="form-check-label">Laporan kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[19]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[19]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup19" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- TRIAL --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Trial</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="LHT" type="checkbox" name="object[20]">
                            <label class="form-check-label">LHT skala laboratorium</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[20]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[20]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup20" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="CPB" type="checkbox" name="object[21]">
                            <label class="form-check-label">CPB skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[21]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[21]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup21" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="LHT2" type="checkbox" name="object[22]">
                            <label class="form-check-label">LHT skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[22]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[22]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup22" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="CPB2" type="checkbox" name="object[23]">
                            <label class="form-check-label">CPB Pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[23]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[23]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup23" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="catatan" type="checkbox" name="object[24]">
                            <label class="form-check-label">Catatan analisa produk ruahan</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[24]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[24]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup24" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="CPB3" type="checkbox" name="object[25]">
                            <label class="form-check-label" for="inlineRadio1">CPB Pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[25]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[25]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup25" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- PRODUKSI --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Produksi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" class="form-check-input" value="laha" type="checkbox" name="object[26]">
                            <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext" class="form-control mt-1" value=""></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[26]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[26]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup26" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laha2" type="checkbox" name="object[27]">
                            <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext2" class="form-control mt-1" value=""></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[27]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[27]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup27" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="laha3" type="checkbox" name="object[28]">
                            <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext3" class="form-control mt-1" value=""></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[28]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[28]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup28" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- DOKUMEN --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Dokumen</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="manual" type="checkbox" name="object[29]">
                            <label class="form-check-label">Manual Mutu</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[29]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[29]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup29" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="dokuin" type="checkbox" name="object[30]">
                            <label class="form-check-label">Dokumen induk industri farmasi</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[30]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[30]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup30" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="prose" type="checkbox" name="object[31]">
                            <label class="form-check-label">Prosedur <input type="text" class="form-control" value="" name="prosetext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[31]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[31]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup31" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="ketentuan" type="checkbox" name="object[32]">
                            <label class="form-check-label">Ketentuan umum <input type="text" class="form-control" value="" name="ketentuantext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[32]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[32]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup32" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="protap" type="checkbox" name="object[33]">
                            <label class="form-check-label">Protap <input type="text" class="form-control" value="" name="protaptext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[33]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[33]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup33" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="formulir" type="checkbox" name="object[34]">
                            <label class="form-check-label">Formulir <input type="text" class="form-control" value="" name="formulirtext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[34]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[34]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup34" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="daftar" type="checkbox" name="object[35]">
                            <label class="form-check-label">Daftar <input type="text" class="form-control" value="" name="daftartext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[35]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[35]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup35" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="spek" type="checkbox" name="object[36]">
                            <label class="form-check-label">Spesifikasi <input type="text" class="form-control" value="" name="spektext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[36]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[36]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup36" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify" class="text-white">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" value="metodean" type="checkbox" name="object[37]">
                            <label class="form-check-label">Metode analisa <input type="text" class="form-control" value="" name="metodeantext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[37]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[37]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup37" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered my-3">
            {{-- SISTEM ERP --}}
            <thead>
                <tr>
                    <th scope="col" width="5%" align="justify">Kategori :</th>
                    <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                    <th scope="col" width="7%"><center> PIC</center></th>
                    <th scope="col" width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    No.
                                </div>
                                <div class="col-md-12">
                                    Dokumen
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%">
                        <center>Status</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>Tanggal Selesai</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify">Sistem ERP</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="screenperu" type="checkbox" name="object[38]">
                            <label class="form-check-label">Screenshoot perubahan pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" name="pic[38]" class="form-control" value=""></td>
                    <td><input type="text" name="nodok[38]" class="form-control" value=""></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="5%">
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="closingup38" id="DDtext" width="3%">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>Rencana Penyelesaian :</th>
                <th>Realisasi Penyelesaian :</th>
            </thead>
            <tbody>
                <td>
                    <textarea class="form-control" id="ru_rencana" rows="3"></textarea>
                </td>
                <td>
                    <textarea class="form-control" id="ru_realisasi" rows="3"></textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Berdasarkan hasil mitigasi terhadap dampak, maka :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="dilaksanakan" type="radio" name="status" id="DD" required>
                                    <label class="form-check-label">Perubahan dapat dilaksanakan sejak/pada/sampai*) <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="statustext" id="DDtext"></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="tidak dapat dilaksanakan" type="radio" name="status" id="TDD">
                                    <label class="form-check-label">Perubahan tidak dapat dilaksanakan</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Distribusi persetujuan perubahan :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Pengadaan</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-success my-2">Submit</button>
    </form>
        <a href="/home"><button type="button" class="btn btn-danger my-2 mx-2">Cancel</button></a>
    </div>
</div>
<script src="jquery/jquery-2.2.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
	$('#DDtext').css('display', 'none');

	$(document).on('change', '#DD', function () {
		$('#DDtext').css('display', 'block');
	});

	$(document).on('change', '#TDD', function () {
		$('#DDtext').css('display', 'none');
	});
</script>
@endsection