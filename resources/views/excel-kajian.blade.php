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
            <tr>
                <th></th>
                <th></th>
                <th colspan="2" style="font-weight: bold" align="center" width="20">No*)</th>
            </tr>
            <tr>
                <th></th>
                <th style="font-weight: bold" align="center">Kategori Usulan Perubahan :</th>
            </tr>
            <tr><th></th></tr>
            <tr><th></th></tr>
            <tr>
                <th width="5" style="font-weight: bold" align="center"> No</th>
                <th style="font-weight: bold" align="center"> Tanggal Usulan</th>
                <th style="font-weight: bold" align="center"> Bidang</th>
                <th style="font-weight: bold" align="center"> Nomor Usulan</th>
                <th style="font-weight: bold" align="center"> Usulan Perubahan</th>
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