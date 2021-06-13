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
     .col-sm-5 #img-navbar-temp{
      /* width: inherit !important; */
      height: inherit !important;
     }
     #navbar-upper-text .mt-5 strong{
         font-size: 20px !important;
     }
     #navbar-upper-text small{
         font-size: 18px !important;
     }
     @media (min-width: 1025px) {
      .btn-pos {
          margin-top: -75px;
         }
         .mt-4.btn-right{
          margin-top: 170px !important;
         }
         .mt-5, .my-5 {
          margin-top: unset !important;
          }
          .simantap-pg{
              margin-top: 3rem;
          }
     }
     @media (min-width:1366px){
      .btn-pos {
             margin-top: -100px;
         }
         .mt-4.btn-right{
          margin-top: 100px !important;
          
         }
         .mt-5, .my-5 {
          margin-top: unset !important;
          }
          .simantap-pg{
              margin-top: 3rem;
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
  
    <section class="section simantap-pg">
      <div class="container mc">
          <div class="row">
              <div class="col-sm-6" id="navbar-upper-text">
                <h4 class="mt-5"><strong>{{__('bisnis.simpanan_tabunganku')}}</strong></h4>
                <small>{{__('bisnis.simpanan_tabunganku_deskripsi')}}</small>
              </div>
              <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/img-tabunganku.png')}}"  alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
          </div>
          <div class="row btn-pos">
              <div class="col-sm-12 mt-5">
                  <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                               @isset($navbar['SIMPANAN MANTAP'][0])
                               {{url('article/' . $navbar['SIMPANAN MANTAP'][0][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
              </div>
          </div>
      </div>
  
  
    <div class="container mc-rr">
      <div class="row mc-r">
          <div class="col-sm-6 right-img" >
              <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/img-simulasi01.png')}}" alt="Logo"  width="600px" class="img-responsive" />
          </div>
          <div class="col-sm-5 right-text" id="navbar-upper-text">
            <h4 class="mt-5"><strong>{{__('bisnis.tabungan_simantap_berjangka')}}</strong></h4>
            <small>{{__('bisnis.tabungan_simantap_berjangka_deskripsi')}}</small>
          </div>
      </div>
      <div class="row r-btn" style="">
          <div class="col-sm-12">
              <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                               @isset($navbar['SIMPANAN MANTAP'][1])
                               {{url('article/' . $navbar['SIMPANAN MANTAP'][1][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
          </div>
      </div>
  </div>
  </br>
  </br>
  </br>
  
    <div class="container mc">
      <div class="row">
          <div class="col-sm-6" id="navbar-upper-text">
            <h4 class="mt-5"><strong>{{__('bisnis.tabungan_simantap')}}</strong></h4>
            <small>{{__('bisnis.tabungan_simantap_deskripsi')}}</small>
          </div>
          <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/img-simantap-gold.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
      </div>
      <div class="row btn-pos">
          <div class="col-sm-12 mt-5">
              <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                               @isset($navbar['SIMPANAN MANTAP'][2])
                               {{url('article/' . $navbar['SIMPANAN MANTAP'][2][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
          </div>
      </div>
    </div>
  
  
    <div class="container mc-rr"">
      <div class="row mc-r">
          <div class="col-sm-6 right-img" >
              <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/img-tabungan-simantap2.png')}}" alt="Logo" width="600px" class="img-responsive" />
          </div>
          <div class="col-sm-5 right-text" id="navbar-upper-text">
            <h4 class="mt-5"><strong>{{__('bisnis.tabungan_simantap_pensiun')}}</strong></h4>
            <small>{{__('bisnis.tabungan_simantap_pensiun_deskripsi')}}</small>
          </div>
      </div>
      <div class="row r-btn" style="">
          <div class="col-sm-12">
              <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                               @isset($navbar['SIMPANAN MANTAP'][3])
                               {{url('article/' . $navbar['SIMPANAN MANTAP'][3][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
          </div>
      </div>
  </div>
  <br />
  <br />
  <br/>
  
    <div class="container mc">
      <div class="row">
          <div class="col-sm-6" id="navbar-upper-text">
            <h4 class="mt-5"><strong>{{__('bisnis.deposito_mantap')}}</strong></h4>
            <small>{{__('bisnis.deposito_mantap_deskripsi')}}</small>
          </div>
          <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/img-simulasi02.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
      </div>
      <div class="row btn-pos">
          <div class="col-sm-12 mt-5">
              <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                               @isset($navbar['SIMPANAN MANTAP'][4])
                               {{url('article/' . $navbar['SIMPANAN MANTAP'][4][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
          </div>
      </div>
    </div>
  
  
    <div class="container mc-rr"">
      <div class="row mc-r">
          <div class="col-sm-6 right-img" >
              <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/img-giro.png')}}" alt="Logo" width="600px" class="img-responsive" />
          </div>
          <div class="col-sm-5 right-text" id="navbar-upper-text">
            <h4 class="mt-5"><strong>{{__('bisnis.giro')}}</strong></h4>
            <small>{{__('bisnis.giro_deskripsi')}}</small>
          </div>
      </div>
      <div class="row r-btn" style="">
          <div class="col-sm-12">
              <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                               @isset($navbar['SIMPANAN MANTAP'][5])
                               {{url('article/' . $navbar['SIMPANAN MANTAP'][5][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
          </div>
      </div>
  </div>
  <br />
  <br />
  <br/>
  
  
  
  </section>
  
  
  </div>
  