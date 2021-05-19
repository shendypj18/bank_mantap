@include('layout.header')

<section class="section">
  <div class="container">
    <div class="row">
    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Tarif Layanan</h4>
    <small>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/tarif-layanan/'.$bahasa)}}">Selengkapnya</a></p>
    </div>

    <div class="col-sm-5">
    <img src="{{asset('asset/tarif-layanan.png')}}"  alt="Logo" width="600px" style="margin-left:20%;height: 350px; margin-bottom:8%;">
    </div>
    </div>
  </div>
  <br/>

  <div class="container">
    <div class="row">
    <div class="col-sm-7">
    <img src="{{asset('asset/bank-garansi.png')}}"  alt="Logo" width="600px" style="height: 350px; margin-bottom:8%;">
    </div>

    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Bank Garansi</h4>
    <small>Salah satu hal penting dalam bisnis adalah kepercayaan. Namun, kepercayaan biasanya baru datang bila rekam jejak para pihak yang bertransaksi dapat diketahui atau bila ada pihak yang didukung atau dijamin oleh pihak ketiga yang dapat dipercaya.</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/bank-garansi/'.$bahasa)}}">Berita Mantap</a></p>
    </div>
    </div>
  </div>
  <br/>

  <div class="container">
    <div class="row">
    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Referensi Bank</h4>
    <small>Salah satu hal penting dalam bisnis adalah kepercayaan. Namun, kepercayaan biasanya baru datang bila rekam jejak para pihak yang bertransaksi dapat diketahui atau bila ada pihak yang didukung oleh pihak ketiga yang dapat dipercaya.</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/referensi-bank/'.$bahasa)}}">Selengkapnya</a></p>
    </div>

    <div class="col-sm-5">
    <img src="{{asset('asset/referensi-bank.png')}}"  alt="Logo" width="600px" style="margin-left:20%;height: 350px; margin-bottom:8%;">
    </div>
    </div>
  </div>
  <br/>

  <div class="container">
    <div class="row">
    <div class="col-sm-7">
    <img src="{{asset('asset/pic-transfer.png')}}"  alt="Logo" width="600px" style="height: 350px; margin-bottom:8%;">
    </div>

    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Transfer</h4>
    <small>Jasa pengiriman uang yang dilaksanakan atas permintaan dan untuk kepentingan nasabah.</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/transfer/'.$bahasa)}}">Selengkapnya</a></p>
    </div>
    </div>
  </div>

 <br/>
  <div class="container">
    <div class="row">
    <div class="col-sm-5">
    <br/> <br/>
    <h4 class="mt-5">Inkaso</h4>
    <small>Layanan Bank Mantap dalam rangka penagihan warkat-warkat valuta rupiah yang Bank tertariknya berada diluar wilayah Kliring.</small>
    <br/> <br/>
    <p><a class="btn btn-sm btn-yellow-sm" role="button" href="{{url('article/inkaso/'.$bahasa)}}">Selengkapnya</a></p>
    </div>

    <div class="col-sm-5">
    <img src="{{asset('asset/pic-inkaso.png')}}"  alt="Logo" width="550px" style="margin-left:20%;height: 350px; margin-bottom:8%;">
    </div>
    </div>
  </div>
 
 


</section>

 
</div>

@include('layout.footer')
