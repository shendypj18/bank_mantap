@if($laporanTahunan)
    <style>
     @media(min-width: 576px) and (max-width: 767px) {
         .pad-sz {
             -webkit-box-flex: 0;
             flex: 0 0 50%;
             max-width: 50%;
	     }
     }
     .active,.btn-wr:hover{
         background-color: #FCD116;
         color:black;
         color: #121212;
         opacity: 1;
         font-size: 13px;
         border-radius: 25px;
         font-family: 'Roboto', sans-serif;
         font-weight: 900;
         border:none;
         transition-duration: 0.7s;
         box-shadow: 0 8px 10px 0 rgba(0,0,0,0.24), 0 14px 40px 0 rgba(0,0,0,0.15);
     }
    </style>


    <style>
     table {
         margin-bottom:8%;
         margin-top:2%;
         width: 100%;
         font-size:12px;
         box-shadow: 0px 20px 40px #00000014;
         border-radius: 16px;

     }

     th {
         height: 60px;
         color: #121212;

     }
     td {
         text-align: left;
         height: 40px;
         color: #121212;;
     }
     tr:nth-child(even){
         background-color: #FCD1161A;
     }

     th {
         background-color: #FCD116;
         color: #0F2B5B;
     }

     tr .footer{
         font-weight:bold;
         background-color: #D0D8E6;
         height: 50px;
         color: #0F2B5B;

     }
    </style>

    <div class="container text-center" id="report">
        <div class="col-sm-8 mt-3" style="float:none;margin:auto;">
        <h3 class="text-center">{{ __('admin.dapatkan_informasi_berita') }}<strong> Bank Mandiri Taspen</strong></h3>
        </div>
        <p><br/></p>
        <div class="display-button">
        @foreach($navbar["INFO MANTAP"] as $nv)
            @if(in_array($nv->id_slug, ['berita-mantap', 'id-berita-mantap', 'promosi-mantap', 'id-promosi-mantap', 'program-mantap', 'id-program-mantap',
                       'laporan-keuangan', 'id-laporan-keuangan']))
            <a class="btn-wr
                      @if($nv['id_slug'] == 'laporan-keuangan') active @endif "
               href="{{url('article/'. $nv[$bahasa. '_slug'] .'/'. $bahasa)}}" role="button">{{$nv[$bahasa . '_navigasi']}}</a>
            @endif
        @endforeach
        </div>
    </div> <!-- container -->
    <div class="container mt-5 mb-5">
        <h4><strong>{{__("admin.txt_laporan_title")}}</strong></h4>
    </div>

    <div class="container mt-5" >
        <div  class="" id="berita-desktop">
           @include('laporan-keuangan-card-desktop')
       </div>
       <div  class="d-flex justify-content-center" id="berita-ipad">
           @include('laporan-keuangan-card-ipad')
       </div>
       <div  class="" id="berita-mobile">
           @include('laporan-keuangan-card-mobile')
       </div>
    </div>
        <br/> <br/> <br/>
@endif
<!--Carousel Wrapper-->
