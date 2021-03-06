@extends('layouts.main')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Kajian Perubahan
    </h1>
    <form action="/Store/Kajian/{{$fup->id}}" method="POST" enctype="multipart/form-data">
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
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="1" id="bahan" {{ (is_array(old('ket_up')) && in_array(1, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Spesifikasi Bahan / Produk</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="2" id="baku" {{ (is_array(old('ket_up')) && in_array(2, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Bahan Baku</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="3" id="proses" {{ (is_array(old('ket_up')) && in_array(3, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Formula / Proses</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="4" id="mesin" {{ (is_array(old('ket_up')) && in_array(4, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Mesin dan Peralatan</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="5" id="metode" {{ (is_array(old('ket_up')) && in_array(5, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Metode Analisis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="6" id="site" {{ (is_array(old('ket_up')) && in_array(6, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Site Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="7" id="bangunan" {{ (is_array(old('ket_up')) && in_array(7, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Bangunan dan Fasilitas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="8" id="dokumen" {{ (is_array(old('ket_up')) && in_array(8, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Dokumentasi</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="9" id="lingkungan" {{ (is_array(old('ket_up')) && in_array(9, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Lingkungan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="10" id="pie" {{ (is_array(old('ket_up')) && in_array(10, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">PIE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ket_up[]" value="11" id="peraturan" {{ (is_array(old('ket_up')) && in_array(11, old('ket_up'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Peraturan Perundangan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input boxcheck" type="checkbox" name="ket_up[]" value="12" id="else">
                            <input type="text" class="form-control boxtext" name="ket_else" {{ (is_array(old('ket_up')) && in_array(12, old('ket_up'))) ? ' checked' : '' }}>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
            <label
                @error('ket_up')
                class="text-danger"
                @enderror>@error('ket_up')
                *Kategori Usulan Perubahan harus diisi
                @enderror
            </label>
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
                    {{-- code id javascript pada regulasi briya, briyat, briyan  --}}
                    <td>
                        <h6>a. Perlu pelaporan ke pemerintah</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" id="briya" value="ya" {{ (old('ru_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" id="briyat" value="tidak" {{ (old('ru_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ru_a" id="briyan" value="na" {{ (old('ru_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanregulasi">b. Jika ya, laporan ditujukan ke</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" id="regul" value="bpom" {{ (is_array(old('ru_b')) && in_array("bpom", old('ru_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="regult">Badan POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" id="regul1" value="kemkes" {{ (is_array(old('ru_b')) && in_array("kemkes", old('ru_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="regult1">Kementrian Kesehatan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ru_b[]" id="regul2" value="bapom" {{ (is_array(old('ru_b')) && in_array("bapom", old('ru_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="regult2">Balai POM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input boxcheck2" type="checkbox" name="ru_b[]" id="regul3" value="regulasielse" {{ (is_array(old('ru_b')) && in_array("regulasielse", old('ru_b'))) ? ' checked' : '' }}>
                                <input type="text" class="form-control boxtext2" id="regult3" name="ru_else">
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
                        <textarea class="form-control" id="ru_ket" rows="3" name="ru_ket">{{ old('ru_ket') }}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- REGISTRASI --}}
                <tr>
                    {{-- code id javascript pada regulasi brgya, brgyat, brgyan  --}}
                    <td><center> 2</center></td>
                    <td><center> Registrasi</center></td>
                    <td>
                        <h6>a. Mempengaruhi status ijin edar</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" id="brgya" value="ya" {{ (old('ri_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" id="brgyat" value="tidak" {{ (old('ri_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ri_a" id="brgyan" value="na" {{ (old('ri_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanregistrasi">b. Jika ya, perubahan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" id="regis" value="Perlu Persetujuan" {{ (old('ri_b') == 'Perlu Persetujuan') ? 'checked' : ''}}>
                                <label class="form-check-label" id="regist">Perlu memperoleh persetujuan BPOM terlebih dahulu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" id="regis1" value="Setelah Perubahan" {{ (old('ri_b') == 'Setelah Perubahan') ? 'checked' : ''}}>
                                <label class="form-check-label" id="regist1">Ijin BPOM dapat disubmit setelah perubahan terjadi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ri_b" id="regis2" value="Telah Persetujuan" {{ (old('ri_b') == 'Telah Persetujuan') ? 'checked' : ''}}>
                                <label class="form-check-label" id="regist2">Telah memperoleh persetujuan BPOM</label>
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
                        <textarea class="form-control" id="ri_ket" rows="3" name="ri_ket">{{old('ri_ket')}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- STABILITAS --}}
                <tr>
                    {{-- code id javascript pada regulasi stya, styat, styan  --}}
                    <td><center> 3</center></td>
                    <td><center> Stabilitas</center></td>
                    <td>
                        <h6>a. Mempengaruhi stabilitas</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" id="stya" value="ya" {{ (old('st_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" id="styat" value="tidak" {{ (old('st_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="st_a" id="styan" value="na" {{ (old('st_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanst">b. Jika ya, perlu dilakukan uji stabilitas</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="st_b[]" id="stabil" value="Dipercepat" {{ (is_array(old('st_b')) && in_array("Dipercepat", old('st_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="stabilt">Dipercepat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="st_b[]" id="stabil1" value="Jangka Panjang" {{ (is_array(old('st_b')) && in_array("Jangka Panjang", old('st_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="stabilt1">Jangka Panjang</label>
                            </div>
                            <div class="form-check font-italic" >
                                <input class="form-check-input" type="checkbox" name="st_b[]" id="stabil2" value="Stress" {{ (is_array(old('st_b')) && in_array("Stress", old('st_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="stabilt2">Stress test</label>
                            </div>
                            <div class="form-check font-italic">
                                <input class="form-check-input" type="checkbox" name="st_b[]" id="stabil3" value="Stability" {{ (is_array(old('st_b')) && in_array("Stability", old('st_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="stabilt3">In Use Stability</label>
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
                        <textarea class="form-control" id="st_ket" rows="3" name="st_ket">{{ old('st_ket') }}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- PENGUJIAN --}}
                <tr>
                    {{-- code id javascript pada regulasi pjya, pjyat, pjyan  --}}
                    <td><center> 4</center></td>
                    <td><center> Pengujian</center></td>
                    <td>
                        <h6>a. Memerlukan pengujian</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pj_a" id="pjya" value="ya" {{ (old('pj_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pj_a" id="pjyat" value="tidak" {{ (old('pj_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pj_a" id="pjyan" value="na" {{ (old('pj_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanpj">b. Jika ya, sebutkan pengujian yang diperlukan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pj_b" id="pj" value="dok1" checked>
                                <textarea name="pj_else" id="pjt" class="form-control"></textarea>
                            </div>
                        </div>
                        <label 
                        @error('pj_a')
                        class="text-danger"
                        @enderror>@error('pj_a')
                        *Pengujian harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="pj_ket" rows="3" name="pj_ket">{{ old('pj_ket') }}</textarea>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" id="me_a" value="ya" {{ (old('me_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" id="me_a" value="tidak" {{ (old('me_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="me_a" id="me_a" value="na" {{ (old('me_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <label 
                        @error('me_a')
                        class="text-danger"
                        @enderror>@error('me_a')
                        *Masa Edar harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" id="me_ket" rows="3" name="me_ket">{{ old('me_ket') }}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- VALIDASI / KUALIFIKASI --}}
                <tr>
                    {{-- code id javascript pada regulasi valya, valyat, valyan  --}}
                    <td><center> 6</center></td>
                    <td><center> Validasi / Kualifikasi</center></td>
                    <td>
                        <h6>a. Mempengaruhi status validasi / kualifikasi</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" id="valya" value="ya" {{ (old('val_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" id="valyat" value="tidak" {{ (old('val_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="val_a" id="valyan" value="na" {{ (old('val_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanval">b. Jika ya, jenis validasi / kualifikasi</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda" value="pengolahan" {{ (is_array(old('val_b')) && in_array("pengolahan", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat">Validasi Pengolahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda1" value="pembersihan" {{ (is_array(old('val_b')) && in_array("pembersihan", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat1">Validasi Pembersihan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda2" value="instalasi" {{ (is_array(old('val_b')) && in_array("instalasi", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat2">Kualifikasi Instalasi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda3" value="kinerja" {{ (is_array(old('val_b')) && in_array("kinerja", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat3">Kualifikasi Kinerja</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda4" value="pengemasan" {{ (is_array(old('val_b')) && in_array("pengemasan", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat4">Validasi Pengemasan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda5" value="analisa" {{ (is_array(old('val_b')) && in_array("analisa", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat5">Validasi Metode Analisa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="val_b[]" id="valda6" value="operasional" {{ (is_array(old('val_b')) && in_array("operasional", old('val_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="valdat6">Kualifikasi Operasional</label>
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
                        <textarea class="form-control" id="val_ket" rows="3" name="val_ket">{{ old('val_ket') }}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- TRIAL --}}
                <tr>
                    {{-- code id javascript pada regulasi triya, triyat, triyan  --}}
                    <td><center> 7</center></td>
                    <td><center> Trial</center></td>
                    <td>
                        <h6>a. Perlu dilakukan trial</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" id="triya" value="ya" {{ (old('tr_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" id="triyat" value="tidak" {{ (old('tr_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tr_a" id="triyan" value="na" {{ (old('tr_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporantrial">b. Jika ya, dilakukan trial skala</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tr_b[]" id="tri" value="lab" {{ (is_array(old('tr_b')) && in_array("lab", old('tr_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="trit">Laboratorium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tr_b[]" id="tri1" value="pilot" {{ (is_array(old('tr_b')) && in_array("pilot", old('tr_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="trit1">Pilot</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tr_b[]" id="tri2" value="komersial" {{ (is_array(old('tr_b')) && in_array("komersial", old('tr_b'))) ? ' checked' : '' }}>
                                <label class="form-check-label" id="trit2">Komersial</label>
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
                        <textarea class="form-control" id="tr_ket" rows="3" name="tr_ket">{{old('tr_ket')}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- PRODUKSI --}}
                <tr>
                    <td><center> 8</center></td>
                    <td><center> Produksi</center></td>
                    <td>
                         {{-- code id javascript pada regulasi proya, proyat, proyan  --}}
                        <h6>a. Perlu pemeriksaan tambahan</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" id="proya" value="ya" {{ (old('pr_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" id="proyat" value="tidak" {{ (old('pr_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pr_a" id="proyan" value="na" {{ (old('pr_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporanpro">b. Jika ya, sebutkan pemeriksaan tambahan yang diperlukan</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pr_dok" id="pro" value="dok1" checked>
                                <textarea name="pr_else" id="prot" class="form-control"></textarea>
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
                        <textarea class="form-control" id="pr_ket" rows="3" name="pr_ket">{{old('pr_ket')}}</textarea>
                    </td>
                </tr>
            </tbody>
            <tbody>
                {{-- DOKUMEN --}}
                <tr>
                    <td><center> 9</center></td>
                    <td><center> Dokumen</center></td>
                    <td>
                        {{-- code id javascript dokumen dokya, dokyat, dokyan --}}
                        <h6>a. Perlu pembuatan / perubahan dokumen</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" id="dokya" value="ya" {{ (old('dok_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" id="dokyat" value="tidak" {{ (old('dok_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dok_a" id="dokyan" value="na" {{ (old('dok_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <h6 class="my-2" id="laporandok">b. Jika ya, sebutkan dokumen yang dibuat / diubah</h6>
                        <div class="d-inline">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dok_b" id="dok" value="dok1" checked>
                                <textarea name="dok_else" id="dokt" class="form-control"></textarea>
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
                        <textarea class="form-control" id="dok_ket" rows="3" name="dok_ket">{{old('dok_ket')}}</textarea>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dk_a" id="dk_a" value="ya" {{ (old('dk_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dk_a" id="dk_a" value="tidak" {{ (old('dk_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="dk_a" id="dk_a" value="na" {{ (old('dk_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <label 
                        @error('dk_a')
                        class="text-danger"
                        @enderror>@error('dk_a')
                        *Desain Kemasan harus diisi
                        @enderror
                    </td>
                    <td>
                        <textarea class="form-control" id="dk_ket" rows="3" name="dk_ket">{{old('dk_ket')}}</textarea>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" id="si_a" value="ya" {{ (old('si_a') == 'ya') ? 'checked' : ''}}>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" id="si_a" value="tidak" {{ (old('si_a') == 'tidak') ? 'checked' : ''}}>
                            <label class="form-check-label">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="si_a" id="si_a" value="na" {{ (old('si_a') == 'na') ? 'checked' : ''}}>
                            <label class="form-check-label">NA</label>
                        </div>
                        <label 
                        @error('si_a')
                        class="text-danger"
                        @enderror>@error('si_a')
                        *Sistem ERP harus diisi
                        @enderror
                    </td>
                    <td>
                        <textarea class="form-control" id="si_ket" rows="3" name="si_ket">{{old('si_ket')}}</textarea>
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
                        <textarea class="form-control" rows="3" name="kj_tambahan">{{old('kj_tambahan')}}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Masukan File / Dokumen (*Jika Diperlukan)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input name="kj_files" type="file" class="form-control-file @error('kj_files') is-invalid @enderror"> <p class="text-danger mt-1" style="font-size: 14px">Max: 2MB | PDF / JPG/ JPEG / PNG</p>
                        @error('kj_files')
                        <span class="invalid-feedback" role="alert">
                            <strong>*File tidak sesuai dengan Ketentuan!</strong>
                        </span>
                        @enderror
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
                                <input class="form-check-input" type="radio" name="severity1" id="severity1" value="1" onclick="displayResult(this.value)" {{ (old('severity1') == '1') ? 'checked' : ''}}>
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
                                <input class="form-check-input" type="radio" name="detec1" id="detec1" value="1" onclick="displayResult1(this.value)" onchange="kali();" {{ (old('detec1') == '1') ? 'checked' : ''}}>
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
                                <input class="form-check-input" type="radio" name="occur1" value="2" id="occur1" onclick="displayResult2(this.value)" onchange="kali();" {{ (old('occur1') == '1') ? 'checked' : ''}}>
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
                                <input class="form-check-input" type="radio" name="severity1" id="severity1" value="3" onclick="displayResult(this.value)" {{ (old('severity1') == '3') ? 'checked' : ''}}>
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
                                <input class="form-check-input" type="radio" name="detec1" id="detec1" value="2" onclick="displayResult1(this.value)" onchange="kali();" {{ (old('detec1') == '2') ? 'checked' : ''}}>
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
                                <input class="form-check-input" type="radio" name="occur1" id="occur1" value="4" onclick="displayResult2(this.value)" onchange="kali();" {{ (old('occur1') == '4') ? 'checked' : ''}}>
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
                                    <input class="form-check-input" type="radio" name="severity1" id="severity1" value="5" onclick="displayResult(this.value)" {{ (old('severity1') == '5') ? 'checked' : ''}}>
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
                                    <input class="form-check-input" type="radio" name="detec1" id="detec1" value="3" onclick="displayResult1(this.value)" onchange="kali();" {{ (old('detec1') == '3') ? 'checked' : ''}}>
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
                                    <input class="form-check-input" type="radio" name="occur1" id="occur1" value="6" onclick="displayResult2(this.value)" onchange="kali();" {{ (old('occur1') == '6') ? 'checked' : ''}}>
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
                                    <input class="form-check-input" type="radio" name="severity1" id="severity1" value="7" onclick="displayResult(this.value)" onchange="kali();" {{ (old('severity1') == '7') ? 'checked' : ''}}>
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
                                    <input class="form-check-input" type="radio" name="detec1" id="detec1" value="5" onclick="displayResult1(this.value)" onchange="kali();" {{ (old('detec1') == '5') ? 'checked' : ''}}>
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
                                    <input class="form-check-input" type="radio" name="occur1" id="occur1" value="8" onclick="displayResult2(this.value)" onchange="kali();" {{ (old('occur1') == '8') ? 'checked' : ''}}>
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
                        <td><input type="text" name="getsev" id="getsev" class="form-control" readonly value="{{old('getsev')}}" ></td>
                        <td><input type="text" name="getdet" id="getdet" class="form-control" readonly value="{{old('getdet')}}"></td>
                        <td><input type="text" name="getocc" id="getocc" class="form-control" readonly value="{{old('getocc')}}"></td>
                        <td><input type="text" name="result_dxo" id="dxo" class="form-control" readonly value="{{old('result_dxo')}}"></td>
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
                            <input class="form-check-input" type="radio" name="ch_kategori" value="kritikal" {{ (old('ch_kategori') == 'kritikal') ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio1">Kritikal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="major" {{ (old('ch_kategori') == 'major') ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio2">Major</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_kategori" value="minor" {{ (old('ch_kategori') == 'minor') ? 'checked' : ''}}>
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
                            <input class="form-check-input" type="radio" name="ch_status" value="disetujui" {{ (old('ch_status') == 'disetujui') ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio1">Disetujui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ch_status" value="ditolak" {{ (old('ch_status') == 'ditolak') ? 'checked' : ''}}>
                            <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold"> Catatan :</td>
                </tr>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="kj_tambahan">{{old('catatan')}}</textarea>
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
                    <td>Disusun Oleh</td>
                    <td>Asman Prod. Eval.</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="asman_nama" name="asman_nama" value="{{ old('asman_nama') }}">
                        <label
                        @error('asman_nama')
                        class="text-danger"
                        @enderror>@error('asman_nama')
                        *Nama Asman Prod. Eval. harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="asman_komentar" id="asman_komentar">{{old('asman_komentar')}}</textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="asman_date" name="asman_date">
                    </td>
                </tr>
                <tr>
                    <td>Disetujui Oleh</td>
                    <td>Manajer QA</td>
                    <td>
                        <input type="text" class="form-control" placeholder="Sertakan Nama" id="aq_nama" name="aq_nama" value="{{ old('aq_nama') }}">
                        <label 
                        @error('aq_nama')
                        class="text-danger"
                        @enderror>@error('aq_nama')
                        *Nama QA Specialist harus diisi
                        @enderror
                        </label>
                    </td>
                    <td>
                        <textarea class="form-control" rows="3" name="aq_komentar" id="aq_komentar">{{old('aq_komentar')}}</textarea>
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
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="1" {{ (is_array(old('ch_dis')) && in_array(1, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="2" {{ (is_array(old('ch_dis')) && in_array(2, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="3" {{ (is_array(old('ch_dis')) && in_array(3, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="4" {{ (is_array(old('ch_dis')) && in_array(4, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Pengawasan Mutu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="5" {{ (is_array(old('ch_dis')) && in_array(5, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Teknik & Pemeliharaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="6" {{ (is_array(old('ch_dis')) && in_array(6, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">SCM</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" name="ch_dis[]" value="7" {{ (is_array(old('ch_dis')) && in_array(7, old('ch_dis'))) ? ' checked' : '' }}>
                            <label class="form-check-label">Pengadaan</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input boxcheck3" type="checkbox" name="ch_dis[]" value="8" {{ (is_array(old('ch_dis')) && in_array(8, old('ch_dis'))) ? ' checked' : '' }}>
                            <input type="text" class="form-control boxtext3" name="ch_else">
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
<script type="text/javascript">
    //Hide Regulasi jika user centang Ya
    $('#laporanregulasi').css('display', 'none');
    $('#regul').css('display', 'none');
    $('#regul1').css('display', 'none');
    $('#regul2').css('display', 'none');
    $('#regul3').css('display', 'none');
    $('#regult').css('display', 'none');
    $('#regult1').css('display', 'none');
    $('#regult2').css('display', 'none');
    $('#regult3').css('display', 'none');

    $(document).on('change', '#briya', function(){
        $('#laporanregulasi').css('display', 'block');
        $('#regul').css('display', 'block');
        $('#regul1').css('display', 'block');
        $('#regul2').css('display', 'block');
        $('#regul3').css('display', 'block');
        $('#regult').css('display', 'block');
        $('#regult1').css('display', 'block');
        $('#regult2').css('display', 'block');
        $('#regult3').css('display', 'block');
    });

    $(document).on('change', '#briyat', function(){
        $('#laporanregulasi').css('display', 'none');
        $('#regul').css('display', 'none');
        $('#regul1').css('display', 'none');
        $('#regul2').css('display', 'none');
        $('#regul3').css('display', 'none');
        $('#regult').css('display', 'none');
        $('#regult1').css('display', 'none');
        $('#regult2').css('display', 'none');
        $('#regult3').css('display', 'none');
    });

    $(document).on('change', '#briyan', function(){
        $('#laporanregulasi').css('display', 'none');
        $('#regul').css('display', 'none');
        $('#regul1').css('display', 'none');
        $('#regul2').css('display', 'none');
        $('#regul3').css('display', 'none');
        $('#regult').css('display', 'none');
        $('#regult1').css('display', 'none');
        $('#regult2').css('display', 'none');
        $('#regult3').css('display', 'none');
    });

    //Hide laporan pada Registrasi
    $('#laporanregistrasi').css('display', 'none');
    $('#regis').css('display', 'none');
    $('#regis1').css('display', 'none');
    $('#regis2').css('display', 'none');
    $('#regist').css('display', 'none');
    $('#regist1').css('display', 'none');
    $('#regist2').css('display', 'none');

    $(document).on('change', '#brgya', function(){
        $('#laporanregistrasi').css('display', 'block');
        $('#regis').css('display', 'block');
        $('#regis1').css('display', 'block');
        $('#regis2').css('display', 'block');
        $('#regist').css('display', 'block');
        $('#regist1').css('display', 'block');
        $('#regist2').css('display', 'block');
    });

    $(document).on('change', '#brgyat', function(){
        $('#laporanregistrasi').css('display', 'none');
        $('#regis').css('display', 'none');
        $('#regis1').css('display', 'none');
        $('#regis2').css('display', 'none');
        $('#regist').css('display', 'none');
        $('#regist1').css('display', 'none');
        $('#regist2').css('display', 'none');
    });

    $(document).on('change', '#brgyan', function(){
        $('#laporanregistrasi').css('display', 'none');
        $('#regis').css('display', 'none');
        $('#regis1').css('display', 'none');
        $('#regis2').css('display', 'none');
        $('#regist').css('display', 'none');
        $('#regist1').css('display', 'none');
        $('#regist2').css('display', 'none');
    });

    //Hide laporan pada stabilitas
    $('#laporanst').css('display', 'none');
    $('#stabil').css('display', 'none');
    $('#stabil1').css('display', 'none');
    $('#stabil2').css('display', 'none');
    $('#stabil3').css('display', 'none');
    $('#stabilt').css('display', 'none');
    $('#stabilt1').css('display', 'none');
    $('#stabilt2').css('display', 'none');
    $('#stabilt3').css('display', 'none');

    $(document).on('change', '#stya', function(){
        $('#laporanst').css('display', 'block');
        $('#stabil').css('display', 'block');
        $('#stabil1').css('display', 'block');
        $('#stabil2').css('display', 'block');
        $('#stabil3').css('display', 'block');
        $('#stabilt').css('display', 'block');
        $('#stabilt1').css('display', 'block');
        $('#stabilt2').css('display', 'block');
        $('#stabilt3').css('display', 'block');
    });

    $(document).on('change', '#styat', function(){
        $('#laporanst').css('display', 'none');
        $('#stabil').css('display', 'none');
        $('#stabil1').css('display', 'none');
        $('#stabil2').css('display', 'none');
        $('#stabil3').css('display', 'none');
        $('#stabilt').css('display', 'none');
        $('#stabilt1').css('display', 'none');
        $('#stabilt2').css('display', 'none');
        $('#stabilt3').css('display', 'none');
    });

    $(document).on('change', '#styan', function(){
        $('#laporanst').css('display', 'none');
        $('#stabil').css('display', 'none');
        $('#stabil1').css('display', 'none');
        $('#stabilt').css('display', 'none');
        $('#stabilt1').css('display', 'none');
    });

    //Hide laporan pada Pengujian
    $('#laporanpj').css('display', 'none');
    $('#pj').css('display', 'none');
    $('#pjt').css('display', 'none');

    $(document).on('change', '#pjya', function(){
        $('#laporanpj').css('display', 'block');
        $('#pj').css('display', 'block');
        $('#pjt').css('display', 'block');
    });

    $(document).on('change', '#pjyat', function(){
        $('#laporanpj').css('display', 'none');
        $('#pj').css('display', 'none');
        $('#pjt').css('display', 'none');
    });

    $(document).on('change', '#pjyan', function(){
        $('#laporanpj').css('display', 'none');
        $('#pj').css('display', 'none');
        $('#pjt').css('display', 'none');
    });

    //Hide laporan pada Validasi / Kualifikasi
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

    $(document).on('change', '#valya', function(){
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
    });

    $(document).on('change', '#valyat', function(){
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
    });

    $(document).on('change', '#valyan', function(){
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
    });

    //Hide untuk laporan pada Trial
    $('#laporantrial').css('display', 'none');
    $('#tri').css('display', 'none');
    $('#tri1').css('display', 'none');
    $('#tri2').css('display', 'none');
    $('#trit').css('display', 'none');
    $('#trit1').css('display', 'none');
    $('#trit2').css('display', 'none');

    $(document).on('change', '#triya', function(){
        $('#laporantrial').css('display', 'block');
        $('#tri').css('display', 'block');
        $('#tri1').css('display', 'block');
        $('#tri2').css('display', 'block');
        $('#trit').css('display', 'block');
        $('#trit1').css('display', 'block');
        $('#trit2').css('display', 'block');
    });

    $(document).on('change', '#triyat', function(){
        $('#laporantrial').css('display', 'none');
        $('#tri').css('display', 'none');
        $('#tri1').css('display', 'none');
        $('#tri2').css('display', 'none');
        $('#trit').css('display', 'none');
        $('#trit1').css('display', 'none');
        $('#trit2').css('display', 'none');
    });

    $(document).on('change', '#triyan', function(){
        $('#laporantrial').css('display', 'none');
        $('#tri').css('display', 'none');
        $('#tri1').css('display', 'none');
        $('#tri2').css('display', 'none');
        $('#trit').css('display', 'none');
        $('#trit1').css('display', 'none');
        $('#trit2').css('display', 'none');
    });

    //Hide laporan pada Produksi
    $('#laporanpro').css('display', 'none');
    $('#pro').css('display', 'none');
    $('#prot').css('display', 'none');

    $(document).on('change', '#proya', function(){
        $('#laporanpro').css('display', 'block');
        $('#pro').css('display', 'block');
        $('#prot').css('display', 'block');
    });

    $(document).on('change', '#proyat', function(){
        $('#laporanpro').css('display', 'none');
        $('#pro').css('display', 'none');
        $('#prot').css('display', 'none');
    });

    $(document).on('change', '#proyan', function(){
        $('#laporanpro').css('display', 'none');
        $('#pro').css('display', 'none');
        $('#prot').css('display', 'none');
    });

    //Hide laporan pada Dokumen
    $('#laporandok').css('display', 'none');
    $('#dok').css('display', 'none');
    $('#dokt').css('display', 'none');

    $(document).on('change', '#dokya', function(){
        $('#laporandok').css('display', 'block');
        $('#dok').css('display', 'block');
        $('#dokt').css('display', 'block');
    });

    $(document).on('change', '#dokyat', function(){
        $('#laporandok').css('display', 'none');
        $('#dok').css('display', 'none');
        $('#dokt').css('display', 'none');
    });

    $(document).on('change', '#dokyan', function(){
        $('#laporandok').css('display', 'none');
        $('#dok').css('display', 'none');
        $('#dokt').css('display', 'none');
    });

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

    // for ket_up
    $(document).ready(function() {
    $("input.boxtext").on("keyup blur", function() {
        $("input.boxcheck").prop("checked", this.value != "");
    });

    $("input.boxcheck").click(function() {
        return false;
    });
    });
    
    // for bagian A
    $(document).ready(function() {
    $("input.boxtext2").on("keyup blur", function() {
        $("input.boxcheck2").prop("checked", this.value != "");
    });

    $("input.boxcheck").click(function() {
        return false;
    });
    });
    
    // for distribusi persetujuan perubahan
    $(document).ready(function() {
    $("input.boxtext3").on("keyup blur", function() {
        $("input.boxcheck3").prop("checked", this.value != "");
    });

    $("input.boxcheck").click(function() {
        return false;
    });
    });
</script>
@endsection