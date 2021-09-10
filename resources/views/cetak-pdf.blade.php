<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>FUP {{$fups->no_usulan}}</title>
    <style>
    #title{
        text-align: center;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    hr{
        border: 1px solid black;
    }
    
    .control{
        display: inline;
    }
</style>

<script>
    var value = $('#sifat').val()
    if(value === 'tetap'){
        $("#tetap").attr('checked', 'checked');
    }
    else{
        $("#sementara").attr('checked', 'checked');
    }
</script>
</head>
<body>
    <div class="content">
        <div class="main">
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th width="8%"><img src="./assets/logo.png" alt="Logo" style="max-height: 60px max-width: 60px"></th>
                            <th id="title" width="10%">Usulan Perubahan</th>
                            <th style="font-size: 15px" width="10%"><center>Tanggal Usulan Perubahan</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><center>No.*) {{$fups->no_usulan}}</center></td>
                            <td><center>{{$fups->date}}</center></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>A. Bidang yang Mengajukan :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->Bidang->name}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>B. Nama Produk / Bahan / Mesin / Dokumen :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->produk}}
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">C. Ketentuan / Kondisi yang Berlaku</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea class="form-control th-color" rows="3" name="ket_ketentuan" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">{{$fups->ket_ketentuan}}</textarea>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">D. Usulan Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea class="form-control th-color" rows="3" name="ket_ketentuan" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">{{$fups->ket_usulan}}</textarea>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">E. Alasan Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea class="form-control th-color" rows="3" name="ket_ketentuan" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">{{$fups->ket_alasan}}</textarea>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th class="th-color">F. Sifat Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$fup->ch_sifat}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <table>
                        <tr>
                            <th class="th-color">G. Usulan Pemberlakuan Perubahan :</th>
                        </tr>
                        <hr>
                </table>
                <table>
                    <thead>
                        <tr>
                            <td>Usulan Dibuat Oleh :</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="th-color" width="3%">Asman :</th>
                            <th class="th-color" width="3%">Nama :</th>
                            <th class="th-color" width="3%">Tanggal (Bulan/Tanggal/Tahun) :</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->pic_asman}}
                            </td>
                            <td>
                                {{$fups->pic_nama}}
                            </td>
                            <td>
                                {{$fups->pic_date}}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th class="th-color">Manager :</th>
                            <th class="th-color">Nama :</th>
                            <th class="th-color">Tanggal (Bulan/Tanggal/Tahun) :</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                {{$fups->cip_manager}}
                            </td>
                            <td>
                                {{$fups->cip_nama}}
                            </td>
                            <td>
                                {{$fups->cip_date}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>
</html>