<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset ('/style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset ('/style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('/style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/style/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="{{asset ('/style/assets/css/bootstrap-select.less')}}"> -->
    <link rel="stylesheet" href="{{asset ('/style/assets/scss/style.css')}}">
    <link href="{{asset ('/style/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="/assets/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="/assets/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/home"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    @if(Auth::user()->role == 'Admin' | Auth::user()->role == 'Approval')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Master Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-laptop"></i><a href="/Bidang">Data Bidang </a></li>
                            <li><i class="fa fa-group (alias)"></i><a href="/user">Data User </a></li>
                        </ul>
                    </li>
                    @endif
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle-o"></i><a href="/FUP">Entry Usulan Perubahan </a></li>
                            @if(Auth::user()->role == 'Admin' | Auth::user()->role == 'Approval')
                                <li><i class="fa fa-circle-o"></i><a href="/List/Kajian">Entry Kajian </a></li>
                                <li><i class="fa fa-circle-o"></i><a href="/List/KP">Entry Kontrol Perubahan </a></li>
                            @endif
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder-open-o"></i>Report</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle-o"></i><a href="/Report/UP">Usulan Perubahan </a></li>
                            <li><i class="fa fa-circle-o"></i><a href="/Report/Kajian">Kajian </a></li>
                            <li><i class="fa fa-circle-o"></i><a href="/Report/KontrolPerubahan">Kontrol Perubahan </a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears (alias)"></i>Rekaptulasi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-circle-o"></i><a href="/Report/LihatRekap">Usulan Perubahan </a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <a href="javascript:history.back()" class="btn"><i class="fa fa-reply"></i></a>
                        <a href="/home">Home</a>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @php
                                $user = Auth::user();
                                $avatar_url = "https://ui-avatars.com/api/?background=random&name=" . $user->username;
                            @endphp

                            <img src="{{$avatar_url}}" alt="Foto Profile {{Auth::user()->username }}" class="user-avatar rounded-circle">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>{{Auth::user()->username}}</a>

                                <hr>
                                
                                <a class="nav-link" href="/user/{{Auth::user()->id}}/edit"><i class="fa fa- user"></i>Update Profile</a>
                                <a class="nav-link" href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power -off"></i>
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('header')
        <div class="content mt-3">

            <!-- <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> -->
            @yield('alert')
            @yield('content')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset ('/style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset ('/style/assets/js/plugins.js')}}"></script>
    <script src="{{asset ('/style/assets/js/main.js')}}"></script>


    <script src="{{asset ('/style/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset ('/style/assets/js/dashboard.js')}}"></script>
    <script src="{{asset ('/style/assets/js/widgets.js')}}"></script>
    <script src="{{asset ('/style/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset ('/style/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset ('/style/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset ('/style/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
