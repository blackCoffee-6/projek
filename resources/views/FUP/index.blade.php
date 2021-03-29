@extends('layouts.main')

@section('content')
    <div class="main">
        <h1 class="display-5 mx-5">
            List Data Masuk Usulan Perubahan
        </h1>
        <div class="container my-4">
            <div class="input-group">
                <a href="javascript:history.back()" class="btn btn-primary mx-1"><i class="fa fa-reply"></i></a>
                <a href="/FUP/create"><button class="btn btn-success"><i class="fa fa-plus-square"></i>   Buat Ulasan Perubahan</button></a> 
            </div>
            
            @if(session('alert'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('alert')}}
            </div>
            @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session('failed')}}
            </div>
            @endif
        
            <table class="table table-bordered my-3">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tanggal Usulan</th>
                    <th scope="col">Usulan Perubahan</th>
                    <th scope="col">Tanggal Berlaku</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($fup as $fup)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$fup->Bidang->name}}</td>
                        <td>04/USL/IV/2020</td>
                        <td>{{$fup->date}}</td>
                        <td>
                            {{$fup->ket_usulan}}
                        </td>
                        <td>12/05/2021</td>
                        <td>Pending</td>
                        <td>
                            <form action="/FUP/{{$fup->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <a href="/FUP/{{$fup->id}}/edit" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>
@endsection