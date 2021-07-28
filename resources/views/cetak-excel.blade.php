    <style>
    </style>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="2" style="font-weight: bold" align="center">Rekaptulasi Usulan Perubahan</th> 
                </tr>
                <tr>
                    <th></th>
                    <th colspan="2" style="font-weight: bold" align="center">Per Tanggal : {{$from->date}}</th>
                    <th colspan="2" style="font-weight: bold" align="center">Sampai Dengan : </th>
                </tr>
                <tr>
                   <th colspan="1" style="font-weight: bold" align="center">from : {{$from}}</th> 
                </tr>
                <tr>
                   <th colspan="1" style="font-weight: bold" align="center">to : {{$to}}</th> 
                </tr>
                <tr>
                    <th style="font-weight: bold" align="center"> No</th>
                    <th style="font-weight: bold" align="center"> Tanggal Usulan</th>
                    <th style="font-weight: bold" align="center"> Bidang</th>
                    <th style="font-weight: bold" align="center"> Nomor Usulan</th>
                    <th style="font-weight: bold" align="center"> Usulan Perubahan</th>
                    <th style="font-weight: bold" align="center"> Status</th>
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
                    <td>{{$fup->ket_usulan}}</td>
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