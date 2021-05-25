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

   @media (min-width:769px) and (max-width:1024px){
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

     .margin-img-left{
         margin-left: 0px;
       }
  }
  @media (min-width: 480px) and (max-width:575px){
      #img-navbar-temp{
          width: 400px;
          height: auto;
      }
  }
  @media (min-width:576px) and (max-width:767px){
      #img-navbar-temp{
          width: 500px;
          height: auto;
      }
  }
  @media (min-width:1024px) and (max-width:1365px){
     #img-navbar-temp{
         width: 500px;
     }
     .right-text{
         margin-left: 0px;
     }

 }

  </style>

  <section class="section">
    <div class="container mc">
        <div class="row">
            <div class="col-sm-6" id="navbar-upper-text">
              <h4 class="mt-5">Simpanan TabunganKu</h4>
              <small>TabunganKu adalah tabungan untuk perorangan Warga Negara Indonesia dengan persyaratan mudah dan ringan yang diterbitkan secara bersama oleh perbankan di Indonesia</small>
            </div>
            <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/img-tabunganku.png')}}"  alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
        </div>
        <div class="row btn-pos">
            <div class="col-sm-12 mt-5">
                <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['SIMPANAN MANTAP'][0])
                             {{url('article/' . $navbar['SIMPANAN MANTAP'][0][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
            </div>
        </div>
    </div>


  <div class="container mc-rr">
    <div class="row mc-r">
        <div class="col-sm-6 right-img" >
            <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/img-simulasi01.png')}}" alt="Logo"  width="600px" class="img-responsive" />
        </div>
        <div class="col-sm-5 right-text" id="navbar-upper-text">
          <h4 class="mt-5">Tabungan Simantap Berjangka</h4>
          <small>Tabungan Simantap Berjangka (TSB) adalah tabungan dengan setoran wajib bulanan yang memberikan kesempatan kepada anda untuk mempersiapkan masa depan yang lebih baik.</small>
        </div>
    </div>
    <div class="row r-btn" style="">
        <div class="col-sm-12">
            <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['SIMPANAN MANTAP'][1])
                             {{url('article/' . $navbar['SIMPANAN MANTAP'][1][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
</div>
</br>
</br>
</br>

  <div class="container mc">
    <div class="row">
        <div class="col-sm-6" id="navbar-upper-text">
          <h4 class="mt-5">Tabungan siMantap</h4>
          <small>Tabungan SiMantap Gold adalah tabungan untuk perorangan Warga Negara Indonesia dengan persyaratan mudah dan ringan.</small>
        </div>
        <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/img-tabungan-simantap.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
    </div>
    <div class="row btn-pos">
        <div class="col-sm-12 mt-5">
            <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['SIMPANAN MANTAP'][2])
                             {{url('article/' . $navbar['SIMPANAN MANTAP'][2][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
  </div>


  <div class="container mc-rr"">
    <div class="row mc-r">
        <div class="col-sm-6 right-img" >
            <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/pic-pinjaman-ritel.png')}}" alt="Logo" width="600px" class="img-responsive" />
        </div>
        <div class="col-sm-5 right-text" id="navbar-upper-text">
          <h4 class="mt-5">Tabungan siMantap Pensiun</h4>
    <small>Tabungan SiMantap Pensiun adalah tabungan untuk nasabah pensiun sebagai sarana untuk menampung uang pensiun dan gaji pensiun setiap bulannya atas penunjukan Bank Mantap sebagai Bank juru bayar gaji pensiun.</small>
        </div>
    </div>
    <div class="row r-btn" style="">
        <div class="col-sm-12">
            <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['SIMPANAN MANTAP'][3])
                             {{url('article/' . $navbar['SIMPANAN MANTAP'][3][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
</div>
<br />
<br />
<br/>

  <div class="container mc">
    <div class="row">
        <div class="col-sm-6" id="navbar-upper-text">
          <h4 class="mt-5">Deposito Mantap</h4>
    <small>Deposito Bank Mantap Nikmati kemudahan bertransaksi dengan persyaratan mudah dan ringan</small>
        </div>
        <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/img-simulasi02.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
    </div>
    <div class="row btn-pos">
        <div class="col-sm-12 mt-5">
            <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['SIMPANAN MANTAP'][4])
                             {{url('article/' . $navbar['SIMPANAN MANTAP'][4][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
  </div>


  <div class="container mc-rr"">
    <div class="row mc-r">
        <div class="col-sm-6 right-img" >
            <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/img-giro.png')}}" alt="Logo" width="600px" class="img-responsive" />
        </div>
        <div class="col-sm-5 right-text" id="navbar-upper-text">
          <h4 class="mt-5">Giro</h4>
    <small>Deposito Bank Mantap Nikmati kemudahan bertransaksi dengan persyaratan mudah dan ringan</small>
        </div>
    </div>
    <div class="row r-btn" style="">
        <div class="col-sm-12">
            <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['SIMPANAN MANTAP'][5])
                             {{url('article/' . $navbar['SIMPANAN MANTAP'][5][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">Selengkapnya</a></p>
        </div>
    </div>
</div>
<br />
<br />
<br/>



</section>


</div>
