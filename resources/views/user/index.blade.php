@extends('layouts.main')

@section('title', 'List User')

@section('content')
<style>
    table.table-bordered{
        border:1px solid black;
        margin-top:20px;
      }
    table.table-bordered > thead > tr > th{
        border:1px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border:1px solid black;
    
    }
</style>

<div class="main">
    <h1 class="display-5 mx-5">
        List Data User
    </h1>
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
            <a href="/user/create"><button class="btn rounded btn-success"><i class="fa fa-plus-square"></i> Tambah User</button></a>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Level</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUser as $user)
                <tr>
                    <td scope="row" class="font-weight-bold text-center">{{$loop->iteration}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    @if($user->bidang_id == null)
                        <td></td>
                    @else
                        <td>{{$user->Bidang->name}}</td>
                    
                    @endif
                    <td>{{$user->role}}</td>
                    <td class="text-center">
                        @if($user->status == 'active')
                        <span class="badge rounded-pill bg-success text-light">Active</span>
                        @else
                        <span class="badge rounded-pill bg-secondary text-light">Not Active</span>
                        @endif
                    </td>
                    <td class="text-center">
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
        {{-- ADD PAGINATION --}}
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