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
    <form action="/Store/KP/{{$fup->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container my-4">
        <table class="table table-bordered">
            <tr>
                <th>Mitigasi Dampak Usulan Perubahan</th>
            </tr>
        </table>
        @if ($errors->any())
            <div style="color: red;">No. Dokumen must be numeric!</div>
        @endif

        {{-- REGULASI --}}
        <x-kop kategori="Regulasi" 
        tlp="ru_tlp" tlpid="ru_tlp" tlpval="spip" tlplabel="Surat pelaporan ke instansi pemerintah" 
        pic="ru_pic" picid="ru_pic" 
        dok="ru_dok" dokid="ru_dok"
        stat="ru_status" statid="ru_statusid"
        stat2="ru_status" statid2="ru_statusid2"
        rencana="ru_rencana" rencanaid="ru_rencana"
        realisasi="ru_realisasi" realisasiid="ru_realisasi"
        />
        // lupa ngasih status gue nya wkwk
        {{-- REGULASI 2 --}}
        <x-kop3 kategori="" 
        tlp="ru_tlp2" tlpid="ru_tlp2" tlpval="spip" tlpinput="ru_input2" 
        pic="ru_pic2" picid="ru_pic2" 
        dok="ru_dok2" dokid="ru_dok2"
        rencana="ru_rencana2" rencanaid="ru_rencana2"
        realisasi="ru_realisasi2" realisasiid="ru_realisasi2"
        />

        <hr>
        {{-- REGISTRASI --}}
        <x-kop kategori="Registrasi" 
        tlp="ri_tlp" tlpid="ri_tlp" tlpval="pie" tlplabel="PIE / Approvable Letter" 
        pic="ri_pic" picid="ri_pic" 
        dok="ri_dok" dokid="ri_dok"
        stat="ri_status" statid="ri_statusid"
        stat2="ri_status" statid2="ri_statusid2"
        rencana="ri_rencana" rencanaid="ri_rencana"
        realisasi="ri_realisasi" realisasiid="ri_realisasi"
        />
        <hr>
        {{-- STABILITAS  --}}
        <x-kop kategori="Stabilitas" 
        tlp="st_tlp" tlpid="st_tlp" tlpval="prus" tlplabel="Protokol uji stabilitas" 
        pic="st_pic" picid="st_pic" 
        dok="st_dok" dokid="st_dok"
        stat="st_status" statid="st_statusid"
        stat2="st_status" statid2="st_statusid2"
        rencana="st_rencana" rencanaid="st_rencana"
        realisasi="st_realisasi" realisasiid="st_realisasi"
        />
        {{-- ??  --}}
        <x-kop kategori="" 
        tlp="st_tlp2" tlpid="st_tlp2" tlpval="lus" tlplabel="Laporan uji stabilitas" 
        pic="st_pic2" picid="st_pic2" 
        dok="st_dok2" dokid="st_dok2"
        stat="st_status2" statid="st_statusid3"
        stat2="st_status2" statid2="st_statusid4"
        rencana="st_rencana2" rencanaid="st_rencana2"
        realisasi="st_realisasi2" realisasiid="st_realisasi2"
        />
        <hr>
        {{-- MASA EDAR  --}}
        <x-kop kategori="Masa Edar" 
        tlp="me_tlp" tlpid="me_tlp" tlpval="srdpe" tlplabel="Daftar daluwarsa produk" 
        pic="me_pic" picid="me_pic" 
        dok="me_dok" dokid="me_dok"
        stat="me_status" statid="me_statusid"
        stat2="me_status" statid2="me_statusid2"
        rencana="me_rencana" rencanaid="me_rencana"
        realisasi="me_realisasi" realisasiid="me_realisasi"
        />
        <x-kop kategori="Masa Edar" 
        tlp="me_tlp2" tlpid="me_tlp2" tlpval="srdpe" tlplabel="Screenshoot revisi daluarsa pada ERP" 
        pic="me_pic2" picid="me_pic2" 
        dok="me_dok2" dokid="me_dok2" 
        stat="me_status2" statid="me_statusid3"
        stat2="me_status2" statid2="me_statusid4"
        rencana="me_rencana2" rencanaid="me_rencana2"
        realisasi="me_realisasi2" realisasiid="me_realisasi2"
        />
        <hr>
        {{-- Validasi/ Kualifikasi  --}}
        <x-kop kategori="Validasi/ Kualifikasi" 
        tlp="val_tlp" tlpid="val_tlp" 
        tlpval="pvp" tlplabel="Protokol validasi pengolahan" 
        pic="val_pic" picid="val_pic" 
        dok="val_dok" dokid="val_dok" 
        stat="val_status" statid="val_statusid"
        stat2="val_status" statid2="val_statusid2"
        rencana="val_rencana" rencanaid="val_rencana"
        realisasi="val_realisasi" realisasiid="val_realisasi"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp2" tlpid="val_tlp2" 
        tlpval="lvp" tlplabel="Laporan validasi pengolahan" 
        pic="val_pic2" picid="val_pic2" 
        dok="val_dok2" dokid="val_dok2" 
        stat="val_status2" statid="val_statusid3"
        stat2="val_status2" statid2="val_statusid4"
        rencana="val_rencana2" rencanaid="val_rencana2"
        realisasi="val_realisasi2" realisasiid="val_realisasi2"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp3" tlpid="val_tlp3" 
        tlpval="pvp" tlplabel="Protokol validasi pengemasan" 
        pic="val_pic3" picid="val_pic3" 
        dok="val_dok3" dokid="val_dok3" 
        stat="val_status3" statid="val_statusid5"
        stat2="val_status3" statid2="val_statusid6"
        rencana="val_rencana3" rencanaid="val_rencana3"
        realisasi="val_realisasi3" realisasiid="val_realisasi3"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp4" tlpid="val_tlp4" 
        tlpval="lvpen" tlplabel="Laporan validasi pengemasan" 
        pic="val_pic4" picid="val_pic4" 
        dok="val_dok4" dokid="val_dok4" 
        stat="val_status4" statid="val_statusid7"
        stat2="val_status4" statid2="val_statusid8"
        rencana="val_rencana4" rencanaid="val_rencana4"
        realisasi="val_realisasi4" realisasiid="val_realisasi4"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp5" tlpid="val_tlp5" 
        tlpval="pvpem" tlplabel="Protokol validasi pembersihan" 
        pic="val_pic5" picid="val_pic5" 
        dok="val_dok5" dokid="val_dok5" 
        stat="val_status5" statid="val_statusid9"
        stat2="val_status5" statid2="val_statusid10"
        rencana="val_rencana5" rencanaid="val_rencana5"
        realisasi="val_realisasi5" realisasiid="val_realisasi5"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp6" tlpid="val_tlp6" 
        tlpval="lvp" tlplabel="Laporan validasi pembersihan" 
        pic="val_pic6" picid="val_pic6" 
        dok="val_dok6" dokid="val_dok6"
        stat="val_status6" statid="val_statusid11"
        stat2="val_status6" statid2="val_statusid12"
        rencana="val_rencana6" rencanaid="val_rencana6"
        realisasi="val_realisasi6" realisasiid="val_realisasi6"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp7" tlpid="val_tlp7" 
        tlpval="pvma" tlplabel="Protokol validasi metode analisa" 
        pic="val_pic7" picid="val_pic7" 
        dok="val_dok7" dokid="val_dok7" 
        stat="val_status7" statid="val_statusid13"
        stat2="val_status7" statid2="val_status14"
        rencana="val_rencana7" rencanaid="val_rencana7"
        realisasi="val_realisasi7" realisasiid="val_realisasi7"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp8" tlpid="val_tlp8"
        tlpval="lvma" tlplabel="Laporan validasi metode analisa" 
        pic="val_pic8" picid="val_pic8" 
        dok="val_dok8" dokid="val_dok8" 
        stat="val_status8" statid="val_statusid15"
        stat2="val_status8" statid2="val_statusid16"
        rencana="val_rencana8" rencanaid="val_rencana8"
        realisasi="val_realisasi8" realisasiid="val_realisasi8"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp9" tlpid="val_tlp9" 
        tlpval="pki" tlplabel="Protokol kualifikasi instalasi" 
        pic="val_pic9" picid="val_pic9" 
        dok="val_dok9" dokid="val_dok9" 
        stat="val_status9" statid="val_statusid17"
        stat2="val_status9" statid2="val_statusid18"
        rencana="val_rencana9" rencanaid="val_rencana9"
        realisasi="val_realisasi9" realisasiid="val_realisasi9"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp10" tlpid="val_tlp10" 
        tlpval="lki" tlplabel="Laporan kualifikasi instalasi" 
        pic="val_pic10" picid="val_pic10" 
        dok="val_dok10" dokid="val_dok10"
        stat="val_status10" statid="val_statusid19"
        stat2="val_status10" statid2="val_statusid20"
        rencana="val_rencana10" rencanaid="val_rencana10"
        realisasi="val_realisasi10" realisasiid="val_realisasi10"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp11" tlpid="val_tlp11" 
        tlpval="pko" tlplabel="Protokol kualifikasi operasional" 
        pic="val_pic11" picid="val_pic11" 
        dok="val_dok11" dokid="val_dok11"
        stat="val_status11" statid="val_statusid21"
        stat2="val_status11" statid2="val_statusid22"
        rencana="val_rencana11" rencanaid="val_rencana11"
        realisasi="val_realisasi11" realisasiid="val_realisasi11"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp12" tlpid="val_tlp12" 
        tlpval="lko" tlplabel="Laporan kualifikasi operasional" 
        pic="val_pic12" picid="val_pic12" 
        dok="val_dok12" dokid="val_dok12" 
        stat="val_status12" statid="val_statusid23"
        stat2="val_status12" statid2="val_statusid24"
        rencana="val_rencana12" rencanaid="val_rencana12"
        realisasi="val_realisasi12" realisasiid="val_realisasi12"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp13" tlpid="val_tlp13" 
        tlpval="pkk" tlplabel="Protokol kualifikasi kinerja" 
        pic="val_pic13" picid="val_pic13" 
        dok="val_dok13" dokid="val_dok13"
        stat="val_status13" statid="val_statusid25"
        stat2="val_status13" statid2="val_statusid26"
        rencana="val_rencana13" rencanaid="val_rencana13"
        realisasi="val_realisasi13" realisasiid="val_realisasi13"
        />
        
        <x-kop kategori="" 
        tlp="val_tlp14" tlpid="val_tlp14" tlpval="lkk" tlplabel="Laporan kualifikasi kinerja" 
        pic="val_pic14" picid="val_pic14" 
        dok="val_dok14" dokid="val_dok14"
        stat="val_status14" statid="val_statusid27"
        stat2="val_status14" statid2="val_statusid28"
        rencana="val_rencana14" rencanaid="val_rencana14"
        realisasi="val_realisasi14" realisasiid="val_realisasi14"
        />
        <hr>
        {{-- TRIAL  --}}
        <x-kop kategori="Trial" 
        tlp="tr_tlp" tlpid="tr_tlp" tlpval="lsl" tlplabel="LHT skala laboratorium" 
        pic="tr_pic" picid="tr_pic" 
        dok="tr_dok" dokid="tr_dok" 
        stat="tr_status" statid="tr_statusid"
        stat2="tr_status" statid2="tr_statusid2"
        rencana="tr_rencana" rencanaid="tr_rencana"
        realisasi="tr_realisasi" realisasiid="tr_realisasi"
        />
        
        <x-kop kategori="" 
        tlp="tr_tlp2" tlpid="tr_tlp2" tlpval="csp" tlplabel="CPB skala pilot" 
        pic="tr_pic2" picid="tr_pic2" 
        dok="tr_dok2" dokid="tr_dok2" 
        stat="tr_status2" statid="tr_statusid3"
        stat2="tr_status2" statid2="tr_statusid4"
        rencana="tr_rencana2" rencanaid="tr_rencana2"
        realisasi="tr_realisasi2" realisasiid="tr_realisasi2"
        />
        
        <x-kop kategori="" 
        tlp="tr_tlp3" tlpid="tr_tlp3" tlpval="lsp" tlplabel="LHT skala pilot" 
        pic="tr_pic3" picid="tr_pic3" 
        dok="tr_dok3" dokid="tr_dok3" 
        stat="tr_status3" statid="tr_statusid5"
        stat2="tr_status3" statid2="tr_statusid6"
        rencana="tr_rencana3" rencanaid="tr_rencana3"
        realisasi="tr_realisasi3" realisasiid="tr_realisasi3"
        />
        
        <x-kop kategori="" 
        tlp="tr_tlp4" tlpid="tr_tlp4" tlpval="cp" tlplabel="CPB Pengolahan" 
        pic="tr_pic4" picid="tr_pic4" 
        dok="tr_dok4" dokid="tr_dok4" 
        stat="tr_status4" statid="tr_status7"
        stat2="tr_status4" statid2="tr_status8"
        rencana="tr_rencana4" rencanaid="tr_rencana4"
        realisasi="tr_realisasi4" realisasiid="tr_realisasi4"
        />
        
        <x-kop kategori="" 
        tlp="tr_tlp5" tlpid="tr_tlp5" tlpval="capr" tlplabel="Catatan analisa produk ruahan" 
        pic="tr_pic5" picid="tr_pic5" 
        dok="tr_dok5" dokid="tr_dok5" 
        stat="tr_status5" statid="tr_statusid9"
        stat2="tr_status5" statid2="tr_statusid10"
        rencana="tr_rencana5" rencanaid="tr_rencana5"
        realisasi="tr_realisasi5" realisasiid="tr_realisasi5"
        />
        
        <x-kop kategori="" 
        tlp="tr_tlp6" tlpid="tr_tlp6" tlpval="cpen" tlplabel="CPB Pengemasan" 
        pic="tr_pic6" picid="tr_pic6" 
        dok="tr_dok6" dokid="tr_dok6" 
        stat="tr_status6" statid="tr_status11"
        stat2="tr_status6" statid2="tr_status12"
        rencana="tr_rencana6" rencanaid="tr_rencana6"
        realisasi="tr_realisasi6" realisasiid="tr_realisasi6"
        />
        <hr>
        {{-- PRODUKSI  --}}
        <x-kop2 kategori="Produksi" 
        tlp="pro_tlp" tlpid="pro_tlp" tlpval="lhu" tlplabel="Laporan hasil uji" tlptext="pro_input"
        pic="pro_pic" picid="pro_pic" 
        dok="pro_dok" dokid="pro_dok" 
        stat="pro_status" statid="pro_statusid"
        stat2="pro_status" statid2="pro_statusid2"
        rencana="pro_rencana" rencanaid="pro_rencana"
        realisasi="pro_realisasi" realisasiid="pro_realisasi"
        />
        
        <x-kop2 kategori="" 
        tlp="pro_tlp2" tlpid="pro_tlp2" tlpval="lhu2" tlplabel="Laporan hasil uji" tlptext="pro_input2"
        pic="pro_pic2" picid="pro_pic2" 
        dok="pro_dok2" dokid="pro_dok2" 
        stat="pro_status2" statid="pro_statusid3"
        stat2="pro_status2" statid2="pro_statusid4"
        rencana="pro_rencana2" rencanaid="pro_rencana2"
        realisasi="pro_realisasi2" realisasiid="pro_realisasi2"
        />
        
        <x-kop2 kategori="" 
        tlp="pro_tlp3" tlpid="pro_tlp3" tlpval="lhu3" tlplabel="Laporan hasil uji" tlptext="pro_input3"
        pic="pro_pic3" picid="pro_pic3" 
        dok="pro_dok3" dokid="pro_dok3" 
        stat="pro_status3" statid="pro_statusid5"
        stat2="pro_status3" statid2="pro_statusid6"
        rencana="pro_rencana3" rencanaid="pro_rencana3"
        realisasi="pro_realisasi3" realisasiid="pro_realisasi3"
        />
        <hr>

        {{-- DOKUMEN  --}}
        <x-kop kategori="Dokumen" 
        tlp="dok_tlp" tlpid="dok_tlp" tlpval="mm" tlplabel="Manual Mutu" 
        pic="dok_pic" picid="dok_pic" 
        dok="dok_dok" dokid="dok_dok" 
        stat="dok_status" statid="dok_statusid"
        stat2="dok_status" statid2="dok_statusid2"
        rencana="dok_rencana" rencanaid="dok_rencana"
        realisasi="dok_realisasi" realisasiid="dok_realisasi"
        />
        
        <x-kop kategori="" 
        tlp="dok_tlp2" tlpid="dok_tlp2" tlpval="diif" tlplabel="Dokumen induk industri farmasi" 
        pic="dok_pic2" picid="dok_pic2" 
        dok="dok_dok2" dokid="dok_dok2" 
        stat="dok_status2" statid="dok_statusid3"
        stat2="dok_status2" statid2="dok_statusid4"
        rencana="dok_rencana2" rencanaid="dok_rencana2"
        realisasi="dok_realisasi2" realisasiid="dok_realisasi2"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp3" tlpid="dok_tlp3" tlpval="prose" tlplabel="Prosedur" tlptext="dok_input3"
        pic="dok_pic3" picid="dok_pic3" 
        dok="dok_dok3" dokid="dok_dok3" 
        stat="dok_status3" statid="dok_statusid5"
        stat2="dok_status3" statid2="dok_statusid6"
        rencana="dok_rencana3" rencanaid="dok_rencana3"
        realisasi="dok_realisasi3" realisasiid="dok_realisasi3"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp4" tlpid="dok_tlp4" tlpval="ku" tlplabel="Ketentuan umum" tlptext="dok_input4"
        pic="dok_pic4" picid="dok_pic4" 
        dok="dok_dok4" dokid="dok_dok4" 
        stat="dok_status4" statid="dok_statusid7"
        stat2="dok_status4" statid2="dok_statusid8"
        rencana="dok_rencana4" rencanaid="dok_rencana4"
        realisasi="dok_realisasi4" realisasiid="dok_realisasi4"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp5" tlpid="dok_tlp5" tlpval="protap" tlplabel="Protap" tlptext="dok_input5"
        pic="dok_pic5" picid="dok_pic5" 
        dok="dok_dok5" dokid="dok_dok5" 
        stat="dok_status5" statid="dok_statusid9"
        stat2="dok_status5" statid2="dok_statusid10"
        rencana="dok_rencana5" rencanaid="dok_rencana5"
        realisasi="dok_realisasi5" realisasiid="dok_realisasi5"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp6" tlpid="dok_tlp6" tlpval="formulir" tlplabel="Formulir" tlptext="dok_input6"
        pic="dok_pic6" picid="dok_pic6" 
        dok="dok_dok6" dokid="dok_dok6" 
        stat="dok_status6" statid="dok_statusid11"
        stat2="dok_status6" statid2="dok_statusid12"
        rencana="dok_rencana6" rencanaid="dok_rencana6"
        realisasi="dok_realisasi6" realisasiid="dok_realisasi6"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp7" tlpid="dok_tlp7" tlpval="daftar" tlplabel="Daftar" tlptext="dok_input7"
        pic="dok_pic7" picid="dok_pic7" 
        dok="dok_dok7" dokid="dok_dok7" 
        stat="dok_status7" statid="dok_statusid13"
        stat2="dok_status7" statid2="dok_statusid14"
        rencana="dok_rencana7" rencanaid="dok_rencana7"
        realisasi="dok_realisasi7" realisasiid="dok_realisasi7"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp8" tlpid="dok_tlp8" tlpval="spek" tlplabel="Spesifikasi" tlptext="dok_input8"
        pic="dok_pic8" picid="dok_pic8" 
        dok="dok_dok8" dokid="dok_dok8" 
        stat="dok_status8" statid="dok_statusid15"
        stat2="dok_status8" statid2="dok_status16"
        rencana="dok_rencana8" rencanaid="dok_rencana8"
        realisasi="dok_realisasi8" realisasiid="dok_realisasi8"
        />
        
        <x-kop2 kategori="" 
        tlp="dok_tlp9" tlpid="dok_tlp9" tlpval="ma" tlplabel="Metode analisa" tlptext="dok_input9"
        pic="dok_pic9" picid="dok_pic9" 
        dok="dok_dok9" dokid="dok_dok9" 
        stat="dok_status9" statid="dok_status17"
        stat2="dok_status9" statid2="dok_status18"
        rencana="dok_rencana9" rencanaid="dok_rencana9"
        realisasi="dok_realisasi9" realisasiid="dok_realisasi9"
        />
        
        //ealah lupa di tambahin no dokumennya
        <x-kop4 kategori="" 
        tlp="dok_tlp10" tlpid="dok_tlp10" tlpval="ma" tlptext="dok_input10"
        pic="dok_pic10" picid="dok_pic10" 
        stat="dok_status10" statid="dok_status19"
        stat2="dok_status10" statid2="dok_status20"
        rencana="dok_rencana10" rencanaid="dok_rencana10"
        realisasi="dok_realisasi10" realisasiid="dok_realisasi10"
        />
        <hr>

        {{-- DESAIN KEMASAN --}}
        <x-kop kategori="Desain Kemasan" 
        tlp="dk_tlp" tlpid="dk_tlp" tlpval="sppe" tlplabel="Artwork Desain Kemasan" 
        pic="dk_pic" picid="dk_pic" 
        dok="dk_dok" dokid="dk_dok" 
        stat="dk_status" statid="dk_statusid"
        stat2="dk_status" statid2="dk_statusid2"
        rencana="dk_rencana" rencanaid="dk_rencana"
        realisasi="dk_realisasi" realisasiid="dk_realisasi"
        />
        <hr>

        {{-- SISTEM ERP  --}}
        <x-kop kategori="Sistem ERP" 
        tlp="sis_tlp" tlpid="sis_tlp" tlpval="sppe" tlplabel="Screenshoot perubahan pada ER" 
        pic="sis_pic" picid="sis_pic" 
        dok="sis_dok" dokid="sis_dok" 
        stat="sis_status" statid="sis_statusid"
        stat2="sis_status" statid2="sis_statusid2"
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
                <tr>
                    <td class="font-weight-bold"> Catatan :</td>
                </tr>
                <tr>
                    <td>
                        <textarea class="form-control" name="kop_tambahan" rows="3">{{old('catatan')}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="font-weight-bold">Masukan File / Dokumen (*Jika Diperlukan)</label>
                            <input name="kop_files" type="file" class="form-control-file @error('kop_files') is-invalid @enderror"> <p class="text-danger mt-1" style="font-size: 14px">Max: 2MB | PDF / JPG/ JPEG / PNG</p>
                        </div>
                        @error('kop_files')
                        <span class="invalid-feedback" role="alert">
                            <strong>*File tidak sesuai dengan Ketentuan!</strong>
                        </span>
                        @enderror
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
                    <input type="text" class="form-control" placeholder="Sertakan Nama" id="mpm_nama" name="mpm_nama" value="{{ old('mpm_nama') }}">
                </td>
                <td>
                    <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="mpm_date">
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
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="1">
                            <label class="form-check-label">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="2">
                            <label class="form-check-label">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="3">
                            <label class="form-check-label">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="4">
                            <label class="form-check-label">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="5">
                            <label class="form-check-label">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="6">
                            <input type="text" name="dis_input" class="form-control" id="dis_input">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="7">
                            <label class="form-check-label">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dis_setuju[]" value="8">
                            <label class="form-check-label">Pengadaan</label>
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