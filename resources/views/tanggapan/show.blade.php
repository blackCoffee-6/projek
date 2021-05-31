@extends('layouts.main')

@section('title', 'Tanggapan Bidang')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5 text-center">
        Tanggapan Bidang Atas Usulan Perubahan
    </h1>
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">No. Usulan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$fup->ket_usulan}}
                    </td>
                    <td>{{$fup->no_usulan}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="/Store/Tanggapan/{{$fup->id}}" method="POST">
    @csrf
    <div class="container my-4">
        <table class="table table-bordered my-3">
            <thead>
                <tr>
                    <th>
                        A. Tanggapan dari Bidang :
                        @if(Auth::user()->role == 'Admin')
                            <br><br>
                            <select name="tg_bidangs[]">
                                <option>Select Bidang</option>
                                @foreach($bidangs as $bidang)
                                <option value="{{$bidang->Bidang->name}}">{{$bidang->Bidang->name}}</option>
                                @endforeach
                            </select>
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="form-control" rows="3" name="tg_bidang[]"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama :</th>
                    <th scope="col">Tanggal (Bulan/Tanggal/Tahun) :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="tg_nama[]">
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date[]">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container text-right">
            <button type="button" class="btn btn-success" id="add_btn"><i class="fa fa-plus"></i></button>
        </div>
        
        <button class="btn btn-success my-2  mx-2">Submit</button>
        <a href="/home" class="btn btn-danger my-2">Cancel</a>
        </form>
    </div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#add_btn').on('click', function(){
            var html='';
            html+='<tr>';
            html+='<td><textarea class="form-control" rows="3" name="tg_bidang[]"></textarea></td>';
            html+='<td><input class="form-control" type="text" name="tg_nama[]"></td>';
            html+='<td><input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="tg_date[]"></td>';
            html+='</tr>';
            html+='<div class="container text-right"><button type="button" class="btn btn-danger" id="remove_btn"><i class="fa fa-plus"></i></button></div>';
            $('tbody').append(html);
        })
    });

    $(document).on('click', '#remove_btn', function(){
        $(this).closest('tr').remove();
    });
</script>
</div>
@endsection