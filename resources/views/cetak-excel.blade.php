    <style>
    </style>
    <div class="content">
        <table>
            <thead>
                <tr>
                   <th>Rekaptulasi Usulan Perubahan</th> 
                </tr>
                <tr>
                   <th>from : {{$from}}</th> 
                </tr>
                <tr>
                   <th>to : {{$to}}</th> 
                </tr>
                <tr>
                    <th> No</th>
                    <th> Tanggal Usulan</th>
                    <th> Bidang</th>
                    <th> Nomor Usulan</th>
                    <th> Usulan Perubahan</th>
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