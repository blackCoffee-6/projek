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
    <form action="/Store/KP/{{$fup->id}}" method="POST">
    @csrf
    <div class="container my-4">
        <table class="table table-bordered">
            <tr>
                <th>Mitigasi Dampak Usulan Perubahan</th>
            </tr>
        </table>
        {{-- REGULASI --}}
        <x-kop kategori="Regulasi" 
        tlp="ru_tlp" tlpid="ru_tlp" tlpval="supel" tlplabel="Surat pelaporan ke instansi pemerintah" 
        pic="ru_pic" picid="ru_pic" 
        dok="ru_dok" dokid="ru_dok" 
        bg="bg-danger" badge="Closed"
        date="ru_date"
        rencana="ru_rencana" rencanaid="ru_rencana"
        realisasi="ru_realisasi" realisasiid="ru_realisasi"
        />
        <hr>
        {{-- REGISTRASI --}}
        <x-kop kategori="Registrasi" 
        tlp="ri_tlp" tlpid="ri_tlp" tlpval="pie" tlplabel="PIE / Approvable Letter" 
        pic="ri_pic" picid="ri_pic" 
        dok="ri_dok" dokid="ri_dok" 
        bg="bg-secondary" badge="Pending"
        date="ri_date"
        rencana="ri_rencana" rencanaid="ri_rencana"
        realisasi="ri_realisasi" realisasiid="ri_realisasi"
        />
        <hr>
        {{-- STABILITAS  --}}
        <x-kop kategori="Stabilitas" 
        tlp="st_tlp" tlpid="st_tlp" tlpval="protokol" tlplabel="Protokol uji stabilitas" 
        pic="st_pic" picid="st_pic" 
        dok="st_dok" dokid="st_dok" 
        bg="bg-secondary" badge="Pending"
        date="st_date"
        rencana="st_rencana" rencanaid="st_rencana"
        realisasi="st_realisasi" realisasiid="st_realisasi"
        />
        <hr>
        {{-- MASA EDAR  --}}
        <x-kop kategori="Masa Edar" 
        tlp="st_tlp2" tlpid="st_tlp2" tlpval="daftardalu" tlplabel="Daftar daluwarsa produk" 
        pic="st_pic2" picid="st_pic2" 
        dok="st_dok2" dokid="st_dok2" 
        bg="bg-secondary" badge="Pending"
        date="st_date2"
        rencana="st_rencana2" rencanaid="st_rencana2"
        realisasi="st_realisasi2" realisasiid="st_realisasi2"
        />
        {{-- ??  --}}
        <x-kop kategori="" 
        tlp="me_tlp" tlpid="me_tlp" tlpval="screenrev" tlplabel="Screenshoot revisi daluarsa pada ERP" 
        pic="me_pic" picid="me_pic" 
        dok="me_dok" dokid="me_dok" 
        bg="bg-secondary" badge="Pending"
        date="me_date"
        rencana="me_rencana" rencanaid="me_rencana"
        realisasi="me_realisasi" realisasiid="me_realisasi"
        />
        <hr>
        {{-- Validasi/ Kualifikasi  --}}
        <x-kop kategori="Validasi/ Kualifikasi" 
        tlp="me_tlp2" tlpid="me_tlp2" tlpval="protokol2" tlplabel="Protokol validasi pengolahan" 
        pic="me_pic2" picid="me_pic2" 
        dok="me_dok2" dokid="me_dok2" 
        bg="bg-secondary" badge="Pending"
        date="me_date2"
        rencana="me_rencana2" rencanaid="me_rencana2"
        realisasi="me_realisasi2" realisasiid="me_realisasi2"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp" tlpid="val_tlp" tlpval="laval" tlplabel="Laporan validasi pengolahan" 
        pic="val_pic" picid="val_pic" 
        dok="val_dok" dokid="val_dok" 
        bg="bg-secondary" badge="Pending"
        date="val_date"
        rencana="val_rencana" rencanaid="val_rencana"
        realisasi="val_realisasi" realisasiid="val_realisasi"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp2" tlpid="val_tlp2" tlpval="protokol3" tlplabel="Protokol validasi pengemasan" 
        pic="val_pic2" picid="val_pic2" 
        dok="val_dok2" dokid="val_dok2" 
        bg="bg-secondary" badge="Pending"
        date="val_date2"
        rencana="val_rencana2" rencanaid="val_rencana2"
        realisasi="val_realisasi2" realisasiid="val_realisasi2"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp3" tlpid="val_tlp3" tlpval="laval2" tlplabel="Laporan validasi pengemasan" 
        pic="val_pic3" picid="val_pic3" 
        dok="val_dok3" dokid="val_dok3" 
        bg="bg-secondary" badge="Pending"
        date="val_date3"
        rencana="val_rencana3" rencanaid="val_rencana3"
        realisasi="val_realisasi3" realisasiid="val_realisasi3"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp4" tlpid="val_tlp4" tlpval="protokol4" tlplabel="Protokol validasi pembersihan" 
        pic="val_pic4" picid="val_pic4" 
        dok="val_dok4" dokid="val_dok4" 
        bg="bg-secondary" badge="Pending"
        date="val_date4"
        rencana="val_rencana4" rencanaid="val_rencana4"
        realisasi="val_realisasi4" realisasiid="val_realisasi4"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp5" tlpid="val_tlp5" tlpval="laval3" tlplabel="Laporan validasi pembersihan" 
        pic="val_pic5" picid="val_pic5" 
        dok="val_dok5" dokid="val_dok5" 
        bg="bg-secondary" badge="Pending"
        date="val_date5"
        rencana="val_rencana5" rencanaid="val_rencana5"
        realisasi="val_realisasi5" realisasiid="val_realisasi5"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp6" tlpid="val_tlp6" tlpval="protokol6" tlplabel="Protokol validasi metode analisa" 
        pic="val_pic6" picid="val_pic6" 
        dok="val_dok6" dokid="val_dok6" 
        bg="bg-secondary" badge="Pending"
        date="val_date6"
        rencana="val_rencana6" rencanaid="val_rencana6"
        realisasi="val_realisasi6" realisasiid="val_realisasi6"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp7" tlpid="val_tlp7" tlpval="laval4" tlplabel="Laporan validasi metode analisa" 
        pic="val_pic7" picid="val_pic7" 
        dok="val_dok7" dokid="val_dok7" 
        bg="bg-secondary" badge="Pending"
        date="val_date7"
        rencana="val_rencana7" rencanaid="val_rencana7"
        realisasi="val_realisasi7" realisasiid="val_realisasi7"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp8" tlpid="val_tlp8" tlpval="protokol6" tlplabel="Protokol kualifikasi instalasi" 
        pic="val_pic8" picid="val_pic8" 
        dok="val_dok8" dokid="val_dok8" 
        bg="bg-secondary" badge="Pending"
        date="val_date8"
        rencana="val_rencana8" rencanaid="val_rencana8"
        realisasi="val_realisasi8" realisasiid="val_realisasi8"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp9" tlpid="val_tlp9" tlpval="laval5" tlplabel="Laporan kualifikasi instalasi" 
        pic="val_pic9" picid="val_pic9" 
        dok="val_dok9" dokid="val_dok9" 
        bg="bg-secondary" badge="Pending"
        date="val_date9"
        rencana="val_rencana9" rencanaid="val_rencana9"
        realisasi="val_realisasi9" realisasiid="val_realisasi9"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp10" tlpid="val_tlp10" tlpval="protokol7" tlplabel="Protokol kualifikasi operasional" 
        pic="val_pic10" picid="val_pic10" 
        dok="val_dok10" dokid="val_dok10" 
        bg="bg-secondary" badge="Pending"
        date="val_date10"
        rencana="val_rencana10" rencanaid="val_rencana10"
        realisasi="val_realisasi10" realisasiid="val_realisasi10"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp11" tlpid="val_tlp11" tlpval="laval6" tlplabel="Laporan kualifikasi operasional" 
        pic="val_pic11" picid="val_pic11" 
        dok="val_dok11" dokid="val_dok11" 
        bg="bg-secondary" badge="Pending"
        date="val_date11"
        rencana="val_rencana11" rencanaid="val_rencana11"
        realisasi="val_realisasi11" realisasiid="val_realisasi11"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp12" tlpid="val_tlp12" tlpval="protokol8" tlplabel="Protokol kualifikasi kinerja" 
        pic="val_pic12" picid="val_pic12" 
        dok="val_dok12" dokid="val_dok12" 
        bg="bg-secondary" badge="Pending"
        date="val_date12"
        rencana="val_rencana12" rencanaid="val_rencana12"
        realisasi="val_realisasi12" realisasiid="val_realisasi12"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="val_tlp13" tlpid="val_tlp13" tlpval="laval7" tlplabel="Laporan kualifikasi kinerja" 
        pic="val_pic13" picid="val_pic13" 
        dok="val_dok13" dokid="val_dok13" 
        bg="bg-secondary" badge="Pending"
        date="val_date13"
        rencana="val_rencana13" rencanaid="val_rencana13"
        realisasi="val_realisasi13" realisasiid="val_realisasi13"
        />
        <hr>
        {{-- TRIAL  --}}
        <x-kop kategori="Trial" 
        tlp="tr_tlp" tlpid="tr_tlp" tlpval="LHT" tlplabel="LHT skala laboratorium" 
        pic="tr_pic" picid="tr_pic" 
        dok="tr_dok" dokid="tr_dok" 
        bg="bg-secondary" badge="Pending"
        date="tr_date"
        rencana="tr_rencana" rencanaid="tr_rencana"
        realisasi="tr_realisasi" realisasiid="tr_realisasi"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="tr_tlp2" tlpid="tr_tlp2" tlpval="CPB" tlplabel="CPB skala pilot" 
        pic="tr_pic2" picid="tr_pic2" 
        dok="tr_dok2" dokid="tr_dok2" 
        bg="bg-secondary" badge="Pending"
        date="tr_date2"
        rencana="tr_rencana2" rencanaid="tr_rencana2"
        realisasi="tr_realisasi2" realisasiid="tr_realisasi2"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="tr_tlp3" tlpid="tr_tlp3" tlpval="LHT2" tlplabel="LHT skala pilot" 
        pic="tr_pic3" picid="tr_pic3" 
        dok="tr_dok3" dokid="tr_dok3" 
        bg="bg-secondary" badge="Pending"
        date="tr_date3"
        rencana="tr_rencana3" rencanaid="tr_rencana3"
        realisasi="tr_realisasi3" realisasiid="tr_realisasi3"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="tr_tlp4" tlpid="tr_tlp4" tlpval="CPB2" tlplabel="CPB Pengolahan" 
        pic="tr_pic4" picid="tr_pic4" 
        dok="tr_dok4" dokid="tr_dok4" 
        bg="bg-secondary" badge="Pending"
        date="tr_date4"
        rencana="tr_rencana4" rencanaid="tr_rencana4"
        realisasi="tr_realisasi4" realisasiid="tr_realisasi4"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="tr_tlp5" tlpid="tr_tlp5" tlpval="catatan" tlplabel="Catatan analisa produk ruahan" 
        pic="tr_pic5" picid="tr_pic5" 
        dok="tr_dok5" dokid="tr_dok5" 
        bg="bg-secondary" badge="Pending"
        date="tr_date5"
        rencana="tr_rencana5" rencanaid="tr_rencana5"
        realisasi="tr_realisasi5" realisasiid="tr_realisasi5"
        />
        {{-- ??  --}}
        <x-kop kategori="??" 
        tlp="tr_tlp6" tlpid="tr_tlp6" tlpval="CPB3" tlplabel="CPB Pengemasan" 
        pic="tr_pic6" picid="tr_pic6" 
        dok="tr_dok6" dokid="tr_dok6" 
        bg="bg-secondary" badge="Pending"
        date="tr_date6"
        rencana="tr_rencana6" rencanaid="tr_rencana6"
        realisasi="tr_realisasi6" realisasiid="tr_realisasi6"
        />
        <hr>
        {{-- PRODUKSI  --}}
        <x-kop2 kategori="Produksi" 
        tlp="pro_tlp" tlpid="pro_tlp" tlpval="laha" tlplabel="Laporan hasil uji" inputan=""
        pic="pro_pic" picid="pro_pic" 
        dok="pro_dok" dokid="pro_dok" 
        bg="bg-secondary" badge="Pending"
        date="pro_date"
        rencana="pro_rencana" rencanaid="pro_rencana"
        realisasi="pro_realisasi" realisasiid="pro_realisasi"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="pro_tlp2" tlpid="pro_tlp2" tlpval="laha2" tlplabel="Laporan hasil uji" 
        pic="pro_pic2" picid="pro_pic2" 
        dok="pro_dok2" dokid="pro_dok2" 
        bg="bg-secondary" badge="Pending"
        date="pro_date2"
        rencana="pro_rencana2" rencanaid="pro_rencana2"
        realisasi="pro_realisasi2" realisasiid="pro_realisasi2"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="pro_tlp3" tlpid="pro_tlp3" tlpval="laha3" tlplabel="Laporan hasil uji" 
        pic="pro_pic3" picid="pro_pic3" 
        dok="pro_dok3" dokid="pro_dok3" 
        bg="bg-secondary" badge="Pending"
        date="pro_date3"
        rencana="pro_rencana3" rencanaid="pro_rencana3"
        realisasi="pro_realisasi3" realisasiid="pro_realisasi3"
        />
        <hr>
        {{-- DOKUMEN  --}}
        <x-kop2 kategori="Dokumen" 
        tlp="dok_tlp" tlpid="dok_tlp" tlpval="manual" tlplabel="Manual Mutu" 
        pic="dok_pic" picid="dok_pic" 
        dok="dok_dok" dokid="dok_dok" 
        bg="bg-secondary" badge="Pending"
        date="dok_date"
        rencana="dok_rencana" rencanaid="dok_rencana"
        realisasi="dok_realisasi" realisasiid="dok_realisasi"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp2" tlpid="dok_tlp2" tlpval="dokuin" tlplabel="Dokumen induk industri farmasi" 
        pic="dok_pic2" picid="dok_pic2" 
        dok="dok_dok2" dokid="dok_dok2" 
        bg="bg-secondary" badge="Pending"
        date="dok_date2"
        rencana="dok_rencana2" rencanaid="dok_rencana2"
        realisasi="dok_realisasi2" realisasiid="dok_realisasi2"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp3" tlpid="dok_tlp3" tlpval="prose" tlplabel="Prosedur" 
        pic="dok_pic3" picid="dok_pic3" 
        dok="dok_dok3" dokid="dok_dok3" 
        bg="bg-secondary" badge="Pending"
        date="dok_date3"
        rencana="dok_rencana3" rencanaid="dok_rencana3"
        realisasi="dok_realisasi3" realisasiid="dok_realisasi3"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp4" tlpid="dok_tlp4" tlpval="ketentuan" tlplabel="Ketentuan umum" 
        pic="dok_pic4" picid="dok_pic4" 
        dok="dok_dok4" dokid="dok_dok4" 
        bg="bg-secondary" badge="Pending"
        date="dok_date4"
        rencana="dok_rencana4" rencanaid="dok_rencana4"
        realisasi="dok_realisasi4" realisasiid="dok_realisasi4"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp5" tlpid="dok_tlp5" tlpval="protap" tlplabel="Protap" 
        pic="dok_pic5" picid="dok_pic5" 
        dok="dok_dok5" dokid="dok_dok5" 
        bg="bg-secondary" badge="Pending"
        date="dok_date5"
        rencana="dok_rencana5" rencanaid="dok_rencana5"
        realisasi="dok_realisasi5" realisasiid="dok_realisasi5"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp6" tlpid="dok_tlp6" tlpval="formulir" tlplabel="Formulir" 
        pic="dok_pic6" picid="dok_pic6" 
        dok="dok_dok6" dokid="dok_dok6" 
        bg="bg-secondary" badge="Pending"
        date="dok_date6"
        rencana="dok_rencana6" rencanaid="dok_rencana6"
        realisasi="dok_realisasi6" realisasiid="dok_realisasi6"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp7" tlpid="dok_tlp7" tlpval="daftar" tlplabel="Daftar" 
        pic="dok_pic7" picid="dok_pic7" 
        dok="dok_dok7" dokid="dok_dok7" 
        bg="bg-secondary" badge="Pending"
        date="dok_date7"
        rencana="dok_rencana7" rencanaid="dok_rencana7"
        realisasi="dok_realisasi7" realisasiid="dok_realisasi7"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp8" tlpid="dok_tlp8" tlpval="spek" tlplabel="Spesifikasi" 
        pic="dok_pic8" picid="dok_pic8" 
        dok="dok_dok8" dokid="dok_dok8" 
        bg="bg-secondary" badge="Pending"
        date="dok_date8"
        rencana="dok_rencana8" rencanaid="dok_rencana8"
        realisasi="dok_realisasi8" realisasiid="dok_realisasi8"
        />
        {{-- ??  --}}
        <x-kop2 kategori="??" 
        tlp="dok_tlp9" tlpid="dok_tlp9" tlpval="metodean" tlplabel="Metode analisa" 
        pic="dok_pic9" picid="dok_pic9" 
        dok="dok_dok9" dokid="dok_dok9" 
        bg="bg-secondary" badge="Pending"
        date="dok_date9"
        rencana="dok_rencana9" rencanaid="dok_rencana9"
        realisasi="dok_realisasi9" realisasiid="dok_realisasi9"
        />
        <hr>
        {{-- SISTEM ERP  --}}
        <x-kop kategori="Sistem ERP" 
        tlp="sis_tlp" tlpid="sis_tlp" tlpval="screenperu" tlplabel="Screenshoot perubahan pada ER" 
        pic="sis_pic" picid="sis_pic" 
        dok="sis_dok" dokid="sis_dok" 
        bg="bg-secondary" badge="Pending"
        date="sis_date"
        rencana="sis_rencana" rencanaid="sis_rencana"
        realisasi="sis_realisasi" realisasiid="sis_realisasi"
        />
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
                                    <input class="form-check-input" value="dilaksanakan" type="radio" name="hasil_mitigasi" id="DD" required>
                                    <label class="form-check-label">Perubahan dapat dilaksanakan sejak/pada/sampai*) <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="hasil_mitigasi_date" id="DDtext"></label>
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
                    <th>Distribusi persetujuan perubahan :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="1">
                            <label class="form-check-label" for="inlineCheckbox1">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="2">
                            <label class="form-check-label" for="inlineCheckbox2">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="3">
                            <label class="form-check-label" for="inlineCheckbox2">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="4">
                            <label class="form-check-label" for="inlineCheckbox1">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="5">
                            <label class="form-check-label" for="inlineCheckbox2">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="6">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="7">
                            <label class="form-check-label" for="inlineCheckbox1">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="8">
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

<script>
	$('#DDtext').css('display', 'none');

	$(document).on('change', '#DD', function () {
		$('#DDtext').css('display', 'block');
	});

	$(document).on('change', '#TDD', function () {
		$('#DDtext').css('display', 'none');
	});
</script>
@endsection