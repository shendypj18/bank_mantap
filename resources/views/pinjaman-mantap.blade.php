@include('layout.header')


<section class="section">
  <div class="container">
    <div class="row">
    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Kredit Mantap Pensiun</h4>
    <small>Manfaat kesempatan untuk terus berkarya dan mewujudkan rencana anda kedepan melalui kredit pensiun Bank Mantap. Kami memberikan fasilitas kredit dengan bunga kompetitif.</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/kredit-mantap-pensiun/'.$bahasa)}}">Selengkapnya</a></p>
    </div>

    <div class="col-sm-5">
    <img src="{{asset('asset/pinjaman1.png')}}"  alt="Logo" width="600px" style="margin-left:20%;height: 350px; margin-bottom:8%;">
    </div>
    </div>
  </div>
 
  <div class="container">
    <div class="row">
    <div class="col-sm-7">
    <img src="{{asset('asset/pinjaman2.png')}}"  alt="Logo" width="600px" style="height: 350px; margin-bottom:8%;">
    </div>

    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Kredit Mantap Pra Pensiun</h4>
    <small>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="#">Berita Mantap</a></p>
    </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Pinjaman Retail</h4>
    <small>Penyediaan dana yang diberikan kepada pengusaha perorangan/badan usaha untuk membiayai berbagai macam kebutuhan baik untuk kebutuhan investasi, kebutuhan modal kerja</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/pinjaman-ritel/'.$bahasa)}}">Selengkapnya</a></p>
    </div>

    <div class="col-sm-5">
    <img src="{{asset('asset/pinjaman3.png')}}"  alt="Logo" width="600px" style="margin-left:20%;height: 350px; margin-bottom:8%;">
    </div>
    </div>
  </div>
 
  <div class="container">
    <div class="row">
    <div class="col-sm-7">
    <img src="{{asset('asset/pinjaman4.png')}}"  alt="Logo" width="600px" style="height: 350px; margin-bottom:8%;">
    </div>

    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Pinjaman Mikro</h4>
    <small>Penyediaan dana yang diberikan kepada pengusaha perorangan/badan usaha untuk membiayai berbagai macam kebutuhan baik untuk kebutuhan investasi, kebutuhan modal kerja</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/pinjaman-mikro/'.$bahasa)}}">Berita Mantap</a></p>
    </div>
    </div>
  </div>

 
    
</section>

<div class="extended">
<br/>

<div class="container mt-5">
    <div class="col-sm">
		<div class="card card-one">
		  <div class="card-body text-left">
		  <br/> <br/> <br/>  
       
		  <h4><img src="{{asset('asset/icon/calculator.png')}}"  alt="Logo" width="10%"><strong> Simulasi Tabungan dan Pinjaman</strong></h4>
		  <p class="card-text text-left text-dark">Lakukan simulasi perhitungan dana sesuai dengan produk dan kebutuhan yang Anda pilih.</p>
		  <a class="btn btn-primary-sm" role="button" href="{{url('article/simulasi/'.$bahasa)}}">HITUNG SIMULASI</a> 
		  </div>
		</div>
 
</div>

</div>
</div>

@include('layout.footer')
