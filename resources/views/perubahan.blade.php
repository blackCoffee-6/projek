@extends('layouts.main')

@section('content')
@section('content')
<style>
    table.table-bordered{
        border:1px solid black;
        margin-top:20px;
      }
    table.table-bordered > thead > tr > th{
        border:1px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border:1px solid black;
    
    }
</style>
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Kontrol Perubahan
    </h1>
    <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
    <div class="container my-4">
        <table class="table table-bordered">
            <tr>
                <th>Mitigasi Dampak Usulan Perubahan</th>
            </tr>
        </table>
        <table class="table table-bordered my-3">
            <thead>
            <tr>
                <th scope="col" width="1%"><center> No.</center></th>
                <th scope="col" width="5%"><center> Kategori</center></th>
                <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
                <th scope="col" width="5%">
                    <center>
                        <div class="row">
                            <div class="col-md-12"> 
                                Rencana 
                            </div>
                            <div class="col-md-12">
                                Penyelesaian
                            </div>
                        </div>
                    </center>
                </th>
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
                <th scope="col" width="5%">
                    <center>
                        <div class="row">
                            <div class="col-md-12">
                                Realisasi
                            </div>
                            <div class="col-md-12">
                                Penyelesaian
                            </div>
                        </div>
                    </center>
                </th>
            </tr>
            </thead>
            <tbody>
            {{-- REGULASI --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 1</center></td>
                <td align="justify">Regulasi</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[0]" id="inlineRadio1" value="supel">
                        <label class="form-check-label">Surat pelaporan ke instansi pemerintah</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            {{-- REGISTRASI --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 2</center></td>
                <td align="justify">Registrasi</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[1]" value="pie">
                        <label class="form-check-label">PIE / Approvable Letter</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            {{-- STABILITAS --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 3</center></td>
                <td align="justify">Stabilitas</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[2]" value="protokol">
                        <label class="form-check-label">Protokol uji stabilitas</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <td scope="row"><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[3]" value="stabilitas">
                        <label class="form-check-label">Laporan uji stabilitas</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            {{-- MASA EDAR --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 4</center></td>
                <td align="justify">Masa Edar</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[4]" value="daftardalu" id="daftardalu">
                        <label class="form-check-label">Daftar daluwarsa produk</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="screenrev" type="checkbox" name="object[5]">
						<label class="form-check-label">Screenshoot revisi daluarsa pada ERP</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            {{-- VALIDASI / KUALIFIKASI --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 5</center></td>
                <td align="justify">Validasi / Kualifikasi</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[6]" value="protokol2">
                        <label class="form-check-label">Protokol validasi pengolahan</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[7]" value="laval">
                        <label class="form-check-label">Laporan validasi pengolahan</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[8]" value="protokol3">
                        <label class="form-check-label">Protokol validasi pengemasan</label>
                    </div>
                </td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
                <td><input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[9]" value="laval2">
                        <label class="form-check-label">Laporan validasi pengemasan</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[9]" class="form-control" value=""></td>
				<td><input type="text" name="pic[9]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[9]" class="form-control" value=""></td>
				<td><input type="text" name="reape[9]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="object[10]" value="protokol4">
                        <label class="form-check-label">Protokol validasi pembersihan</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[10]" class="form-control" value=""></td>
				<td><input type="text" name="pic[10]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[10]" class="form-control" value=""></td>
				<td><input type="text" name="reape[10]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laval3" type="checkbox" name="object[11]">
                        <label class="form-check-label">Laporan validasi pembersihan</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[11]" class="form-control" value=""></td>
				<td><input type="text" name="pic[11]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[11]" class="form-control" value=""></td>
				<td><input type="text" name="reape[11]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="protokol5" type="checkbox" name="object[12]">
                        <label class="form-check-label">Protokol validasi metode analisa</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[12]" class="form-control" value=""></td>
				<td><input type="text" name="pic[12]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[12]" class="form-control" value=""></td>
				<td><input type="text" name="reape[12]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laval4" type="checkbox" name="object[13]">
                        <label class="form-check-label">Laporan validasi metode analisa</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[13]" class="form-control" value=""></td>
				<td><input type="text" name="pic[13]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[13]" class="form-control" value=""></td>
				<td><input type="text" name="reape[13]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="protokol6" type="checkbox" name="object[14]">
                        <label class="form-check-label">Protokol kualifikasi instalasi</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[14]" class="form-control" value=""></td>
				<td><input type="text" name="pic[14]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[14]" class="form-control" value=""></td>
				<td><input type="text" name="reape[14]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laval5" type="checkbox" name="object[15]">
                        <label class="form-check-label">Laporan kualifikasi instalasi</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[15]" class="form-control" value=""></td>
				<td><input type="text" name="pic[15]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[15]" class="form-control" value=""></td>
				<td><input type="text" name="reape[15]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="protokol7" type="checkbox" name="object[16]">
                        <label class="form-check-label">Protokol kualifikasi operasional</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[16]" class="form-control" value=""></td>
				<td><input type="text" name="pic[16]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[16]" class="form-control" value=""></td>
				<td><input type="text" name="reape[16]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laval6" type="checkbox" name="object[17]">
                        <label class="form-check-label">Laporan kualifikasi operasional</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[17]" class="form-control" value=""></td>
				<td><input type="text" name="pic[17]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[17]" class="form-control" value=""></td>
				<td><input type="text" name="reape[17]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="protokol8" type="checkbox" name="object[18]">
                        <label class="form-check-label">Protokol kualifikasi kinerja</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[18]" class="form-control" value=""></td>
				<td><input type="text" name="pic[18]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[18]" class="form-control" value=""></td>
				<td><input type="text" name="reape[18]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laval7" type="checkbox" name="object[19]">
                        <label class="form-check-label">Laporan kualifikasi kinerja</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[19]" class="form-control" value=""></td>
				<td><input type="text" name="pic[19]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[19]" class="form-control" value=""></td>
				<td><input type="text" name="reape[19]" class="form-control" value=""></td>
            </tr>
            {{-- TRIAL --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 6</center></td>
                <td align="justify">Trial</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="LHT" type="checkbox" name="object[20]">
                        <label class="form-check-label">LHT skala laboratorium</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[20]" class="form-control" value=""></td>
				<td><input type="text" name="pic[20]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[20]" class="form-control" value=""></td>
				<td><input type="text" name="reape[20]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="CPB" type="checkbox" name="object[21]">
                        <label class="form-check-label">CPB skala pilot</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[21]" class="form-control" value=""></td>
				<td><input type="text" name="pic[21]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[21]" class="form-control" value=""></td>
				<td><input type="text" name="reape[21]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="LHT2" type="checkbox" name="object[22]">
                        <label class="form-check-label">LHT skala pilot</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[22]" class="form-control" value=""></td>
				<td><input type="text" name="pic[22]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[22]" class="form-control" value=""></td>
				<td><input type="text" name="reape[22]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="CPB2" type="checkbox" name="object[23]">
                        <label class="form-check-label">CPB Pengolahan</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[23]" class="form-control" value=""></td>
				<td><input type="text" name="pic[23]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[23]" class="form-control" value=""></td>
				<td><input type="text" name="reape[23]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="catatan" type="checkbox" name="object[24]">
                        <label class="form-check-label">Catatan analisa produk ruahan</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[24]" class="form-control" value=""></td>
				<td><input type="text" name="pic[24]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[24]" class="form-control" value=""></td>
				<td><input type="text" name="reape[24]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="CPB3" type="checkbox" name="object[25]">
                        <label class="form-check-label" for="inlineRadio1">CPB Pengemasan</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[25]" class="form-control" value=""></td>
				<td><input type="text" name="pic[25]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[25]" class="form-control" value=""></td>
				<td><input type="text" name="reape[25]" class="form-control" value=""></td>
            </tr>
            {{-- PRODUKSI --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 7</center></td>
                <td align="justify">Produksi</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" class="form-check-input" value="laha" type="checkbox" name="object[26]">
                        <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext" class="form-control mt-1" value=""></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[26]" class="form-control" value=""></td>
				<td><input type="text" name="pic[26]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[26]" class="form-control" value=""></td>
				<td><input type="text" name="reape[26]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laha2" type="checkbox" name="object[27]">
						<label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext2" class="form-control mt-1" value=""></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[27]" class="form-control" value=""></td>
				<td><input type="text" name="pic[27]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[27]" class="form-control" value=""></td>
				<td><input type="text" name="reape[27]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="laha3" type="checkbox" name="object[28]">
                        <label class="form-check-label">Laporan hasil uji <input type="text" name="lahatext3" class="form-control mt-1" value=""></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[28]" class="form-control" value=""></td>
				<td><input type="text" name="pic[28]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[28]" class="form-control" value=""></td>
				<td><input type="text" name="reape[28]" class="form-control" value=""></td>
            </tr>
            {{-- DOKUMEN --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 8</center></td>
                <td align="justify">Dokumen</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="manual" type="checkbox" name="object[29]">
                        <label class="form-check-label">Manual Mutu</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[29]" class="form-control" value=""></td>
				<td><input type="text" name="pic[29]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[29]" class="form-control" value=""></td>
				<td><input type="text" name="reape[29]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="dokuin" type="checkbox" name="object[30]">
                        <label class="form-check-label">Dokumen induk industri farmasi</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[30]" class="form-control" value=""></td>
				<td><input type="text" name="pic[30]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[30]" class="form-control" value=""></td>
				<td><input type="text" name="reape[30]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="prose" type="checkbox" name="object[31]">
						<label class="form-check-label">Prosedur <input type="text" class="form-control" value="" name="prosetext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[31]" class="form-control" value=""></td>
				<td><input type="text" name="pic[31]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[31]" class="form-control" value=""></td>
				<td><input type="text" name="reape[31]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="ketentuan" type="checkbox" name="object[32]">
						<label class="form-check-label">Ketentuan umum <input type="text" class="form-control" value="" name="ketentuantext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[32]" class="form-control" value=""></td>
				<td><input type="text" name="pic[32]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[32]" class="form-control" value=""></td>
				<td><input type="text" name="reape[32]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="protap" type="checkbox" name="object[33]">
						<label class="form-check-label">Protap <input type="text" class="form-control" value="" name="protaptext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[33]" class="form-control" value=""></td>
				<td><input type="text" name="pic[33]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[33]" class="form-control" value=""></td>
				<td><input type="text" name="reape[33]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="formulir" type="checkbox" name="object[34]">
						<label class="form-check-label">Formulir <input type="text" class="form-control" value="" name="formulirtext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[34]" class="form-control" value=""></td>
				<td><input type="text" name="pic[34]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[34]" class="form-control" value=""></td>
				<td><input type="text" name="reape[34]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="daftar" type="checkbox" name="object[35]">
						<label class="form-check-label">Daftar <input type="text" class="form-control" value="" name="daftartext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[35]" class="form-control" value=""></td>
				<td><input type="text" name="pic[35]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[35]" class="form-control" value=""></td>
				<td><input type="text" name="reape[35]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="spek" type="checkbox" name="object[36]">
						<label class="form-check-label">Spesifikasi <input type="text" class="form-control" value="" name="spektext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[36]" class="form-control" value=""></td>
				<td><input type="text" name="pic[36]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[36]" class="form-control" value=""></td>
				<td><input type="text" name="reape[36]" class="form-control" value=""></td>
            </tr>
            <tr>
                <td><center></center></td>
                <td align="justify"></td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" value="metodean" type="checkbox" name="object[37]">
						<label class="form-check-label">Metode analisa <input type="text" class="form-control" value="" name="metodeantext"></label>
                    </div>
                </td>
                <td><input type="text" name="renpe[37]" class="form-control" value=""></td>
				<td><input type="text" name="pic[37]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[37]" class="form-control" value=""></td>
				<td><input type="text" name="reape[37]" class="form-control" value=""></td>
            </tr>
            {{-- SISTEM ERP --}}
            <tr>
                <td scope="row" class="font-weight-bold"><center> 9</center></td>
                <td align="justify">Sistem ERP</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" value="screenperu" type="checkbox" name="object[38]">
						<label class="form-check-label">Screenshoot perubahan pada ERP</label>
                    </div>
                </td>
                <td><input type="text" name="renpe[38]" class="form-control" value=""></td>
				<td><input type="text" name="pic[38]" class="form-control" value=""></td>
				<td><input type="text" name="nodok[38]" class="form-control" value=""></td>
				<td><input type="text" name="reape[38]" class="form-control" value=""></td>
            </tr>
            </tbody>
        </table>
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