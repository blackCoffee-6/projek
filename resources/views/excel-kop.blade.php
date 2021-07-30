<style>
    
</style>
<div class="content">
    <table>
        <thead>
            <tr>
               <th colspan="1" style="font-weight: bold" align="center">Rekaptulasi Kontrol Perubahan</th>
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