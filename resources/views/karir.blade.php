@include('layout.header');

<style>
  @media (max-width:575px){
    .center{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: auto;
      height: auto;

    }
    .col-sm-7.mt-4{
      text-align: center;
    }
    .card-danger{
      height: auto;
      padding-bottom: 5px;
      font-size: auto;
    }
    .btn.btn-sm.btn-primary-sm{
      width: auto;
    }
  }
  @media (min-width:575px) and (max-width:767px){
    .col-sm-7.mt-4{
      margin-left: 30px;
      font-size: 16px;
    }
  }
  @media (min-width:767px) and (max-width:1024px){
    .btn.btn-sm.btn-primary-sm{
      width: auto;
    }
    .col-sm-7.mt-4{
      font-size: 16px;
    }
  }
</style>

<section id="img-header" class="img-header" style="margin-top:-2%;">
<img src="{{asset('asset/slider22.png')}}">
<ul class="breadcrumb">
<div class="container">
  <li><a href="{{url('/')}}">Home</a></li>
  <li>{{__('admin.karir')}}</li>
</div>
</ul>
</section>


<section>
<!-- Content Start Here -->

<div class="container">

    <div class="card-danger">
		  <a class="card-title"><strong>Hati-hati Penipuan!</strong></a>
      <p><small>Mandiri Taspen TIDAK memungut biaya apapun dan/atau menggunakan jasa travel agent dalam proses rekrutmen</small></p>
		</div>

    <br/><br/>


    <div class="row mt-3">
    <div class="col-sm"></div>
    <div class="text-center col-sm-8">
    <h4 class="text-center"><strong>Karier</strong></h4>
    <small style="color:#0F2B5B;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</small>
    </div>
    <div class="col-sm"></div>
    </div>

    <br/><br/>
    <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-sm-2"><img class="center" src="{{asset('asset/icon/user.png')}}"></div>
      <div class="col-sm-7 mt-4" style="color:#0F2B5B; font-weight:bold;">Officer Development Program (ODP) - General</div>
      <div class="col text-center mt-4"><a class="btn btn-sm btn-primary-sm" role="button" href="https://rekrutmen.bankmantap.co.id/">Selengkapnya</a></div>
    </div>
    <hr/>

    <div class="row">
    <div class="col-sm-2"><img class="center" src="{{asset('asset/icon/folder.png')}}"></div>
      <div class="col-sm-7 mt-4" style="color:#0F2B5B;  font-weight:bold;">Officer Development Program (ODP) - IT</div>
      <div class="col text-center mt-4"><a class="btn btn-sm btn-primary-sm" role="button" href="https://rekrutmen.bankmantap.co.id/">Selengkapnya</a></div>
    </div>
  </div>
  <hr/>


  <br/><br/><br/><br/>
</div>
</section>
<br/><br/><br/><br/>

@include('layout.footer')
