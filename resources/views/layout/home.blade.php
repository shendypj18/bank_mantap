<!-- ====================================================== CAROUSEL  ======================================================= -->
<section id="hero" class="carousel slide  mt-4" data-ride="carousel">

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
  
    <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev"><img src="{{ asset('asset/left.svg') }}"></a>
    <a class="carousel-control-next" href="#hero" role="button" data-slide="next"><img src="{{ url('asset/right.svg') }}"></a>

</section>
<!-- ====================================================== /CAROUSEL  ==================================================== -->

<!-- ======================================================  SECTION PROFILE ====================================================== -->

 
<section id="profile" class="profile" >
 
<div class="profile-text">
    <p>PT Bank Mandiri Taspen (selanjutnya disebut "Bank) didirikan di Denpasar pada tanggal 3 November 1992 berdasarkan Akta Pendirian No.4, yang dibuat di hadapan Ida Bagua Alit Sudiatmika, S.H, Notrasi di Denpasar dengan nama PT Bank Sinar Harapan Bali. </p>
    <br/> <br/> 
    <a class="btn btn-profile-light" role="button" href="{{url('article/sekilas-perusahaan/'.$bahasa)}}">Profil Perusahaan</a> 
  </div>
</section>

 

<!-- ======================================================  SIMULATION ====================================================== -->
<section id="simulasi" class="simulasi">
  
    <br><br><br>
    <div class="container text-center">
        <div class="col-sm-8" style="float:none;margin:auto;">
        <h3 class="text-center">{{ __('admin.dapatkan_informasi_berita') }} <strong>Bank Mantap</strong></h3>
        </div>
        <p><br/></p>
        @php $t = 1; @endphp
        <p>
        @foreach($navbar["INFO MANTAP"] as $nv)
            @if($nv->id_slug == 'berita-mantap' || $nv->id_slug == 'promosi-mantap' ||
                $nv->id_slug == 'program-mantap' || $nv->id_slug == 'laporan-keuangan')
        <a class="btn btn-lg  btn-wr @if($t == 1) active @endif" href="{{url('article/'. $nv[$bahasa. '_slug'] . '/'. $bahasa)}}" role="button">{{$nv[$bahasa. '_navigasi']}}</a>
            @php $t++; @endphp
        @endif
        @endforeach
        </p>
 
<!-- ==================================================  /SIMULATION ====================================================== -->
<br/><br/>
<br/>
 


 
<!-- ================================================  NEWS SLIDER ============================================================ -->
 
    <!-- MENU CARD SLIDER -->
   <div class="container my-3">
        <!--Carousel Wrapper-->
        <div id="news" class="carousel slide carousel-multi-item" data-ride="carousel">
             <ol class="carousel-indicators" style="top: 25rem;">
		      <li data-target="#news" data-slide-to="0"  style="width: 8%; height: 8px; background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
		      background: #FCD116 0% 0% no-repeat padding-box; border-radius: 6px;"></li>
		      <li data-target="#news" data-slide-to="1"  style="width: 10px; height: 8px; padding-box; border-radius: 6px; background-color: #121212;"></li>
		    </ol>
            <!--Slides-->


              <!-- Indicator Slider -->
            <a class="carousel-control-prev" href="#news" role="button" data-slide="prev"><img class="responsive ml-13" src="{{ url('asset/left.svg') }}" ></a>
            <a class="carousel-control-next" href="#news" role="button" data-slide="next"><img class="responsive mr-13" src="{{ url('asset/right.svg') }}" ></a>
            <!-- End Indicator Slider -->

            
            <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                    @php $i = 1; @endphp
                    @foreach($berita as $b)
                        <div class="col-md-3" style="float:left;">
                            <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A; border-radius: 15px 15px 15px 15px; opacity: 1;">
                                <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <p class="card-text text-left"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                    <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='{{url('info/'. $b[$bahasa .'_slug'] . '/'. $bahasa)}}'">
                                        {{ $b[$bahasa. '_judul']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @if ($i % 4 == 0) </div>
                            @if($i <= count($berita) - 1)
                                <div class="carousel-item">
                            @endif
                        @endif
                        @if($i == count($berita) and $i % 4 != 0) </div> @endif
                        @php $i++; @endphp
                    @endforeach
            </div>
            <!--/.Slides-->

          

        </div>
        <br/><br/><br/>
        <p class="text-center"><a class="btn btn-lg btn-primary" href="{{url('article/' . $navbar['INFO MANTAP'][0][$bahasa .'_slug'] .'/'. $bahasa)}}" role="button">  {{__('admin.lihat_semua_info')}}</a></p>
    </div>
    </div>
</section>



<!-- ================================================ SECTION BISNIS ==================================================== -->
<br/>
<section id="bisnis" class="bisnis">
<div class="container text-center">
<h3 class="text-center" style="color:#0F2B5B;">Bisnis</h3>

 
 <div class="row">
    <div class="col-sm">
        <div class="card card-pinjaman">
          <div class="card-body">
          <br/>
          <a class="card-title"><strong>Pinjaman Mantap</strong></a>
          <p class="card-text"><small>Apapun kebutuhan anda,</small><br/>
      <small><b>Wujudkan dengan kredit mantap pensiun</b></small></p>
          <a class="btn btn-sm btn-primary-sm" role="button" href="{{url('article/' . $navbar['BISNIS'][1][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.Selengkapnya')}}</a>
          </div>
        </div>
        </div>
 
    <div class="col-sm">
        <div class="card card-simpanan">
          <div class="card-body">
          <br/>
          <a class="card-title"><strong>Simpanan Mantap</strong></a>
          <p class="card-text"><small>Dengan tabungan siMantap Gold</small><br/>
      <small><b>Nimati kemudahan transaksi</b></small></p>
          <a class="btn btn-sm btn-primary-sm" role="button" href="{{url('article/' . $navbar['BISNIS'][2][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.selengkapnya')}}</a>
          </div>
        </div>
        </div>
</div>

<div class="row mt-5">
<div class="col-sm">
<div class="card card-jasabank">
          <div class="card-body">
          <br/>
          <h3 class="card-title">Jasa Bank</h3>
          <p class="card-text"><small>Kepercayaan biasanya baru datang bila rekam jejak para pihak yang bertransaksi dapat diketahui atau bila ada<br/>pihak yang didukung atau dijamin oleh pihak ketiga yang dapat dipercaya</small></p>
          <a class="btn btn-profile-light" role="button" href="{{url('article/' . $navbar['BISNIS'][0][$bahasa . '_slug'] . '/' .$bahasa)}}">{{__('admin.selengkapnya')}}</a>
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
        <p align="center"><a>Bank Mantap memahami Anda untuk tetap produktif demi keluarga yang selalu bahagia.</a></p>
        <!-- <p align="center"><a>@if($video_1){{$video_1->nama }} @endif</a></p> -->
        <br/><br/>
        <div class="container-videos" align="center">
            <iframe class="container-video" allowfullscreen src=@if($video_1)"{{url($video_1->link_video)}}"@endif></iframe>
        </div>
        <br/><br/>

        <div class="row text-left text-xs-center text-sm-left text-md-left">
            <div class="col-xs-2 col-sm-3 col-md-4 text-right">
                <a href="https://web.facebook.com/BankMandiriTaspen" target="_blank" class="fa fa-facebook"></a>
                <a href="https://twitter.com/BankMantap_id" target="_blank" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/bankmantap_id" target="_blank" class="fa fa-instagram"></a>
                <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" target="_blank" class="fa fa-youtube-play"></a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <a>Like, subscribe dan follow untuk mendapatkan informasi terbaru dari Bank Mantap di media sosial</a>
            </div>
        </div>
    </div>
    </section>

    <!-- ================================================ END VIDEO YOUTUBE ====================================================== -->

 


<!-- ============================================ SECTION KARIR ============================================================-->
<section id="karir" class="karir">
<div class="profile-text">
<h3><strong>Karir</strong></h3>
    <p>Dapatkan Pengalaman Kerja Bersama Bank Mantap</p>
    <br/>  
    <a class="btn btn-profile-light" role="button" href="{{url('karir/'. $bahasa)}}">Lihat Lowongan</a>
</div>
</section>
<!-- ========================================================================================================================-->




<!-- ================================================ WHY US ================================================================= -->
<section id="content">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1><span>{{ __('admin.mengapa_memilih_bank_mandiri_taspen') }}</span></h1>
            </div>
        </div>

        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-8">
                <p>{{ __('admin.text_mengapa_memilih_bank_mandiri_taspen')}}</p>
                <br/>
            </div>
        </div>

        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-3 col-sm-3">

                <div class="row">
                    <div class="col-sm2 center-icon"><a class="fa fa-globe"></a></div>
                    <div class="col-sm-10">
                        <h3>{{ __('admin.kantor_cabang') }}</h3>
                        <p>{{ __('admin.text_kantor_cabang')  }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm2 center-icon"><a class="fa fa-thumbs-up"></a></div>
                    <div class="col-sm-10">
                        <h3>{{ __('admin.budaya_kerja') }}</h3>
                        <p>{{  __('admin.text_budaya_kerja') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">

                <div class="row">
                    <div class="col-sm2 center-icon"><a class="fa fa-trophy"></a></div>
                    <div class="col-sm-10">
                        <h3>{{__('admin.penghargaan2')}}</h3>
                        <p>{{__('admin.text_penghargaan2')}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm2 center-icon">
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
