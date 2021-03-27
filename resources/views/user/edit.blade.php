@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<!-- Sidebar -->
<div class="sidebar">
    <nav class="mt-2">
        <a href="/home"><i class="fa fa-fw fa-home"></i>Dashboard</a>
        <a href="/usulan">Master Data</a>
        <a href="/tanggapan">Transaksi</a>
        <a href="/kajian">Report</a>
        <a href="/kontrol">Kontrol</a>
        <a href="/List/Data/Bidang">Data Bidang</a>
        <a href="/List/Data/User">Data User</a>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User Profile</div>

                <div class="card-body">
                    <form method="POST" action="/user/{{$user->id}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{$user->username}}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>   
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>   
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>   
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                    @if (session('failed'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session('failed')}}
                    </div>
                    @elseif (session('status'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session('status')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection