<div class="container p-0 m-auto" id="berita-ipad2">
    <div class="row justify-content-md-center">
        <div id="news-ipad" class="col-auto carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    @php $i = 1; @endphp
                    @foreach($laporanTahunan as $b)
                        <div class="col-md-3 card-size pad-sz w-100" style="float:left;">
                            <div class="card mb-2" style=" width: 18rem; height: fit-content; box-shadow: 0px 20px 40px #75B2DD1A; border-radius: 15px 15px 15px 15px; opacity: 1;">
                                <img class="card-img-top" src="{{ url('storage/' .$b->gambar) }}" alt="Card image cap"  style="height: 12rem; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body cardd-body" onclick="location.href='{{url('storage/'. '/' .$b->nama_file)}}'">
                                    <p class="card-text text-left fz ml-2"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($b->updated_at)) }}</small></p>
                                    <div class="container p-0">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex align-items-stretch">
                                                <p class="card-text wrapp-text text-left ml-2" style="color: #0F2B5B; cursor:pointer;" >
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

                        @if ($i % 2 == 0) </div>
                            @if($i <= count($laporanTahunan) - 1)
                                <div class="carousel-item">
                            @endif
                        @endif
                        @if($i == count($laporanTahunan) and $i % 2 != 0) </div> @endif
                        @php $i++; @endphp
                    @endforeach

                    <a class="carousel-control-prev" href="#news-ipad" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#news-ipad" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div>
</div>
