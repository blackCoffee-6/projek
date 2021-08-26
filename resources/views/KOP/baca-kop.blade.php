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
        Kontrol Perubahan
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
                </tr>
            </thead>
            <tbody>
                {{-- REGULASI --}}
                <tr>
                    <td align="justify">Regulasi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="spip"
                            {{ ($kontrols->ru_tlp == "spip") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Surat pelaporan ke instansi pemerintah</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->ru_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->ru_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->ru_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->ru_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->ru_realisasi}}</textarea>
                </td>
            </tbody>
        </table>
        {{-- REGULASI 2--}}
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="spip2"
                            {{ ($kontrols->ru_tlp2 == "spip2") ? "checked" : "" }} disabled>
                            <label class="form-check-label"><input type="text" class="form-control" value="{{$kontrols->ru_input2}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->ru_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->ru_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->ru_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->ru_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->ru_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- REGISTRASI --}}
                <tr>
                    <td align="justify">Registrasi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pie"
                            {{ ($kontrols->ri_tlp == "pie") ? "checked" : "" }} disabled>
                            <label class="form-check-label">PIE / Approvable Letter</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->ri_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->ri_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->ri_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->ri_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->ri_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- STABILITAS --}}
                <tr>
                    <td align="justify">Stabilitas</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="prus"
                            {{ ($kontrols->st_tlp == "prus") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->st_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->st_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->st_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->st_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->st_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lus"
                            {{ ($kontrols->st_tlp2 == "lus") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->st_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->st_dok2}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->st_status2 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->st_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->st_realisasi2}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- MASA EDAR --}}
                <tr>
                    <td align="justify">Masa Edar</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ddp"
                            {{ ($kontrols->me_tlp == "ddp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Daftar daluwarsa produk</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->me_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->me_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->me_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->me_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->me_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="srdpe"
                            {{ ($kontrols->me_tlp2 == "srdpe") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Screenshoot revisi daluarsa pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->me_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->me_dok2}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->me_status2 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->me_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->me_realisasi2}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- Validasi/ Kualifikasi --}}
                <tr>
                    <td align="justify">Validasi/ Kualifikasi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pvp"
                            {{ ($kontrols->val_tlp == "pvp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lvp"
                            {{ ($kontrols->val_tlp2 == "lvp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok2}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status2 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi2}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pvp"
                            {{ ($kontrols->val_tlp3 == "pvp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok3}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status3 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi3}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lvpen"
                            {{ ($kontrols->val_tlp4 == "lvpen") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic4}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok4}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status4 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana4}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi4}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pvpem"
                            {{ ($kontrols->val_tlp5 == "pvpem") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic5}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok5}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status5 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana5}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi5}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lvpem"
                            {{ ($kontrols->val_tlp6 == "lvpem") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic6}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok6}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status6 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana6}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi6}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pvma"
                            {{ ($kontrols->val_tlp7 == "pvma") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic7}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok7}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status7 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana7}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi7}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lvma"
                            {{ ($kontrols->val_tlp8 == "lvma") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic8}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok8}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status8 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana8}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi8}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pki"
                            {{ ($kontrols->val_tlp9 == "pki") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic9}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok9}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status9 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana9}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi9}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lki"
                            {{ ($kontrols->val_tlp10 == "lki") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic10}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok10}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status10 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana10}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi10}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pko"
                            {{ ($kontrols->val_tlp11 == "pko") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic11}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok11}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status11 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana11}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi11}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lko"
                            {{ ($kontrols->val_tlp12 == "lko") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic12}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok12}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status12 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana12}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi12}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pkk"
                            {{ ($kontrols->val_tlp13 == "pkk") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protokol kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic13}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok13}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status13 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana13}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi13}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lkk"
                            {{ ($kontrols->val_tlp14 == "lkk") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_pic14}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->val_dok14}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->val_status14 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_rencana14}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->val_realisasi14}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- TRIAL --}}
                <tr>
                    <td align="justify">Trial</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lsl"
                            {{ ($kontrols->tr_tlp == "lsl") ? "checked" : "" }} disabled>
                            <label class="form-check-label">LHT skala laboratorium</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->tr_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="csp"
                            {{ ($kontrols->tr_tlp2 == "csp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">CPB skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_dok2}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->tr_status2== "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_realisasi2}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lsp"
                            {{ ($kontrols->tr_tlp3 == "lsp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">LHT skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_dok3}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->tr_status3 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_realisasi3}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="cp"
                            {{ ($kontrols->tr_tlp4 == "cp") ? "checked" : "" }} disabled>
                            <label class="form-check-label">CPB Pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_pic4}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_dok4}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->tr_status4 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_rencana4}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_realisasi4}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="capr"
                            {{ ($kontrols->tr_tlp5 == "capr") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Catatan analisa produk ruahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_pic5}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_dok5}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->tr_status5 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_rencana5}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_realisasi5}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="cpen"
                            {{ ($kontrols->tr_tlp6 == "cpen") ? "checked" : "" }} disabled>
                            <label class="form-check-label">CPB Pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_pic6}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->tr_dok6}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->tr_status6 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_rencana6}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->tr_realisasi6}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- PRODUKSI --}}
                <tr>
                    <td align="justify">Produksi</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lhu"
                            {{ ($kontrols->pro_tlp == "lhu") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan hasil uji<input type="text" class="form-control mt-1" value="{{$kontrols->pro_input}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->pro_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->pro_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->pro_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->pro_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->pro_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="lhu2"
                            {{ ($kontrols->pro_tlp2 == "lhu2") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan hasil uji<input type="text" class="form-control mt-1" value="{{$kontrols->pro_input2}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->pro_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->pro_dok2}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->pro_status2 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->pro_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->pro_realisasi2}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$kontrols->pro_input3}}"
                            {{ ($kontrols->pro_tlp3 == "lhu3") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Laporan hasil uji<input type="text" class="form-control mt-1" value="{{$kontrols->pro_input3}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->pro_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->pro_dok3}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->pro_status3 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->pro_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->pro_realisasi3}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- DOKUMEN --}}
                <tr>
                    <td align="justify">Dokumen</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="mm"
                            {{ ($kontrols->dok_tlp == "mm") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Manual Mutu</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="diif"
                            {{ ($kontrols->dok_tlp2 == "diif") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Dokumen induk industri farmasi</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic2}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok2}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status2 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana2}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi2}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="prose"
                            {{ ($kontrols->dok_tlp3 == "prose") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Prosedur<input type="text" class="form-control" value="{{$kontrols->dok_input3}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic3}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok3}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status3 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana3}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi3}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ku"
                            {{ ($kontrols->dok_tlp4 == "ku") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Ketentuan umum<input type="text" class="form-control" value="{{$kontrols->dok_input4}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic4}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok4}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status4 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana4}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi4}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="protap"
                            {{ ($kontrols->dok_tlp5 == "protap") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Protap<input type="text" class="form-control" value="{{$kontrols->dok_input5}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic5}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok5}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status5 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana5}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi5}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="formulir"
                            {{ ($kontrols->dok_tlp6 == "formulir") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Formulir<input type="text" class="form-control" value="{{$kontrols->dok_input6}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic6}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok6}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status6 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana6}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi6}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="daftar"
                            {{ ($kontrols->dok_tlp7 == "daftar") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Daftar<input type="text" class="form-control" value="{{$kontrols->dok_input7}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic7}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok7}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status7 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana7}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi7}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="spek"
                            {{ ($kontrols->dok_tlp8 == "spek") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Spesifikasi<input type="text" class="form-control" value="{{$kontrols->dok_input8}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic8}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok8}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status8 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana8}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi8}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- ?? --}}
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ma"
                            {{ ($kontrols->dok_tlp9 == "ma") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Metode analisa<input type="text" class="form-control" value="{{$kontrols->dok_input9}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic9}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok9}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status9 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana9}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi9}}</textarea>
                </td>
            </tbody>
        </table>
        <!-- dok10 -->
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ma2"
                            {{ ($kontrols->dok_tlp10 == "ma2") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Metode analisa<input type="text" class="form-control" value="{{$kontrols->dok_input10}}" disabled></label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_pic10}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dok_dok10}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dok_status10 == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_rencana10}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dok_realisasi10}}</textarea>
                </td>
            </tbody>
        </table>
        <hr>
        <!-- DESAIN KEMASAN  -->
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
                </tr>
            </thead>
            <tbody>
                {{-- SISTEM ERP --}}
                <tr>
                    <td align="justify">Desain Kemasan</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="adk"
                            {{ ($kontrols->dk_tlp == "adk") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Artwork Desain Kemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dk_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->dk_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->dk_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dk_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->dk_realisasi}}</textarea>
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
                </tr>
            </thead>
            <tbody>
                {{-- SISTEM ERP --}}
                <tr>
                    <td align="justify">Sistem ERP</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="sppe"
                            {{ ($kontrols->sis_tlp == "sppe") ? "checked" : "" }} disabled>
                            <label class="form-check-label">Screenshoot perubahan pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" value="{{$kontrols->sis_pic}}" disabled></td>
                    <td><input type="text" class="form-control" value="{{$kontrols->sis_dok}}" disabled></td>
                    <td class="text-center">
                        @if($kontrols->sis_status == "closed")
                            <span class="badge rounded-pill bg-danger text-light">Closed</span>
                        @else
                            <span class="badge rounded-pill bg-secondary text-light">Pending</span>
                        @endif
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
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->sis_rencana}}</textarea>
                </td>
                <td>
                    <textarea class="form-control" rows="3" disabled>{{$kontrols->sis_realisasi}}</textarea>
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
                                    <input class="form-check-input" value="dilaksanakan" type="radio" disabled id="DD">
                                    <label class="form-check-label">Perubahan dapat dilaksanakan sejak/pada/sampai*) <input type="date" value="{{ date('Y-m-d') }}" class="form-control" disabled id="DDtext"></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="tidak dapat dilaksanakan" type="radio" disabled id="TDD">
                                    <label class="form-check-label">Perubahan tidak dapat dilaksanakan</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold"> Catatan :</td>
                </tr>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" disabled>{{$kontrols->kop_tambahan}}</textarea>
                    </td>
                </tr>
                <tr>
                    @if($kontrols->kop_files)
                    <td>
                        <div class="form-group">
                            <label class="font-weight-bold">File / Dokumen</label>
                        </div>
                        {{$kontrols->kop_files}}
                    </td>
                    @else
                    <td>Tidak ada</td>
                    @endif
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
                            <input class="form-check-input" type="checkbox" value="1" disabled
                            {{ in_array("1", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" disabled 
                            {{ in_array("2", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" disabled 
                            {{ in_array("3", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" disabled 
                            {{ in_array("4", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" disabled 
                            {{ in_array("5", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="6" disabled 
                            {{ in_array("6", $dis_setujus) ? "checked" : "" }}>
                            <input type="text" class="form-control" value="{{$kontrols->dis_input}}" disabled>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="7" disabled 
                            {{ in_array("7", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="8" disabled 
                            {{ in_array("8", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label">Pengadaan</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/home"><button type="button" class="btn btn-primary my-2 mx-2">Kembali</button></a>
    </div>
</div>

<script>
    //mitigasi
    var value = $('#mitigasi').val()
    if(value === 'dilaksanakan'){
        $("#DD").attr('checked', 'checked');

        $("#DDtext").css('display', 'block');
    }
    else{
        $("#TDD").attr('checked', 'checked');

        $("#DDtext").css('display', 'none');
    }
</script>
@endsection