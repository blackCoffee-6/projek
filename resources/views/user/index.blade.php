@extends('layouts.main')

@section('title', 'List User')

@section('content')
<div class="main">
    <h1 class="display-5 mx-5">
        List Data User
    </h1>
    <!-- <a href="javascript:history.back()"><button class="btn btn-primary mx-5"><i class="fa fa-reply"></i>  Kembali</button></a> -->
    <div class="container my-4">
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
                    <th scope="col">Nama</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUser as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    @if($user->bidang_id == null)
                        <td></td>
                    
                    @else
                        <td>{{$user->Bidang->name}}</td>
                    
                    @endif
                    <td>{{$user->role}}</td>
                    <td>
                        <form action="/user/{{$user->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="/user/{{$user->id}}/edit" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger my-2 my-sm-0" type="submit" onclick="return confirm('Apakah anda yakin?');"><i class="fa fa-trash"></i></button>
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

        <h1 class="display-5 my-5">
            List Data Masuk User
        </h1>
        <table class="table table-bordered my-5">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Siapa</td>
                    <td>Email</td>
                    <td>Nomor</td>
                    @if($user->bidang_id == null)
                        <td></td>
                    
                    @else
                        <td>Bidang</td>
                    
                    @endif
                    <td>Role</td>
                    <td>
                        <form action="/user/{{$user->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <a href="/user/{{$user->id}}/edit" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-check-circle-o"></i></a>
                            <button class="btn btn-danger my-2 my-sm-0" type="submit" onclick="return confirm('Apakah anda yakin?');"><i class="fa fa-window-close-o"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection