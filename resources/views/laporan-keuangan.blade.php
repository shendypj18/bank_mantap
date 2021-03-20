@if($laporanTahunan)
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
    <div class="container" >
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
                        <div class="col-md-3" style="float:left;">
                            <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
                                <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem;">
                                <div class="card-body">
                                    <p class="card-text text-left"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                    <p class="card-text text-left" style="color: #0F2B5B; cursor:pointer;" onclick="location.href='{{url('storage/'. '/' .$b->nama_file)}}'">
                                        {{ $b->nama}}
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

        <!-- Indicator Slider -->
        <a class="carousel-control-prev" href="#report" role="button" data-slide="prev"><img src="{{url('asset/left.svg')}}" style="margin-left: -10rem;"></a>
        <a class="carousel-control-next" href="#report" role="button" data-slide="next"><img src="{{url('asset/right.svg')}}" style="margin-right: -10rem;"></a>
        <!-- End Indicator Slider -->
    </div>
@endif
