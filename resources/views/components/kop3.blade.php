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
        </tr>
    </thead>
    <tbody>
        {{-- nama kategori --}}
        <tr>
            <td align="justify">{{$kategori}}</td>
            <td>
                <div class="form-check">
                    <input type="checkbox" name="{{$tlp}}" id="{{$tlpid}}" value="{{$tlpval}}">
                    <label><input type="text" name="{{$tlpinput}}" class="form-control mt-1"></label>
                </div>
            </td>
            <td><input type="text" class="form-control" name="{{$pic}}" id="{{$picid}}"></td>
            <td><input type="number" class="form-control" name="{{$dok}}" id="{{$dokid}}"></td>
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
            <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="{{$rencana}}" id="{{$rencanaid}}" width="3%">
        </td>
        <td>
            <input type="date" value="{{ date('Y-m-d') }}" class="form-control" id="{{$realisasiid}}" name="{{$realisasi}}" width="3%">
        </td>
    </tbody>
</table>