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
<h4 style="color:#0F2B5B;">{{ __('bisnis.simulasi') }}</h4>
<p  class="mb-5"><small>{{ __('bisnis.simulasi_deskripsi') }}</small></p>
</div>


<div class="container">

<div class="row mb-5">
    <div class="col-sm">
      <div class="card simulasi simulasi-bottom">
        <div class="card-body">
        <br/>
        <img class="width-img-simulasi" src="{{ asset('asset/img-simulasi01.png') }}" class="card-img-top mb-4" alt="Image Simulasi"/>
        <h4><img src="{{ asset('asset/icon/calculator.png') }}" alt="Icon" width="10%">&nbsp;&nbsp;{{ __('bisnis.simulasi_tabungan_berjangka_judul') }}</h4>

        <p class="card-text">{{ __('bisnis.simulasi_tabungan_berjangka_detail_atas') }}<br>{{ __('bisnis.simulasi_tabungan_berjangka_detail_bawah') }}</p>
        <a class="btn btn-simulasi-flat" role="button" href="{{url('simulasi-tabungan-berjangka/'.$bahasa)}}">{{ __('bisnis.hitung_simulasi') }}</a>
        </div>
      </div>
		</div>


		<div class="col-sm">
    <div class="card simulasi simulasi-bottom">
		  <div class="card-body out">
		  <br/>
      <img src="{{ asset('asset/img-simulasi02.png') }}" class="card-img-top mb-4 width-img-simulasi" alt="Image Simulasi"/>
		  <h4><img src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="10%">&nbsp;&nbsp;{{ __('bisnis.simulasi_deposito') }}</h4>
		  <p class="card-text">{{ __('bisnis.simulasi_deposito_detail_atas') }}<br/>{{ __('bisnis.simulasi_deposito_detail_bawah') }}</p>
		  <a class="btn btn-simulasi-flat out" role="button" href="{{url('simulasi-deposito/'.$bahasa)}}">{{ __('bisnis.hitung_simulasi') }}</a>
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
		  <h4><img src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="10%"> {{ __('bisnis.simulasi_kredit_serbaguna_mikro') }}</h4>
		  <p class="card-text">{{ __('bisnis.simulasi_kredit_serbaguna_mikro_detail') }}</p>
		  <a class="btn btn-simulasi-flat" role="button" href="{{url('simulasi-kredit-serbaguna-mikro/'.$bahasa)}}">{{ __('bisnis.hitung_simulasi') }}</a>
		  </div>
		</div>
		</div>


    <div class="col-sm">
        <div class="card simulasi simulasi-bottom">
            <div class="card-body">
                <br/>
                <img src="{{ asset('asset/img-simulasi04.png') }}" class="card-img-top mb-4 width-img-simulasi" alt="Image Simulasi"/>
                <h4><img src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="10%"> {{ __('bisnis.simulasi_kredit_pensiuan') }}</h4>
                <p class="card-text">{{ __('bisnis.simulasi_kredit_pensiuan_detail') }}</p>
                <a class="btn btn-simulasi-flat" role="button" href="{{url('simulasi-kredit-pensiun/'.$bahasa)}}">{{ __('bisnis.hitung_simulasi') }}</a>
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
