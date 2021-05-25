@if($laporanTahunan)
    <style>
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
        <h3 class="text-center">Dapatkan informasi berita, promosi, program terbaru serta<br/> laporan keuangan dari <strong>Bank Mantap</strong></h3>
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
        <h4><strong>Laporan Tahunan</strong></h4>
    </div>

    <div class="container mt-5" >
        <!-- MENU CARD SLIDER -->

        <!--Carousel Wrapper-->
        <div id="report" class="carousel slide carousel-multi-item" data-ride="carousel">
            <ol class="carousel-indicators" style="top: 25rem;">
                <li data-target="#report" data-slide-to="0" class="active"  style="width: 8%; height: 7px; background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
                                 background: #FCD116 0% 0% no-repeat padding-box; border-radius: 6px;"></li>
                <li data-target="#report" data-slide-to="1"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
                <li data-target="#report" data-slide-to="2"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
                <li data-target="#report" data-slide-to="3"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
            </ol>
            <!--Slides-->

            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($laporanTahunan as $b)
                        <div class="col-md-3 pad-sz" style="float:left;">
                            <div class="card mb-2" style="height: fit-content; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
                                <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-left fz"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                    <p class="card-text text-left fz" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='{{url('storage/'. '/' .$b->nama_file)}}'">
                                        @if(strlen($b->nama) > 55)
                                            {{ substr($b->nama, 0, 55) . '....'}}
                                        @else
                                            {{$b->nama}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @if ($i % 4 == 0)
                </div>
                @if($i <= count($laporanTahunan) - 1)
                    <div class="carousel-item">
                @endif
                        @endif

                        @if($i == count($laporanTahunan) and $i % 4 != 0)
                    </div>
                        @endif
                        @php
                        $i++;
                        @endphp
                    @endforeach
            </div>
            <!--/.Slides-->

            <!-- Indicator Slider -->
            <a style="" class="carousel-control-prev display-carousel" href="#report" role="button" data-slide="prev"><img src="{{asset('asset/left.svg')}}" style="margin-left: -10rem;"></a>
            <a style="" class="carousel-control-next display-carousel" href="#report" role="button" data-slide="next"><img src="{{asset('asset/right.svg')}}" style="margin-right: -10rem;"></a>
            <!-- End Indicator Slider -->

        </div>
        <br/> <br/> <br/>
@endif
