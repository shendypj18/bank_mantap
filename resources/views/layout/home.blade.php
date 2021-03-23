<!-- ====================================================== CAROUSEL  ======================================================= -->
<section id="hero" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators" style="margin-left:-48rem; margin-bottom:12rem;">
        <li data-target="#hero" data-slide-to="0" class="active" style="height: 10px; width: 50px; padding-box; border-radius: 6px;"></li>
        <li data-target="#hero" data-slide-to="1" style="width: 12px; height: 10px;  padding-box; border-radius: 6px;"></li>
        <li data-target="#hero" data-slide-to="2" style="width: 12px; height: 10px;  padding-box; border-radius: 6px;"></li>
    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active w-100" style="background-color: #0F2B5B; height: 38rem;">
            <img class="d-block" style="margin-left:50%" src="{{ asset('asset/herobg.png') }}" width="39%" alt="First slide">

            <!--<img class="d-block w-100" src="{{ asset('asset/1.png') }}" width="5%" alt="First slide"> -->

            <div class="container">
                <div class="row">

                    <div class="carousel-caption text-left">
                        <h2 style="font-weight: bold; color:#FCD116;">Ambil uang pensiun
                            <br/>dari tarik tunai, tidak harus datang
                            <br/>ke kantor cabang</h2>
                            <p class="text-light">Dengan kartu ATM Bank Mantap, nasabah pensiunan ASN<br/>dan TNI/POLRI dapat mengambil uang pensiun dan tarik<br/>
                                tunai tidak harus datang ke kantor cabang</p>

                            <p><a class="btn btn-lg btn-more" href="#" role="button">Selengkapnya</a></p>
                            <p>&nbsp;</p><p>&nbsp;</p>
                            <div class="row">
                                <div class="text-left col-md-4">
                                    <p class="text-light" style="font-size: 11px;">PT Bank Mandiri Taspen adalah pelaku jasa keuangan terdaftar dan diawasi oleh<br/>
                                        Otoritas Jasa Keuangan serta merupakan bank peseta penjamin LPS</p>
                                </div>
                                <div class="text-right">
                                    <img src="{{ asset('asset/logo-OJK.png') }}" alt="Ojk"/>
                                    <img src="{{ asset('asset/logo-lps.png') }}" alt="Lps"/>
                                    <img src="{{ asset('asset/logo-kebank.png') }}" alt="AyoKebank">
                                </div>
                            </div>


                    </div>

                    <div class="carousel-caption text-right">
                        <div class="hero">
                            <style>
                             .hero {
                                 top:40px;
                                 z-index:9;
                                 position:fixed;
                                 margin-left: 30%;
                             }
                            </style>
                            <img src="{{ asset('asset/1.png') }}" width="80%">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @foreach($banner as $banner)
        <div class="carousel-item"><img class="d-block w-100" src="{{ url('storage/'. $banner->nama) }}" alt="Second slide"></div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev"><img src="{{ asset('asset/left.svg') }}"></a>
    <a class="carousel-control-next" href="#hero" role="button" data-slide="next"><img src="{{ url('asset/right.svg') }}"></a>

</section>
<!-- ====================================================== /CAROUSEL  ==================================================== -->



<!-- ======================================================  SIMULATION ====================================================== -->
<section id="simulasi" class="simulasi">
    <br/>
    <div class="container">

        <div class="row">
            <div class="col-sm">
                <div class="card card-one">
                    <div class="card-body">
                        <br/>
                        <h3 class="card-title text-light">   <img src="{{ url('asset/campain.png') }}"  alt="Logo" width="10%"> Whistleblowing System</h3>
                        <p class="card-text">Jika Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi
                            pelanggaran yang terjadi di lingkungan PT Mandiri Taspen</p>
                        <a class="btn btn-simulasi-light" role="button" href="{{url('/article/whistleblowing-system/'. $bahasa)}}">LAPOR WHISTLEBLOWING</a>
                    </div>
                </div>
            </div>


            <div class="col-sm">
                <div class="card card-two">
                    <div class="card-body">
                        <br/>
                        <h4 class="card-title"> <img src="{{ url('asset/icon/calculator.png') }}"  alt="Logo" width="10%"> Simulasi Tahapan Berjangka</h4>
                        <p class="card-text mt-4">Lakukan simulasi perhitungan besar dana yang terkumpul dengan rentang bulan yang Anda pilih.</p>
                        <a class="btn btn-outline-light btn-simulasi-dark mt-5" href="{{url('simulasi-tabungan-berjangka/'.$bahasa)}}" role="button">HITUNG SIMULASI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <br><br><br><br>
    <div class="container text-center">
        <h3 class="text-center">Dapatkan informasi berita, promosi, program terbaru serta<br/> laporan keuangan dari <strong>Bank Mantap</strong></h3>

        <p><br/></p>
        <p><a class="btn btn-lg  btn-wr active" href="#" role="button">Berita Mantap</a>
            <a class="btn btn-lg  btn-wr" href="#" role="button">Promosi Mantap</a>
            <a class="btn btn-lg  btn-wr" href="#" role="button">Program Mantap</a>
            <a class="btn btn-lg  btn-wr" href="#" role="button">Laporan Keuangan</a></p>

</section>
<!-- ==================================================  /SIMULATION ====================================================== -->
<br/>



