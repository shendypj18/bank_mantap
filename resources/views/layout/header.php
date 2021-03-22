<!DOCTYPE html>
<html lang="id-ID">
<head>
    <title>www.bankmantap.co.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”description” content="description">
    <link rel="shortcut icon" type="image/png" href="asset/logo_mantap.png" sizes="16x16">
    <!-- CSS Bootsrap ver.4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" media="all"/>
  
</head>

<!-- ====================================================== NAVBAR MENU ===================================================== -->
<header>
<nav class="navbar navbar-expand-lg p-3 fixed-top navbar-light bg-white border-bottom">
<a class="navbar-brand ml-4 mr-5" href="#"><img src="asset/logo_mantap.png"  alt="Logo" width="80%"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" style="margin-left:10%;" id="navbarSupportedContent">

    <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
    <li class="nav-item" >
    <a class="nav-link mr-3" href="{{url('/')}}">BERANDA <span class="sr-only">(current)</span></a>
    </li>
         
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG KAMI</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="{{url('sekilas-perusahaan/'. $bahasa) }}">Sekilas Perusahaan</a>
      <a class="dropdown-item" href="{{ url('struktur-organisasi/'. $bahasa) }}">Struktur Organisasi</a>
      <a class="dropdown-item" href="{{ url('budaya-kerja/'. $bahasa) }}">Budaya Kerja</a>
      <a class="dropdown-item" href="{{ url('manajemen/'. $bahasa) }}">Manajemen</a>
      <a class="dropdown-item" href="{{ url('pemegang-saham/'. $bahasa) }}">Pemegang Saham</a>
      <a class="dropdown-item" href="{{ url('penghargaan/'. $bahasa) }}">Penghargaan</a>
      <a class="dropdown-item" href="{{ url('goodcorpgovernance/'. $bahasa) }}">Good Corporate Governance</a>
      <a class="dropdown-item" href=" {{ url('whistleblowing-system/'. $bahasa) }}">Whistleblowing System</a>
      <a class="dropdown-item" href="{{ url('pengungkapan-ksk/'. $bahasa) }}">Pengungkapan Kuantitatif Eksposur Risiko</a>
    </div>
    </li> 

    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PINJAMAN</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ url('kredit-mantap-pensiun/'. $bahasa) }}">Kredit Mantap Pensiun</a>
      <a class="dropdown-item" href="{{ url('pinjaman-ritel/'. $bahasa) }}">Pinjaman Ritel</a>
      <a class="dropdown-item" href="{{ url('pinjaman-mikro/'. $bahasa) }}">Pinjaman Mikro</a>
    </div>
    </li> 
 
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIMPANAN</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ url('simpanan-tabunganku/'. $bahasa) }}">Simpanan Tabunganku</a>
      <a class="dropdown-item" href="{{ url('tabungan-simantap-berjangka/'. $bahasa) }}">Tabungan siMantap Berjangka</a>
      <a class="dropdown-item" href="{{ url('tabungan-simantap/'. $bahasa) }}">Tabungan Simantap</a>
      <a class="dropdown-item" href="{{ url('tabungan-simantap-pensiun/'. $bahasa) }}">Tabungan Simantap Pensiun</a>
      <a class="dropdown-item" href="{{ url('deposito-mantap/'. $bahasa) }}">Deposito Mantap</a>
      <a class="dropdown-item" href="{{ url('giro/') }}">Giro</a>
    </div>
    </li> 

    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INFO MANTAP</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="berita-mantap.php">Berita Mantap</a>
      <a class="dropdown-item" href="promosi-mantap.php">Promosi Mantap</a>
      <a class="dropdown-item" href="program-mantap.php">Program Mantap</a>
      <a class="dropdown-item" href="laporan-keuangan.php">Laporan Keuangan</a>
    </div>
    </li>
    
     
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">JASA BANK</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="tarif-layanan.php">Tarif Layanan</a>
      <a class="dropdown-item" href="bank-garansi.php">Bank Garansi</a>
      <a class="dropdown-item" href="referensi-bank.php">Referensi Bank</a>
      <a class="dropdown-item" href="transfer.php">Transfer</a>
      <a class="dropdown-item" href="inkaso.php">Inkaso</a>
    </div>
    </li>

    <li class="nav-item"><a class="nav-link mr-3" href="kantor-cabang.php" tabindex="-1" aria-disabled="true">CABANG</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="simulasi.php" tabindex="-1" aria-disabled="true">SIMULASI</a></li>        
    </ul>

    <!-- Search Bottom Here -->
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="berita-mantap.php">
          <input type="text" placeholder="Search.." name="search">
          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    
    <a class="text-muted" href="#" onclick="openSearch()">
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
            <input type="radio" name="options" id="option1" onclick="window.location='{{asset($id_route)}}'">IDN
        </label>
        <label id="bahasa-inggris" class="
                   @if($bahasa=="id") btn-outline-warning text-dark
                   @else btn-warning @endif
                   btn btn-sm">
            <input type="radio" name="options" id="option2" onclick="window.location='{{asset($en_route)}}'">ENG
        </label>
    </div>

</div>
 
</nav>
</header>
<!-- ====================================================== /NAVBAR  ===================================================== -->
