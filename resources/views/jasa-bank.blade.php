
<style type="text/css" media="screen">
.mc {
     margin-bottom: 150px;
 }

 .margin-img-left {
     margin-left: -50px;
   }
 @media (min-width: 1025px) {
     .btn-pos {
         margin-top: -250px;
     }
     .r-btn {
         margin-top: -100px;
         float: right;
     }
 }
 @media (min-width: 1335px){
    .r-btn {
         margin-top: -180px;
         float: right;
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
 /* .r-btn {
     margin-top: -170px;
     float:right;
 } */
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

     .margin-img-left{
         margin-left: 0px;
       }
 }


@media (min-width: 768px) and (max-width: 1024px)  {

    .right-text {
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

     .margin-img-left{
         margin-left: 0px;
    }
    /* .img-header{
        padding-bottom: 0px;
        height: auto;
    } */

 }
 @media (min-width: 480px) and (max-width:575px){
     #img-navbar-temp{
         max-width: 100%;
         height: auto;
     }
 }
 @media (min-width:576px) and (max-width:767px){
     #img-navbar-temp{
         width: 500px;
         height: auto;
     }
 }

 @media (min-width: 768px) and (max-width:1024px) {
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
                <h4 class="mt-5"><strong>{{__('bisnis.tarif_layanan')}}</strong></h4>
                <small>{{__('bisnis.tarif_layanan_deskripsi')}}</small>
            </div>
            <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/tarif-layanan.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
        </div>
        <div class="row btn-pos">
            <div class="col-sm-12 mt-5">
                <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['JASA BANK'][0])
                             {{url('article/' . $navbar['JASA BANK'][0][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
            </div>
        </div>
    </div>

    <div class="container mc-rr">
        <div class="row mc-r">
            <div class="col-sm-6 right-img" >
                <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/bank-garansi.png')}}" alt="Logo"  width="600px" class="img-responsive" />
            </div>
            <div class="col-sm-5 right-text" id="navbar-upper-text">
                <h4 class="mt-5"><strong>{{__('bisnis.bank_garansi')}}</strong></h4>
                <small>{{__('bisnis.bank_garansi_deskripsi')}}</small>
            </div>
        </div>
        <div class="row r-btn" style="">
            <div class="col-sm-12">
                <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['JASA BANK'][1])
                             {{url('article/' . $navbar['JASA BANK'][1][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
            </div>
        </div>
    </div>
</br>
</br>
</br>
    <div class="container mc">
        <div class="row">
            <div class="col-sm-6" id="navbar-upper-text">
                <h4 class="mt-5"><strong>{{__('bisnis.referensi_bank')}}</strong></h4>
                <small>{{__('bisnis.referensi_bank_deskripsi')}}</small>
            </div>
            <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/referensi-bank.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
        </div>
        <div class="row btn-pos">
            <div class="col-sm-12 mt-5">
                <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['JASA BANK'][2])
                             {{url('article/' . $navbar['JASA BANK'][2][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
            </div>
        </div>
    </div>

  <div class="container mc-rr"">
        <div class="row mc-r">
            <div class="col-sm-6 right-img" >
                <img class="margin-img-left" id="img-navbar-temp" src="{{asset('asset/pic-transfer.png')}}" alt="Logo"  width="600px" class="img-responsive" />
            </div>
            <div class="col-sm-5 right-text" id="navbar-upper-text">
                <h4 class="mt-5"><strong>{{__('bisnis.transfer')}}</strong></h4>
                <small>{{__('bisnis.transfer_deskripsi')}}</small>
            </div>
        </div>
        <div class="row r-btn" style="">
            <div class="col-sm-12">
                <p><a  class="btn btn-sm btn-yellow-sm mt-4 btn-right"  role="button" href="
                             @isset($navbar['JASA BANK'][3])
                             {{url('article/' . $navbar['JASA BANK'][3][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
            </div>
        </div>
    </div>
</br>
</br>
</br>
 <div class="container mc">
        <div class="row">
            <div class="col-sm-6" id="navbar-upper-text">
                <h4 class="mt-5"><strong>{{__('bisnis.inkaso')}}</strong></h4>
                <small>{{__('bisnis.inkaso_deskripsi')}}</small>
            </div>
            <div class="col-sm-5"><img id="img-navbar-temp" src="{{asset('asset/pic-inkaso.png')}}" alt="Logo" width="600px" style="left: 686px; height: 360px; margin-bottom: 8%;" class="img-responsive" /></div>
        </div>
        <div class="row btn-pos">
            <div class="col-sm-12 mt-5">
                <p><a class="btn btn-sm btn-yellow-sm" role="button" href="
                             @isset($navbar['JASA BANK'][4])
                             {{url('article/' . $navbar['JASA BANK'][4][$bahasa . '_slug'] . '/' .$bahasa)}} @endisset">{{__('bisnis.selengkapnya')}}</a></p>
            </div>
        </div>
    </div>
 <br/>

</section>


</div>
