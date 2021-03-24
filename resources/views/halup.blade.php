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
                    <select class="custom-select" id="ajuan" name="bidang">
                        <option value="">Pilih..</option>
                        <option value="1">R&D</option>
                        <option value="2">Produksi</option>
                        <option value="3">Pemasaran</option>
                        <option value="4">QC</option>
                        <option value="5">Teknik</option>
                        <option value="6">SCM</option>
                        <option value="3">Pengadaan</option>
                    </select>
                </td>
                <td>04/USL/IV/2020</td>
                <td>
                    <input class="form-control" type="date" value="<?= date("m/d/Y"); ?>" id="datepicker" name="tanggal">
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
                        <select class="custom-select" id="inputGroupSelect01" name="produk">
                            <option selected>Choose...</option>
                            <option value="1">Bahan</option>
                            <option value="2">Mesin</option>
                            <option value="3">Dokumen</option>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kondisi"></textarea>
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="up"></textarea>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alasan"></textarea>
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
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Sementara</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tetap</label>
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
                        <input class="form-control" type="text" name="asman">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="nama-usulan">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd"></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="<?= date("m/d/Y"); ?>" id="example-date-input" name="tanggal">
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
                        <input class="form-control" type="text" name="asman">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="nama-usulan">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd"></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="<?= date("m/d/Y"); ?>" id="example-date-input" name="tanggal">
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
                        <input class="form-control" type="text" name="asman">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="nama-usulan">
                    </td>
                    <td>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ttd"></textarea>
                    </td>
                    <td>
                        <input class="form-control" type="date" value="<?= date("m/d/Y"); ?>" id="example-date-input" name="tanggal">
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
                            <input class="form-check-input" type="radio" name="radio1" id="tidak" value="tidak">
                            <label class="form-check-label" for="tidak">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio1" id="perlu" value="perlu" re>
                            <label class="form-check-label" for="perlu">Perlu, dari Bidang :</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">R&D</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Produksi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Pemasaran</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">QC</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Teknik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">SCM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Pengadaan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Masukan File / Dokumen (Jika diperlukan)</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <button type="button" class="btn btn-success my-2">Submit</button>
        <a href="/home"><button type="button" class="btn btn-danger my-2 mx-2">Cancel</button></a>
    </div>
</div>
@endsection