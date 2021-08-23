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
        </tr>
    </thead>
    <tbody>
        {{-- nama kategori --}}
        <tr>
            <td align="justify">{{$kategori}}</td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="{{$tlp}}" id="{{$tlpid}}" value="{{$tlpval}}">
                    <label class="form-check-label">{{$tlplabel}}<input type="text" name="{{$tlptext}}" class="form-control mt-1"></label>
                </div>
            </td>
            <td><input type="text" class="form-control" name="{{$pic}}" id="{{$picid}}"></td>
            <td><input type="number" class="form-control" name="{{$dok}}" id="{{$dokid}}"></td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$stat}}" id="{{$statid}}" value="closed">
                    <label class="form-check-label">Closed</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$stat2}}" id="{{$statid2}}" value="pending">
                    <label class="form-check-label">Pending</label>
                </div>
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
            <input type="date" value="{{ date('Y-m-d') }}" class="form-control" name="{{$rencana}}" id="{{$rencanaid}}" width="3%">
        </td>
        <td>
            <input type="date" value="{{ date('Y-m-d') }}" class="form-control" id="{{$realisasiid}}" name="{{$realisasi}}" width="3%">
        </td>
    </tbody>
</table>