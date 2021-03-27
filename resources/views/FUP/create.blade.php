@extends('layouts.app')

@section('content')
<div class="sidebar">
    <nav class="mt-2">
        <a href="/home"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="/usulan">Master Data</a>
        <a href="#services">Transaksi</a>
        <a href="/kajian">Report</a>
    </nav>
</div>

<div class="main">
    <h1 class="display-5 mx-5 text-center">
    Usulan Perubahan
    </h1>
    <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a>
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
                        {{Auth::user()->Bidang->name}}
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
                            <select class="form-control" id="inputGroupSelect01" name="produk">
                                <option value="">Pilih...</option>
                                @foreach($product as $pro)
                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endforeach
                            </select>
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ket_ketentuan"></textarea>
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
                        </td>
                        <td>
                            <input class="form-control" type="text" name="pic_nama">
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
                        </td>
                        <td>
                            <input class="form-control" type="text" name="cip_nama">
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
                        </td>
                        <td>
                            <input class="form-control" type="text" name="qa_nama">
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
                        </td>
                        <td id="tanggapan2">
                            <x-input name="R&D" value="R&D"/>
                            <x-input name="Produksi" value="Produksi"/>
                            <x-input name="Pemasaran" value="Pemasaran"/>
                            
                            <hr>
                            
                            <x-input name="QC" value="QC"/>
                            <x-input name="Teknik" value="Teknik"/>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            
                            <hr>
                            
                            <x-input name="SCM" value="SCM"/>
                            <x-input name="Pengadaan" value="Pengadaan"/>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
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
