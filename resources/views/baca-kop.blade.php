@extends('layouts.main')

@section('title','Baca Kontrol Perubahan')

@section('content')
<style>
    hr{
        border: 1px solid black;
    }
</style>
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Baca Kontrol Perubahan
    </h1>
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
                            <input class="form-check-input" type="checkbox" name="ru_tlp" value="spip"
                            {{ ($kontrols->ru_tlp == "spip") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Surat pelaporan ke instansi pemerintah</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="ru_pic" value="{{$kontrols->ru_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="ru_dok" value="{{$kontrols->ru_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-danger text-light">Closed</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->ru_date }}" class="form-control" name="ru_date" width="3%" disabled>
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
                    <textarea class="form-control" name="ru_rencana" rows="3" disabled>{{$kontrols->ru_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="ru_realisasi" rows="3" disabled>{{$kontrols->ru_realisasi}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- REGISTRASI --}}
                <tr>
                    <td align="justify">Registrasi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ri_tlp" value="pie"
                            {{ ($kontrols->ri_tlp == "pie") ? "checked" : "" }} disabled>
                            <label class="form-check-label">PIE / Approvable Letter</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="ri_pic" value="{{$kontrols->ri_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="ri_dok" value="{{$kontrols->ri_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->ri_date }}" class="form-control" name="ri_date" width="3%" disabled>
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
                    <textarea class="form-control" name="ri_rencana" rows="3" disabled>{{$kontrols->ri_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="ri_realisasi" rows="3" disabled>{{$kontrols->ri_realisasi}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- STABILITAS --}}
                <tr>
                    <td align="justify">Stabilitas</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="st_tlp" value="prus"
                            {{ ($kontrols->st_tlp == "prus") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="st_pic" value="{{$kontrols->st_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="st_dok" value="{{$kontrols->st_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->st_date }}" class="form-control" name="st_date" width="3%" disabled>
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
                    <textarea class="form-control" name="st_rencana" rows="3" disabled>{{$kontrols->st_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="st_realisasi" rows="3" disabled>{{$kontrols->st_realisasi}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="st_tlp2" value="lus"
                            {{ ($kontrols->st_tlp2 == "lus") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="st_pic2" value="{{$kontrols->st_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" name="st_dok2" value="{{$kontrols->st_dok2}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->st_date2 }}" class="form-control" name="st_date2" width="3%" disabled>
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
                    <textarea class="form-control" name="st_rencana2" rows="3" disabled>{{$kontrols->st_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="st_realisasi2" rows="3" disabled>{{$kontrols->st_realisasi2}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- MASA EDAR --}}
                <tr>
                    <td align="justify">Masa Edar</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="me_tlp" value="ddp"
                            {{ ($kontrols->me_tlp == "ddp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Daftar daluwarsa produk</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="me_pic" value="{{$kontrols->me_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="me_dok" value="{{$kontrols->me_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->me_date }}" class="form-control" name="me_date" width="3%" disabled>
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
                    <textarea class="form-control" name="me_rencana" rows="3" disabled>{{$kontrols->me_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="me_realisasi" rows="3" disabled>{{$kontrols->me_realisasi}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="me_tlp2" value="srdpe"
                            {{ ($kontrols->me_tlp2 == "srdpe") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Screenshoot revisi daluarsa pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="me_pic2" value="{{$kontrols->me_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" name="me_dok2" value="{{$kontrols->me_dok2}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->me_date2 }}" class="form-control" name="me_date2" width="3%" disabled>
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
                    <textarea class="form-control" name="me_rencana2" rows="3" disabled>{{$kontrols->me_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="me_realisasi2" rows="3" disabled>{{$kontrols->me_realisasi2}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- Validasi/ Kualifikasi --}}
                <tr>
                    <td align="justify">Validasi/ Kualifikasi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp" value="pvp"
                            {{ ($kontrols->val_tlp == "pvp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic" value="{{$kontrols->val_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok" value="{{$kontrols->val_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date }}" class="form-control" name="val_date" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana" rows="3" disabled>{{$kontrols->val_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi" rows="3" disabled>{{$kontrols->val_realisasi}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp2" value="lvp"
                            {{ ($kontrols->val_tlp2 == "lvp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic2" value="{{$kontrols->val_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok2" value="{{$kontrols->val_dok2}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date2 }}" class="form-control" name="val_date2" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana2" rows="3" disabled>{{$kontrols->val_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi2" rows="3" disabled>{{$kontrols->val_realisasi2}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp3" value="pvp"
                            {{ ($kontrols->val_tlp3 == "pvp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic3" value="{{$kontrols->val_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok3" value="{{$kontrols->val_dok3}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date3 }}" class="form-control" name="val_date3" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana3" rows="3" disabled>{{$kontrols->val_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi3" rows="3" disabled>{{$kontrols->val_realisasi3}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp4" value="lvpen"
                            {{ ($kontrols->val_tlp4 == "lvpen") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic4" value="{{$kontrols->val_pic4}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok4" value="{{$kontrols->val_dok4}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date4 }}" class="form-control" name="val_date4" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana4" rows="3" disabled>{{$kontrols->val_rencana4}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi4" rows="3" disabled>{{$kontrols->val_realisasi4}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp5" value="pvpem"
                            {{ ($kontrols->val_tlp5 == "pvpem") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic5" value="{{$kontrols->val_pic5}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok5" value="{{$kontrols->val_dok5}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date5 }}" class="form-control" name="val_date5" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana5" rows="3" disabled>{{$kontrols->val_rencana5}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi5" rows="3" disabled>{{$kontrols->val_realisasi5}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp6" value="lvpem"
                            {{ ($kontrols->val_tlp6 == "lvpem") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic6" value="{{$kontrols->val_pic6}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok6" value="{{$kontrols->val_dok6}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date6 }}" class="form-control" name="val_date6" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana6" rows="3" disabled>{{$kontrols->val_rencana6}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi6" rows="3" disabled>{{$kontrols->val_realisasi6}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp7" value="pvma"
                            {{ ($kontrols->val_tlp7 == "pvma") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic7" value="{{$kontrols->val_pic7}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok7" value="{{$kontrols->val_dok7}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date7 }}" class="form-control" name="val_date7" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana7" rows="3" disabled>{{$kontrols->val_rencana7}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi7" rows="3" disabled>{{$kontrols->val_realisasi7}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp8" value="lvma"
                            {{ ($kontrols->val_tlp8 == "lvma") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic8" value="{{$kontrols->val_pic8}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok8" value="{{$kontrols->val_dok8}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date8 }}" class="form-control" name="val_date8" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana8" rows="3" disabled>{{$kontrols->val_rencana8}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi8" rows="3" disabled>{{$kontrols->val_realisasi8}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp9" value="pki"
                            {{ ($kontrols->val_tlp9 == "pki") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic9" value="{{$kontrols->val_pic9}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok9" value="{{$kontrols->val_dok9}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date9 }}" class="form-control" name="val_date9" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana9" rows="3" disabled>{{$kontrols->val_rencana9}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi9" rows="3" disabled>{{$kontrols->val_realisasi9}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp10" value="lki"
                            {{ ($kontrols->val_tlp10 == "lki") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic10" value="{{$kontrols->val_pic10}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok10" value="{{$kontrols->val_dok10}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date10 }}" class="form-control" name="val_date10" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana10" rows="3" disabled>{{$kontrols->val_rencana10}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi10" rows="3" disabled>{{$kontrols->val_realisasi10}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp11" value="pko"
                            {{ ($kontrols->val_tlp11 == "pko") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic11" value="{{$kontrols->val_pic11}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok11" value="{{$kontrols->val_dok11}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date11 }}" class="form-control" name="val_date11" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana11" rows="3" disabled>{{$kontrols->val_rencana11}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi11" rows="3" disabled>{{$kontrols->val_realisasi11}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp12" value="lko"
                            {{ ($kontrols->val_tlp12 == "lko") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic12" value="{{$kontrols->val_pic12}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok12" value="{{$kontrols->val_dok12}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date12 }}" class="form-control" name="val_date12" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana12" rows="3" disabled>{{$kontrols->val_rencana12}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi12" rows="3" disabled>{{$kontrols->val_realisasi12}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp13" value="pkk"
                            {{ ($kontrols->val_tlp13 == "pkk") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic13" value="{{$kontrols->val_pic13}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok13" value="{{$kontrols->val_dok13}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date13 }}" class="form-control" name="val_date13" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana13" rows="3" disabled>{{$kontrols->val_rencana13}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi13" rows="3" disabled>{{$kontrols->val_realisasi13}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp14" value="lkk"
                            {{ ($kontrols->val_tlp14 == "lkk") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic14" value="{{$kontrols->val_pic14}}" disabled></td>
                    <td><input type="text" class="form-control" name="val_dok14" value="{{$kontrols->val_dok14}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date14 }}" class="form-control" name="val_date14" width="3%" disabled>
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
                    <textarea class="form-control" name="val_rencana14" rows="3" disabled>{{$kontrols->val_rencana14}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi14" rows="3" disabled>{{$kontrols->val_realisasi14}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- TRIAL --}}
                <tr>
                    <td align="justify">Trial</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp" value="lsl"
                            {{ ($kontrols->tr_tlp == "lsl") ? "checked" : "" }} disabled>
                            <label class="form-check-label">LHT skala laboratorium</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="tr_pic" value="{{$kontrols->tr_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="tr_dok" value="{{$kontrols->tr_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date }}" class="form-control" name="tr_date" width="3%" disabled>
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
                    <textarea class="form-control" name="tr_rencana" rows="3" disabled>{{$kontrols->tr_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi" rows="3" disabled>{{$kontrols->tr_realisasi}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp2" value="csp"
                            {{ ($kontrols->tr_tlp2 == "csp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">CPB skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="tr_pic2" value="{{$kontrols->tr_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" name="tr_dok2" value="{{$kontrols->tr_dok2}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date2 }}" class="form-control" name="tr_date2" width="3%" disabled>
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
                    <textarea class="form-control" name="tr_rencana2" rows="3" disabled>{{$kontrols->tr_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi2" rows="3" disabled>{{$kontrols->tr_realisasi2}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp3" value="lsp"
                            {{ ($kontrols->tr_tlp3 == "lsp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">LHT skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="tr_pic3" value="{{$kontrols->tr_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" name="tr_dok3" value="{{$kontrols->tr_dok3}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date3 }}" class="form-control" name="tr_date3" width="3%" disabled>
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
                    <textarea class="form-control" name="tr_rencana3" rows="3" disabled>{{$kontrols->tr_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi3" rows="3" disabled>{{$kontrols->tr_realisasi3}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp4" value="cp"
                            {{ ($kontrols->tr_tlp4 == "cp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">CPB Pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="tr_pic4" value="{{$kontrols->tr_pic4}}" disabled></td>
                    <td><input type="text" class="form-control" name="tr_dok4" value="{{$kontrols->tr_dok4}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date4 }}" class="form-control" name="tr_date4" width="3%" disabled>
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
                    <textarea class="form-control" name="tr_rencana4" rows="3" disabled>{{$kontrols->tr_rencana4}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi4" rows="3" disabled>{{$kontrols->tr_realisasi4}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp5" value="capr"
                            {{ ($kontrols->tr_tlp5 == "capr") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Catatan analisa produk ruahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="tr_pic5" value="{{$kontrols->tr_pic5}}" disabled></td>
                    <td><input type="text" class="form-control" name="tr_dok5" value="{{$kontrols->tr_dok5}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date5 }}" class="form-control" name="tr_date5" width="3%" disabled>
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
                    <textarea class="form-control" name="tr_rencana5" rows="3" disabled>{{$kontrols->tr_rencana5}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi5" rows="3" disabled>{{$kontrols->tr_realisasi5}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp6" value="cpen"
                            {{ ($kontrols->tr_tlp6 == "cpen") ? "checked" : "" }} disabled>
                            <label class="form-check-label">CPB Pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="tr_pic6" value="{{$kontrols->tr_pic6}}" disabled></td>
                    <td><input type="text" class="form-control" name="tr_dok6" value="{{$kontrols->tr_dok6}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date6 }}" class="form-control" name="tr_date6" width="3%" disabled>
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
                    <textarea class="form-control" name="tr_rencana6" rows="3" disabled>{{$kontrols->tr_rencana6}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi6" rows="3" disabled>{{$kontrols->tr_realisasi6}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- PRODUKSI --}}
                <tr>
                    <td align="justify">Produksi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pro_tlp" value="lhu"
                            {{ ($kontrols->pro_tlp == "lhu") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan hasil uji</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="pro_pic" value="{{$kontrols->pro_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="pro_dok" value="{{$kontrols->pro_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->pro_date }}" class="form-control" name="pro_date" width="3%" disabled>
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
                    <textarea class="form-control" name="pro_rencana" rows="3" disabled>{{$kontrols->pro_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="pro_realisasi" rows="3" disabled>{{$kontrols->pro_realisasi}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pro_tlp2" value="lhu2"
                            {{ ($kontrols->pro_tlp2 == "lhu2") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan hasil uji</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="pro_pic2" value="{{$kontrols->pro_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" name="pro_dok2" value="{{$kontrols->pro_dok2}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->pro_date2 }}" class="form-control" name="pro_date2" width="3%" disabled>
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
                    <textarea class="form-control" name="pro_rencana2" rows="3" disabled>{{$kontrols->pro_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="pro_realisasi2" rows="3" disabled>{{$kontrols->pro_realisasi2}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pro_tlp3" value="lhu3"
                            {{ ($kontrols->pro_tlp3 == "lhu3") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan hasil uji</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="pro_pic3" value="{{$kontrols->pro_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" name="pro_dok3" value="{{$kontrols->pro_dok3}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->pro_date3 }}" class="form-control" name="pro_date3" width="3%" disabled>
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
                    <textarea class="form-control" name="pro_rencana3" rows="3" disabled>{{$kontrols->pro_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="pro_realisasi3" rows="3" disabled>{{$kontrols->pro_realisasi3}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- DOKUMEN --}}
                <tr>
                    <td align="justify">Dokumen</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp" value="mm"
                            {{ ($kontrols->dok_tlp == "mm") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Manual Mutu</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic" value="{{$kontrols->dok_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok" value="{{$kontrols->dok_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date }}" class="form-control" name="dok_date" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana" rows="3" disabled>{{$kontrols->dok_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi" rows="3" disabled>{{$kontrols->dok_realisasi}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp2" value="diif"
                            {{ ($kontrols->dok_tlp2 == "diif") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Dokumen induk industri farmasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic2" value="{{$kontrols->dok_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok2" value="{{$kontrols->dok_dok2}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date2 }}" class="form-control" name="dok_date2" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana2" rows="3" disabled>{{$kontrols->dok_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi2" rows="3" disabled>{{$kontrols->dok_realisasi2}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp3" value="prose"
                            {{ ($kontrols->dok_tlp3 == "prose") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Prosedur</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic3" value="{{$kontrols->dok_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok3" value="{{$kontrols->dok_dok3}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date3 }}" class="form-control" name="dok_date3" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana3" rows="3" disabled>{{$kontrols->dok_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi3" rows="3" disabled>{{$kontrols->dok_realisasi3}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp4" value="ku"
                            {{ ($kontrols->dok_tlp4 == "ku") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Ketentuan umum</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic4" value="{{$kontrols->dok_pic4}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok4" value="{{$kontrols->dok_dok4}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date4 }}" class="form-control" name="dok_date4" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana4" rows="3" disabled>{{$kontrols->dok_rencana4}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi4" rows="3" disabled>{{$kontrols->dok_realisasi4}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp5" value="protap"
                            {{ ($kontrols->dok_tlp5 == "protap") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protap</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic5" value="{{$kontrols->dok_pic5}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok5" value="{{$kontrols->dok_dok5}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date5 }}" class="form-control" name="dok_date5" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana5" rows="3" disabled>{{$kontrols->dok_rencana5}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi5" rows="3" disabled>{{$kontrols->dok_realisasi5}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp6" value="formulir"
                            {{ ($kontrols->dok_tlp6 == "formulir") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Formulir</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic6" value="{{$kontrols->dok_pic6}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok6" value="{{$kontrols->dok_dok6}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date6 }}" class="form-control" name="dok_date6" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana6" rows="3" disabled>{{$kontrols->dok_rencana6}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi6" rows="3" disabled>{{$kontrols->dok_realisasi6}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp7" value="daftar"
                            {{ ($kontrols->dok_tlp7 == "daftar") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Daftar</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic7" value="{{$kontrols->dok_pic7}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok7" value="{{$kontrols->dok_dok7}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date7 }}" class="form-control" name="dok_date7" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana7" rows="3" disabled>{{$kontrols->dok_rencana7}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi7" rows="3" disabled>{{$kontrols->dok_realisasi7}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp8" value="spek"
                            {{ ($kontrols->dok_tlp8 == "spek") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Spesifikasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic8" value="{{$kontrols->dok_pic8}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok8" value="{{$kontrols->dok_dok8}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date8 }}" class="form-control" name="dok_date8" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana8" rows="3" disabled>{{$kontrols->dok_rencana8}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi8" rows="3" disabled>{{$kontrols->dok_realisasi8}}</textarea>
                </td>
            </tbody>
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
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp9" value="ma"
                            {{ ($kontrols->dok_tlp9 == "ma") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="dok_pic9" value="{{$kontrols->dok_pic9}}" disabled></td>
                    <td><input type="text" class="form-control" name="dok_dok9" value="{{$kontrols->dok_dok9}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date9 }}" class="form-control" name="dok_date9" width="3%" disabled>
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
                    <textarea class="form-control" name="dok_rencana9" rows="3" disabled>{{$kontrols->dok_rencana9}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi9" rows="3" disabled>{{$kontrols->dok_realisasi9}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
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
                {{-- SISTEM ERP --}}
                <tr>
                    <td align="justify">Sistem ERP</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sis_tlp" value="sppe"
                            {{ ($kontrols->sis_tlp == "sppe") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Screenshoot perubahan pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="sis_pic" value="{{$kontrols->sis_pic}}" disabled></td>
                    <td><input type="text" class="form-control" name="sis_dok" value="{{$kontrols->sis_dok}}" disabled></td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->sis_date }}" class="form-control" name="sis_date" width="3%" disabled>
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
                    <textarea class="form-control" name="sis_rencana" rows="3" disabled>{{$kontrols->sis_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="sis_realisasi" rows="3" disabled>{{$kontrols->sis_realisasi}}</textarea>
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
                        <input type="hidden" value="{{$kontrols->hasil_mitigasi}}" id="mitigasi">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="dilaksanakan" type="radio" name="hasil_mitigasi" disabled id="DD">
                                    <label class="form-check-label">Perubahan dapat dilaksanakan sejak/pada/sampai*) <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="hasil_mitigasi_date" disabled id="DDtext"></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="tidak dapat dilaksanakan" type="radio" name="hasil_mitigasi" disabled id="TDD">
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
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="1" disabled
                            {{ in_array("1", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox1">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="2" disabled 
                            {{ in_array("2", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="3" disabled 
                            {{ in_array("3", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="4" disabled 
                            {{ in_array("4", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox1">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="5" disabled 
                            {{ in_array("5", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="6" disabled 
                            {{ in_array("6", $dis_setujus) ? "checked" : "" }}>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="7" disabled 
                            {{ in_array("7", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox1">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju" value="8" disabled 
                            {{ in_array("8", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Pengadaan</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/home"><button type="button" class="btn btn-danger my-2 mx-2">Back</button></a>
    </div>
</div>

<script>
    //mitigasi
    var value = $('#mitigasi').val()
    if(value === 'dilaksanakan'){
        $("#DD").attr('checked', 'checked');
    }
    else{
        $("#dokatTDDidak").attr('checked', 'checked');
    }
</script>
@endsection