@extends('layouts.main')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Kajian Perubahan
    </h1>
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>A. Kategori Usulan Perubahan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="1" id="bahan"
                            {{ in_array("1", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Spesifikasi Bahan / Produk</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="2" id="baku"
                            {{ in_array("2", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Bahan Baku</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="3" id="proses"
                            {{ in_array("3", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Formula / Proses</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="4" id="mesin"
                            {{ in_array("4", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Mesin dan Peralatan</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="5" id="metode"
                            {{ in_array("5", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Metode Analisis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="6" id="site"
                            {{ in_array("6", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Site Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="7" id="bangunan"
                            {{ in_array("7", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Bangunan dan Fasilitas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="8" id="dokumen"
                            {{ in_array("8", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Dokumentasi</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="9" id="lingkungan"
                            {{ in_array("9", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Lingkungan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="10" id="pie"
                            {{ in_array("10", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">PIE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="11" id="peraturan"
                            {{ in_array("11", $ket_ups) ? "checked" : "" }}>
                            <label class="form-check-label">Peraturan Perundangan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" disabled value="12" id="else1"
                            {{ in_array("12", $ket_ups) ? "checked" : "" }}>
                            <input type="text" class="form-control" name="ket_else" placeholder="{{$kajians->ket_else}}" disabled>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <tr>
                <th>B. Dampak Usulan Perubahan</th>
            </tr>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"><center> No.</center></th>
                    <th scope="col"><center> Kategori</center></th>
                    <th scope="col"><center> Uraian</center></th>
                    <th scope="col"><center> Keterangan</center></th>
                </tr>
            </thead>
            <tbody>
                {{-- REGULASI --}}
                <tr>
                    <td align="center">1</td>
                    <td align="center">Regulasi</td>
                    <td>
                        <h6>a. Perlu pelaporan ke pemerintah</h6>
                        <input type="hidden" value="{{$kajians->ru_a}}" id="rua">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" disabled id="ruaya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" disabled id="ruatidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" disabled id="ruana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanregulasi">b. Jika ya, laporan ditujukan ke</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" disabled id="regul" value="bpom" 
                                {{ in_array("bpom", $ru_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="regult">Badan POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" disabled id="regul1" value="kemkes"
                                {{ in_array("kemkes", $ru_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="regult1">Kementrian Kesehatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" disabled id="regul2" value="bapom"
                                {{ in_array("bapom", $ru_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="regult2">Balai POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" disabled id="regul3" value="regulasielse"
                                {{ in_array("regulasielse", $ru_bb) ? "checked" : "" }}>
                                <input type="text" class="form-control" id="regult3" placeholder="{{$kajians->ru_else}}" disabled>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="ru_ket" rows="3" name="ru_ket" disabled>{{$kajians->ru_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    {{-- REGISTRASI --}}
                    <td><center> 2</center></td>
                    <td><center> Registrasi</center></td>
                    <td>
                        <h6>a. Mempengaruhi status ijin edar</h6>
                        <input type="hidden" value="{{$kajians->ri_a}}" disabled id="ria">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" disabled id="riaya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" disabled id="riatidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" disabled id="riana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanregistrasi">b. Jika ya, perubahan</h6>
                        <div class="d-inline">
                            <input type="hidden" value="{{$kajians->ri_b}}" disabled id="rib">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" disabled id="ribperlu" value="Perlu Persetujuan">
                                <label class="form-check-label" id="ribperlu1">Perlu memperoleh persetujuan BPOM terlebih dahulu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" disabled id="ribijin" value="Setelah Perubahan">
                                <label class="form-check-label" id="ribijin1">Ijin BPOM dapat disubmit setelah perubahan terjadi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" disabled id="ribtelah" value="Telah Persetujuan">
                                <label class="form-check-label" id="ribtelah1">Telah memperoleh persetujuan BPOM</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" disabled id="ri_ket" rows="3" name="ri_ket">{{$kajians->ri_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- STABILITAS --}}
                <tr>
                    <td><center> 3</center></td>
                    <td><center> Stabilitas</center></td>
                    <td>
                        <h6>a. Mempengaruhi stabilitas</h6>
                        <input type="hidden" value="{{$kajians->st_a}}" disabled id="sta">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" disabled id="staya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" disabled id="statidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" disabled id="stana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanst">b. Jika ya, perlu dilakukan uji stabilitas</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="st_b[]" disabled id="stabil" value="Dipercepat"
                                {{ in_array("Dipercepat", $st_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="stabilt">Dipercepat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="st_b[]" disabled id="stabil1" value="Jangka Panjang"
                                {{ in_array("Jangka Panjang", $st_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="stabilt1">Jangka Panjang</label>
                            </div>
                            <div class="form-check font-italic">
                                <input class="form-check-input" type="checkbox" name="st_b[]" disabled id="stabil2" value="Stress"
                                {{ in_array("Stress", $st_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="stabilt2">Stress test</label>
                            </div>
                            <div class="form-check font-italic">
                                <input class="form-check-input" type="checkbox" name="st_b[]" disabled id="stabil3" value="Stability"
                                {{ in_array("Stability", $st_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="stabilt3">In Use Stability</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" disabled id="st_ket" rows="3" name="st_ket">{{$kajians->st_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- PENGUJIAN --}}
                <tr>
                    <td><center> 4</center></td>
                    <td><center> Pengujian</center></td>
                    <td>
                        <h6>a. Memerlukan pengujian</h6>
                        <input type="hidden" value="{{$kajians->pj_a}}" disabled id="pja">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pj_a" disabled id="pjya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pj_a" disabled id="pjtidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pj_a" disabled id="pjna" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanpj">b. Jika ya, sebutkan pengujian yang diperlukan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input type="hidden" value="{{$kajians->pj_b}}" id="pjb">
                                <input class="form-check-input" type="radio" name="pj_b" id="dokp" value="dok1" disabled>
                                <textarea name="pj_else" id="pjt" class="form-control" disabled>{{$kajians->pj_else}}</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- MASA EDAR --}}
                <tr>
                    <td><center> 5</center></td>
                    <td><center> Masa Edar</center></td>
                    <td>
                        <h6>a. Mempengaruhi masa edar / daluwarsa</h6>
                        <input type="hidden" value="{{$kajians->me_a}}" disabled id="mea">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" disabled id="meaya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" disabled id="meatidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" disabled id="meana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" disabled id="me_ket" rows="3" name="me_ket">{{$kajians->me_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- VALIDASI / KUALIFIKASI --}}
                <tr>
                    <td><center> 6</center></td>
                    <td><center> Validasi / Kualifikasi</center></td>
                    <td>
                        <h6>a. Mempengaruhi status validasi / kualifikasi</h6>
                        <input type="hidden" value="{{$kajians->val_a}}" disabled id="vala">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" disabled id="valaya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" disabled id="valatidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" disabled id="valana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanval">b. Jika ya, jenis validasi / kualifikasi</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda" value="pengolahan"
                                {{ in_array("pengolahan", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat">Validasi Pengolahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda1" value="pembersihan"
                                {{ in_array("pembersihan", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat1">Validasi Pembersihan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda2" value="instalasi"
                                {{ in_array("instalasi", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat2">Kualifikasi Instalasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda3" value="kinerja"
                                {{ in_array("kinerja", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat3">Kualifikasi Kinerja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda4" value="pengemasan"
                                {{ in_array("pengemasan", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat4">Validasi Pengemasan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda5" value="analisa"
                                {{ in_array("analisa", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat5">Validasi Metode Analisa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" disabled id="valda6" value="operasional"
                                {{ in_array("operasional", $val_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="valdat6">Kualifikasi Operasional</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" disabled id="val_ket" rows="3" name="val_ket">{{$kajians->val_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- TRIAL --}}
                <tr>
                    <td><center> 7</center></td>
                    <td><center> Trial</center></td>
                    <td>
                        <h6>a. Perlu dilakukan trial</h6>
                        <input type="hidden" value="{{$kajians->tr_a}}" disabled id="tra">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" disabled id="traya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" disabled id="tratidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" disabled id="trana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporantrial">b. Jika ya, dilakukan trial skala</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tr_b[]" disabled id="tri" value="lab"
                                {{ in_array("lab", $tr_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="trit">Laboratorium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tr_b" disabled id="tri1" value="pilot"
                                {{ in_array("pilot", $tr_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="trit1">Pilot</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tr_b" disabled id="tri2" value="komersial"
                                {{ in_array("komersial", $tr_bb) ? "checked" : "" }}>
                                <label class="form-check-label" id="trit2">Komersial</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" disabled id="tr_ket" rows="3" name="tr_ket">{{$kajians->tr_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- PRODUKSI --}}
                <tr>
                    <td><center> 8</center></td>
                    <td><center> Produksi</center></td>
                    <td>
                        <h6>a. Perlu pemeriksaan tambahan</h6>
                        <input type="hidden" value="{{$kajians->pr_a}}" disabled id="pra">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" disabled id="praya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" disabled id="pratidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" disabled id="prana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanpro">b. Jika ya, sebutkan pemeriksaan tambahan yang diperlukan</h6>
                        <input type="hidden" value="{{$kajians->pr_dok}}" id="prdok">
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pr_dok" id="pro" disabled value="dok1">
                                <textarea name="pr_else" id="prot" class="form-control" disabled>{{$kajians->pr_else}}</textarea>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="pr_ket" rows="3" name="pr_ket" disabled>{{$kajians->pr_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- DOKUMEN --}}
                <tr>
                    <td><center> 9</center></td>
                    <td><center> Dokumen</center></td>
                    <td>
                        <h6>a. Perlu pembuatan / perubahan dokumen</h6>
                        <input type="hidden" value="{{$kajians->dok_a}}" id="doka">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" disabled id="dokaya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" disabled id="dokatidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" disabled id="dokana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporandok">b. Jika ya, sebutkan dokumen yang dibuat / diubah</h6>
                        <input type="hidden" value="{{$kajians->dok_b}}" id="dokb">
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dok_b" disabled id="dokb1" value="dok1">
                                <textarea name="dok_else" id="dokt" class="form-control" disabled>{{$kajians->dok_else}}</textarea>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="dok_ket" rows="3" name="dok_ket" disabled>{{$kajians->dok_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- DESAIN KEMASAN --}}
                <tr>
                    <td><center> 10</center></td>
                    <td><center> Desain Kemasan</center></td>
                    <td>
                        <h6>a. Memerlukan Artwork Desain</h6>
                        <input type="hidden" value="{{$kajians->dk_a}}" id="dka">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dk_a" disabled id="dkya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dk_a" disabled id="dktidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dk_a" disabled id="dkna" value="na">
                            <label class="form-check-label">NA</label>
                        </div> 
                    </td>
                    <td>
                        <textarea name="dk_ket" id="dk_ket" class="form-control" disabled>{{$kajians->dk_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- SISTEM ERP --}}
                <tr>
                    <td><center> 11</center></td>
                    <td><center> Sistem ERP</center></td>
                    <td>
                        <h6>a. Mempengaruhi sistem ERP</h6>
                        <input type="hidden" value="{{$kajians->si_a}}" id="sia">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" disabled id="siaya" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" disabled id="siatidak" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" disabled id="siana" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="si_ket" rows="3" name="si_ket" disabled>{{$kajians->si_ket}}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>C. Kajian Tambahan Terhadap Dampak Atas Usulan Perubahan *(jika diperlukan)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" id="kj_tambahan" rows="3" name="kj_tambahan" disabled>{{$kajians->kj_tambahan}}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <tr>
                <th>D. Penilaian Risiko Mutu</th>
            </tr>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" width="1%"><center>Score</center></th>
                    <th width="4%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    Severity
                                </div>
                                <div class="col-md-12">
                                    (Dampak/Keparahan)
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%"><center>Score</center></th>
                    <th width="5%">
                        <center>
                            <div class="row">
                                <div class="col-md-12">
                                    Detectability
                                </div>
                                <div class="col-md-12">
                                    (Kemungkinan Deteksi)
                                </div>
                            </div>
                        </center>
                    </th>
                    <th scope="col" width="1%"><center>Score</center></th>
                    <th width="5%">
                        <center>
                            <div class="col-md-12">
                                Occurence
                            </div>
                            <div class="col-md-12">
                                (Kemungkinan Terjadi)
                            </div>
                        </center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <center>
                            <div class="form-check form-check-inline">
                                <input type="hidden" value="{{$kajians->severity1}}" id="svr">
                                <input type="hidden" value="{{$kajians->detec1}}" id="dtc">
                                <input type="hidden" value="{{$kajians->occur1}}" id="occ">
                                <input class="form-check-input" type="radio" name="severity" disabled id="severity1" value="1" onclick="displayResult(this.value)" required>
                                <label class="form-check-label">1</label>
                            </div>
                        </center>
                    </td>
                    <td align="justify">
                        Ketidakpatuhan GMP tidak ada; tidak berdampak terhadap pasien, hasil (yield)
                        atau kapabilitas produksi
                    </td>
                    <td>
                        <center>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="detec" disabled id="detec1" value="1" onclick="displayResult1(this.value)" onchange="kali();" required>
                                <label class="form-check-label">1</label>
                            </div>
                        </center>
                    </td>
                    <td align="justify">
                        Sistem kontrol yang ada memiliki probabilitas tinggi untuk mendeteksi
                        cacat atau pengaruhnya
                    </td>
                    <td>
                        <center>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occur" value="2" disabled id="occur1" onclick="displayResult2(this.value)" onchange="kali();" required>
                                <label class="form-check-label">2</label>
                            </div>
                        </center>
                    </td>
                    <td align="justify">
                        Tidak mungkin terjadi, belum pernah terjadi
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="severity" disabled id="severity2" value="3" onclick="displayResult(this.value)" required>
                                <label class="form-check-label">3</label>
                            </div>
                        </center>
                    </td>
                    <td align="justify">
                        Ketidakpatuhan GMP minor; mungkin berdampak terhadap pasien,
                        cukup berdampak terhadap hasil (yield) atau
                        kapabilitas produksi
                    </td>
                    <td>
                        <center>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="detec" disabled id="detec2" value="2" onclick="displayResult1(this.value)" onchange="kali();" required>
                                <label class="form-check-label">2</label>
                            </div>
                        </center>
                    </td>
                    <td align="justify">
                        Sistem kontrol yang ada dapat mendeteksi cacat atau pengaruhnya
                    </td>
                    <td>
                        <center>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="occur" disabled id="occur2" value="4" onclick="displayResult2(this.value)" onchange="kali();" required>
                                <label class="form-check-label">4</label>
                            </div>
                        </center>
                    </td>
                    <td align="justify">
                        Mungkin terjadi, terjadi beberapa kali dalam setahun
                    </td>
                </tr>
                <tr>
                    <tr>
                        <td>
                            <center>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="severity" disabled id="severity3" value="5" onclick="displayResult(this.value)" required>
                                    <label class="form-check-label">5</label>
                                </div>
                            </center>
                        </td>
                        <td align="justify">
                            Ketidakpatuhan GMP major; sangat mungkin berdampak terhadap pasien,
                            berdampak tinggi terhadap hasil (yield) atau
                            kapabilitas produksi
                        </td>
                        <td>
                            <center>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="detec" disabled id="detec3" value="3" onclick="displayResult1(this.value)" onchange="kali();" required>
                                    <label class="form-check-label">3</label>
                                </div>
                            </center>
                        </td>
                        <td align="justify">
                            Sistem kontrol yang ada memiliki probabilitas rendah untuk
                            mendeteksi cacat atau pengaruhnya
                        </td>
                        <td>
                            <center>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="occur" disabled id="occur3" value="6" onclick="displayResult2(this.value)" onchange="kali();" required>
                                    <label class="form-check-label">6</label>
                                </div>
                            </center>
                        </td>
                        <td align="justify">
                            Mungkin sering terjadi, terjadi beberapa kali dalam
                            setiap triwulan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="severity" disabled id="severity4" value="7" onclick="displayResult(this.value)" onchange="kali();" required>
                                    <label class="form-check-label">7</label>
                                </div>
                            </center>
                        </td>
                        <td align="justify">
                            Ketidakpatuhan GMP serius; berdampak serius / kematian
                            terhadap pasien, hasil (yield), ataupun kapabilitas produksi
                        </td>
                        <td>
                            <center>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="detec" disabled id="detec4" value="5" onclick="displayResult1(this.value)" onchange="kali();" required>
                                    <label class="form-check-label">5</label>
                                </div>
                            </center>
                        </td>
                        <td align="justify">
                            Tidak ada sistem kontrol yang dapat mendeteksi cacat
                        </td>
                        <td>
                            <center>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="occur" disabled id="occur4" value="8" onclick="displayResult2(this.value)" onchange="kali();" required>
                                    <label class="form-check-label">8</label>
                                </div>
                            </center>
                        </td>
                        <td align="justify">
                            Mungkin sangat sering terjadi, terjadi setiap bulan
                        </td>
                    </tr>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="1%"><center>Severity (S)</center></th>
                        <th width="1%"><center>Detectability (D)</center></th>
                        <th width="1%"><center>Occurence (O)</center></th>
                        <th width="1%"><center>D x O</center></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="getsev" value="{{$kajians->getsev}}" class="form-control" disabled></td>
                        <td><input type="text" name="getdet" value="{{$kajians->getdet}}" class="form-control" disabled></td>
                        <td><input type="text" name="getocc" value="{{$kajians->getocc}}" class="form-control" disabled></td>
                        <td><input type="text" name="result_dxo" value="{{$kajians->result_dxo}}" class="form-control" disabled></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr width="1%">(S)</tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>7</b></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                </tr>
                <tr>
                    <td><b>5</b></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                </tr>
                <tr>
                    <td><b>3</b></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                </tr>
                <tr>
                    <td><b>1</b></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#F0F0F0"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FFC5BE"></td>
                    <td bgcolor="#FF8142"></td>
                    <td bgcolor="#FF8142"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>2</th>
                    <th>4</th>
                    <th>6</th>
                    <th>8</th>
                    <th>10</th>
                    <th>12</th>
                    <th>16</th>
                    <th>18</th>
                    <th>20</th>
                    <th>24</th>
                    <th>30</th>
                    <th>40</th>
                    <th width="8%">(D x O)</th>
                </tr>
            </tfoot>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Keterangan :</th>
                </tr>
            </thead>
            <tbody>
                <tr width="8%">
                    <td bgcolor="#FF8142"></td>
                    <td>Kritikal</td>
                    <td width="80%"></td>
                </tr>
                <tr width="8%">
                    <td bgcolor="#FFC5BE"></td>
                    <td>Major</td>
                    <td width="80%"></td>
                </tr>
                <tr width="8%">
                    <td></td>
                    <td>Minor</td>
                    <td width="80%"></td>
                </tr>
            </tbody>
        </table>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kategori Usulan Perubahan :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="hidden" value="{{$kajians->ch_kategori}}" id="kategori">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="kritikal" id="kritikal" disabled>
                            <label class="form-check-label" for="inlineRadio1">Kritikal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="major" id="major" disabled>
                            <label class="form-check-label" for="inlineRadio2">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="minor" id="minor" disabled>
                            <label class="form-check-label" for="inlineRadio2">Minor</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Status Usulan Perubahan :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="hidden" value="{{$kajians->ch_status}}" id="status">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_status" value="disetujui" id="disetujui" disabled>
                            <label class="form-check-label" for="inlineRadio1">Disetujui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_status" value="ditolak" id="ditolak" disabled>
                            <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold"> Catatan :</td>
                </tr>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="kj_tambahan" disabled>{{$kajians->kj_tambahan}}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Diperiksa oleh</td>
                    <td>Asman Prod. Eval.</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="asman_nama" name="asman_nama" value="{{$kajians->asman_nama}}" disabled>
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="asman_komentar" id="asman_komentar" disabled>{{$kajians->asman_komentar}}</textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{$kajians->asman_date}}" id="asman_date" name="asman_date" disabled>
                    </td>
                </tr>
                <tr>
                    <td>Dikaji oleh</td>
                    <td>QA Specialist</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="aq_nama" name="aq_nama" value="{{$kajians->aq_nama}}" disabled>
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="aq_komentar" id="aq_komentar" disabled>{{$kajians->aq_komentar}}</textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{$kajians->aq_date}}" id="aq_date" name="aq_date" disabled>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Distribusi Persetujuan Perubahan :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="1"
                            {{ in_array("1", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="2"
                            {{ in_array("2", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="3"
                            {{ in_array("3", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="4"
                            {{ in_array("4", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">Pengawasan Mutu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="5"
                            {{ in_array("5", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">Teknik & Pemeliharaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="6"
                            {{ in_array("6", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">SCM</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="7"
                            {{ in_array("7", $ch_diss) ? "checked" : "" }}>
                            <label class="form-check-label">Pengadaan</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" disabled type="checkbox" id="ch_dis" name="ch_dis" value="8"
                            {{ in_array("8", $ch_diss) ? "checked" : "" }}>
                            <input type="text" class="form-control" name="ch_else" placeholder="{{$kajians->ch_else}}" disabled>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/home"><button type="button" class="btn btn-primary mt-4 mx-2">Kembali</button></a>
    </div>
</div>
<script>
    function displayResult(severity1){
        document.getElementById("getsev").value=severity1;
    }
    function displayResult1(detec1){
        document.getElementById("getdet").value=detec1;
    }
    function displayResult2(occur1){
        document.getElementById("getocc").value=occur1;
    }

    function kali(){
        var a = parseInt(document.getElementById("getdet").value);
        var b = parseInt(document.getElementById("getocc").value);
        var result = a * b;
        if(!isNaN(result)){
            document.getElementById('dxo').value=result;
        }
    }

    var value = $('#kategori').val()
    if(value === 'kritikal'){
        $("#kritikal").attr('checked', 'checked');
    }
    else if(value === 'major'){
        $("#major").attr('checked', 'checked');
    }
    else{
        $("#minor").attr('checked', 'checked');
    }
    
    var value = $('#status').val()
    if(value === 'disetujui'){
        $("#disetujui").attr('checked', 'checked');
    }
    else{
        $("#ditolak").attr('checked', 'checked');
    }
    
    //ru_a
    var value = $('#rua').val()
    if(value === 'ya'){
        $("#ruaya").attr('checked', 'checked');

        $('#laporanregulasi').css('display', 'block');
        $('#regul').css('display', 'block');
        $('#regul1').css('display', 'block');
        $('#regul2').css('display', 'block');
        $('#regul3').css('display', 'block');
        $('#regult').css('display', 'block');
        $('#regult1').css('display', 'block');
        $('#regult2').css('display', 'block');
        $('#regult3').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#ruatidak").attr('checked', 'checked');

        $('#laporanregulasi').css('display', 'none');
        $('#regul').css('display', 'none');
        $('#regul1').css('display', 'none');
        $('#regul2').css('display', 'none');
        $('#regul3').css('display', 'none');
        $('#regult').css('display', 'none');
        $('#regult1').css('display', 'none');
        $('#regult2').css('display', 'none');
        $('#regult3').css('display', 'none');
    }
    else{
        $("#ruana").attr('checked', 'checked');

        $('#laporanregulasi').css('display', 'none');
        $('#regul').css('display', 'none');
        $('#regul1').css('display', 'none');
        $('#regul2').css('display', 'none');
        $('#regul3').css('display', 'none');
        $('#regult').css('display', 'none');
        $('#regult1').css('display', 'none');
        $('#regult2').css('display', 'none');
        $('#regult3').css('display', 'none');
    }

    //ri_a
    var value = $('#ria').val()
    if(value === 'ya'){
        $("#riaya").attr('checked', 'checked');

        $('#laporanregistrasi').css('display', 'block');
        $('#ribperlu').css('display', 'block');
        $('#ribijin').css('display', 'block');
        $('#ribtelah').css('display', 'block');
        $('#ribperlu1').css('display', 'block');
        $('#ribijin1').css('display', 'block');
        $('#ribtelah1').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#riatidak").attr('checked', 'checked');

        $('#laporanregistrasi').css('display', 'none');
        $('#ribperlu').css('display', 'none');
        $('#ribijin').css('display', 'none');
        $('#ribtelah').css('display', 'none');
        $('#ribperlu1').css('display', 'none');
        $('#ribijin1').css('display', 'none');
        $('#ribtelah1').css('display', 'none');
    }
    else{
        $("#riana").attr('checked', 'checked');

        $('#laporanregistrasi').css('display', 'none');
        $('#ribperlu').css('display', 'none');
        $('#ribijin').css('display', 'none');
        $('#ribtelah').css('display', 'none');
        $('#ribperlu1').css('display', 'none');
        $('#ribijin1').css('display', 'none');
        $('#ribtelah1').css('display', 'none');
    }

    //ri_b
    var value = $('#rib').val()
    if(value === 'Perlu Persetujuan'){
        $("#ribperlu").attr('checked', 'checked');
    }
    else if(value === 'Setelah Perubahan'){
        $("#ribijin").attr('checked', 'checked');
    }
    else if(value === 'Telah Persetujuan'){
        $("#ribtelah").attr('checked', 'checked');
    }
    else{

    }

    //st_a
    var value = $('#sta').val()
    if(value === 'ya'){
        $("#staya").attr('checked', 'checked');

        $('#laporanst').css('display', 'block');
        $('#stabil').css('display', 'block');
        $('#stabil1').css('display', 'block');
        $('#stabil2').css('display', 'block');
        $('#stabil3').css('display', 'block');
        $('#stabilt').css('display', 'block');
        $('#stabilt1').css('display', 'block');
        $('#stabilt2').css('display', 'block');
        $('#stabilt3').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#statidak").attr('checked', 'checked');

        $('#laporanst').css('display', 'none');
        $('#stabil').css('display', 'none');
        $('#stabil1').css('display', 'none');
        $('#stabil2').css('display', 'none');
        $('#stabil3').css('display', 'none');
        $('#stabilt').css('display', 'none');
        $('#stabilt1').css('display', 'none');
        $('#stabilt2').css('display', 'none');
        $('#stabilt3').css('display', 'none');
    }
    else{
        $("#stana").attr('checked', 'checked');
        $('#laporanst').css('display', 'none');
        $('#stabil').css('display', 'none');
        $('#stabil1').css('display', 'none');
        $('#stabil2').css('display', 'none');
        $('#stabil3').css('display', 'none');
        $('#stabilt').css('display', 'none');
        $('#stabilt1').css('display', 'none');
        $('#stabilt2').css('display', 'none');
        $('#stabilt3').css('display', 'none');
    }

    //pj_a
    var value = $('#pja').val()
    if(value == 'ya'){
        $("#pjya").attr('checked', 'checked');

        $('#laporanpj').css('display', 'block');
        $('#dokp').css('display', 'block');
        $('#pjt').css('display', 'block');
    }
    else if(value == 'tidak'){
        $("#pjtidak").attr('checked', 'checked');

        $('#laporanpj').css('display', 'none');
        $('#dokp').css('display', 'none');
        $('#pjt').css('display', 'none');
    }
    else{
        $("#pjna").attr('checked', 'checked');

        $('#laporanpj').css('display', 'none');
        $('#dokp').css('display', 'none');
        $('#pjt').css('display', 'none');
    }

    //pj_b
    var value = $('#pjb').val()
    if(value == 'dok1'){
        $("#dokp").attr('checked', 'checked');
    }
    else{

    }

    //me_a
    var value = $('#mea').val()
    if(value === 'ya'){
        $("#meaya").attr('checked', 'checked');
    }
    else if(value === 'tidak'){
        $("#meatidak").attr('checked', 'checked');
    }
    else{
        $("#meana").attr('checked', 'checked');
    }

    //val_a
    var value = $('#vala').val()
    if(value === 'ya'){
        $("#valaya").attr('checked', 'checked');

        $('#laporanval').css('display', 'block');
        $('#valda').css('display', 'block');
        $('#valda1').css('display', 'block');
        $('#valda2').css('display', 'block');
        $('#valda3').css('display', 'block');
        $('#valda4').css('display', 'block');
        $('#valda5').css('display', 'block');
        $('#valda6').css('display', 'block');
        $('#valdat').css('display', 'block');
        $('#valdat1').css('display', 'block');
        $('#valdat2').css('display', 'block');
        $('#valdat3').css('display', 'block');
        $('#valdat4').css('display', 'block');
        $('#valdat5').css('display', 'block');
        $('#valdat6').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#valatidak").attr('checked', 'checked');

        $('#laporanval').css('display', 'none');
        $('#valda').css('display', 'none');
        $('#valda1').css('display', 'none');
        $('#valda2').css('display', 'none');
        $('#valda3').css('display', 'none');
        $('#valda4').css('display', 'none');
        $('#valda5').css('display', 'none');
        $('#valda6').css('display', 'none');
        $('#valdat').css('display', 'none');
        $('#valdat1').css('display', 'none');
        $('#valdat2').css('display', 'none');
        $('#valdat3').css('display', 'none');
        $('#valdat4').css('display', 'none');
        $('#valdat5').css('display', 'none');
        $('#valdat6').css('display', 'none');
    }
    else{
        $("#valana").attr('checked', 'checked');

        $('#laporanval').css('display', 'none');
        $('#valda').css('display', 'none');
        $('#valda1').css('display', 'none');
        $('#valda2').css('display', 'none');
        $('#valda3').css('display', 'none');
        $('#valda4').css('display', 'none');
        $('#valda5').css('display', 'none');
        $('#valda6').css('display', 'none');
        $('#valdat').css('display', 'none');
        $('#valdat1').css('display', 'none');
        $('#valdat2').css('display', 'none');
        $('#valdat3').css('display', 'none');
        $('#valdat4').css('display', 'none');
        $('#valdat5').css('display', 'none');
        $('#valdat6').css('display', 'none');
    }

    //val_b
    var value = $('#valb').val()
    if(value === 'pengolahan'){
        $("#valb1").attr('checked', 'checked');
    }
    else if(value === 'pembersihan'){
        $("#valb2").attr('checked', 'checked');
    }
    else if(value === 'instalasi'){
        $("#valb3").attr('checked', 'checked');
    }
    else if(value === 'kinerja'){
        $("#valb4").attr('checked', 'checked');
    }
    else if(value === 'pengemasan'){
        $("#valb5").attr('checked', 'checked');
    }
    else if(value === 'analisa'){
        $("#valb6").attr('checked', 'checked');
    }
    else if(value === 'operasional'){
        $("#valb7").attr('checked', 'checked');
    }
    else{

    }

    //tr_a
    var value = $('#tra').val()
    if(value === 'ya'){
        $("#traya").attr('checked', 'checked');

        $('#laporantrial').css('display', 'block');
        $('#tri').css('display', 'block');
        $('#tri1').css('display', 'block');
        $('#tri2').css('display', 'block');
        $('#trit').css('display', 'block');
        $('#trit1').css('display', 'block');
        $('#trit2').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#tratidak").attr('checked', 'checked');

        $('#laporantrial').css('display', 'none');
        $('#tri').css('display', 'none');
        $('#tri1').css('display', 'none');
        $('#tri2').css('display', 'none');
        $('#trit').css('display', 'none');
        $('#trit1').css('display', 'none');
        $('#trit2').css('display', 'none');
    }
    else{
        $("#trana").attr('checked', 'checked');

        $('#laporantrial').css('display', 'none');
        $('#tri').css('display', 'none');
        $('#tri1').css('display', 'none');
        $('#tri2').css('display', 'none');
        $('#trit').css('display', 'none');
        $('#trit1').css('display', 'none');
        $('#trit2').css('display', 'none');
    }

    //tr_b
    var value = $('#trb').val()
    if(value === 'lab'){
        $("#trb1").attr('checked', 'checked');
    }
    else if(value === 'pilot'){
        $("#trb2").attr('checked', 'checked');
    }
    else if(value === 'komersial'){
        $("#trb3").attr('checked', 'checked');
    }
    else{

    }

    //pr_a
    var value = $('#pra').val()
    if(value === 'ya'){
        $("#praya").attr('checked', 'checked');

        $('#laporanpro').css('display', 'block');
        $('#pro').css('display', 'block');
        $('#prot').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#pratidak").attr('checked', 'checked');

        $('#laporanpro').css('display', 'none');
        $('#pro').css('display', 'none');
        $('#prot').css('display', 'none');
    }
    else{
        $("#prana").attr('checked', 'checked');

        $('#laporanpro').css('display', 'none');
        $('#pro').css('display', 'none');
        $('#prot').css('display', 'none');
    }

    //pr_dok
    var value = $('#prdok').val()
    if(value === 'dok1'){
        $("#pro").attr('checked', 'checked');
    }
    else{

    }

    //dk_a
    var value = $('#dka').val()
    if(value === 'ya'){
        $("#dkya").attr('checked', 'checked');
    }
    else if(value === 'tidak'){
        $("#dktidak").attr('checked', 'checked');
    }
    else{
        $("#dkna").attr('checked', 'checked');
    }

    //dok_a
    var value = $('#doka').val()
    if(value === 'ya'){
        $("#dokaya").attr('checked', 'checked');

        $('#laporandok').css('display', 'block');
        $('#dokb1').css('display', 'block');
        $('#dokt').css('display', 'block');
    }
    else if(value === 'tidak'){
        $("#dokatidak").attr('checked', 'checked');

        $('#laporandok').css('display', 'none');
        $('#dokb1').css('display', 'none');
        $('#dokt').css('display', 'none');
    }
    else{
        $("#dokana").attr('checked', 'checked');

        $('#laporandok').css('display', 'none');
        $('#dokb1').css('display', 'none');
        $('#dokt').css('display', 'none');
    }

    //dok_b
    var value = $('#dokb').val()
    if(value === 'dok1'){
        $("#dokb1").attr('checked', 'checked');
    }
    else if(value === 'dok2'){
        $("#dokb2").attr('checked', 'checked');
    }
    else if(value === 'dok3'){
        $("#dokb3").attr('checked', 'checked');
    }
    else{

    }

    //si_a
    var value = $('#sia').val()
    if(value === 'ya'){
        $("#siaya").attr('checked', 'checked');
    }
    else if(value === 'tidak'){
        $("#siatidak").attr('checked', 'checked');
    }
    else{
        $("#siana").attr('checked', 'checked');
    }

    //severity1
    var value = $('#svr').val()
    if(value === '1'){
        $("#severity1").attr('checked', 'checked');
    }
    else if(value === '3'){
        $("#severity2").attr('checked', 'checked');
    }
    else if(value === '5'){
        $("#severity3").attr('checked', 'checked');
    }
    else if(value === '7'){
        $("#severity4").attr('checked', 'checked');
    }
    else{

    }

    //detect1
    var value = $('#dtc').val()
    if(value === '1'){
        $("#detec1").attr('checked', 'checked');
    }
    else if(value === '2'){
        $("#detec2").attr('checked', 'checked');
    }
    else if(value === '3'){
        $("#detec3").attr('checked', 'checked');
    }
    else if(value === '5'){
        $("#detec4").attr('checked', 'checked');
    }
    else{

    }

    //occur1
    var value = $('#occ').val()
    if(value === '2'){
        $("#occur1").attr('checked', 'checked');
    }
    else if(value === '4'){
        $("#occur2").attr('checked', 'checked');
    }
    else if(value === '6'){
        $("#occur3").attr('checked', 'checked');
    }
    else if(value === '8'){
        $("#occur4").attr('checked', 'checked');
    }
    else{

    }
</script>
@endsection