<div class="content">
    <table>
        <thead>
            <tr>
                <th colspan="2" rowspan="2"></th>
            </tr>
            <tr><th></th></tr>
            <tr>
                <th></th>
                <th></th>
                <th colspan="2" style="font-weight: bold" align="center">Kajian Perubahan</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th colspan="2" style="font-weight: bold" align="center">{{$fups->no_usulan}}</th>
            </tr>
            <tr>
                <th></th>
                <th style="font-weight: bold" align="center">Kategori Usulan Perubahan :</th>
            </tr>
            @foreach($ket_ups as $ket_up)
            <tr>
                <th></th>
                <th>
                    @if($ket_up)
                    {{$loop->iteration}} .
                    @endif

                    @if($ket_up == 1)
                    Spesifikasi Bahan / Produk
                    @endif  

                    @if($ket_up == 2)
                    Bahan Baku
                    @endif
                    
                    @if($ket_up == 3)
                    Formula / Proses
                    @endif
                    
                    @if($ket_up == 4)
                    Mesin dan Peralatan
                    @endif

                    @if($ket_up == 9)
                    Lingkungan
                    @endif
                    
                    @if($ket_up == 10)
                    PIE
                    @endif
                    
                    @if($ket_up == 11)
                    Peraturan Perundangan
                    @endif
                    
                    @if($ket_up == 12)
                    {{$kajians->ket_else}}
                    @endif
                    
                    @if($ket_up == 5)
                    Metode Analisis
                    @endif
                    
                    @if($ket_up == 6)
                    Site Produksi
                    @endif
                    
                    @if($ket_up == 7)
                    Bangunan dan Fasilitas
                    @endif
                    
                    @if($ket_up == 8)
                    Dokumentasi
                    @endif
                </th>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_ketups >= 12)
                <tr><th></th></tr>
                @elseif($count_ketups >= 11)
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 10)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 9)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 8)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 7)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 6)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 5)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 4)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 3)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_ketups >= 2)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @else
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @endif
            </div>
            
            <tr>
                <th colspan="5" style="font-weight: bold" align="center">Dampak Usulan Perubahan</th>
            </tr>
            <tr>
                <th width="5" style="font-weight: bold" align="center"> No</th>
                <th style="font-weight: bold" align="center"> Kategori</th>
                <th colspan="2"style="font-weight: bold" align="center"> Uraian</th>
                <th style="font-weight: bold" align="center"> Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <!-- Regulasi -->
            <tr>
                <td rowspan="6" align="center">1.</td>
                <td rowspan="6" align="center">Regulasi</td>
                <td width="30">Perlu pelaporan ke pemerintah</td>
                <td>jika ya, laporan ditujukan ke</td>
                <td width="20" rowspan="6" align="center">{{$kajians->ru_ket}}</td>
            </tr>
            <tr>
                <td align="center" rowspan="5">{{$kajians->ru_a}}</td>
            </tr>
            @foreach($ru_bb as $rub)
            <tr>
                <td>
                    @if($rub)
                    {{$loop->iteration}} .
                    @endif

                    @if($rub === "bpom")
                    Badan POM
                    @endif
                    
                    @if($rub === "kemkes")
                    Kementrian Kesehatan
                    @endif
                    
                    @if($rub === "bapom")
                    Balai POM
                    @endif
                    
                    @if($rub === "regulasielse")
                    {{$kajians->ru_else}}
                    @endif
                </td>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_rubb == 3)
                <tr><th></th></tr>
                @elseif($count_rubb == 2)
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_rubb == 1)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @endif
            </div>
            <!-- Registrasi -->
            <tr>
                <td rowspan="2" align="center">2.</td>
                <td rowspan="2" align="center">Registrasi</td>
                <td width="30">Mempengaruhi izin edar</td>
                <td>jika ya, perubahan</td>
                <td width="20" rowspan="2" align="center">{{$kajians->ri_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->ri_a}}</td>
                @if($kajians->ri_b)
                <td>1 . {{$kajians->ri_b}}</td>
                @endif
            </tr>
            <!-- Stabilitas -->
            <tr>
                <td rowspan="6" align="center">3.</td>
                <td rowspan="6" align="center">Stabilitas</td>
                <td width="30">Mempengaruhi stabilitas</td>
                <td>jika ya, perlu dilakukan uji stabilitas</td>
                <td width="20" rowspan="6" align="center">{{$kajians->st_ket}}</td>
            </tr>
            <tr>
                <td align="center" rowspan="5">{{$kajians->st_a}}</td>
            </tr>
            @foreach($st_bb as $stb)
            <tr>
                <td>
                    @if($stb)
                    {{$loop->iteration}} .
                    @endif

                    @if($stb === "Dipercepat")
                    Dipercepat
                    @endif
                    
                    @if($stb === "Jangka Panjang")
                    Jangka Panjang
                    @endif
                    
                    @if($stb === "Stress")
                    Stress test
                    @endif
                    
                    @if($stb === "Stability")
                    In Use Stability
                    @endif
                </td>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_stbb == 3)
                <tr><th></th></tr>
                @elseif($count_stbb == 2)
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_stbb == 1)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @endif
            </div>
            <!-- Pengujian -->
            <tr>
                <td rowspan="2" align="center">4.</td>
                <td rowspan="2" align="center">Pengujian</td>
                <td width="30">Memerlukan pengujian</td>
                <td>jika ya, sebutkan pengujian yang diperlukan</td>
                <td width="20" rowspan="2" align="center">{{$kajians->pj_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->pj_a}}</td>
                @if($kajians->pj_else)
                <td>1. {{$kajians->pj_else}}</td>
                @endif
            </tr>
            <!-- Masa Edar -->
            <tr>
                <td rowspan="2" align="center">5.</td>
                <td rowspan="2" align="center">Masa Edar</td>
                <td width="30">Mempengaruhi masa edar</td>
                <td></td>
                <td width="20" rowspan="2" align="center">{{$kajians->me_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->me_a}}</td>
                <td></td>
            </tr>
            <!-- Validasi / Kualifikasi -->
            <tr>
                <td rowspan="9" align="center">6.</td>
                <td rowspan="9" align="center">Validasi / Kualifikasi</td>
                <td width="40">Mempengaruhi status validasi / kualifikasi</td>
                <td align="center">jika ya, jenis validasi / kualifikasi</td>
                <td width="20" rowspan="9" align="center">{{$kajians->val_ket}}</td>
            </tr>
            <tr>
                <td align="center" rowspan="8">{{$kajians->val_a}}</td>
            </tr>
            @foreach($val_bb as $valb)
            <tr>
                <td>
                    @if($valb)
                    {{$loop->iteration}} .
                    @endif

                    @if($valb === "pengolahan")
                    Validasi Pengolahan
                    @endif
                    
                    @if($valb === "pembersihan")
                    Validasi Pembersihan
                    @endif
                    
                    @if($valb === "instalasi")
                    Kualifikasi Instalasi
                    @endif
                    
                    @if($valb === "kinerja")
                    Kualifikasi Kinerja
                    @endif
                    
                    @if($valb === "pengemasan")
                    Validasi Pengemasan
                    @endif
                    
                    @if($valb === "analisa")
                    Validasi Metode Analisa
                    @endif
                    
                    @if($valb === "operasional")
                    Kualifikasi Operasional
                    @endif
                </td>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_valbb == 6)
                <tr><th></th></tr>
                @elseif($count_valbb == 5)
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_valbb == 4)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_valbb == 3)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_valbb == 2)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @elseif($count_valbb == 1)
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                <tr><th></th></tr>
                @endif
            </div>
            <!-- Trial -->
            <tr>
                <td rowspan="5" align="center">7.</td>
                <td rowspan="5" align="center">Trial</td>
                <td width="30">Perlu dilakukan trial</td>
                <td>Jika ya, dilakukan trial skala</td>
                <td width="20" rowspan="5" align="center">{{$kajians->tr_ket}}</td>
            </tr>
            <tr>
                <td align="center" rowspan="4">{{$kajians->tr_a}}</td>
            </tr>
            @foreach($tr_bb as $trb)
            <tr>
                <td>
                    @if($trb)
                    {{$loop->iteration}} .
                    @endif

                    @if($trb === "lab")
                    Laboratorium
                    @endif
                    
                    @if($trb === "pilot")
                    Pilot
                    @endif
                    
                    @if($trb === "komersial")
                    Komersial
                    @endif
                </td>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_trbb == 2)
                <tr><th></th></tr>
                @elseif($count_trbb == 1)
                <tr><th></th></tr>
                <tr><th></th></tr>
                @endif
            </div>
            <!-- Produksi -->
            <tr>
                <td rowspan="2" align="center">8.</td>
                <td rowspan="2" align="center">Produksi</td>
                <td width="30">Perlu Pemeriksaan tambahan</td>
                <td>Jika ya, sebutkan pemeriksaan tambahan yang diperlukan</td>
                <td width="20" rowspan="2" align="center">{{$kajians->pr_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->pr_a}}</td>
                @if($kajians->pr_else)
                <td>1 . {{$kajians->pr_else}}</td>
                @endif
            </tr>
            <!-- Dokumen -->
            <tr>
                <td rowspan="2" align="center">9.</td>
                <td rowspan="2" align="center">Dokumen</td>
                <td width="30">Perlu pembuatan / perubahan dokumen</td>
                <td align="center">Jika ya, sebutkan dokumen yang dibuat / diubah</td>
                <td width="20" rowspan="2" align="center">{{$kajians->dok_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->dok_a}}</td>
                @if($kajians->dok_else)
                <td>1 . {{$kajians->dok_else}}</td>
                @endif
            </tr>
            <!-- Desain Kemasan -->
            <tr>
                <td rowspan="2" align="center">10.</td>
                <td rowspan="2" align="center">Desain Kemasan</td>
                <td width="30">Memerlukan Artwork Designer</td>
                <td></td>
                <td width="20" rowspan="2" align="center">{{$kajians->dk_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->dk_a}}</td>
                <td></td>
            </tr>
            <!-- Sistem ERP -->
            <tr>
                <td rowspan="2" align="center">11.</td>
                <td rowspan="2" align="center">Sistem ERP</td>
                <td width="30">Mempengaruhi sistem ERP</td>
                <td></td>
                <td width="20" rowspan="2" align="center">{{$kajians->si_ket}}</td>
            </tr>
            <tr>
                <td align="center">{{$kajians->si_a}}</td>
                <td></td>
            </tr>
            <!-- Kajian Tambahan Terhadap Dampak Atas Usulan Perubahan *(jika diperlukan) -->
            <tr>
                <td colspan="5" align="center" style="font-weight: bold">Kajian Tambahan Terhadap Dampak Atas Usulan Perubahan *(jika diperlukan)</td>
            </tr>
            <tr>
                <td rowspan="3" colspan="5" align="center">
                    {{$kajians->kj_tambahan}}
                </td>
            </tr>
            <tr><td></td></tr><tr><td></td></tr>
            <!-- Penilaian Resiko Mutu -->
            <tr>
                <td colspan="5" align="center" style="font-weight: bold">Penilaian Resiko Mutu</td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-weight: bold">Severity (Dampak / Keparahan)</td>
                <td align="center" style="font-weight: bold">Detectability (Kemungkinan Deteksi)</td>
                <td align="center" style="font-weight: bold">Occurrence (Kemungkinan Terjadi)</td>
                <td align="center" style="font-weight: bold">D x O</td>
            </tr>
            <tr>
                <td colspan="2" align="center">{{$kajians->severity1}}</td>
                <td align="center">{{$kajians->detec1}}</td>
                <td align="center">{{$kajians->occur1}}</td>
                <td align="center">{{$kajians->result_dxo}}</td>
            </tr>
            <!-- Kategori Usulan Perubahan -->
            <tr>
                <td colspan="5" align="center" style="font-weight: bold">Kategori Usulan Perubahan</td>
            </tr>
            <tr>
                <td colspan="5" align="center">{{$kajians->ch_kategori}}</td>
            </tr>
            <!-- Status Usulan Perubahan  -->
            <tr>
                <td colspan="5" align="center" style="font-weight: bold">Status Usulan Perubahan</td>
            </tr>
            <tr>
                <td colspan="5" align="center">{{$kajians->ch_status}}</td>
            </tr>
            <!-- Catatan -->
            <tr>
                <td colspan="5" align="center" style="font-weight: bold">Catatan</td>
            </tr>
            <tr>
                <td rowspan="3" colspan="5" align="center">{{$kajians->ch_status}}</td>
            </tr>
            <tr><td></td></tr><tr><td></td></tr>
            <!-- Distribusi Persetujuan Perubahan : -->
            <tr>
                <td colspan="5" align="center" style="font-weight: bold">Distribusi Persetujuan Perubahan :</td>
            </tr>
            @foreach($ch_diss as $ch_dis)
            <tr>
                <th colspan="5">
                    @if($ch_dis)
                    {{$loop->iteration}} . 
                    @endif

                    @if($ch_dis == 1)
                    Produksi
                    @endif  

                    @if($ch_dis == 2)
                    RND
                    @endif
                    
                    @if($ch_dis == 3)
                    Pemasaran
                    @endif
                    
                    @if($ch_dis == 4)
                    Pengawasan Mutu
                    @endif

                    @if($ch_dis == 5)
                    Teknik dan Pemeliharaan
                    @endif
                    
                    @if($ch_dis == 6)
                    SCM
                    @endif
                    
                    @if($ch_dis == 7)
                    Pengadaan
                    @endif

                    @if($ch_dis == 8)
                    {{$kajians->ch_else}}
                    @endif
                </th>
            </tr>
            @endforeach
            <!-- mau di buat di component biar ga jorok -->
            <div>
                @if($count_chdiss == 7)
                <tr><th colspan="5"></th></tr>
                @elseif($count_chdiss == 6)
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                @elseif($count_chdiss == 5)
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                @elseif($count_chdiss == 4)
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                @elseif($count_chdiss == 3)
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                @elseif($count_chdiss == 2)
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                @elseif($count_chdiss == 1)
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                <tr><th colspan="5"></th></tr>
                @endif
            </div>
            <!-- Disusun Oleh -->
            <tr>
                <td width="13"></td>
                <td align="center" style="font-weight: bold">Jabatan</td>
                <td align="center" style="font-weight: bold">Nama</td>
                <td align="center" style="font-weight: bold">Tanda Tangan</td>
                <td align="center" style="font-weight: bold">Tanggal</td>
            </tr>
            <tr>
                <td rowspan="2">Disusun Oleh</td>
                <td rowspan="2">Asman Pord. Eval.</td>
                <td rowspan="2">{{$kajians->asman_nama}}</td>
                <td rowspan="2"></td>
                <td rowspan="2">{{$kajians->asman_date}}</td>
            </tr>
            <!-- Disetujui Oleh -->
            <tr><td></td></tr>
            <tr>
                <td rowspan="2">Disetujui Oleh</td>
                <td rowspan="2">Manajer QA</td>
                <td rowspan="2">{{$kajians->aq_nama}}</td>
                <td rowspan="2"></td>
                <td rowspan="2">{{$kajians->aq_date}}</td>
            </tr>
        </tbody>
    </table>
</div>