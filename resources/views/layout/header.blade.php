<!DOCTYPE html>
<html lang="id-ID">
<head>
    <title>www.bankmantap.co.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name=”description” content="description">
    <link rel="shortcut icon" type="image/png" href="{{asset('asset/logo_mantap.png')}}" sizes="16x16">
    <!-- CSS Bootsrap ver.4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" media="all"/>

</head>

<!-- ====================================================== NAVBAR MENU ===================================================== -->
<header>
<nav class="navbar navbar-expand-lg p-3 fixed-top navbar-light bg-white border-bottom">
<a class="navbar-brand ml-4 mr-5" href="{{url('/'. $bahasa)}}"><img src="{{asset('asset/logo_mantap.png')}}"  alt="Logo" width="80%"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" style="margin-left:30%;" id="navbarSupportedContent">

    <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
        <li class="nav-item" >
            <a class="nav-link mr-3" href="{{url('/'. $bahasa)}}">{{__('admin.BERANDA')}} <span class="sr-only">(current)</span></a>
        </li>

        @foreach($kategorinavbar as $nv)
            @if($nv->nama != "NONE")
            <li class="nav-item dropdown">
                <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{  trans('admin.'. str_replace(' ', '_', $nv->nama)) }}</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($navbar[$nv->nama] as $subnavbar)
                        <a class="dropdown-item" href="{{url('article/' .$subnavbar[$bahasa. "_slug"].'/'. $bahasa) }}">{{$subnavbar[$bahasa. "_navigasi"]}}</a>
                    @endforeach
                </div>
            </li>
            @endif
        @endforeach

        <li class="nav-item"><a class="nav-link mr-3" href="{{url('kantor-cabang/'. $bahasa)}}" tabindex="-1" aria-disabled="true">{{__('admin.CABANG')}}</a></li>
    <!--<li class="nav-item"><a class="nav-link mr-3" href="{{url('simulasi/'. $bahasa)}}" tabindex="-1" aria-disabled="true">{{__('admin.SIMULASI')}}</a></li>-->
        <li class="nav-item"><a class="nav-link mr-3" href="{{url('karir/'. $bahasa)}}" tabindex="-1" aria-disabled="true">{{__('admin.karir')}}</a></li>
    </ul>

    <!-- Search Botton Here -->
    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form action="{{url('search-resault/'.$bahasa)}}">
                <input type="text" placeholder="Search.." name="search">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <a class="text-muted" onclick="openSearch()">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
            <circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
    </a>
    <!-- End Bottom Here -->

    <div class="btn-group btn-group-toggle">
        <label id="bahasa-indonesia" class="
                   @if($bahasa=="en") btn-outline-warning text-dark
                   @else btn-warning @endif
                   btn btn-sm ">
            <input type="radio" name="options" id="option1" onclick="window.location='{{url($id_route .'/id' )}}'">IDN
        </label>
        <label id="bahasa-inggris" class="
                   @if($bahasa=="id") btn-outline-warning text-dark
                   @else btn-warning @endif
                   btn btn-sm">
            <input type="radio" name="options" id="option2" onclick="window.location='{{url($en_route .'/en' )}}'">ENG
        </label>
    </div>

</div>

</nav>
</header>
<!-- ====================================================== /NAVBAR  ===================================================== -->
