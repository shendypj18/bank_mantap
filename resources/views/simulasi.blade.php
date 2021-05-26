<!-- <section id="img-header" class="img-header">
     <img src="{{ asset('asset/slider_simulasi.png') }}">
     <ul class="breadcrumb">

     <div class="container">
     <li><a href="#">Home</a></li>
     <li>Simulasi</li>
     </div>

     </ul>
     </section> -->
<style type="text/css" media="screen">

@media (max-width:420px){
  .card.simulasi {
    width: auto;
    height: auto;
    padding-bottom: 0px;
    margin-bottom: 100px;
  }
  .width-img-simulasi{
    width: 100%;
    height: auto;
  }
  .card-body.out .card-body h4{
    height: auto;
  }
  .btn-simulasi-flat{
    width: 100%;
    height: auto;
  }
}

@media (min-width:420px) and (max-width:991px){
  .card.simulasi {
    width: 100%;
    height: 100%;
    padding-bottom: 0px;
    margin-bottom: 100px;
  }
  .btn-simulasi-flat{
    margin-top: 110px;
  }
  .btn-simulasi-flat.out{
    margin-top: 40px;
  }
  .width-img-simulasi{
    height: 188px;
  }
}
@media(min-width:992px) and (max-width: 1335px){
  .card.simulasi{
    width: 450px;
    height: 100%;
    margin-bottom: 50px;
  }
  .width-img-simulasi{
    width: 100%;
    height: 266px;
  }
  .card-text{
    font-size: 1rem;
  }
  .btn-simulasi-flat{
    margin-top: 50px;
  }
  .btn-simulasi-flat.out{
    margin-top: 5px;
  }
  .card-body h4{
    height: 63.3px;
  }
  .card-body.out h4{
    height: 35px;
  }

}
@media (min-width:1336px){
  .btn-simulasi-flat{
    margin-top: 40px;
  }
  .btn-simulasi-flat.out{
    margin-top: 10px;
  }
}

</style>
<div class="container">
<h4 style="color:#0F2B5B;">Simulasi</h4>
<p  class="mb-5"><small>Lakukan simulasi perhitungan dana sesuai dengan produk dan kebutuhan yang Anda pilih.</small></p>
</div>


<div class="container">

<div class="row mb-5">
    <div class="col-sm">
      <div class="card simulasi simulasi-bottom">
        <div class="card-body">
        <br/>
        <img class="width-img-simulasi" src="{{ asset('asset/img-simulasi01.png') }}" class="card-img-top mb-4" alt="Image Simulasi"/>
        <h4><img src="{{ asset('asset/icon/calculator.png') }}" alt="Icon" width="10%">&nbsp;&nbsp;Simulasi Tabungan Berjangka</h4>

        <p class="card-text">Tabungan Samantap Berjangka (TSB) adalah<br/>tabungan setoran wajid bulanan</p>
        <a class="btn btn-simulasi-flat" role="button" href="{{url('simulasi-tabungan-berjangka/'.$bahasa)}}">HITUNG SIMULASI</a>
        </div>
      </div>
		</div>


		<div class="col-sm">
    <div class="card simulasi simulasi-bottom">
		  <div class="card-body out">
		  <br/>
      <img src="{{ asset('asset/img-simulasi02.png') }}" class="card-img-top mb-4 width-img-simulasi" alt="Image Simulasi"/>
		  <h4><img src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="10%">&nbsp;&nbsp;Simulasi Deposito</h4>
		  <p class="card-text">Untuk memastikan hang Anda diinvestasikan ditempat<br/>yang aman dan terpercaya sekaligus menguntungkan</p>
		  <a class="btn btn-simulasi-flat out" role="button" href="{{url('simulasi-deposito/'.$bahasa)}}">HITUNG SIMULASI</a>
		  </div>
		</div>
    </div>
    </div>


    <div class="row mb-5">
    <div class="col-sm">
		<div class="card simulasi simulasi-bottom">
    <div class="card-body">
		  <br/>
      <img src="{{ asset('asset/img-simulasi03.png') }}" class="card-img-top mb-4 width-img-simulasi" alt="Image Simulasi"/>
		  <h4><img src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="10%"> Simulasi kredit Serbaguna Mikro</h4>
		  <p class="card-text">Penyediaan dana yang diberikan kepada pengusaha perorangan/badan usaha</p>
		  <a class="btn btn-simulasi-flat" role="button" href="{{url('simulasi-kredit-serbaguna-mikro/'.$bahasa)}}">HITUNG SIMULASI</a>
		  </div>
		</div>
		</div>


    <div class="col-sm">
        <div class="card simulasi simulasi-bottom">
            <div class="card-body">
                <br/>
                <img src="{{ asset('asset/img-simulasi04.png') }}" class="card-img-top mb-4 width-img-simulasi" alt="Image Simulasi"/>
                <h4><img src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="10%"> Simulasi Kredit Pensiun</h4>
                <p class="card-text">Manfaat kesempatan untuk terus berkarya dan mewujudkan rencana Anda setelah pension</p>
                <a class="btn btn-simulasi-flat" role="button" href="{{url('simulasi-kredit-pensiun/'.$bahasa)}}">HITUNG SIMULASI</a>
		        </div>
		    </div>
    </div>
    </div>

</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
