<div class="content">
    <table>
        <thead>
            <tr>
                <th colspan="2" rowspan="2"></th>
                <th></th>
                <th></th>
                <th colspan="3" style="font-weight: bold" align="center" width="30">Kontrol Perubahan</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th colspan="3" align="center" width="30">{{$fups->no_usulan}}</th>
            </tr>
            <tr><th></th></tr>
            <tr>
                <th colspan="2" style="font-weight: bold" align="center">Mitigasi Dampak Usulan Perubahan</th>
            </tr>
            <tr><th></th></tr>
            <tr>
                <th style="font-weight: bold" align="center">Kategori</th>
                <th style="font-weight: bold" align="center">Tindak Lanjut Perubahan</th>
                <th style="font-weight: bold" align="center">PIC</th>
                <th style="font-weight: bold" align="center">No. Dokumen</th>
                <th style="font-weight: bold" align="center">Status</th>
                <th style="font-weight: bold" align="center">Tanggal Selesai</th>
                <th colspan="4" style="font-weight: bold" align="center">Rencana Penyelesaian</th>
                <th colspan="4" style="font-weight: bold" align="center">Realisasi Penyelesaian</th>
            </tr>
        </thead>
        <tbody>
            <!-- Regulasi -->
            <tr>
                <td align="center" rowspan="2">Regulasi</td>
                <td rowspan="2">
                    @if($kontrols->ru_tlp)
                    Surat pelaporan ke instansi pemerintah
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ru_pic)
                    {{$kontrols->ru_pic}}
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ru_dok)
                    {{$kontrols->ru_dok}}
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ru_status)
                    {{$kontrols->ru_status}}
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ru_date)
                    {{$kontrols->ru_date}}
                    @endif
                </td> 
                <td rowspan="2" align="center" colspan="4">
                    @if($kontrols->ru_rencana)
                    {{$kontrols->ru_rencana}}
                    @endif
                </td>
                <td rowspan="2" align="center" colspan="4">
                    @if($kontrols->ru_realisasi)
                    {{$kontrols->ru_realisasi}}
                    @endif
                </td>
            </tr>
            <tr><th></th></tr>
            <!-- Registrasi -->
            <tr>
                <td align="center" rowspan="2">Registrasi</td>
                <td rowspan="2">
                    @if($kontrols->ri_tlp)
                    PIE / Approvable Letter
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ri_pic)
                    {{$kontrols->ri_pic}}
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ri_dok)
                    {{$kontrols->ri_dok}}
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ri_status)
                    {{$kontrols->ri_status}}
                    @endif
                </td>
                <td rowspan="2" align="center">
                    @if($kontrols->ri_date)
                    {{$kontrols->ri_date}}
                    @endif
                </td> 
                <td rowspan="2" align="center" colspan="4">
                    @if($kontrols->ri_rencana)
                    {{$kontrols->ri_rencana}}
                    @endif
                </td>
                <td rowspan="2" align="center" colspan="4">
                    @if($kontrols->ri_realisasi)
                    {{$kontrols->ri_realisasi}}
                    @endif
                </td>
            </tr>
            <tr><th></th></tr>
            <!-- Stabilitas -->
            <tr>
                <td align="center" rowspan="2">Stabilitas</td>
                <td >
                    @if($kontrols->st_tlp)
                    Protokol uji stabilitas
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_pic)
                    {{$kontrols->st_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_dok)
                    {{$kontrols->st_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_status)
                    {{$kontrols->st_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_date)
                    {{$kontrols->st_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->st_rencana)
                    {{$kontrols->st_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->st_realisasi)
                    {{$kontrols->st_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->st_tlp2)
                    Laporan uji stabilitas
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_pic2)
                    {{$kontrols->st_pic2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_dok2)
                    {{$kontrols->st_dok2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_status2)
                    {{$kontrols->st_status2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->st_date2)
                    {{$kontrols->st_date2}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->st_rencana2)
                    {{$kontrols->st_rencana2}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->st_realisasi2)
                    {{$kontrols->st_realisasi2}}
                    @endif
                </td>
            </tr>
            <!-- Masa Edar -->
            <tr>
                <td align="center" rowspan="2">Masa Edar</td>
                <td >
                    @if($kontrols->me_tlp)
                    Protokol uji stabilitas
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_pic)
                    {{$kontrols->me_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_dok)
                    {{$kontrols->me_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_status)
                    {{$kontrols->me_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_date)
                    {{$kontrols->me_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->me_rencana)
                    {{$kontrols->me_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->me_realisasi)
                    {{$kontrols->me_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->me_tlp2)
                    Laporan uji stabilitas
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_pic2)
                    {{$kontrols->me_pic2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_dok2)
                    {{$kontrols->me_dok2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_status2)
                    {{$kontrols->me_status2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->me_date2)
                    {{$kontrols->me_date2}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->me_rencana2)
                    {{$kontrols->me_rencana2}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->me_realisasi2)
                    {{$kontrols->me_realisasi2}}
                    @endif
                </td>
            </tr>
            <!-- Validasi / Kualifikasi -->
            <tr>
                <td align="center" rowspan="14">Validasi / Kualifikasi</td>
                <td >
                    @if($kontrols->val_tlp)
                    Protokol validasi pengolahan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic)
                    {{$kontrols->val_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok)
                    {{$kontrols->val_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status)
                    {{$kontrols->val_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date)
                    {{$kontrols->val_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana)
                    {{$kontrols->val_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi)
                    {{$kontrols->val_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp2)
                    Laporan validasi pengolahan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic2)
                    {{$kontrols->val_pic2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok2)
                    {{$kontrols->val_dok2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status2)
                    {{$kontrols->val_status2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date2)
                    {{$kontrols->val_date2}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana2)
                    {{$kontrols->val_rencana2}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi2)
                    {{$kontrols->val_realisasi2}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp3)
                    Protokol validasi pengemasan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic3)
                    {{$kontrols->val_pic3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok3)
                    {{$kontrols->val_dok3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status3)
                    {{$kontrols->val_status3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date3)
                    {{$kontrols->val_date3}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana3)
                    {{$kontrols->val_rencana3}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi3)
                    {{$kontrols->val_realisasi3}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp4)
                    Laporan validasi pengemasan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic4)
                    {{$kontrols->val_pic4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok4)
                    {{$kontrols->val_dok4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status4)
                    {{$kontrols->val_status4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date4)
                    {{$kontrols->val_date4}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana4)
                    {{$kontrols->val_rencana4}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi4)
                    {{$kontrols->val_realisasi4}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp5)
                    Protokol validasi pembersihan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic5)
                    {{$kontrols->val_pic5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok5)
                    {{$kontrols->val_dok5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status5)
                    {{$kontrols->val_status5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date5)
                    {{$kontrols->val_date5}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana5)
                    {{$kontrols->val_rencana5}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi5)
                    {{$kontrols->val_realisasi5}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp6)
                    Laporan validasi pembersihan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic6)
                    {{$kontrols->val_pic6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok6)
                    {{$kontrols->val_dok6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status6)
                    {{$kontrols->val_status6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date6)
                    {{$kontrols->val_date6}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana6)
                    {{$kontrols->val_rencana6}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi6)
                    {{$kontrols->val_realisasi6}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp7)
                    Protokol validasi metode analisa
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic7)
                    {{$kontrols->val_pic7}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok7)
                    {{$kontrols->val_dok7}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status7)
                    {{$kontrols->val_status7}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date7)
                    {{$kontrols->val_date7}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana7)
                    {{$kontrols->val_rencana7}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi7)
                    {{$kontrols->val_realisasi7}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp8)
                    Laporan validasi metode analisa
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic8)
                    {{$kontrols->val_pic8}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok8)
                    {{$kontrols->val_dok8}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status8)
                    {{$kontrols->val_status8}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date8)
                    {{$kontrols->val_date8}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana8)
                    {{$kontrols->val_rencana8}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi8)
                    {{$kontrols->val_realisasi8}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp9)
                    Protokol kualifikasi instalasi
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic9)
                    {{$kontrols->val_pic9}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok9)
                    {{$kontrols->val_dok9}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status9)
                    {{$kontrols->val_status9}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date9)
                    {{$kontrols->val_date9}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana9)
                    {{$kontrols->val_rencana9}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi9)
                    {{$kontrols->val_realisasi9}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp10)
                    Laporan kualifikasi instalasi
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic10)
                    {{$kontrols->val_pic10}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok10)
                    {{$kontrols->val_dok10}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status10)
                    {{$kontrols->val_status10}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date10)
                    {{$kontrols->val_date10}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana10)
                    {{$kontrols->val_rencana10}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi10)
                    {{$kontrols->val_realisasi10}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp11)
                    Protokol kualifikasi operasional
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic11)
                    {{$kontrols->val_pic11}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok11)
                    {{$kontrols->val_dok11}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status11)
                    {{$kontrols->val_status11}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date11)
                    {{$kontrols->val_date11}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana11)
                    {{$kontrols->val_rencana11}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi11)
                    {{$kontrols->val_realisasi11}}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($kontrols->val_tlp12)
                    Laporan kualifikasi operasional
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic12)
                    {{$kontrols->val_pic12}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok12)
                    {{$kontrols->val_dok12}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status12)
                    {{$kontrols->val_status12}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date12)
                    {{$kontrols->val_date12}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana12)
                    {{$kontrols->val_rencana12}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi12)
                    {{$kontrols->val_realisasi12}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp13)
                    Protokol kualifikasi kinerja
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic13)
                    {{$kontrols->val_pic13}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok13)
                    {{$kontrols->val_dok13}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status13)
                    {{$kontrols->val_status13}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date13)
                    {{$kontrols->val_date13}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana13)
                    {{$kontrols->val_rencana13}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi13)
                    {{$kontrols->val_realisasi13}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->val_tlp14)
                    Laporan kualifikasi kinerja
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_pic14)
                    {{$kontrols->val_pic14}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_dok14)
                    {{$kontrols->val_dok14}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_status14)
                    {{$kontrols->val_status14}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->val_date14)
                    {{$kontrols->val_date14}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->val_rencana14)
                    {{$kontrols->val_rencana14}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->val_realisasi14)
                    {{$kontrols->val_realisasi14}}
                    @endif
                </td>
            </tr>
            <!-- Trial -->
            <tr>
                <td align="center" rowspan="6">Trial</td>
                <td >
                    @if($kontrols->tr_tlp)
                    LHT skala laboratorium
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_pic)
                    {{$kontrols->tr_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_dok)
                    {{$kontrols->tr_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_status)
                    {{$kontrols->tr_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_date)
                    {{$kontrols->tr_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->tr_rencana)
                    {{$kontrols->tr_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->tr_realisasi)
                    {{$kontrols->tr_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->tr_tlp2)
                    CPB skala pilot
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_pic2)
                    {{$kontrols->tr_pic2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_dok2)
                    {{$kontrols->tr_dok2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_status2)
                    {{$kontrols->tr_status2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_date2)
                    {{$kontrols->tr_date2}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->tr_rencana2)
                    {{$kontrols->tr_rencana2}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->tr_realisasi2)
                    {{$kontrols->tr_realisasi2}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->tr_tlp3)
                    LHT skala pilot
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_pic3)
                    {{$kontrols->tr_pic3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_dok3)
                    {{$kontrols->tr_dok3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_status3)
                    {{$kontrols->tr_status3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_date3)
                    {{$kontrols->tr_date3}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->tr_rencana3)
                    {{$kontrols->tr_rencana3}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->tr_realisasi3)
                    {{$kontrols->tr_realisasi3}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->tr_tlp4)
                    CPB Pengolahan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_pic4)
                    {{$kontrols->tr_pic4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_dok4)
                    {{$kontrols->tr_dok4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_status4)
                    {{$kontrols->tr_status4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_date4)
                    {{$kontrols->tr_date4}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->tr_rencana4)
                    {{$kontrols->tr_rencana4}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->tr_realisasi4)
                    {{$kontrols->tr_realisasi4}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->tr_tlp5)
                    Catatan analisa produk ruahan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_pic5)
                    {{$kontrols->tr_pic5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_dok5)
                    {{$kontrols->tr_dok5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_status5)
                    {{$kontrols->tr_status5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_date5)
                    {{$kontrols->tr_date5}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->tr_rencana5)
                    {{$kontrols->tr_rencana5}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->tr_realisasi5)
                    {{$kontrols->tr_realisasi5}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->tr_tlp6)
                    CPB Pengemasan
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_pic6)
                    {{$kontrols->tr_pic6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_dok6)
                    {{$kontrols->tr_dok6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_status6)
                    {{$kontrols->tr_status6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->tr_date6)
                    {{$kontrols->tr_date6}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->tr_rencana6)
                    {{$kontrols->tr_rencana6}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->tr_realisasi6)
                    {{$kontrols->tr_realisasi6}}
                    @endif
                </td>
            </tr>
            <!-- Produksi -->
            <tr>
                <td align="center" rowspan="3">Produksi</td>
                <td >
                    @if($kontrols->pro_tlp)
                    Laporan hasil uji : 
                        @if($kontrols->pro_input)
                            {{$kontrols->pro_input}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_pic)
                    {{$kontrols->pro_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_dok)
                    {{$kontrols->pro_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_status)
                    {{$kontrols->pro_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_date)
                    {{$kontrols->pro_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->pro_rencana)
                    {{$kontrols->pro_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->pro_realisasi)
                    {{$kontrols->pro_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->pro_tlp2)
                    Laporan hasil uji : 
                        @if($kontrols->pro_input2)
                            {{$kontrols->pro_input2}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_pic2)
                    {{$kontrols->pro_pic2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_dok2)
                    {{$kontrols->pro_dok2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_status2)
                    {{$kontrols->pro_status2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_date2)
                    {{$kontrols->pro_date2}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->pro_rencana2)
                    {{$kontrols->pro_rencana2}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->pro_realisasi2)
                    {{$kontrols->pro_realisasi2}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->pro_tlp3)
                    Laporan hasil uji : 
                        @if($kontrols->pro_input3)
                            {{$kontrols->pro_input3}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_pic3)
                    {{$kontrols->pro_pic3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_dok3)
                    {{$kontrols->pro_dok3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_status3)
                    {{$kontrols->pro_status3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->pro_date3)
                    {{$kontrols->pro_date3}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->pro_rencana3)
                    {{$kontrols->pro_rencana3}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->pro_realisasi3)
                    {{$kontrols->pro_realisasi3}}
                    @endif
                </td>
            </tr>
            <!-- Dokumen -->
            <tr>
                <td align="center" rowspan="9">Dokumen</td>
                <td >
                    @if($kontrols->dok_tlp)
                    Manual Mutu
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic)
                    {{$kontrols->dok_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok)
                    {{$kontrols->dok_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status)
                    {{$kontrols->dok_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date)
                    {{$kontrols->dok_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana)
                    {{$kontrols->dok_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi)
                    {{$kontrols->dok_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp2)
                    Dokumen induk industri farmasi
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic2)
                    {{$kontrols->dok_pic2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok2)
                    {{$kontrols->dok_dok2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status2)
                    {{$kontrols->dok_status2}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date2)
                    {{$kontrols->dok_date2}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana2)
                    {{$kontrols->dok_rencana2}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi2)
                    {{$kontrols->dok_realisasi2}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp3)
                    Prosedur : 
                        @if($kontrols->dok_input3)
                            {{$kontrols->dok_input3}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic3)
                    {{$kontrols->dok_pic3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok3)
                    {{$kontrols->dok_dok3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status3)
                    {{$kontrols->dok_status3}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date3)
                    {{$kontrols->dok_date3}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana3)
                    {{$kontrols->dok_rencana3}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi3)
                    {{$kontrols->dok_realisasi3}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp4)
                    Ketentuan umum
                        @if($kontrols->dok_input4)
                            {{$kontrols->dok_input4}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic4)
                    {{$kontrols->dok_pic4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok4)
                    {{$kontrols->dok_dok4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status4)
                    {{$kontrols->dok_status4}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date4)
                    {{$kontrols->dok_date4}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana4)
                    {{$kontrols->dok_rencana4}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi4)
                    {{$kontrols->dok_realisasi4}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp5)
                    Protap
                        @if($kontrols->dok_input5)
                            {{$kontrols->dok_input5}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic5)
                    {{$kontrols->dok_pic5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok5)
                    {{$kontrols->dok_dok5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status5)
                    {{$kontrols->dok_status5}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date5)
                    {{$kontrols->dok_date5}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana5)
                    {{$kontrols->dok_rencana5}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi5)
                    {{$kontrols->dok_realisasi5}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp6)
                    Formulir
                        @if($kontrols->dok_input6)
                            {{$kontrols->dok_input6}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic6)
                    {{$kontrols->dok_pic6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok6)
                    {{$kontrols->dok_dok6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status6)
                    {{$kontrols->dok_status6}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date6)
                    {{$kontrols->dok_date6}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana6)
                    {{$kontrols->dok_rencana6}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi6)
                    {{$kontrols->dok_realisasi6}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp7)
                    Daftar
                        @if($kontrols->dok_input7)
                            {{$kontrols->dok_input7}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic7)
                    {{$kontrols->dok_pic7}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok7)
                    {{$kontrols->dok_dok7}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status7)
                    {{$kontrols->dok_status7}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date7)
                    {{$kontrols->dok_date7}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana7)
                    {{$kontrols->dok_rencana7}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi7)
                    {{$kontrols->dok_realisasi7}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp8)
                    Spesifikasi
                        @if($kontrols->dok_input8)
                            {{$kontrols->dok_input8}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic8)
                    {{$kontrols->dok_pic8}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok8)
                    {{$kontrols->dok_dok8}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status8)
                    {{$kontrols->dok_status8}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date8)
                    {{$kontrols->dok_date8}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana8)
                    {{$kontrols->dok_rencana8}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi8)
                    {{$kontrols->dok_realisasi8}}
                    @endif
                </td>
            </tr>
            <tr>
                <td >
                    @if($kontrols->dok_tlp9)
                    Metode analisa
                        @if($kontrols->dok_input9)
                            {{$kontrols->dok_input9}}
                        @endif
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_pic9)
                    {{$kontrols->dok_pic9}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_dok9)
                    {{$kontrols->dok_dok9}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_status9)
                    {{$kontrols->dok_status9}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->dok_date9)
                    {{$kontrols->dok_date9}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->dok_rencana9)
                    {{$kontrols->dok_rencana9}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->dok_realisasi9)
                    {{$kontrols->dok_realisasi9}}
                    @endif
                </td>
            </tr>
            <!-- Sistem ERP -->
            <tr>
                <td align="center">Sistem ERP</td>
                <td >
                    @if($kontrols->sis_tlp)
                    Screenshoot perubahan pada ERP
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->sis_pic)
                    {{$kontrols->sis_pic}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->sis_dok)
                    {{$kontrols->sis_dok}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->sis_status)
                    {{$kontrols->sis_status}}
                    @endif
                </td>
                <td  align="center">
                    @if($kontrols->sis_date)
                    {{$kontrols->sis_date}}
                    @endif
                </td> 
                <td  align="center" colspan="4">
                    @if($kontrols->sis_rencana)
                    {{$kontrols->sis_rencana}}
                    @endif
                </td>
                <td  align="center" colspan="4">
                    @if($kontrols->sis_realisasi)
                    {{$kontrols->sis_realisasi}}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="14" align="center" style="font-weight: bold;">Berdasarkan hasil mitigasi terhadap dampak, maka :</td>
            </tr>
            <tr>
                <td colspan="14" align="center">
                    @if($kontrols->hasil_mitigasi === "dilaksanakan")
                    Perubahan dapat dilaksanakan sejak / pada / sampai : {{$kontrols->hasil_mitigasi_date}}
                    @elseif($kontrols->hasil_mitigasi === "tidak dapat dilaksanakan")
                    Perubahan tidak dapat dilaksanakan
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="14" align="center" style="font-weight: bold;">
                    Distribusi persetujuan perubahan :
                </td>
            </tr>
            @foreach($dis_setujus as $dis_setuju)
            <tr>
                <th colspan="14">
                    @if($dis_setuju)
                    {{$loop->iteration}} .
                    @endif

                    @if($dis_setuju == 1)
                    RND
                    @endif  

                    @if($dis_setuju == 2)
                    Produksi
                    @endif
                    
                    @if($dis_setuju == 3)
                    Pemasaran
                    @endif
                    
                    @if($dis_setuju == 4)
                    QC
                    @endif

                    @if($dis_setuju == 5)
                    Teknik
                    @endif
                    
                    @if($dis_setuju == 6)
                    {{$kontrols->dis_input}}
                    @endif
                    
                    @if($dis_setuju == 7)
                    SCM
                    @endif
                    
                    @if($dis_setuju == 8)
                    Pengadaan
                    @endif
                </th>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_dissetujus == 7)
                <tr><th colspan="14"></th></tr>
                @elseif($count_dissetujus == 6)
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                @elseif($count_dissetujus == 5)
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                @elseif($count_dissetujus == 4)
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                @elseif($count_dissetujus == 3)
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                @elseif($count_dissetujus == 2)
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                @else
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                <tr><th colspan="14"></th></tr>
                @endif
            </div>
        </tbody>
    </table>
</div>