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
                        misal dari bidang R&D mau create fups, tapi dia pura2 jadi bidang Teknik bisa dong?
                        <!-- seharusnya tampilin aja bidang dari user yg login, jadi ketauan siapa yang bikin dan dari bidang mana? -->
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
                            *{{ $message }}
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
                            <select class="form-control @error('title') is-invalid @enderror" name="produk">
                                <option>Pilih...</option>
                                @foreach($product as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endforeach
                            </select>
                            <label 
                                @error('produk') 
                                class="text-danger"
                                @enderror>@error('produk')
                                *{{ $message }}
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
                            <textarea class="form-control" rows="3" name="ket_ketentuan"></textarea>
                            
                            <label 
                                @error('ket_ketentuan') 
                                class="text-danger"
                                @enderror>@error('ket_ketentuan')
                                *{{ $message }}
                                @enderror
                            </label>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_usulan"></textarea>
                        <label 
                            @error('ket_usulan') 
                            class="text-danger"
                            @enderror>@error('ket_usulan')
                            *{{ $message }}
                            @enderror
                        </label>
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_alasan"></textarea>
                            <label 
                                @error('ket_alasan') 
                                class="text-danger"
                                @enderror>@error('ket_alasan')
                                *{{ $message }}
                                @enderror
                            </label>                    
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
                                <input class="form-check-input" type="radio" name="ch_sifat" id="sementara" value="sementara">
                                <label class="form-check-label" for="sementara">Sementara</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ch_sifat" id="tetap" value="tetap">
                                <label class="form-check-label" for="tetap">Tetap</label>
                            </div>
                            <br>
                            <label 
                                @error('ch_sifat') 
                                class="text-danger"
                                @enderror>@error('ch_sifat')
                                *{{ $message }}
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
                            <input class="form-control" type="text" name="pic_asman">
                            <label 
                                @error('pic_asman') 
                                class="text-danger"
                                @enderror>@error('pic_asman')
                                *{{ $message }}
                                @enderror
                            </label>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="pic_nama">
                            <label 
                                @error('pic_nama') 
                                class="text-danger"
                                @enderror>@error('pic_nama')
                                *{{ $message }}
                                @enderror
                            </label>                        
                        </td>
                        <td>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="pic_date">                    
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
                            <input class="form-control" type="text" name="cip_manager">
                            <label 
                                @error('cip_manager') 
                                class="text-danger"
                                @enderror>@error('cip_manager')
                                *{{ $message }}
                                @enderror
                            </label>                           
                        </td>
                        <td>
                            <input class="form-control" type="text" name="cip_nama">
                            <label 
                                @error('cip_nama') 
                                class="text-danger"
                                @enderror>@error('cip_nama')
                                *{{ $message }}
                                @enderror
                            </label>                           
                        </td>
                        <td>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="cip_date">
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
                            <input class="form-control" type="text" name="qa_asman">
                            <label 
                                @error('qa_asman') 
                                class="text-danger"
                                @enderror>@error('qa_asman')
                                *{{ $message }}
                                @enderror
                            </label>                         
                        </td>
                        <td>
                            <input class="form-control" type="text" name="qa_nama">
                            <label 
                                @error('qa_nama') 
                                class="text-danger"
                                @enderror>@error('qa_nama')
                                *{{ $message }}
                                @enderror
                            </label>                         
                        </td>
                        <td>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd" disabled></textarea>
                        </td>
                        <td>
                            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="example-date-input" name="qa_date">
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
                                <input class="form-check form-check-inline" type="radio" name="tanggapan" id="tidak" value="tidak" onclick="document.getElementById('tanggapan2').style.display = 'none'">
                                <label class="form-check-label" for="tidak">Tidak</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check form-check-inline" type="radio" name="tanggapan" id="perlu" value="perlu" onclick="document.getElementById('tanggapan2').style.display = 'block'">
                                <label class="form-check-label" for="perlu">Perlu, dari Bidang :</label>
                            </div>
                            <br><br>
                            <label 
                                @error('tanggapan') 
                                class="text-danger"
                                @enderror>@error('tanggapan')
                                *{{ $message }}
                                @enderror
                            </label>                             
                        </td>
                        <td id="tanggapan2">
                        <!-- seharusnya checkbox di looping, bidang name sama value nya bidang id
                        jadi, kalo mau nampilin list yang memerlukan tanggapan gampang
                        logic : jika user->bidang_id == tanggapan2, maka tampilkan list, jadinya misal bidang R&D mau kasih 
                        tanggapan dia bakal liat fup yang memerlukan tanggapan R&D aja. -->
                            @foreach($bidang2 as $bidang2)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cb" name="tanggapan2[]" value="{{$bidang2->id}}">
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
@endsection
