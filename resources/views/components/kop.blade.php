<table class="table table-bordered my-3">
    <thead>
        <tr>
            <th scope="col" width="5%" align="justify">Kategori :</th>
            <th scope="col" width="15%"><center> Tindak Lanjut Perubahan</center></th>
            <th scope="col" width="7%"><center> PIC</center></th>
            <th scope="col" width="5%">
                <center>
                    <div class="row">
                        <div class="col-md-12">
                            No.
                        </div>
                        <div class="col-md-12">
                            Dokumen
                        </div>
                    </div>
                </center>
            </th>
            <th scope="col" width="1%">
                <center>Status</center>
            </th>
            <th scope="col" width="5%">
                <center>Tanggal Selesai</center>
            </th>
        </tr>
    </thead>
    <tbody>
        {{-- nama kategori --}}
        <tr>
            <td align="justify">{{$kategori}}</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="{{$tlp}}" id="{{$tlpid}}" value="{{$tlpval}}">
                    <label class="form-check-label">{{$tlplabel}}</label>
                </div>
            </td>
            <td><input type="text" class="form-control" name="{{$pic}}" id="{{$picid}}"></td>
            <td><input type="text" class="form-control" name="{{$dok}}" id="{{$dokid}}"></td>
            <td class="text-center">
                <span class="badge rounded-pill {{$bg}} text-light">{{$badge}}</span>
            </td>
            <td class="text-center" width="3%">
                <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="{{$date}}" width="3%">
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered my-1">
    <thead>
        <th>Rencana Penyelesaian :</th>
        <th>Realisasi Penyelesaian :</th>
    </thead>
    <tbody>
        <td>
            <textarea class="form-control" id="{{$rencanaid}}" name="{{$rencana}}" rows="3"></textarea>
        </td>
        <td>
            <textarea class="form-control" id="{{$realisasiid}}" name="{{$realisasi}}" rows="3"></textarea>
        </td>
    </tbody>
</table>