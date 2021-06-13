@include('layout.header')

<section id="img-header" class="img-header" style="background-color:#ebebed;">
    <div class="container" >

        <div style="width: 100%; height: 400px; margin-top:8%;">
            <div class="row mt-5">
                <div class="col-xs-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading pt-4 pb-2 pl-3 pr-3" style="background-color: #183562; color: #FFF;" >
                            <P class="panel-title">We've found {{$hasil_pencarian->count()}} result for "{{$search}}"</P>
                        </div>
                        <div class="panel-body pt-3 pl-3 pr-3" style="background-color: white;">
                            <div class="row">
                                @php $link_limit = 7; @endphp
                                @foreach($hasil_pencarian as $hasil)
                                <div class="col-sm-12">
                                    <div class="list-result-search">
                                        <a href="{{url('info/'.$hasil[$bahasa .'_slug'] .'/'. $bahasa)}}" style="color: black;" ><p><strong>{{ $hasil[$bahasa .'_judul']}}</strong></p></a>
                                        <a href="{{url('info/'. $hasil[$bahasa .'_slug'] .'/'. $bahasa)}}" class="btn btn-find-more" role="button">Find out more >></a>
                                    </div>
                                    <hr/>
                                </div>
                                @endforeach
                                <div class="col-sm-12">
                                    @if ($hasil_pencarian->hasPages())
                                        <div class="container pl-4" id="page">
                                            <div class="row">
                                                <nav aria-label="Page navigation example" class="">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="btn page-link
                                                                                        @if($hasil_pencarian->onFirstPage()) disabled @endif
                                                                                        "
                                                                                 href="{{$hasil_pencarian->previousPageUrl()}}"
                                                                                 style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Prev</a></li>
                                                        @for($i = 1; $i <= $hasil_pencarian->lastPage(); $i++)
                                                            @php
                                                            $half_total_links = floor($link_limit / 2);
                                                            $from = $hasil_pencarian->currentPage() - $half_total_links;
                                                            $to = $hasil_pencarian->currentPage() + $half_total_links;
                                                            if ($hasil_pencarian->currentPage() < $half_total_links) {
                                                            $to += $half_total_links - $hasil_pencarian->currentPage();
                                                            }
                                                            if ($hasil_pencarian->lastPage() - $hasil_pencarian->currentPage() < $half_total_links) {
                                                            $from -= $half_total_links - ($hasil_pencarian->lastPage() - $hasil_pencarian->currentPage()) - 1;
                                                            }
                                                            @endphp
                                                            @if ($from < $i && $i < $to)
                                                                <li class="page-item"><a class="btn page-link
                                                                                                @if($hasil_pencarian->currentPage() == $i ) bg-warning @endif
                                                                                                "
                                                                                         href="{{$hasil_pencarian->url($i)}}"
                                                                                         style="border-radius: 8px;background: #FFF 0% 0% no-repeat padding-box;">{{$i}}</a></li>
                                                            @endif
                                                        @endfor
                                                        <li class="page-item"><a class="btn page-link"
                                                                                 href="{{$hasil_pencarian->nextPageUrl()}}"
                                                                                 style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Next</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

</section>
@include ('layout/footer')