<!-- ================================================  NEWS SLIDER ============================================================ -->
<section style="margin-top:-8rem;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F2F7FF" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,96C384,117,480,203,576,245.3C672,288,768,288,864,256C960,224,1056,160,1152,128C1248,96,1344,96,1392,96L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- MENU CARD SLIDER -->
    <div class="container my-3">
        <!--Carousel Wrapper-->
        <div id="news" class="carousel slide carousel-multi-item" data-ride="carousel" style="margin-top: -20rem;">
            <ol class="carousel-indicators" style="top: 25rem;">
                <li data-target="#news" data-slide-to="0" class="active"  style="width: 8%; height: 7px; background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
                                 background: #FCD116 0% 0% no-repeat padding-box; border-radius: 6px;"></li>
                <li data-target="#news" data-slide-to="1"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
                <li data-target="#news" data-slide-to="2"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
                <li data-target="#news" data-slide-to="3"  style="width: 6px; height: 6px; padding-box; border-radius: 6px; background-color: #121212;"></li>
            </ol>
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($berita as $b)
                        <div class="col-md-3" style="float:left;">
                            <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
                                <img class="card-img-top" src="{{ url('storage/' .$b->gambar_berita) }}" alt="Card image cap"  style="height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-left"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                    <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='{{url('berita/'. $bahasa . '/' .$b->slug)}}'">
                                        {{ $b->judul_berita }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @if ($i % 4 == 0)
                </div>
                @if($i <= count($berita) - 1)
                    <div class="carousel-item">
                @endif
                        @endif

                        @if($i == count($berita) and $i % 4 != 0)
                    </div>
                        @endif
                        @php
                        $i++;
                        @endphp
                    @endforeach
            </div>
            <!--/.Slides-->

            <!-- Indicator Slider -->
            <a class="carousel-control-prev" href="#news" role="button" data-slide="prev"><img src="{{ url('asset/left.svg') }}" style="margin-left: -10rem;"></a>
            <a class="carousel-control-next" href="#news" role="button" data-slide="next"><img src="{{ url('asset/right.svg') }}" style="margin-right: -10rem;"></a>
            <!-- End Indicator Slider -->

        </div>


        <br/><br/><br/>
        <p class="text-center"><a class="btn btn-lg btn-more" href="#" role="button">Lihat Semua Info</a></p>
    </div>
    </div>


    <!-- ================================================  VIDEO YOUTUBE ====================================================== -->
    <br/><br/>
    <div class="container">
        <h1 align="center">#BankMantap #BankMandiriTaspen</h1>
        <p align="center"><a>{{$video_1->nama}}</a></p>
        <br/><br/><br/>
        <div align="center">
            <iframe width="750" height="400" border="0" style="border-radius: 20px;" frameborder="0" allowfullscreen src="{{url($video_1->link_video)}}"></iframe>
        </div>
        <br/><br/>

        <div class="row text-left text-xs-center text-sm-left text-md-left">
            <div class="col-xs-2 col-sm-3 col-md-4 text-right">
                <a href="https://web.facebook.com/BankMandiriTaspen" target="_blank" class="fa fa-facebook" style="background-color:transparent;"></a>
                <a href="https://twitter.com/BankMantap_id" target="_blank" class="fa fa-twitter" style="background-color:transparent;"></a>
                <a href="https://www.instagram.com/bankmantap_id" target="_blank" class="fa fa-instagram" style="background-color:transparent;"></a>
                <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" target="_blank" class="fa fa-youtube-play" style="background-color:transparent;"></a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <a>Like, subscribe dan follow untuk mendapatkan informasi terbaru dari Bank Mantap di media sosial</a>
            </div>
        </div>
    </div>
    <!-- ================================================ END VIDEO YOUTUBE ====================================================== -->

</section>
<!-- ================================================  /NEWS SLIDER =========================================================== -->




<!-- ================================================ WHY US ================================================================= -->
<section id="content">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h1>Mengapa memilih<br/>Bank Mandiri Taspen</h1>
            </div>
        </div>

        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-8">
                <p>Melayani lebih dari 28 tahun, Bank Mandiri Taspen senantiasa memberikan kemudahan dan kecepatan dalam merespon berbagai kebutuhan nasabah dengan didukung oleh layanan perbankan yang prima.</p>
                <br/>
            </div>
        </div>

        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-3 col-sm-3">

                <div class="row">
                    <div class="col-sm2"><a class="fa fa-globe"></a></div>
                    <div class="col-sm-10">
                        <h3>Kantor Cabang</h3>
                        <p>274 jaringan kantor Bank Mantap di 34 provisi</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm2"><a class="fa fa-thumbs-up"></a></div>
                    <div class="col-sm-10">
                        <h3>Budaya Kerja</h3>
                        <p>Kompeten dan dapat dipercaya dan Melayani dengan hati</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">

                <div class="row">
                    <div class="col-sm2"><a class="fa fa-trophy"></a></div>
                    <div class="col-sm-10">
                        <h3>Penghargaan</h3>
                        <p>Sebagai bank pesiunan terbaik di Indonesia</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm2">
                        <a class="fa fa-lightbulb-o"></a>
                    </div>
                    <div class="col-sm-10">
                        <h3>Terus Berinovasi</h3>
                        <p>Bank Mantap terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah</p>
                    </div>
                </div>

            </div>

            <!-- Video Youtube -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <iframe width="420" height="285" border="0" style="border-radius: 20px;" frameborder="0" allowfullscreen src="{{$video_2->link_video}}"></iframe>
            </div>
            <!-- / Video Youtube -->

        </div>


        <p><a class="btn btn-lg btn-more" href="#" role="button">{{$video_2->nama}}</a></p>
    </div>

</section>
<!-- ================================================ /WHY US ================================================================ -->
