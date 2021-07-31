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
                <th colspan="2" style="font-weight: bold" align="center" width="20">Rekapitulasi Kajian</th>
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
            @foreach ($kajians as $kajian)
            <tr>
                <td>{{$number++}}</td>
                <td>{{$kajian->asman_nama}}</td>
                <td>{{$kajian->asman_date}}</td>
                <td>{{$kajian->asman_komentar}}</td>
                <td>{{$kajian->aq_nama}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>