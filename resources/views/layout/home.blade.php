<!-- ====================================================== CAROUSEL  ======================================================= -->
<section id="hero" class="carousel slide  carousel-res" data-ride="carousel">

    <ol class="carousel-indicators" style="margin-left:-43rem; margin-bottom:10rem;">
        <li data-target="#hero" data-slide-to="0" class="active" style="height: 10px; width: 50px; padding-box; border-radius: 6px;"></li>
        <li data-target="#hero" data-slide-to="1" style="width: 12px; height: 10px;  padding-box; border-radius: 6px;"></li>
        <li data-target="#hero" data-slide-to="2" style="width: 12px; height: 10px;  padding-box; border-radius: 6px;"></li>
    </ol>

    <div class="carousel-inner">
        @php $j = 1 @endphp
        @foreach($banner as $banner)
            <div class="carousel-item @if($j == 1) active @endif w-100">
                <img class="d-block w-100" src="{{ url('storage/'. $banner->id_nama) }}"  alt="First slide">
                <div class="carousel-caption text-left">
                    <div class="container">
                        <a class="btn btn-lg btn-more" href="{{url('article/'. $banner[$bahasa. '_slug_link_button_to']  .'/'. $bahasa)}}" role="button">{{__('admin.selengkapnya')}}</a>
                    </div>
                </div>
            </div>

          
            @php $j++ @endphp
            @endforeach
 

    </div>
    </div>
  
    <a class="carousel-control-prev display-carousel" href="#hero" role="button" data-slide="prev"><img  src="{{ asset('asset/left.svg') }}"></a>
    <a class="carousel-control-next display-carousel" href="#hero" role="button" data-slide="next"><img  src="{{ url('asset/right.svg') }}"></a>

</section>
<!-- ====================================================== /CAROUSEL  ==================================================== -->

<!-- ======================================================  SECTION PROFILE ====================================================== -->

 
<section id="profile" class="profile" >
 
<div class="profile-text">
    <p>{{__('admin.txt_profile_perusahaan')}}</p>
    <br/> <br/> 
    <a class="btn btn-profile-light" role="button" href="{{url('article/' . $navbar['TENTANG KAMI'][0][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.txt_btn_profile')}}</a>
  </div>
</section>

 

<!-- ======================================================  SIMULATION ====================================================== -->
<section id="simulasi" class="simulasi">
  
    <br><br><br>
    <div class="container text-center">
        <div class="col-sm-8" style="float:none;margin:auto;">
        <h3 class="text-center" style="padding-top: 30px">{{ __('admin.dapatkan_informasi_berita') }} <strong>Bank Mandiri Taspen</strong></h3>
        </div>
        <p><br/></p>
        @php $t = 1; @endphp
        <p>
        <div class="display-button">
        @foreach($navbar["INFO MANTAP"] as $nv)
            @if(in_array($nv->id_slug, ['berita-mantap', 'id-berita-mantap', 'promosi-mantap', 'id-promosi-mantap', 'program-mantap', 'id-program-mantap',
                                                                  'laporan-keuangan', 'id-laporan-keuangan']))
             <a class="btn-wr @if($t == 1) active @endif" href="{{url('article/'. $nv[$bahasa. '_slug'] . '/'. $bahasa)}}" role="button">{{$nv[$bahasa. '_navigasi']}}</a>
        
            @php $t++; @endphp
        @endif
        @endforeach
        </div>
        </p>
 
<!-- ==================================================  /SIMULATION ====================================================== -->
<br/><br/>
<br/>
 


 
<!-- ================================================  NEWS SLIDER ============================================================ -->
    <!-- MENU CARD SLIDER -->
   <div class="container my-3">
       <div  class="" id="berita-desktop">
           @include('layout.card-desktop')
       </div>
       <div  class="" id="berita-ipad">
           @include('layout.card-ipad')
       </div>
       <div  class="" id="berita-mobile">
           @include('layout.card-mobile')
       </div>
       <br/><br/><br/>
       <p class="text-center"><a class="btn btn-lg btn-primary" href="{{url('article/' . $navbar['INFO MANTAP'][0][$bahasa .'_slug'] .'/'. $bahasa)}}" role="button">  {{__('admin.lihat_semua_info')}}</a></p>
   </div>
</section>



<!-- ================================================ SECTION BISNIS ==================================================== -->
<br/>
<section id="bisnis" class="bisnis">
<div class="container text-center">
<h3 class="text-center " style="color:#0F2B5B; padding-top:30px">{{__('admin.txt_slide_judul')}}</h3>

 
 <div class="row">
    <div class="col-sm">
        <div class="card card-pinjaman">
          <div class="card-body">
          <br/>
          <a class="card-title"><strong>{{__('admin.txt_slide_pinjaman_mantap')}}</strong></a>
          <p class="card-text"><small>{{__('admin.txt_slide_pinjaman_mantap_txt2')}}</small><br/>
      <small><b>{{__('admin.txt_slide_pinjaman_mantap_txt3')}}</b></small></p>
          <a class="btn btn-sm btn-primary-sm" role="button" href="{{url('article/' . $navbar['BISNIS'][0][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.selengkapnya')}}</a>
          </div>
        </div>
        </div>
 
    <div class="col-sm">
        <div class="card card-simpanan">
          <div class="card-body">
          <br/>
          <a class="card-title"><strong>{{__('admin.txt_slide_simpanan_mantap')}}</strong></a>
          <p class="card-text"><small>{{__('admin.txt_slide_simpanan_mantap_txt2')}}</small><br/>
      <small><b>{{__('admin.txt_slide_simpanan_mantap_txt3')}}</b></small></p>
          <a class="btn btn-sm btn-primary-sm" role="button" href="{{url('article/' . $navbar['BISNIS'][1][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.selengkapnya')}}</a>
          </div>
        </div>
        </div>
