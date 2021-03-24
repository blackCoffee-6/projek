@extends('layouts.app')

@section('content')
<div class="sidebar">
    <nav class="mt-2">
        <a href="/home"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="/usulan">Master Data</a>
        <a href="#services">Transaksi</a>
        <a href="#clients">Report</a>
    </nav>
</div>

<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Kajian Perubahan
    </h1>
    <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a>
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Spesifikasi Bahan / Produk</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Bahan Baku</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Formula / Proses</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Mesin dan Peralatan</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Metode Analisis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Site Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Bangunan dan Fasilitas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Dokumentasi</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Lingkungan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">PIE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Peraturan Perundangan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, laporan ditujukan ke</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Badan POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Kementrian Kesehatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Balai POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, perubahan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Perlu memperoleh persetujuan BPOM terlebih dahulu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Ijin BPOM dapat disubmit setelah perubahan terjadi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Telah memperoleh persetujuan BPOM</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, perlu dilakukan uji stabilitas</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Dipercepat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Jangka Panjang</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, jenis validasi / kualifikasi</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Validasi Pengolahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Validasi Pembersihan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Kualifikasi Instalasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Kualifikasi Kinerja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Validasi Pengemasan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Validasi Metode Analisa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Kualifikasi Operasional</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, dilakukan trial skala</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Laboratorium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Pilot</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Komersial</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, sebutkan pemeriksaan tambahan yang diperlukan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                        <h6 class="my-2">b. Jika ya, sebutkan dokumen yang dibuat / diubah</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">NA</label>
                        </div>
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket"></textarea>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kjtam"></textarea>
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
                    <th scope="col">Score</th>
                    <th scope="col">Severity (Dampak / Keparahan)</th>
                    <th scope="col">Score</th>
                    <th scope="col">Detectability (Kemungkinan Deteksi)</th>
                    <th scope="col">Score</th>
                    <th scope="col">Occurrence (Kemungkinan Terjadi)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                    </td>
                    <td>
                        Ketidakpatuhan GMP tidak ada; tidak berdampak terhadap pasien, hasil (yield)
                        atau kapabilitas produksi
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                    </td>
                    <td>
                        Sistem kontrol yang ada memiliki probabilitas tinggi untuk mendeteksi
                        cacat atau pengaruhnya
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">2</label>
                        </div>
                    </td>
                    <td>
                        Tidak mungkin terjadi, belum pernah terjadi
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">3</label>
                        </div>
                    </td>
                    <td>
                        Ketidakpatuhan GMP minor; mungkin berdampak terhadap pasien,
                        cukup berdampak terhadap hasil (yield) atau
                        kapabilitas produksi
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">2</label>
                        </div>
                    </td>
                    <td>
                        Sistem kontrol yang ada dapat mendeteksi cacat atau pengaruhnya
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">4</label>
                        </div>
                    </td>
                    <td>
                        Mungkin terjadi, terjadi beberapa kali dalam setahun
                    </td>
                </tr>
                <tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </td>
                        <td>
                            Ketidakpatuhan GMP major; sangat mungkin berdampak terhadap pasien,
                            berdampak tinggi terhadap hasil (yield) atau
                            kapabilitas produksi
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                        </td>
                        <td>
                            Sistem kontrol yang ada memiliki probabilitas rendah untuk
                            mendeteksi cacat atau pengaruhnya
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">6</label>
                            </div>
                        </td>
                        <td>
                            Mungkin sering terjadi, terjadi beberapa kali dalam
                            setiap triwulan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">7</label>
                            </div>
                        </td>
                        <td>
                            Ketidakpatuhan GMP serius; berdampak serius / kematian
                            terhadap pasien, hasil (yield), ataupun kapabilitas produksi
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </td>
                        <td>
                            Tidak ada sistem kontrol yang dapat mendeteksi cacat
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">8</label>
                            </div>
                        </td>
                        <td>
                            Mungkin sangat sering terjadi, terjadi setiap bulan
                        </td>
                    </tr>
                </tr>
            </tbody>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Kritikal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Disetujui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Ditolak</label>
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
                        <input type="text" class="form-control" placeholder="Sertakan Nama">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd"></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Diperiksa oleh</td>
                    <td>Asman Prod. Eval.</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd"></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Dikaji oleh</td>
                    <td>QA Specialist</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="tanggal">
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Pengawasan Mutu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Teknik & Pemeliharaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">SCM</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Pengadaan</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-success my-4">Submit</button>
        <a href="/home"><button type="button" class="btn btn-danger my-2 mx-2">Cancel</button></a>
    </div>
</div>
@endsection