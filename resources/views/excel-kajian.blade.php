<style>
    
</style>
<div class="content">
    <table>
        <thead>
            <tr>
               <th colspan="1" style="font-weight: bold" align="center">Rekaptulasi Usulan Perubahan</th>
               <th rowspan="1" style="font-weight: bold" align="center">
                No.*)
                </th> 
            </tr>
            <tr>
                <th style="font-weight: bold" align="center"> No</th>
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