</div>

<div class="row mt-5">
<div class="col-sm">
<div class="card card-jasabank">
          <div class="card-body">
          <br/>
          <h3 class="card-title">{{__('admin.txt_slide_jasa_bank')}}</h3>
          <p class="card-text"><small>{{__('admin.txt_slide_jasa_bank_txt2')}}<br/>{{__('admin.txt_slide_jasa_bank_txt3')}}</small></p>
          <a class="btn btn-profile-light" role="button" href="{{url('article/' . $navbar['BISNIS'][2][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.selengkapnya')}}</a>
          </div>
        </div>
    </div>
</div>

</section>

<!-- ==================================================================================================================== -->



    <!-- ================================================  VIDEO YOUTUBE ====================================================== -->
    <section id="video" class="video">
    <br/><br/>
    <div class="container">
        <h1 align="center">#BankMantap #BankMandiriTaspen</h1>
        <p align="center"><a>{{__("admin.txt_section_youtube")}}</a></p>
        <!-- <p align="center"><a>@if($video_1){{$video_1->nama }} @endif</a></p> -->
        <br/><br/>
        <div class="container-videos" align="center">
            <iframe class="container-video" allowfullscreen src=@if($video_1)"{{url($video_1->link_video)}}"@endif></iframe>
        </div>
        <br/><br/>

        <div class="row text-center text-left text-xs-center text-sm-left text-md-left">
            <div class="col-md-2">
            </div>
            <div class="col-md-3">
                <a href="https://web.facebook.com/BankMandiriTaspen" target="_blank" class="fa fa-facebook"></a>
                <a href="https://twitter.com/BankMantap_id" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/bankmantap_id" target="_blank" class="fa fa-instagram"></a>
                <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" target="_blank" class="fa fa-youtube-play"></a>
            </div>

            <div class="col-md-5">
                <a>{{__("admin.txt_section_youtube_footer")}}</a>
            </div>
        </div>
    </div>
    </section>

    <!-- ================================================ END VIDEO YOUTUBE ====================================================== -->

 


<!-- ============================================ SECTION KARIR ============================================================-->
<section id="karier" class="karir">
<div class="profile-text">
<h3><strong>{{__("admin.karir2")}}</strong></h3>
    <p>{{__("admin.txt_karir")}}</p>
    <br/>  
    <a class="btn btn-profile-light" role="button" href="{{url('karir/'. $bahasa)}}">{{__("admin.txt_karir_btn")}}</a>
</div>
</section>
<!-- ========================================================================================================================-->




<!-- ================================================ WHY US ================================================================= -->
<section id="content">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-sm-12">
                <h1><span>{{ __('admin.mengapa_memilih_bank_mandiri_taspen') }}</span></h1>
            </div>
        </div>

        <div class="row text-xs-center text-sm-left text-md-left">
            <div class="col-sm-12">
                <p>{{ __('admin.text_mengapa_memilih_bank_mandiri_taspen')}}</p>
                <br/>
            </div>
        </div>

        <div class="row text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-3 col-sm-3">

                <div class="display">
                    <div class="col-sm2"><a class="fa fa-globe"></a></div>
                    <div class="col-sm-10">
                        <h3>{{ __('admin.kantor_cabang') }}</h3>
                        <p>{{ __('admin.text_kantor_cabang')  }}</p>
                    </div>
                </div>

                <div class="display">
                    <div class="col-sm2"><a class="fa fa-thumbs-up"></a></div>
                    <div class="col-sm-10">
                        <h3>{{ __('admin.budaya_kerja') }}</h3>
                        <p>{{  __('admin.text_budaya_kerja') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">

                <div class="display">
                    <div class="col-sm2"><a class="fa fa-trophy"></a></div>
                    <div class="col-sm-10">
                        <h3>{{__('admin.penghargaan2')}}</h3>
                        <p>{{__('admin.text_penghargaan2')}}</p>
                    </div>
                </div>

                <div class="display">
                    <div class="col-sm2">
                        <a class="fa fa-lightbulb-o"></a>
                    </div>
                    <div class="col-sm-10">
                        <h3>{{__('admin.terus_berinovasi')}}</h3>
                        <p>{{__('admin.text_terus_berinovasi')}}</p>
                    </div>
                </div>

            </div>
            
            <!-- Video Youtube -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="container-videos">
                    <iframe class="container-video"  allowfullscreen src="@if($video_2){{$video_2->link_video}}"@endif></iframe>
                </div>
            </div>
            <!-- / Video Youtube -->

        </div>


        
    </div>

</section>
<!-- ================================================ /WHY US ================================================================ -->
