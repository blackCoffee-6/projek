@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
<style>
    .centered {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    }

    .centered2 {
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
</style>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="centered">Mohon Maaf Page yang Anda tuju tidak dapat diakses</div>
    <div class="centered2">Silahkah cek kembali User Login anda</div>  
</body>
</html>
    
