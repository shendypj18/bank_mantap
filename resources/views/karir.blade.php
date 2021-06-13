@include('layout.header')

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
<img src="{{asset(__('bisnis.img_karir'))}}">
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
		  <a class="card-title"><strong>{{__("admin.txt_title_karir")}}</strong></a>
      <p><small>{{__("admin.txt_section_karir")}}</small></p>
		</div>

    <br/><br/>


    <div class="row mt-3">
    <div class="col-sm"></div>
    <div class="text-center col-sm-8">
    <h4 class="text-center"><strong>{{__("admin.karir2")}}</strong></h4>
    <small style="color:#0F2B5B; font-size: 18px !important;">{{__("bisnis.karir_txt")}}</small>
    </div>
    <div class="col-sm"></div>
    </div>

    <br/><br/>
    <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-sm-2"><img class="center" src="{{asset('asset/icon/user.png')}}"></div>
      <div class="col-sm-7 mt-4" style="color:#0F2B5B; font-weight:bold;">Officer Development Program (ODP) - General</div>
      <div class="col text-center mt-4"><a class="btn btn-sm btn-primary-sm" role="button" href="https://rekrutmen.bankmantap.co.id/">{{__("admin.selengkapnya")}}</a></div>
    </div>
    <hr/>

    <div class="row">
    <div class="col-sm-2"><img class="center" src="{{asset('asset/icon/folder.png')}}"></div>
      <div class="col-sm-7 mt-4" style="color:#0F2B5B;  font-weight:bold;">Officer Development Program (ODP) - IT</div>
      <div class="col text-center mt-4"><a class="btn btn-sm btn-primary-sm" role="button" href="https://rekrutmen.bankmantap.co.id/">{{__("admin.selengkapnya")}}</a></div>
    </div>
  </div>
  <hr/>


  <br/><br/><br/><br/>
</div>
</section>
<br/><br/><br/><br/>

@include('layout.footer')
