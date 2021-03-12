@include('layout.header')
<section id="img-header" class="img-header">
<img src=" {{ asset('asset/slider8.png') }}">
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Tentang Kami</li>
  <li>Good Corporate Governance</li>
</div>
</ul>
</section>

<div class="container">
<h4 style="color:#0F2B5B;">Good Corporate Governance</h4>
@foreach($allberita as $berita)
      {{$berita->judul_berita}}
      {{$berita->gambar_berita}}
      {{$berita->isi_berita}}
@endforeach
<p  class="mb-5">Laporan Tata Kelola Perusahaan</p>
<h1> ini berita </h1>
</div>
@include('layout.footer')
