@include('layout.header');

<section id="img-header" class="img-header" style="margin-top:-2%;">
<img src="{{asset('asset/slider22.png')}}">
<ul class="breadcrumb">
<div class="container">
  <li><a href="{{url('/')}}">Home</a></li>
  <li>{{__('admin.KARIR')}}</li>
</div>
</ul>
</section>

 
<section>
<!-- Content Start Here -->

<div class="container">

    <div class="card-danger">
		  <a class="card-title"><strong>Hati-hati Penipuan!</strong></a>
      <p><small>Bank Mandiri Taspen TIDAK memungut biaya apapun dan/atau menggunakan jasa travel agent dalam proses rekrutmen</small></p>
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
      <div class="col-sm-2"><img src="{{asset('asset/icon/user.png')}}"></div>
      <div class="col-sm-7 mt-4" style="color:#0F2B5B; font-weight:bold;">Officer Development Program (ODP) - General</div>
      <div class="col text-center mt-4"><a class="btn btn-sm btn-primary-sm" role="button" href="#">Selengkapnya</a></div>
    </div>
    <hr/>
  
    <div class="row">
    <div class="col-sm-2"><img src="{{asset('asset/icon/folder.png')}}"></div>
      <div class="col-sm-7 mt-4" style="color:#0F2B5B;  font-weight:bold;">Officer Development Program (ODP) - IT</div>
      <div class="col text-center mt-4"><a class="btn btn-sm btn-primary-sm" role="button" href="#">Selengkapnya</a></div>
    </div>
  </div>
  <hr/>


  <br/><br/><br/><br/>
</div>
</section>
<br/><br/><br/><br/>

@include('layout.footer')
