
<style type="text/css" media="screen">
  .mc {
       margin-bottom: 150px;
   }

   .margin-img {
     margin-left: 20%;
   }

   .margin-img-left {
     margin-left: -50px;
   }
   @media (min-width: 1025px) {
       .btn-pos {
           margin-top: -250px;
       }
   }
  
   .right-text{
       margin-left: 90px;
   }
   .right-img {
       margin-right: 5px;
   }
   .btn-right {
       margin-left: -450px;
   }
   .r-btn {
       margin-top: -170px;
       float:right;
   }
  .mc {
       margin-bottom: 150px;
   }
   @media (max-width: 768px) {
       .mc {
           margin-bottom: 0px;
       }
       .right-text{
           margin-left: 0px;
       }
       .btn-right {
           margin-left: 0px;
       }
       .r-btn {
           margin-top: 0px;
           float:left;
       }
       .btn-pos {
           margin-top: -7%;
       }
       .mc-r  {
           display: -webkit-box;
           display: -moz-box;
           display: -ms-flexbox;
           display: -webkit-flex;
           display: flex;
           -webkit-box-orient: vertical;
           -moz-box-orient: vertical;
           -webkit-flex-direction: column;
           -ms-flex-direction: column;
           flex-direction: column;
           /* optional */
           -webkit-box-align: start;
           -moz-box-align: start;
           -ms-flex-align: start;
           -webkit-align-items: flex-start;
           align-items: flex-start;
       }
  
       .mc-r .right-img {
           -webkit-box-ordinal-group: 2;
           -moz-box-ordinal-group: 2;
           -ms-flex-order: 2;
           -webkit-order: 2;
           order: 2;
       }
  
       .mc-r .right-text {
           -webkit-box-ordinal-group: 1;
           -moz-box-ordinal-group: 1;
           -ms-flex-order: 1;
           -webkit-order: 1;
           order: 1;
       }
       .margin-img {
         margin-left: 0%;
       }

       .margin-img-left{
         margin-left: 0px;
       }
   }
   @media (max-width: 480px) {
       .mc-rr {
           margin-bottom: 30px;
       }
       .btn-pos {
           margin-top: -20%;
       }

       .margin-img {
         margin-left: 0%;
       }

       .margin-img-left{
         margin-left: 0px;
       }
   }
  
  </style>
  <section class="section">
    <div class="container mc">
        <div class="row">
            <div class="col-sm-6" id="navbar-upper-text">
              <h4 class="mt-5">Kredit Mantap Pensiun</h4>
              <small>Manfaat kesempatan untuk terus berkarya dan mewujudkan rencana anda kedepan melalui kredit pensiun Bank Mantap. Kami memberikan fasilitas kredit dengan bunga kompetitif.</small>
            </div>
            <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/pinjaman1.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
        </div>
        <div class="row btn-pos">
            <div class="col-sm-12 mt-5">
                <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['PINJAMAN MANTAP'][0])
                             {{url('article/' . $navbar['PINJAMAN MANTAP'][0][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
            </div>
        </div>
    </div>
 
   <div class="container mc-rr">
    <div class="row mc-r">
        <div class="col-sm-6 right-img" >
            <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/pinjaman2.png')}}" alt="Logo"  width="600px" class="img-responsive" />
        </div>
        <div class="col-sm-5 right-text" id="navbar-upper-text">
          <h4 class="mt-5">Kredit Mantap Pra Pensiun</h4>
          <small>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea.</small>
        </div>
    </div>
    <div class="row r-btn" style="">
        <div class="col-sm-12">
            <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['PINJAMAN MANTAP'][1])
                             {{url('article/' . $navbar['PINJAMAN MANTAP'][1][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
</div>
</br>
</br>
</br>

<div class="container mc">
  <div class="row">
      <div class="col-sm-6" id="navbar-upper-text">
        <h4 class="mt-5">Pinjaman Retail</h4>
        <small>Penyediaan dana yang diberikan kepada pengusaha perorangan/badan usaha untuk membiayai berbagai macam kebutuhan baik untuk kebutuhan investasi, kebutuhan modal kerja</small>
      </div>
      <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/pinjaman3.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
  </div>
  <div class="row btn-pos">
      <div class="col-sm-12 mt-5">
          <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['PINJAMAN MANTAP'][2])
                             {{url('article/' . $navbar['PINJAMAN MANTAP'][2][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
      </div>
  </div>
</div>

 
   <div class="container mc-rr"">
    <div class="row mc-r">
        <div class="col-sm-6 right-img" >
            <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/pinjaman4.png')}}" alt="Logo" width="600px" class="img-responsive" />
        </div>
        <div class="col-sm-5 right-text" id="navbar-upper-text">
          <h4 class="mt-5">Pinjaman Mikro</h4>
          <small>Penyediaan dana yang diberikan kepada pengusaha perorangan/badan usaha untuk membiayai berbagai macam kebutuhan baik untuk kebutuhan investasi, kebutuhan modal kerja</small>
        </div>
    </div>
    <div class="row r-btn" style="">
        <div class="col-sm-12">
            <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['PINJAMAN MANTAP'][3])
                             {{url('article/' . $navbar['PINJAMAN MANTAP'][3][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
</div>
</br>
</br>
</br>

 
    
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
		  <a class="btn btn-primary-sm" role="button" href="
                             @isset($navbar['PINJAMAN MANTAP'][4])
                             {{url('article/' . $navbar['PINJAMAN MANTAP'][4][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">HITUNG SIMULASI</a>
		  </div>
		</div>
 
</div>

</div>
</div>
