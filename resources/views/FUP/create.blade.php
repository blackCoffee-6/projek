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
                    <td>
                        04/USL/IV/2020
                    </td>
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
                            <input class="form-control @error('produk') is-invalid @enderror" type="text" name="produk">
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
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="pic_date">                 
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Manager :</th>
                        <th scope="col">Nama :</th>
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
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="datepicker" name="cip_date">
                        </td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlFile1" class="font-weight-bold">Masukan File / Dokumen (*Jika diperlukan)</label>
                                <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <td>
                            <button type="submit" class="btn btn-success my-2">Submit</button>
    </form>
                            <a href="/home" type="button" class="btn btn-danger my-2 mx-2">Cancel</a>
                        </td>    
                        </div>
                    </tr>
                </tbody>
        </table>


        </div>
</div>
<script>
    $('#datepicker').datetimepicker({
		format: 'DD/MM/YYYY'
	});
</script>
@endsection
