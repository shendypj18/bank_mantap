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
        <!-- MENU CARD SLIDER -->

        <!--Carousel Wrapper-->
           <div id="news-mobile" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @php $i = 1; @endphp
                        @foreach($laporanTahunan as $b)
                            <div class="col-md-3 card-size pad-sz" style="float:left">
                                <div class="card mb-2" style="height: fit-content; box-shadow: 0px 20px 40px #75B2DD1A; border-radius: 15px 15px 15px 15px; opacity: 1;">
                                    <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem; border-radius: 15px 15px 0px 0px;">
                                    <div class="card-body cardd-body" onclick="location.href='{{url('storage/'. '/' .$b->nama_file)}}'">
                                        <p class="card-text text-left fz"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex align-items-stretch">
                                                    <p class="card-text wrapp-text text-left" style="color: #0F2B5B; cursor:pointer;" >
                                                        {{-- {{ substr($b[$bahasa. '_judul'], 0, 56) . '....' }}
                                                        @else --}}
                                                    {{$b->nama}}
                                                        {{--  @endif --}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($i % 4 == 0) </div>
                                @if($i <= count($laporanTahunan) - 1)
                                    <div class="carousel-item">
                                @endif
                            @endif
                            @if($i == count($laporanTahunan) and $i % 4 != 0) </div> @endif
                            @php $i++; @endphp
                        @endforeach

                        <a class="carousel-control-prev" href="#news-mobile" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next"  style="" href="#news-mobile" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>

            <!--/.Slides-->

        </div>
            <!-- End Indicator Slider -->
        </div>
        <br/> <br/> <br/>
@endif
