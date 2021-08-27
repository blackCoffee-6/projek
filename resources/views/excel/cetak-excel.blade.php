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
                    <th colspan="2" style="font-weight: bold" align="center" width="20">Rekapitulasi Usulan Perubahan</th> 
                </tr>
                <tr>
                    <th></th>
                    <th colspan="2" style="font-weight: bold" align="center">Per Tanggal : {{$from}}</th>
                    <th colspan="2" style="font-weight: bold" align="center">Sampai Dengan : {{$to}}</th>
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th width="5"> No</th>
                    <th> Tanggal Usulan</th>
                    <th> Bidang</th>
                    <th> Nomor Usulan</th>
                    <th> Nama Produk</th>
                    <th> Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 1;?>
                @foreach ($fups as $fup)
                <tr>
                    <td>{{$number++}}</td>
                    <td>{{$fup->date}}</td>
                    <td>{{$fup->Bidang->name}}</td>
                    <td>{{$fup->no_usulan}}</td>
                    <td>{{$fup->produk}}</td>
                    <td>
                        <?php $flag = 0; $revisi = 0; ?>
                        @foreach($apps as $app)
                        @if($app->fup_id == $fup->id)
                        <?php $flag = 1; ?>
                        @endif
                            @if($app->fup_id == $fup->id AND $app->decision == "setuju")
                                    <span class="badge rounded-pill bg-success">Approved</span>

                                @elseif($app->fup_id == $fup->id AND $app->decision == "tidak")
                                    <span class="badge rounded-pill bg-danger">Not Approved</span>
                                    
                                @elseif($app->fup_id == $fup->id AND $app->decision == "revisi")
                                <?php $revisi = 1; ?>
                                    <span class="badge rounded-pill bg-warning">Perlu di Revisi</span>
                            @endif
                        @endforeach
                        @if($flag == 0)
                        <span class="badge rounded-pill bg-secondary">Pending</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>