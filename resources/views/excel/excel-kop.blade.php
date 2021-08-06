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
               <th colspan="2" style="font-weight: bold" align="center" width="20">Rekapitulasi Kontrol Perubahan</th>
            </tr>
            <tr><th></th></tr>
            <tr>
                <th width="5"> No</th>
                <th> Tanggal Usulan</th>
                <th> Bidang</th>
                <th> Nomor Usulan</th>
                <th> Usulan Perubahan</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 1;?>
            @foreach ($kontrols as $kontrol)
            <tr>
                <td>{{$number++}}</td>
                <td>{{$kontrol->mpm_nama}}</td>
                <td>{{$kontrol->mpm_nama}}</td>
                <td>{{$kontrol->mpm_nama}}</td>
                <td>{{$kontrol->mpm_nama}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>