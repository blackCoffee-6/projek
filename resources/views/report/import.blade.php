@extends('layouts.main')

@section('title', 'Rekap Usulan Perubahan')

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
        <h1 class="display-5 mx-5">
            List Keseluruhan Usulan Perubahan
        </h1>
        <div class="container my-4">
            <form action="/searchRek" method="GET">
            <div class="row mx-1">
                <label for="from" class="col-form-label">From</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="from" name="from">
                </div>
                <label for="to" class="col-form-label">To</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" id="to" name="to">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary rounded" name="search" >Search</button>
                </form>
                    <button type="submit" class="btn btn-success rounded" name="exportExcel" >Export Excel</button>
        </div>
    </div>
        
            <table class="table table-bordered my-3">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col" width="3%">No.</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Disetujui</th>
                    <th scope="col">Tanggal Kontrol Perubahan</th>
                    <th scope="col">Nomor Usulan</th>
                    <th scope="col">Jenis / Kategori</th>
                    <th scope="col">Asal Bidang</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Sifat(Sementara / Tetap)</th>
                    <th scope="col">Disetujui / Ditolak</th>
                    <th scope="col">Kontrol Perubahan</th>
                    <th scope="col">Rencana Penyelesaian</th>
                    <th scope="col">Realisasi Penyelesaian</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php $number = 1; ?>
                    @foreach ($fups as $fup)
                    <tr>
                        @if($user->id == $fup->user_id || $user->bidang_id == $fup->bidang_id || $user->role == 'Admin')
                        <td scope="row" class="font-weight-bold text-center">{{$number++}}</td>
                        
                        <!-- Tanggal Masuk -->
                        <td>{{$fup->date}}</td>
                        
                        <!-- Tanggal Disetujui -->
                        <td>
                            @foreach($kajians as $kajian)
                                @if($kajian->fup_id == $fup->id)
                                    {{$kajian->aq_date}}
                                @endif
                            @endforeach
                        </td>

                        <!-- Tanggal Kontrol Perubahan -->
                        <td>
                            @foreach($kontrols as $kontrol)
                                @if($kontrol->fup_id == $fup->id)
                                    {{$kontrol->mpm_date}}
                                @endif
                            @endforeach
                        </td>

                        <!-- Nomor Usulan -->
                        <td>{{$fup->no_usulan}}</td>

                        <!-- Jenis / Kategori -->
                        <td class="text-center">
                            @foreach($kajians as $kajian)
                                @if($kajian->fup_id == $fup->id)
                                    @foreach($arrKetUp as $ket_up)
                                        <x-ket-up :ketUp='$ket_up'/>
                                    @endforeach    

                                    @if($kajian->ket_else)
                                    <ul>
                                        <li>{{$kajian->ket_else}}</li>
                                    </ul>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                        @endif
                        
                        <!-- Asal Bidang -->
                        <td>{{$fup->Bidang->name}}</td>

                        <!-- Nama Produk -->
                        <td>{{$fup->produk}}</td>

                        <!-- Usulan Perubahan -->
                        <td>{{$fup->ket_usulan}}</td>

                        <!-- Sifat(Sementara / Tetap) -->
                        <td>{{$fup->ch_sifat}}</td>
                        
                        <!-- Disetujui / Ditolak -->
                        <td>
                            @foreach($kajians as $kajian)
                                @if($kajian->fup_id == $fup->id)
                                    {{$kajian->ch_status}}
                                @endif
                            @endforeach
                        </td>

                        <!-- Kontrol Perubahan -->
                        <td>
                        @foreach($kontrols as $kontrol)
                                @if($kontrol->fup_id == $fup->id)
                                    <x-tlp 
                                        :ruTlp='$kontrol->ru_tlp'
                                        
                                        :ruTlp2='$kontrol->ru_tlp2'
                                        :ruInput2='$kontrol->ru_input2'

                                        :riTlp='$kontrol->ri_tlp'

                                        :stTlp='$kontrol->st_tlp'
                                        :stTlp2='$kontrol->st_tlp2'
                                        
                                        :meTlp='$kontrol->me_tlp'
                                        :meTlp2='$kontrol->me_tlp2'

                                        :valTlp='$kontrol->val_tlp'
                                        :valTlp2='$kontrol->val_tlp2'
                                        :valTlp3='$kontrol->val_tlp3'
                                        :valTlp4='$kontrol->val_tlp4'
                                        :valTlp5='$kontrol->val_tlp5'
                                        :valTlp6='$kontrol->val_tlp6'
                                        :valTlp7='$kontrol->val_tlp7'
                                        :valTlp8='$kontrol->val_tlp8'
                                        :valTlp9='$kontrol->val_tlp9'
                                        :valTlp10='$kontrol->val_tlp10'
                                        :valTlp11='$kontrol->val_tlp11'
                                        :valTlp12='$kontrol->val_tlp12'
                                        :valTlp13='$kontrol->val_tlp13'
                                        :valTlp14='$kontrol->val_tlp14'

                                        :trTlp='$kontrol->tr_tlp'
                                        :trTlp2='$kontrol->tr_tlp2'
                                        :trTlp3='$kontrol->tr_tlp3'
                                        :trTlp4='$kontrol->tr_tlp4'
                                        :trTlp5='$kontrol->tr_tlp5'
                                        :trTlp6='$kontrol->tr_tlp6'

                                        :proTlp='$kontrol->pro_tlp'
                                        :proTlp2='$kontrol->pro_tlp2'
                                        :proTlp3='$kontrol->pro_tlp3'
                                        
                                        :dokTlp='$kontrol->dok_tlp'
                                        :dokTlp2='$kontrol->dok_tlp2'
                                        :dokTlp3='$kontrol->dok_tlp3'
                                        :dokTlp4='$kontrol->dok_tlp4'
                                        :dokTlp5='$kontrol->dok_tlp5'
                                        :dokTlp6='$kontrol->dok_tlp6'
                                        :dokTlp7='$kontrol->dok_tlp7'
                                        :dokTlp8='$kontrol->dok_tlp8'
                                        :dokTlp9='$kontrol->dok_tlp9'
                                        :dokTlp10='$kontrol->dok_tlp10'

                                        :dkTlp='$kontrol->dk_tlp'

                                        :sisTlp='$kontrol->sis_tlp'
                                    />
                                @endif
                            @endforeach
                        </td>
                        
                        <!-- Rencana Penyelesaian -->
                        <td>
                            @foreach($kontrols as $kontrol)
                                    @if($kontrol->fup_id == $fup->id)
                                        <x-rencana 
                                            :ruRencana='$kontrol->ru_rencana'
                                            
                                            :ruRencana2='$kontrol->ru_rencana2'

                                            :riRencana='$kontrol->ri_rencana'

                                            :stRencana='$kontrol->st_rencana'
                                            :stRencana2='$kontrol->st_rencana2'
                                            
                                            :meRencana='$kontrol->me_rencana'
                                            :meRencana2='$kontrol->me_rencana2'

                                            :valRencana='$kontrol->val_rencana'
                                            :valRencana2='$kontrol->val_rencana2'
                                            :valRencana3='$kontrol->val_rencana3'
                                            :valRencana4='$kontrol->val_rencana4'
                                            :valRencana5='$kontrol->val_rencana5'
                                            :valRencana6='$kontrol->val_rencana6'
                                            :valRencana7='$kontrol->val_rencana7'
                                            :valRencana8='$kontrol->val_rencana8'
                                            :valRencana9='$kontrol->val_rencana9'
                                            :valRencana10='$kontrol->val_rencana10'
                                            :valRencana11='$kontrol->val_rencana11'
                                            :valRencana12='$kontrol->val_rencana12'
                                            :valRencana13='$kontrol->val_rencana13'
                                            :valRencana14='$kontrol->val_rencana14'

                                            :trRencana='$kontrol->tr_rencana'
                                            :trRencana2='$kontrol->tr_rencana2'
                                            :trRencana3='$kontrol->tr_rencana3'
                                            :trRencana4='$kontrol->tr_rencana4'
                                            :trRencana5='$kontrol->tr_rencana5'
                                            :trRencana6='$kontrol->tr_rencana6'

                                            :proRencana='$kontrol->pro_rencana'
                                            :proRencana2='$kontrol->pro_rencana2'
                                            :proRencana3='$kontrol->pro_rencana3'
                                            
                                            :dokRencana='$kontrol->dok_rencana'
                                            :dokRencana2='$kontrol->dok_rencana2'
                                            :dokRencana3='$kontrol->dok_rencana3'
                                            :dokRencana4='$kontrol->dok_rencana4'
                                            :dokRencana5='$kontrol->dok_rencana5'
                                            :dokRencana6='$kontrol->dok_rencana6'
                                            :dokRencana7='$kontrol->dok_rencana7'
                                            :dokRencana8='$kontrol->dok_rencana8'
                                            :dokRencana9='$kontrol->dok_rencana9'
                                            :dokRencana10='$kontrol->dok_rencana10'

                                            :dkRencana='$kontrol->dk_rencana'

                                            :sisRencana='$kontrol->sis_rencana'
                                        />
                                    @endif
                                @endforeach
                            </td>
                        <!-- Realisasi Penyelesaian -->
                        <td>
                            @foreach($kontrols as $kontrol)
                                @if($kontrol->fup_id == $fup->id)
                                    <x-realisasi
                                        :ruRealisasi='$kontrol->ru_realisasi'
                                        
                                        :ruRealisasi2='$kontrol->ru_realisasi2'

                                        :riRealisasi='$kontrol->ri_realisasi'

                                        :stRealisasi='$kontrol->st_realisasi'
                                        :stRealisasi2='$kontrol->st_realisasi2'
                                        
                                        :meRealisasi='$kontrol->me_realisasi'
                                        :meRealisasi2='$kontrol->me_realisasi2'

                                        :valRealisasi='$kontrol->val_realisasi'
                                        :valRealisasi2='$kontrol->val_realisasi2'
                                        :valRealisasi3='$kontrol->val_realisasi3'
                                        :valRealisasi4='$kontrol->val_realisasi4'
                                        :valRealisasi5='$kontrol->val_realisasi5'
                                        :valRealisasi6='$kontrol->val_realisasi6'
                                        :valRealisasi7='$kontrol->val_realisasi7'
                                        :valRealisasi8='$kontrol->val_realisasi8'
                                        :valRealisasi9='$kontrol->val_realisasi9'
                                        :valRealisasi10='$kontrol->val_realisasi10'
                                        :valRealisasi11='$kontrol->val_realisasi11'
                                        :valRealisasi12='$kontrol->val_realisasi12'
                                        :valRealisasi13='$kontrol->val_realisasi13'
                                        :valRealisasi14='$kontrol->val_realisasi14'

                                        :trRealisasi='$kontrol->tr_realisasi'
                                        :trRealisasi2='$kontrol->tr_realisasi2'
                                        :trRealisasi3='$kontrol->tr_realisasi3'
                                        :trRealisasi4='$kontrol->tr_realisasi4'
                                        :trRealisasi5='$kontrol->tr_realisasi5'
                                        :trRealisasi6='$kontrol->tr_realisasi6'

                                        :proRealisasi='$kontrol->pro_realisasi'
                                        :proRealisasi2='$kontrol->pro_realisasi2'
                                        :proRealisasi3='$kontrol->pro_realisasi3'
                                        
                                        :dokRealisasi='$kontrol->dok_realisasi'
                                        :dokRealisasi2='$kontrol->dok_realisasi2'
                                        :dokRealisasi3='$kontrol->dok_realisasi3'
                                        :dokRealisasi4='$kontrol->dok_realisasi4'
                                        :dokRealisasi5='$kontrol->dok_realisasi5'
                                        :dokRealisasi6='$kontrol->dok_realisasi6'
                                        :dokRealisasi7='$kontrol->dok_realisasi7'
                                        :dokRealisasi8='$kontrol->dok_realisasi8'
                                        :dokRealisasi9='$kontrol->dok_realisasi9'
                                        :dokRealisasi10='$kontrol->dok_realisasi10'

                                        :dkRealisasi='$kontrol->dk_realisasi'

                                        :sisRealisasi='$kontrol->sis_realisasi'
                                    />
                                @endif
                            @endforeach
                        </td>
                        
                        <!-- PIC -->
                        <td>
                            @foreach($kontrols as $kontrol)
                                @if($kontrol->fup_id == $fup->id)
                                    <x-pic 
                                        :ruPic='$kontrol->ru_pic'
                                        
                                        :ruPic2='$kontrol->ru_pic2'
                                        :riPic='$kontrol->ri_pic'

                                        :stPic='$kontrol->st_pic'
                                        :stPic2='$kontrol->st_pic2'
                                        
                                        :mePic='$kontrol->me_pic'
                                        :mePic2='$kontrol->me_pic2'

                                        :valPic='$kontrol->val_pic'
                                        :valPic2='$kontrol->val_pic2'
                                        :valPic3='$kontrol->val_pic3'
                                        :valPic4='$kontrol->val_pic4'
                                        :valPic5='$kontrol->val_pic5'
                                        :valPic6='$kontrol->val_pic6'
                                        :valPic7='$kontrol->val_pic7'
                                        :valPic8='$kontrol->val_pic8'
                                        :valPic9='$kontrol->val_pic9'
                                        :valPic10='$kontrol->val_pic10'
                                        :valPic11='$kontrol->val_pic11'
                                        :valPic12='$kontrol->val_pic12'
                                        :valPic13='$kontrol->val_pic13'
                                        :valPic14='$kontrol->val_pic14'

                                        :trPic='$kontrol->tr_pic'
                                        :trPic2='$kontrol->tr_pic2'
                                        :trPic3='$kontrol->tr_pic3'
                                        :trPic4='$kontrol->tr_pic4'
                                        :trPic5='$kontrol->tr_pic5'
                                        :trPic6='$kontrol->tr_pic6'

                                        :proPic='$kontrol->pro_pic'
                                        :proPic2='$kontrol->pro_pic2'
                                        :proPic3='$kontrol->pro_pic3'
                                        
                                        :dokPic='$kontrol->dok_pic'
                                        :dokPic2='$kontrol->dok_pic2'
                                        :dokPic3='$kontrol->dok_pic3'
                                        :dokPic4='$kontrol->dok_pic4'
                                        :dokPic5='$kontrol->dok_pic5'
                                        :dokPic6='$kontrol->dok_pic6'
                                        :dokPic7='$kontrol->dok_pic7'
                                        :dokPic8='$kontrol->dok_pic8'
                                        :dokPic9='$kontrol->dok_pic9'
                                        :dokPic10='$kontrol->dok_pic10'

                                        :dkPic='$kontrol->dk_pic'

                                        :sisPic='$kontrol->sis_pic'
                                    />
                                @endif
                            @endforeach
                        </td>
                        
                        <!-- Status -->
                        <td class="text-center">
                            @if ($fup->status == 'Closed')
                            <span class="badge rounded-pill bg-success text-light">Closed</span>
                            @elseif ($fup->status == 'null')
                            <span class="badge rounded-pill bg-info text-light">Menunggu Tanggapan</span>
                            @elseif ($fup->status == 'Ditanggapi')
                            <span class="badge rounded-pill bg-primary text-light">Sudah Ditanggapi</span>
                            @elseif ($fup->status == 'Dikaji')
                            <span class="badge rounded-pill bg-warning">Disetujui</span>
                            @elseif ($fup->status == 'Ditolak')
                            <span class="badge rounded-pill bg-danger text-light">Ditolak</span>
                            @elseif ($fup->status == 'Pending')
                            <span class="badge rounded-pill bg-secondary text-light">Open</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection