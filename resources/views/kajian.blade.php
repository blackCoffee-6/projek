@extends('layouts.main')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Kajian Perubahan
    </h1>
    <form action="/Store/Kajian/" method="POST">
        @csrf
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
                            <input class="form-check-input" type="checkbox" id="ket_up" value="1" name="bahan">
                            <label class="form-check-label" for="inlineCheckbox1">Spesifikasi Bahan / Produk</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="2" name="baku">
                            <label class="form-check-label" for="inlineCheckbox1">Bahan Baku</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="3" name="proses">
                            <label class="form-check-label" for="inlineCheckbox1">Formula / Proses</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="4" name="mesin">
                            <label class="form-check-label" for="inlineCheckbox1">Mesin dan Peralatan</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="4" name="metode">
                            <label class="form-check-label" for="inlineCheckbox1">Metode Analisis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="5" name="site">
                            <label class="form-check-label" for="inlineCheckbox1">Site Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="6" name="bangunan">
                            <label class="form-check-label" for="inlineCheckbox1">Bangunan dan Fasilitas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="7" name="dokumen">
                            <label class="form-check-label" for="inlineCheckbox1">Dokumentasi</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="8" name="lingkungan">
                            <label class="form-check-label" for="inlineCheckbox1">Lingkungan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="9" name="pie">
                            <label class="form-check-label" for="inlineCheckbox1">PIE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="10" name="peraturan">
                            <label class="form-check-label" for="inlineCheckbox1">Peraturan Perundangan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ket_up" value="11" name="else">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
                    <th scope="col">No.</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Uraian</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Regulasi</td>
                    <td>
                        <h6>a. Perlu pelaporan ke pemerintah</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" id="ru_a" value="ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" id="ru_a" value="tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" id="ru_a" value="na">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, laporan ditujukan ke</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ru_b" id="ru_b" value="badan">
                                <label class="form-check-label">Badan POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ru_b" id="ru_b" value="kementrian">
                                <label class="form-check-label">Kementrian Kesehatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ru_b" id="ru_b" value="balai">
                                <label class="form-check-label">Balai POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ru_b" id="ru_b" value="else">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <label
                            @error('ru_a')
                            class="text-danger"
                            @enderror>@error('ru_a')
                            *Regulasi bagian A harus diisi
                            @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="ru_ket" rows="3" name="ru_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Registrasi</td>
                    <td>
                        <h6>a. Mempengaruhi status ijin edar</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" id="ri_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" id="ri_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" id="ri_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, perubahan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" id="ri_b" value="perlu">
                                <label class="form-check-label">Perlu memperoleh persetujuan BPOM terlebih dahulu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" id="ri_b" value="ijin">
                                <label class="form-check-label">Ijin BPOM dapat disubmit setelah perubahan terjadi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" id="ri_b" value="telah">
                                <label class="form-check-label">Telah memperoleh persetujuan BPOM</label>
                            </div>
                        </div>
                        <label 
                        @error('ri_a')
                        class="text-danger"
                        @enderror>@error('ri_a')
                        *Registrasi bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="ri_ket" rows="3" name="ri_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>3</td>
                    <td>Stabilitas</td>
                    <td>
                        <h6>a. Mempengaruhi stabilitas</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" id="st_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" id="st_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" id="st_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, perlu dilakukan uji stabilitas</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="st_b" id="st_b" value="dipercepat">
                                <label class="form-check-label">Dipercepat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="st_b" id="st_b" value="jangka">
                                <label class="form-check-label">Jangka Panjang</label>
                            </div>
                        </div>
                        <label 
                        @error('st_a')
                        class="text-danger"
                        @enderror>@error('st_a')
                        *Stabilitas bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="st_ket" rows="3" name="st_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>4</td>
                    <td>Masa Edar</td>
                    <td>
                        <h6>a. Mempengaruhi masa edar / daluwarsa</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" id="me_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" id="me_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" id="me_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <label 
                        @error('me_a')
                        class="text-danger"
                        @enderror>@error('me_a')
                        *Masa Edar bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="me_ket" rows="3" name="me_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>5</td>
                    <td>Validasi / Kualifikasi</td>
                    <td>
                        <h6>a. Mempengaruhi status validasi / kualifikasi</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" id="val_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" id="val_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" id="val_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, jenis validasi / kualifikasi</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="pengolahan">
                                <label class="form-check-label">Validasi Pengolahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="pembersihan">
                                <label class="form-check-label">Validasi Pembersihan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="instalasi">
                                <label class="form-check-label">Kualifikasi Instalasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="kinerja">
                                <label class="form-check-label">Kualifikasi Kinerja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="pengemasan">
                                <label class="form-check-label">Validasi Pengemasan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="analisa">
                                <label class="form-check-label">Validasi Metode Analisa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="val_b" id="val_b" value="operasional">
                                <label class="form-check-label">Kualifikasi Operasional</label>
                            </div>
                        </div>
                        <label 
                        @error('val_a')
                        class="text-danger"
                        @enderror>@error('val_a')
                        *Validasi bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="val_ket" rows="3" name="val_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>6</td>
                    <td>Trial</td>
                    <td>
                        <h6>a. Perlu dilakukan trial</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" id="tr_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" id="tr_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" id="tr_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, dilakukan trial skala</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tr_b" id="tr_b" value="lab">
                                <label class="form-check-label">Laboratorium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tr_b" id="tr_b" value="pilot">
                                <label class="form-check-label">Pilot</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tr_b" id="tr_b" value="komersial">
                                <label class="form-check-label">Komersial</label>
                            </div>
                        </div>
                        <label 
                        @error('tr_a')
                        class="text-danger"
                        @enderror>@error('tr_a')
                        *Trial bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="tr_ket" rows="3" name="tr_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>7</td>
                    <td>Produksi</td>
                    <td>
                        <h6>a. Perlu pemeriksaan tambahan</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" id="pr_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" id="pr_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" id="pr_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, sebutkan pemeriksaan tambahan yang diperlukan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pr_dok" id="pr_dok" value="dok1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="pr_dok" id="pr_dok" value="dok2">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pr_dok" id="pr_dok" value="dok3">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <label 
                        @error('pr_a')
                        class="text-danger"
                        @enderror>@error('pr_a')
                        *Produksi bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="pr_ket" rows="3" name="pr_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>8</td>
                    <td>Dokumen</td>
                    <td>
                        <h6>a. Perlu pembuatan / perubahan dokumen</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" id="dok_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" id="dok_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" id="dok_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, sebutkan dokumen yang dibuat / diubah</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dok_b" id="dok_b" value="dok1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="dok_b" id="dok_b" value="dok2">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dok_b" id="dok_b" value="dok3">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <label 
                        @error('dok_a')
                        class="text-danger"
                        @enderror>@error('dok_a')
                        *Dokumen bagian A harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="dok_ket" rows="3" name="dok_ket"></textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>9</td>
                    <td>Sistem ERP</td>
                    <td>
                        <h6>a. Mempengaruhi sistem ERP</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" id="si_a" value="ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" id="si_a" value="tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" id="si_a" value="na">
                            <label class="form-check-label">NA</label>
                        </div>
                        <label 
                        @error('si_a')
                        class="text-danger"
                        @enderror>@error('si_a')
                        *Sistem ERP bagian A harus diisi
                        @enderror
                    </td>
                    <td>
                        <textarea class="form-control" id="si_ket" rows="3" name="si_ket"></textarea>
                    </label>
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
                        <textarea class="form-control" id="kj_tambahan" rows="3" name="kj_tambahan"></textarea>
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
                                <input class="form-check-input" type="radio" name="severity" id="severity1" value="1" onclick="displayResult(this.value)" required>
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
                                <input class="form-check-input" type="radio" name="detec" id="detec1" value="1" onclick="displayResult1(this.value)" onchange="kali();" required>
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
                                <input class="form-check-input" type="radio" name="occur" value="2" id="occur1" onclick="displayResult2(this.value)" onchange="kali();" required>
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
                                <input class="form-check-input" type="radio" name="severity" id="severity1" value="3" onclick="displayResult(this.value)" required>
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
                                <input class="form-check-input" type="radio" name="detec" id="detec1" value="2" onclick="displayResult1(this.value)" onchange="kali();" required>
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
                                <input class="form-check-input" type="radio" name="occur" id="occur1" value="4" onclick="displayResult2(this.value)" onchange="kali();" required>
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
                                    <input class="form-check-input" type="radio" name="severity" id="severity1" value="5" onclick="displayResult(this.value)" required>
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
                                    <input class="form-check-input" type="radio" name="detec" id="detec1" value="3" onclick="displayResult1(this.value)" onchange="kali();" required>
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
                                    <input class="form-check-input" type="radio" name="occur" id="occur1" value="6" onclick="displayResult2(this.value)" onchange="kali();" required>
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
                                    <input class="form-check-input" type="radio" name="severity" id="severity1" value="7" onclick="displayResult(this.value)" onchange="kali();" required>
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
                                    <input class="form-check-input" type="radio" name="detec" id="detec1" value="5" onclick="displayResult1(this.value)" onchange="kali();" required>
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
                                    <input class="form-check-input" type="radio" name="occur" id="occur1" value="8" onclick="displayResult2(this.value)" onchange="kali();" required>
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
                        <td><input type="text" name="getsev" id="getsev" class="form-control" readonly></td>
                        <td><input type="text" name="getdet" id="getdet" class="form-control" readonly></td>
                        <td><input type="text" name="getocc" id="getocc" class="form-control" readonly></td>
                        <td><input type="text" name="dxo" id="dxo" class="form-control" readonly></td>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="kritikal">
                            <label class="form-check-label" for="inlineRadio1">Kritikal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="major">
                            <label class="form-check-label" for="inlineRadio2">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="minor">
                            <label class="form-check-label" for="inlineRadio2">Minor</label>
                        </div>
                        <label 
                        @error('ch_kategori')
                        class="text-danger"
                        @enderror>@error('ch_kategori')
                        *Kategori Usulan Perubahan harus diisi
                        @enderror
                        </label>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_status" value="disetujui">
                            <label class="form-check-label" for="inlineRadio1">Disetujui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_status" value="ditolak">
                            <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                        </div>
                        <label 
                        @error('ch_status')
                        class="text-danger"
                        @enderror>@error('ch_status')
                        *Status Usulan Perubahan harus diisi
                        @enderror
                        </label>
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
                    <th scope="col">Tanda Tangan</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dikaji oleh</td>
                    <td>QA Specialist</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="qa_nama" name="qa_nama">
                        <label 
                        @error('qa_nama')
                        class="text-danger"
                        @enderror>@error('qa_nama')
                        *Nama QA Specialist harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="qa_date" name="qa_date">
                    </td>
                </tr>
                <tr>
                    <td>Diperiksa oleh</td>
                    <td>Asman Prod. Eval.</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="asman_nama" name="asman_nama">
                        <label
                        @error('asman_nama')
                        class="text-danger"
                        @enderror>@error('asman_nama')
                        *Nama Asman Prod. Eval. harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="asman_date" name="asman_date">
                    </td>
                </tr>
                <tr>
                    <td>Dikaji oleh</td>
                    <td>QA Specialist</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="aq_nama" name="aq_nama">
                        <label 
                        @error('aq_nama')
                        class="text-danger"
                        @enderror>@error('aq_nama')
                        *Nama QA Specialist harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="aq_date" name="aq_date">
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
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="1">
                            <label class="form-check-label">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="2">
                            <label class="form-check-label">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="3">
                            <label class="form-check-label">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="4">
                            <label class="form-check-label">Pengawasan Mutu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="5">
                            <label class="form-check-label">Teknik & Pemeliharaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="6">
                            <label class="form-check-label">SCM</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="7">
                            <label class="form-check-label" for="inlineCheckbox1">Pengadaan</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" id="ch_dis" name="ch_dis" value="8">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </td>
                    <label
                    @error('ch_dis')
                    class="text-danger"
                    @enderror>@error('ch_dis')
                    *Distribusi Persetujuan Perubahan harus diisi
                    @enderror
                    </label>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success my-4">Submit</button>
    </form>
        <a href="/home"><button type="button" class="btn btn-danger my-2 mx-2">Cancel</button></a>
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
</script>
@endsection