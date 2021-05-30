        <!--Carousel Wrapper-->
        <div id="news" class="carousel slide carousel-multi-item" data-ride="carousel">
             <ol class="carousel-indicators" style="top: 25rem;">
		      <li data-target="#news" data-slide-to="0"  style="width: 8%; height: 8px; background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
		      background: #FCD116 0% 0% no-repeat padding-box; border-radius: 6px;"></li>
		      <li data-target="#news" data-slide-to="1"  style="width: 10px; height: 8px; padding-box; border-radius: 6px; background-color: #121212;"></li>
		    </ol>
            <!--Slides-->


              <!-- Indicator Slider -->
            <a class="carousel-control-prev display-carousel" href="#news" role="button" data-slide="prev"><img class="responsive ml-13" src="{{ url('asset/left.svg') }}" ></a>
            <a class="carousel-control-next display-carousel" href="#news" role="button" data-slide="next"><img class="responsive mr-13" src="{{ url('asset/right.svg') }}" ></a>
            <!-- End Indicator Slider -->


            <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                    @php $i = 1; @endphp
                    @foreach($berita as $b)
                        <div class="col-md-3 card-size pad-sz" style="float:left">
                            <div class="card mb-2" style="height: fit-content; box-shadow: 0px 20px 40px #75B2DD1A; border-radius: 15px 15px 15px 15px; opacity: 1;">
                                <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body" onclick="location.href='{{url('info/'. $b[$bahasa .'_slug'] . '/'. $bahasa)}}'">
                                    <p class="card-text text-left fz"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                    <p class="card-text text-left fz" style="color: #0F2B5B; cursor:pointer;" >
                                        @if(strlen($b[$bahasa. '_judul']) > 64)
                                            {{ substr($b[$bahasa. '_judul'], 0, 64) . '....'}}
                                        @else
                                            {{$b[$bahasa. '_judul']}}
                                        @endif
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
