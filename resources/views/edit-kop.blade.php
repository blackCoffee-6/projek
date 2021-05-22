@extends('layouts.main')

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
    <form action="/Update/KP/{{$kontrols->id}}" method="POST">
    @csrf
    @method('PUT')
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
                        <input class="form-check-input" type="checkbox" name="ru_tlp" id="ru_tlp" value="spip"
                        {{ in_array("spip", $ru_tlps) ? "checked" : "" }}>
                        <label class="form-check-label">Surat pelaporan ke instansi pemerintah</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" name="ru_pic" id="ru_pic" value="{{ $kontrols->ru_pic }}"></td>
                <td><input type="text" class="form-control" name="ru_dok" id="ru_dok" value="{{ $kontrols->ru_dok }}"></td>
                <td>
                    <div class="form-check">
                    <input type="hidden" value="{{$kontrols->ru_status}}" id="ru">
                        <input class="form-check-input" type="radio" name="ru_status" id="ru_statusid" value="closed">
                        <label class="form-check-label">Closed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ru_status" id="ru_statusid2" value="pending">
                        <label class="form-check-label">Pending</label>
                    </div>
                </td>
                <td class="text-center" width="3%">
                    <input type="date" value="{{ $kontrols->ru_date }}" class="form-control" name="ru_date" width="3%">
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
                    <textarea class="form-control" name="ru_rencana" rows="3">{{ $kontrols->ru_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="ru_realisasi" rows="3">{{ $kontrols->ru_realisasi }}</textarea>
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
                        <input class="form-check-input" type="checkbox" name="ri_tlp" value="pie"
                        {{ in_array("pie", $ri_tlps) ? "checked" : "" }}>
                        <label class="form-check-label">PIE / Approvable Letter</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" name="ri_dok" id="ru_dok" value="{{ $kontrols->ri_dok }}"></td>
                <td><input type="text" class="form-control" name="ri_dok" id="ru_dok" value="{{ $kontrols->ri_dok }}"></td>
                <td>
                    <div class="form-check">
                        <input type="hidden" value="{{$kontrols->ri_status}}" id="ri">
                        <input class="form-check-input" type="radio" name="ri_status" id="ri_statusid" value="closed">
                        <label class="form-check-label">Closed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ri_status" id="ri_statusid2" value="pending">
                        <label class="form-check-label">Pending</label>
                    </div>
                </td>
                <td class="text-center" width="3%">
                    <input type="date" value="{{ $kontrols->ri_date }}" class="form-control" name="ri_date" width="3%">
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
                    <textarea class="form-control" name="ri_rencana" rows="3">{{ $kontrols->ri_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="ri_realisasi" rows="3">{{ $kontrols->ri_realisasi }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="st_tlp" value="prus"
                            {{ in_array("prus", $st_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="st_pic" value="{{ $kontrols->st_pic }}"></td>
                    <td><input type="text" class="form-control" name="st_dok" value="{{ $kontrols->st_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->st_status}}" id="st">
                            <input class="form-check-input" type="radio" name="st_status" id="st_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="st_status" id="st_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->st_date }}" class="form-control" name="st_date" width="3%">
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
                    <textarea class="form-control" name="st_rencana" rows="3">{{ $kontrols->st_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="st_realisasi" rows="3">{{ $kontrols->st_realisasi }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="st_tlp2" value="lus"
                            {{ in_array("lus", $st_tlps2) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan uji stabilitas</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="st_pic2" value="{{ $kontrols->st_pic2 }}"></td>
                    <td><input type="text" class="form-control" name="st_dok2" value="{{ $kontrols->st_dok2 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->st_status2}}" id="st2">
                            <input class="form-check-input" type="radio" name="st_status2" id="st_statusid3" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="st_status2" id="st_statusid4" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->st_date2 }}" class="form-control" name="st_date2" width="3%">
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
                    <textarea class="form-control" name="st_rencana2" rows="3">{{ $kontrols->st_rencana2 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="st_realisasi2" rows="3">{{ $kontrols->st_realisasi2 }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="me_tlp" value="srdpe"
                            {{ in_array("srdpe", $me_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">Daftar daluwarsa produk</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="me_pic" value="{{ $kontrols->me_pic }}"></td>
                    <td><input type="text" class="form-control" name="me_dok" value="{{ $kontrols->me_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->me_status}}" id="me">
                            <input class="form-check-input" type="radio" name="me_status" id="me_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="me_status" id="me_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->me_date }}" class="form-control" name="me_date" width="3%">
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
                    <textarea class="form-control" name="me_rencana" rows="3">{{ $kontrols->me_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="me_realisasi" rows="3">{{ $kontrols->me_realisasi }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="me_tlp2" value="srdpe"
                            {{ in_array("srdpe", $me_tlps2) ? "checked" : "" }}>
                            <label class="form-check-label">Screenshoot revisi daluarsa pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="me_pic2" value="{{ $kontrols->me_pic2 }}"></td>
                    <td><input type="text" class="form-control" name="me_dok2" value="{{ $kontrols->me_pic2 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->me_status2}}" id="me2">
                            <input class="form-check-input" type="radio" name="me_status2" id="me_statusid3" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="me_status2" id="me_statusid4" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->me_date2 }}" class="form-control" name="me_date2" width="3%">
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
                    <textarea class="form-control" name="me_rencana2" rows="3">{{ $kontrols->me_rencana2 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="me_realisasi2" rows="3">{{ $kontrols->me_realisasi2 }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="val_tlp" value="pvp"
                            {{ in_array("pvp", $val_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic" value="{{ $kontrols->val_pic }}"></td>
                    <td><input type="text" class="form-control" name="val_dok" value="{{ $kontrols->val_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status}}" id="val">
                            <input class="form-check-input" type="radio" name="val_status" id="val_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status" id="val_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date }}" class="form-control" name="val_date" width="3%">
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
                    <textarea class="form-control" name="val_rencana" rows="3">{{ $kontrols->val_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi" rows="3">{{ $kontrols->val_realisasi }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>    
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp2" value="lvp"
                            {{ in_array("lvp", $val_tlps2) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan validasi pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic2" value="{{ $kontrols->val_pic2 }}"></td>
                    <td><input type="text" class="form-control" name="val_dok2" value="{{ $kontrols->val_dok2 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status2}}" id="val2">
                            <input class="form-check-input" type="radio" name="val_status2" id="val_statusid3" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status2" id="val_statusid4" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date2 }}" class="form-control" name="val_date2" width="3%">
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
                    <textarea class="form-control" name="val_rencana2" rows="3">{{ $kontrols->val_rencana2 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi2" rows="3">{{ $kontrols->val_realisasi2 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="val_tlp3" value="pvp"
                            {{ in_array("pvp", $val_tlps3) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="val_pic3" value="{{ $kontrols->val_pic3 }}"></td>
                    <td><input type="text" class="form-control" name="val_dok3" value="{{ $kontrols->val_dok3 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status3}}" id="val3">
                            <input class="form-check-input" type="radio" name="val_status3" id="val_statusid5" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status3" id="val_statusid6" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date3 }}" class="form-control" name="val_date3" width="3%">
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
                    <textarea class="form-control" name="val_rencana3" rows="3">{{ $kontrols->val_rencana3 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi3" rows="3">{{ $kontrols->val_realisasi3 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="val_tlp4" value="lvpen"
                            {{ in_array("lvpen", $val_tlps4) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan validasi pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic4" class="form-control" value="{{$kontrols->val_pic4}}"></td>
                    <td><input type="text" name="val_dok4" class="form-control" value="{{$kontrols->val_dok4}}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status4}}" id="val4">
                            <input class="form-check-input" type="radio" name="val_status4" id="val_statusid7" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status4" id="val_statusid8" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date4 }}" class="form-control" name="val_date4" width="3%">
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
                    <textarea class="form-control" name="val_rencana4" rows="3">{{ $kontrols->val_rencana4 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi4" rows="3">{{ $kontrols->val_realisasi4 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp5" value="pvpem"
                            {{ in_array("pvpem", $val_tlps5) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic5" class="form-control" value="{{ $kontrols->val_pic5 }}"></td>
                    <td><input type="text" name="val_dok5" class="form-control" value="{{ $kontrols->val_dok5 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status5}}" id="val5">
                            <input class="form-check-input" type="radio" name="val_status5" id="val_statusid9" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status5" id="val_statusid10" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date5 }}" class="form-control" name="val_date5" width="3%">
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
                    <textarea class="form-control" name="val_rencana5" rows="3">{{ $kontrols->val_rencana5 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi5" rows="3">{{ $kontrols->val_realisasi5 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp6" value="lvp"
                            {{ in_array("lvp", $val_tlps6) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan validasi pembersihan</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic6" class="form-control" value="{{ $kontrols->val_pic6 }}"></td>
                    <td><input type="text" name="val_dok6" class="form-control" value="{{ $kontrols->val_dok6 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status6}}" id="val6">
                            <input class="form-check-input" type="radio" name="val_status6" id="val_statusid11" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status6" id="val_statusid12" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date6 }}" class="form-control" name="val_date6" width="3%">
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
                    <textarea class="form-control" name="val_rencana6" rows="3">{{ $kontrols->val_rencana6 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi6" rows="3">{{ $kontrols->val_realisasi6 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="val_tlp7" value="pvma"
                            {{ in_array("pvma", $val_tlps7) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic7" class="form-control" value="{{ $kontrols->val_pic7 }}"></td>
                    <td><input type="text" name="val_dok7" class="form-control" value="{{ $kontrols->val_dok7 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status7}}" id="val7">
                            <input class="form-check-input" type="radio" name="val_status7" id="val_statusid13" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status7" id="val_statusid14" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date7 }}" class="form-control" name="val_date7" width="3%">
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
                    <textarea class="form-control" name="val_rencana7" rows="3">{{ $kontrols->val_rencana7 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi7" rows="3">{{ $kontrols->val_realisasi7 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp8" value="lvma"
                            {{ in_array("lvma", $val_tlps8) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan validasi metode analisa</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic8" class="form-control" value="{{ $kontrols->val_pic8 }}"></td>
                    <td><input type="text" name="val_dok8" class="form-control" value="{{ $kontrols->val_dok8 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status8}}" id="val8">
                            <input class="form-check-input" type="radio" name="val_status8" id="val_statusid15" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status8" id="val_statusid16" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date8 }}" class="form-control" name="val_date8" width="3%">
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
                    <textarea class="form-control" name="val_rencana8" rows="3">{{ $kontrols->val_rencana8 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi8" rows="3">{{ $kontrols->val_realisasi8 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp9" value="pki"
                            {{ in_array("pki", $val_tlps9) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic9" class="form-control" value="{{ $kontrols->val_pic9 }}"></td>
                    <td><input type="text" name="val_dok9" class="form-control" value="{{ $kontrols->val_dok9 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status9}}" id="val9">
                            <input class="form-check-input" type="radio" name="val_status9" id="val_statusid17" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status9" id="val_statusid18" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date9 }}" class="form-control" name="val_date9" width="3%">
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
                    <textarea class="form-control" name="val_rencana9" rows="3">{{ $kontrols->val_rencana9 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi9" rows="3">{{ $kontrols->val_realisasi9 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp10" value="lki"
                            {{ in_array("lki", $val_tlps10) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan kualifikasi instalasi</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic10" class="form-control" value="{{ $kontrols->val_pic10 }}"></td>
                    <td><input type="text" name="val_dok10" class="form-control" value="{{ $kontrols->val_dok10 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status10}}" id="val10">
                            <input class="form-check-input" type="radio" name="val_status10" id="val_statusid19" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status10" id="val_statusid20" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date10 }}" class="form-control" name="val_date10" width="3%">
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
                    <textarea class="form-control" name="val_rencana10" rows="3">{{ $kontrols->val_rencana10 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi10" rows="3">{{ $kontrols->val_realisasi10 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp11" value="pko"
                            {{ in_array("pko", $val_tlps11) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic11" class="form-control" value="{{ $kontrols->val_pic11 }}"></td>
                    <td><input type="text" name="val_dok11" class="form-control" value="{{ $kontrols->val_dok11 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status11}}" id="val11">
                            <input class="form-check-input" type="radio" name="val_status11" id="val_statusid21" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status11" id="val_statusid22" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date11 }}" class="form-control" name="val_date11" width="3%">
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
                    <textarea class="form-control" name="val_rencana11" rows="3">{{ $kontrols->val_rencana11 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi11" rows="3">{{ $kontrols->val_realisasi11 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp12" value="lko"
                            {{ in_array("lko", $val_tlps12) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan kualifikasi operasional</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic12" class="form-control" value="{{ $kontrols->val_pic12 }}"></td>
                    <td><input type="text" name="val_dok12" class="form-control" value="{{ $kontrols->val_dok12 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status12}}" id="val12">
                            <input class="form-check-input" type="radio" name="val_status12" id="val_statusid23" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status12" id="val_statusid24" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date12 }}" class="form-control" name="val_date12" width="3%">
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
                    <textarea class="form-control" name="val_rencana12" rows="3">{{ $kontrols->val_rencana12 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi12" rows="3">{{ $kontrols->val_realisasi12 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp13" value="pkk"
                            {{ in_array("pkk", $val_tlps13) ? "checked" : "" }}>
                            <label class="form-check-label">Protokol kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic13" class="form-control" value="{{ $kontrols->val_pic13 }}"></td>
                    <td><input type="text" name="val_dok13" class="form-control" value="{{ $kontrols->val_dok13 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status13}}" id="val13">
                            <input class="form-check-input" type="radio" name="val_status13" id="val_statusid25" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status13" id="val_statusid26" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date13 }}" class="form-control" name="val_date13" width="3%">
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
                    <textarea class="form-control" name="val_rencana13" rows="3">{{ $kontrols->val_rencana13 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi13" rows="3">{{ $kontrols->val_realisasi13 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="val_tlp14" value="lkk"
                            {{ in_array("lkk", $val_tlps14) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan kualifikasi kinerja</label>
                        </div>
                    </td>
                    <td><input type="text" name="val_pic14" class="form-control" value="{{ $kontrols->val_pic14 }}"></td>
                    <td><input type="text" name="val_dok14" class="form-control" value="{{ $kontrols->val_dok14 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->val_status14}}" id="val14">
                            <input class="form-check-input" type="radio" name="val_status14" id="val_statusid27" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="val_status14" id="val_statusid28" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->val_date14 }}" class="form-control" name="val_date14" width="3%">
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
                    <textarea class="form-control" name="val_rencana14" rows="3">{{ $kontrols->val_rencana14 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="val_realisasi14" rows="3">{{ $kontrols->val_realisasi14 }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="tr_tlp" value="lsl"
                            {{ in_array("lsl", $tr_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">LHT skala laboratorium</label>
                        </div>
                    </td>
                    <td><input type="text" name="tr_pic" class="form-control" value="{{ $kontrols->tr_pic }}"></td>
                    <td><input type="text" name="tr_dok" class="form-control" value="{{ $kontrols->tr_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->tr_status}}" id="tr">
                            <input class="form-check-input" type="radio" name="tr_status" id="tr_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tr_status" id="tr_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date }}" class="form-control" name="tr_date" width="3%">
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
                    <textarea class="form-control" name="tr_rencana" rows="3">{{ $kontrols->tr_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi" rows="3">{{ $kontrols->tr_realisasi }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp2" value="csp"
                            {{ in_array("csp", $tr_tlps2) ? "checked" : "" }}>
                            <label class="form-check-label">CPB skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" name="tr_pic2" class="form-control" value="{{ $kontrols->tr_pic2 }}"></td>
                    <td><input type="text" name="tr_dok2" class="form-control" value="{{ $kontrols->tr_dok2 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->tr_status2}}" id="tr2">
                            <input class="form-check-input" type="radio" name="tr_status2" id="tr_statusid3" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tr_status2" id="tr_statusid4" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date2 }}" class="form-control" name="tr_date2" width="3%">
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
                    <textarea class="form-control" name="tr_rencana2" rows="3">{{ $kontrols->tr_rencana2 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi2" rows="3">{{ $kontrols->tr_realisasi2 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp3" value="lsp"
                            {{ in_array("lsp", $tr_tlps3) ? "checked" : "" }}>
                            <label class="form-check-label">LHT skala pilot</label>
                        </div>
                    </td>
                    <td><input type="text" name="tr_pic3" class="form-control" value="{{ $kontrols->tr_pic3 }}"></td>
                    <td><input type="text" name="tr_dok3" class="form-control" value="{{ $kontrols->tr_dok3 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->tr_status3}}" id="tr3">
                            <input class="form-check-input" type="radio" name="tr_status3" id="tr_statusid5" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tr_status3" id="tr_statusid6" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date3 }}" class="form-control" name="tr_date3" width="3%">
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
                    <textarea class="form-control" name="tr_rencana3" rows="3">{{ $kontrols->tr_rencana3 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi3" rows="3">{{ $kontrols->tr_realisasi3 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp4" value="cp"
                            {{ in_array("cp", $tr_tlps4) ? "checked" : "" }}>
                            <label class="form-check-label">CPB Pengolahan</label>
                        </div>
                    </td>
                    <td><input type="text" name="tr_pic4" class="form-control" value="{{ $kontrols->tr_pic4 }}"></td>
                    <td><input type="text" name="tr_dok4" class="form-control" value="{{ $kontrols->tr_dok4 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->tr_status4}}" id="tr4">
                            <input class="form-check-input" type="radio" name="tr_status4" id="tr_statusid7" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tr_status4" id="tr_statusid8" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date4 }}" class="form-control" name="tr_date4" width="3%">
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
                    <textarea class="form-control" name="tr_rencana4" rows="3">{{ $kontrols->tr_rencana4 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi4" rows="3">{{ $kontrols->tr_realisasi4 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp5" value="capr"
                            {{ in_array("capr", $tr_tlps5) ? "checked" : "" }}>
                            <label class="form-check-label">Catatan analisa produk ruahan</label>
                        </div>
                    </td>
                    <td><input type="text" name="tr_pic5" class="form-control" value="{{ $kontrols->tr_pic5 }}"></td>
                    <td><input type="text" name="tr_dok5" class="form-control" value="{{ $kontrols->tr_dok5 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->tr_status5}}" id="tr5">
                            <input class="form-check-input" type="radio" name="tr_status5" id="tr_statusid9" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tr_status5" id="tr_statusid10" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date5 }}" class="form-control" name="tr_date5" width="3%">
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
                    <textarea class="form-control" name="tr_rencana5" rows="3">{{ $kontrols->tr_rencana5 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi5" rows="3">{{ $kontrols->tr_realisasi5 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tr_tlp6" value="cpen"
                            {{ in_array("cpen", $tr_tlps6) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineRadio1">CPB Pengemasan</label>
                        </div>
                    </td>
                    <td><input type="text" name="tr_pic6" class="form-control" value="{{ $kontrols->tr_pic6 }}"></td>
                    <td><input type="text" name="tr_dok6" class="form-control" value="{{ $kontrols->tr_dok6 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->tr_status6}}" id="tr6">
                            <input class="form-check-input" type="radio" name="tr_status6" id="tr_statusid11" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tr_status6" id="tr_statusid12" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->tr_date6 }}" class="form-control" name="tr_date6" width="3%">
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
                    <textarea class="form-control" name="tr_rencana6" rows="3">{{ $kontrols->tr_rencana6 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="tr_realisasi6" rows="3">{{ $kontrols->tr_realisasi6 }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="pro_tlp" value="lhu"
                            {{ in_array("lhu", $pro_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext" class="form-control mt-1" value=""></label>
                        </div>
                    </td>
                    <td><input type="text" name="pro_pic" class="form-control" value="{{ $kontrols->pro_pic }}"></td>
                    <td><input type="text" name="pro_dok" class="form-control" value="{{ $kontrols->pro_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->pro_status}}" id="pro">
                            <input class="form-check-input" type="radio" name="pro_status" id="pro_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pro_status" id="pro_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->pro_date }}" class="form-control" name="pro_date" width="3%">
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
                    <textarea class="form-control" name="pro_rencana" rows="3">{{ $kontrols->pro_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="pro_realisasi" rows="3">{{ $kontrols->pro_realisasi }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pro_tlp2" value="lhu2"
                            {{ in_array("lhu2", $pro_tlps2) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext2" class="form-control mt-1" value=""></label>
                        </div>
                    </td>
                    <td><input type="text" name="pro_pic2" class="form-control" value="{{ $kontrols->pro_pic2 }}"></td>
                    <td><input type="text" name="pro_dok2" class="form-control" value="{{ $kontrols->pro_dok2 }}"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pro_status2" id="pro_statusid3" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pro_status2" id="pro_statusid4" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->pro_date2 }}" class="form-control" name="pro_date2" width="3%">
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
                    <textarea class="form-control" name="pro_rencana2" rows="3">{{ $kontrols->pro_rencana2 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="pro_realisasi2" rows="3">{{ $kontrols->pro_realisasi2 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pro_tlp3" value="lhu3"
                            {{ in_array("lhu3", $pro_tlps3) ? "checked" : "" }}>
                            <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext3" class="form-control mt-1" value=""></label>
                        </div>
                    </td>
                    <td><input type="text" name="pro_pic3" class="form-control" value="{{ $kontrols->pro_pic3 }}"></td>
                    <td><input type="text" name="pro_dok3" class="form-control" value="{{ $kontrols->pro_dok3 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->pro_status3}}" id="pro3">
                            <input class="form-check-input" type="radio" name="pro_status3" id="pro_statusid5" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pro_status3" id="pro_statusid6" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->pro_date3 }}" class="form-control" name="pro_date3" width="3%">
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
                    <textarea class="form-control" name="pro_rencana3" rows="3">{{ $kontrols->pro_rencana3 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="pro_realisasi3" rows="3">{{ $kontrols->pro_realisasi3 }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="dok_tlp" value="mm"
                            {{ in_array("mm", $dok_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">Manual Mutu</label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic" class="form-control" value="{{ $kontrols->dok_pic }}"></td>
                    <td><input type="text" name="dok_dok" class="form-control" value="{{ $kontrols->dok_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status}}" id="dok">
                            <input class="form-check-input" type="radio" name="dok_status" id="dok_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status" id="dok_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date }}" class="form-control" name="dok_date" width="3%">
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
                    <textarea class="form-control" name="dok_rencana" rows="3">{{ $kontrols->dok_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi" rows="3">{{ $kontrols->dok_realisasi }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp2" value="diif"
                            {{ in_array("diif", $dok_tlps2) ? "checked" : "" }}>
                            <label class="form-check-label">Dokumen induk industri farmasi</label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic2" class="form-control" value="{{ $kontrols->dok_pic2 }}"></td>
                    <td><input type="text" name="dok_dok2" class="form-control" value="{{ $kontrols->dok_dok2 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status2}}" id="dok2">
                            <input class="form-check-input" type="radio" name="dok_status2" id="dok_statusid3" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status2" id="dok_statusid4" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date2 }}" class="form-control" name="dok_date2" width="3%">
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
                    <textarea class="form-control" name="dok_rencana2" rows="3">{{ $kontrols->dok_rencana2 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi2" rows="3">{{ $kontrols->dok_realisasi2 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp3" value="prose"
                            {{ in_array("prose", $dok_tlps3) ? "checked" : "" }}>
                            <label class="form-check-label">Prosedur <input type="text" class="form-control" value="" name="prosetext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic3" class="form-control" value="{{ $kontrols->dok_pic3 }}"></td>
                    <td><input type="text" name="dok_dok3" class="form-control" value="{{ $kontrols->dok_dok3 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status3}}" id="dok3">
                            <input class="form-check-input" type="radio" name="dok_status3" id="dok_statusid5" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status3" id="dok_statusid6" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date3 }}" class="form-control" name="dok_date3" width="3%">
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
                    <textarea class="form-control" name="dok_rencana3" rows="3">{{ $kontrols->dok_rencana3 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi3" rows="3">{{ $kontrols->dok_realisasi3 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp4" value="ku"
                            {{ in_array("ku", $dok_tlps4) ? "checked" : "" }}>
                            <label class="form-check-label">Ketentuan umum <input type="text" class="form-control" value="" name="ketentuantext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic4" class="form-control" value="{{ $kontrols->dok_pic4 }}"></td>
                    <td><input type="text" name="dok_dok4" class="form-control" value="{{ $kontrols->dok_dok4 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status4}}" id="dok4">
                            <input class="form-check-input" type="radio" name="dok_status4" id="dok_statusid7" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status4" id="dok_statusid8" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date4 }}" class="form-control" name="dok_date4" width="3%">
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
                    <textarea class="form-control" name="dok_rencana4" rows="3">{{ $kontrols->dok_rencana4 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi4" rows="3">{{ $kontrols->dok_realisasi4 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp5" value="protap"
                            {{ in_array("protap", $dok_tlps5) ? "checked" : "" }}>
                            <label class="form-check-label">Protap <input type="text" class="form-control" value="" name="protaptext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic5" class="form-control" value="{{ $kontrols->dok_pic5 }}"></td>
                    <td><input type="text" name="dok_dok5" class="form-control" value="{{ $kontrols->dok_dok5 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status5}}" id="dok5">
                            <input class="form-check-input" type="radio" name="dok_status5" id="dok_statusid9" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status5" id="dok_statusid10" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date5 }}" class="form-control" name="dok_date5" width="3%">
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
                    <textarea class="form-control" name="dok_rencana5" rows="3">{{ $kontrols->dok_rencana5 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi5" rows="3">{{ $kontrols->dok_realisasi5 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp6" value="formulir"
                            {{ in_array("formulir", $dok_tlps6) ? "checked" : "" }}>
                            <label class="form-check-label">Formulir <input type="text" class="form-control" value="" name="formulirtext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic6" class="form-control" value="{{ $kontrols->dok_pic6 }}"></td>
                    <td><input type="text" name="dok_dok6" class="form-control" value="{{ $kontrols->dok_dok6 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status6}}" id="dok6">
                            <input class="form-check-input" type="radio" name="dok_status6" id="dok_statusid11" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status6" id="dok_statusid12" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date6 }}" class="form-control" name="dok_date6" width="3%">
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
                    <textarea class="form-control" name="dok_rencana6" rows="3">{{ $kontrols->dok_rencana6 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi6" rows="3">{{ $kontrols->dok_realisasi6 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp7" value="daftar"
                            {{ in_array("daftar", $dok_tlps7) ? "checked" : "" }}>
                            <label class="form-check-label">Daftar <input type="text" class="form-control" value="" name="daftartext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic7" class="form-control" value="{{ $kontrols->dok_pic7 }}"></td>
                    <td><input type="text" name="dok_dok7" class="form-control" value="{{ $kontrols->dok_dok7 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status7}}" id="dok7">
                            <input class="form-check-input" type="radio" name="dok_status7" id="dok_statusid13" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status7" id="dok_statusid14" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date7 }}" class="form-control" name="dok_date7" width="3%">
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
                    <textarea class="form-control" name="dok_rencana7" rows="3">{{ $kontrols->dok_rencana7 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi7" rows="3">{{ $kontrols->dok_realisasi7 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp8" value="spek"
                            {{ in_array("spek", $dok_tlps8) ? "checked" : "" }}>
                            <label class="form-check-label">Spesifikasi <input type="text" class="form-control" value="" name="spektext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic8" class="form-control" value="{{ $kontrols->dok_pic8 }}"></td>
                    <td><input type="text" name="dok_dok8" class="form-control" value="{{ $kontrols->dok_dok8 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status8}}" id="dok8">
                            <input class="form-check-input" type="radio" name="dok_status8" id="dok_statusid15" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status8" id="dok_statusid16" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date8 }}" class="form-control" name="dok_date8" width="3%">
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
                    <textarea class="form-control" name="dok_rencana8" rows="3">{{ $kontrols->dok_rencana8 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi8" rows="3">{{ $kontrols->dok_realisasi8 }}</textarea>
                </td>
            </tbody>
        </table>
        <table class="table table-bordered">
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
                    <td align="justify"></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dok_tlp9" value="ma"
                            {{ in_array("ma", $dok_tlps9) ? "checked" : "" }}>
                            <label class="form-check-label">Metode analisa <input type="text" class="form-control" value="" name="metodeantext"></label>
                        </div>
                    </td>
                    <td><input type="text" name="dok_pic9" class="form-control" value="{{ $kontrols->dok_pic9 }}"></td>
                    <td><input type="text" name="dok_dok9" class="form-control" value="{{ $kontrols->dok_dok9 }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{$kontrols->dok_status9}}" id="dok9">
                            <input class="form-check-input" type="radio" name="dok_status9" id="dok_statusid17" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dok_status9" id="dok_statusid18" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->dok_date9 }}" class="form-control" name="dok_date9" width="3%">
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
                    <textarea class="form-control" name="dok_rencana9" rows="3">{{ $kontrols->dok_rencana9 }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="dok_realisasi9" rows="3">{{ $kontrols->dok_realisasi9 }}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="sis_tlp" value="sppe"
                            {{ in_array("sppe", $sis_tlps) ? "checked" : "" }}>
                            <label class="form-check-label">Screenshoot perubahan pada ERP</label>
                        </div>
                    </td>
                    <td><input type="text" name="sis_pic" class="form-control" value="{{ $kontrols->sis_pic }}"></td>
                    <td><input type="text" name="sis_dok" class="form-control" value="{{ $kontrols->sis_dok }}"></td>
                    <td>
                        <div class="form-check">
                        <input type="hidden" value="{{ $kontrols->sis_status }}" id="sis">
                            <input class="form-check-input" type="radio" name="sis_status" id="sis_statusid" value="closed">
                            <label class="form-check-label">Closed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sis_status" id="sis_statusid2" value="pending">
                            <label class="form-check-label">Pending</label>
                        </div>
                    </td>
                    <td class="text-center" width="3%">
                        <input type="date" value="{{ $kontrols->sis_date }}" class="form-control" name="sis_date" width="3%">
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
                    <textarea class="form-control" name="sis_rencana">{{ $kontrols->sis_rencana }}</textarea>
                </td>
                <td>
                    <textarea class="form-control" name="sis_realisasi">{{ $kontrols->sis_realisasi }}</textarea>
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
                            <input type="hidden" value="{{$kontrols->hasil_mitigasi}}" id="hasil-mitigasi">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="dilaksanakan" type="radio" name="hasil_mitigasi" id="DD">
                                    <label class="form-check-label">Perubahan dapat dilaksanakan sejak/pada/sampai*) <input type="date" value="" class="form-control" name="hasil_mitigasi_date" id="DDtext"></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="tidak dapat dilaksanakan" type="radio" name="hasil_mitigasi" id="TDD">
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
                    <th scope="col"></th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanggal :</th>
                </tr>
            </thead>
            <tbody>
                <td>Disahkan Oleh</td>
                <td>Manajer Pemastian Mutu</td>
                <td>
                    <input type="text" class="form-control" placeholder="Sertakan Nama" id="mpm_nama" name="mpm_nama" value="{{ $kontrols->mpm_nama }}">
                </td>
                <td>
                    <input type="date" value="{{ $kontrols->mpm_date }}" class="form-control" name="mpm_date">
                </td>
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
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="1"
                            {{ in_array("1", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox1">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="2"
                            {{ in_array("2", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="3"
                            {{ in_array("3", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="4"
                            {{ in_array("4", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox1">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="5"
                            {{ in_array("5", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="6"
                            {{ in_array("6", $dis_setujus) ? "checked" : "" }}>
                            <input type="text" class="form-control" name="">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="7"
                            {{ in_array("7", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox1">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="8"
                            {{ in_array("8", $dis_setujus) ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineCheckbox2">Pengadaan</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success my-2">Submit</button>
    </form>
        <a href="/home"><button type="button" class="btn btn-danger my-2 mx-2">Cancel</button></a>
    </div>
</div>

<script type="text/javascript">
	$('#DDtext').css('display', 'none');
	$(document).on('change', '#DD', function () {
		$('#DDtext').css('display', 'block');
	});
	$(document).on('change', '#TDD', function () {
		$('#DDtext').css('display', 'none');
	});

    var value = $('#hasil-mitigasi').val()
    if(value === 'dilaksanakan'){
        $("#DD").attr('checked', 'checked');
    }
    else if(value === 'tidak dapat dilaksanakan'){
        $("#TDD").attr('checked', 'checked');
    }
    else{
    }
    
    var value = $('#ru').val()
    if(value === 'closed'){
        $("#ru_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#ru_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#ri').val()
    if(value === 'closed'){
        $("#ri_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#ri_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#st').val()
    if(value === 'closed'){
        $("#st_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#st_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#st2').val()
    if(value === 'closed'){
        $("#st_statusid3").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#st_statusid4").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#me').val()
    if(value === 'closed'){
        $("#me_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#me_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#me2').val()
    if(value === 'closed'){
        $("#me_statusid3").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#me_statusid4").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val').val()
    if(value === 'closed'){
        $("#val_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val2').val()
    if(value === 'closed'){
        $("#val_statusid3").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid4").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val3').val()
    if(value === 'closed'){
        $("#val_statusid5").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid6").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val4').val()
    if(value === 'closed'){
        $("#val_statusid7").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid8").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val5').val()
    if(value === 'closed'){
        $("#val_statusid9").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid10").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val6').val()
    if(value === 'closed'){
        $("#val_statusid11").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid12").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val7').val()
    if(value === 'closed'){
        $("#val_statusid13").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid14").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val8').val()
    if(value === 'closed'){
        $("#val_statusid15").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid16").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val9').val()
    if(value === 'closed'){
        $("#val_statusid17").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid18").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val10').val()
    if(value === 'closed'){
        $("#val_statusid19").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid20").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val11').val()
    if(value === 'closed'){
        $("#val_statusid21").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid22").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val12').val()
    if(value === 'closed'){
        $("#val_statusid23").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid24").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val13').val()
    if(value === 'closed'){
        $("#val_statusid25").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid26").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val14').val()
    if(value === 'closed'){
        $("#val_statusid27").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid28").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#val14').val()
    if(value === 'closed'){
        $("#val_statusid27").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#val_statusid28").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#tr').val()
    if(value === 'closed'){
        $("#tr_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#tr_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#tr2').val()
    if(value === 'closed'){
        $("#tr_statusid3").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#tr_statusid4").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#tr3').val()
    if(value === 'closed'){
        $("#tr_statusid5").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#tr_statusid6").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#tr4').val()
    if(value === 'closed'){
        $("#tr_statusid7").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#tr_statusid8").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#tr5').val()
    if(value === 'closed'){
        $("#tr_statusid9").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#tr_statusid10").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#tr6').val()
    if(value === 'closed'){
        $("#tr_statusid11").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#tr_statusid12").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#pro').val()
    if(value === 'closed'){
        $("#pro_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#pro_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#pro2').val()
    if(value === 'closed'){
        $("#pro_statusid3").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#pro_statusid4").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#pro3').val()
    if(value === 'closed'){
        $("#pro_statusid5").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#pro_statusid6").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok').val()
    if(value === 'closed'){
        $("#dok_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid2").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok2').val()
    if(value === 'closed'){
        $("#dok_statusid3").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid4").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok3').val()
    if(value === 'closed'){
        $("#dok_statusid5").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid6").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok4').val()
    if(value === 'closed'){
        $("#dok_statusid7").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid8").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok5').val()
    if(value === 'closed'){
        $("#dok_statusid9").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid10").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok6').val()
    if(value === 'closed'){
        $("#dok_statusid11").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid12").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok7').val()
    if(value === 'closed'){
        $("#dok_statusid13").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid14").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok8').val()
    if(value === 'closed'){
        $("#dok_statusid15").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid16").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#dok9').val()
    if(value === 'closed'){
        $("#dok_statusid17").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#dok_statusid18").attr('checked', 'checked');
    }
    else{}
    
    var value = $('#sis').val()
    if(value === 'closed'){
        $("#sis_statusid").attr('checked', 'checked');
    }
    else if(value === 'pending'){
        $("#sis_statusid2").attr('checked', 'checked');
    }
    else{}
</script>
@endsection