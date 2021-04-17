@extends('layouts.main')

@section('title', 'Create FUP')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
    Usulan Perubahan
    </h1>
    <form action="/FUP" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container my-4">
            <table class="table table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">A. Bidang yang Mengajukan :</th>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <select class="form-control @error('title') is-invalid @enderror" name="bidang">
                            @if(Auth::user()->bidang_id != null)
                                <option value="{{Auth::user()->Bidang->id}}">{{Auth::user()->Bidang->name}}</option>
                                @foreach($bidang as $bidang)
                                <option value="{{$bidang->id}}">{{$bidang->name}}</option>
                                @endforeach
                            @else
                                @foreach($bidang as $bidang)
                                <option value="{{$bidang->id}}">{{$bidang->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label 
                            @error('bidang') 
                            class="text-danger"
                            @enderror>@error('bidang')
                            *Bidang yang mengajukan harus diisi!
                            @enderror
                        </label>
                    </td>
                    <td>04/USL/IV/2020</td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="date">
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th>B. Nama Produk / Bahan / Mesin / Dokumen :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="form-control" name="produk">
                                <option id="pilih" name="pilih">Pilih...</option>
                                @foreach($product as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endforeach
                            </select>
                            <label 
                                @error('produk') 
                                class="text-danger"
                                @enderror>@error('produk')
                                *Produk Harus diisi!
                                @enderror
                            </label>
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>C. Ketentuan / Kondisi yang Berlaku</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <textarea class="form-control @error('ket_ketentuan') is-invalid @enderror" rows="3" name="ket_ketentuan">{{ old('ket_ketentuan') }}</textarea>
                            
                            @error('ket_ketentuan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Ketentuan / Kondisi yang Berlaku harus diisi!</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </tbody>
            <thead>
                <tr>
                    <th>D. Usulan Perubahan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control @error('ket_usulan') is-invalid @enderror" rows="3" name="ket_usulan">{{ old('ket_usulan') }}</textarea>

                        @error('ket_usulan')
                            <span class="invalid-feedback" role="alert">
                                <strong>*Usulan Perubahan harus diisi!</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>E. Alasan Perubahan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <textarea class="form-control @error('ket_alasan') is-invalid @enderror"  rows="3" name="ket_alasan">{{ old('ket_alasan') }}</textarea>

                            @error('ket_alasan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Alasan Perubahan harus diisi!</strong>
                                </span>
                            @enderror    
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <th>F. Sifat Perubahan</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ch_sifat" id="sementara" value="sementara" {{ (old('ch_sifat') == 'sementara') ? 'checked' : ''}}>
                                <label class="form-check-label" for="sementara">Sementara</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ch_sifat" id="tetap" value="tetap" {{ (old('ch_sifat') == 'tetap') ? 'checked' : ''}}>
                                <label class="form-check-label" for="tetap">Tetap</label>
                            </div>
                            <br>
                            <label 
                                @error('ch_sifat') 
                                class="text-danger"
                                @enderror>@error('ch_sifat')
                                *Sifat Perubahan harus diisi!
                                @enderror
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th>G. Usulan Pemberlakuan Perubahan :</th>
                    </tr>
                    <tr>
                        <td>Usulan Dibuat Oleh :</td>
                    </tr>
                    <tr>
                        <th scope="col">Asman :</th>
                        <th scope="col">Nama :</th>
                        <th scope="col">Tanda Tangan :</th>
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control @error('pic_asman') is-invalid @enderror" type="text" name="pic_asman">
                            @error('pic_asman')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Asman harus diisi!</strong>
                                </span>
                            @enderror 
                        </td>
                        <td>
                            <input class="form-control @error('pic_nama') is-invalid @enderror" type="text" name="pic_nama">  
                            @error('pic_nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Nama harus diisi!</strong>
                                </span>
                            @enderror               
                        </td>
                        <td>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="pic_date">                 
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Manager :</th>
                        <th scope="col">Nama :</th>
                        <th scope="col">Tanda Tangan :</th>
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control @error('cip_manager') is-invalid @enderror" type="text" name="cip_manager">        
                            @error('cip_manager')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Manager harus diisi!</strong>
                                </span>
                            @enderror                 
                        </td>
                        <td>
                            <input class="form-control @error('cip_nama') is-invalid @enderror" type="text" name="cip_nama">     
                            @error('cip_nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Nama harus diisi!</strong>
                                </span>
                            @enderror                   
                        </td>
                        <td>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="cip_date">
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td>Usulan Diterima Oleh : *)</td>
                    </tr>
                    <tr>
                        <td class="text-danger">*) Diisi oleh QA</td>
                    </tr>
                    <tr>
                        <th scope="col">Asman :</th>
                        <th scope="col">Nama :</th>
                        <th scope="col">Tanda Tangan :</th>
                        <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control @error('qa_asman') is-invalid @enderror" type="text" name="qa_asman" value="{{ old('qa_asman') }}">
                            @error('qa_asman')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Asman Harus diisi!</strong>
                                </span>
                            @enderror                        
                        </td>
                        <td>
                            <input class="form-control @error('qa_nama') is-invalid @enderror" type="text" name="qa_nama">
                            @error('qa_nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>*Nama harus diisi!</strong>
                                </span>
                            @enderror                       
                        </td>
                        <td>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="qa_date">
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th>Perlu Tanggapan Bidang Lain :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check form-check-inline" type="radio" name="tanggapan" id="tidak" value="tidak" onclick="document.getElementById('tanggapan2').style.display = 'none'"
                                {{ (old('tanggapan') == 'tidak') ? 'checked' : ''}}>
                                <label class="form-check-label" for="tidak">Tidak</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check form-check-inline" type="radio" name="tanggapan" id="perlu" value="perlu" onclick="document.getElementById('tanggapan2').style.display = 'block'"
                                {{ (old('tanggapan') == 'perlu') ? 'checked' : ''}}>
                                <label class="form-check-label" for="perlu">Perlu, dari Bidang :</label>
                            </div>
                            <br><br>
                            <label 
                                @error('tanggapan') 
                                class="text-danger"
                                @enderror>@error('tanggapan')
                                *Tanggapan Bidang Lain harus dipilih!
                                @enderror
                            </label>                             
                        </td>
                        <td id="tanggapan2">
                            @foreach($bidang2 as $bidang2)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cb" name="tanggapan2[]" value="{{$bidang2->id}}" {{ (is_array(old('tanggapan2')) && in_array($bidang2->id, old('tanggapan2'))) ? ' checked' : '' }}>
                                    <label class="form-check-label" for="inlineCheckbox1">{{$bidang2->name}}</label>
                                </div>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="form-group">
                <label for="exampleFormControlFile1">Masukan File / Dokumen (Jika diperlukan)</label>
                <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-success my-2">Submit</button>
    </form>
            <a href="/home" type="button" class="btn btn-danger my-2 mx-2">Cancel</a>
        </div>
</div>
<script>
    $('#datepicker').datetimepicker({
		format: 'DD/MM/YYYY'
	});
</script>
@endsection
