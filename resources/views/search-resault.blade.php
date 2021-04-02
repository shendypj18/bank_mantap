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
                        <div class="panel-body pt-3 pb-3 pl-3 pr-3" style="background-color: white;">
                            <div class="row">
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
                                        <div class="container" id="page">
                                            <nav aria-label="Page navigation example" class="paging mb-5" style="margin-left:30%;">
                                                <ul class="pagination">
                                                    <li class="page-item mr-3"><a class="btn page-link active pl-4
                                                                                         @if($hasil_pencarian->onFirstPage()) disabled @endif
                                                                                         " href="{{ $hasil_pencarian->previousPageUrl() }}"
                                                                                  style="border: 1px solid #0f2b5b;background: #0f2b5b 0% 0% no-repeat padding-box;border: 1px solid #0F2B5B;
                                                                                         border-radius: 12px;opacity: 1; width: 54px;height: 44px; color:#FFFF; font-size:20px; "><</a></li>
                                                    @for($i = 1; $i <= $hasil_pencarian->lastPage(); $i++)
                                                        <li class="page-item mr-3"><a class="btn page-link pl-3
                                                                                             @if($hasil_pencarian->currentPage() == $i) bg-warning @endif
                                                                                             "
                                                                                      href="{{$hasil_pencarian->url($i)}}"
                                                                                      style="border: 1px solid #0f2b5b;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #0F2B5B;
                                                                                             border-radius: 12px;opacity: 1; width: 54px;height: 44px; font-size:14px;">{{$i}}</a></li>
                                                    @endfor
                                                    <li class="page-item mr-3"><a class="btn page-link pl-3"
                                                                                  href="{{$hasil_pencarian->nextPageUrl() }}"
                                                                                  style="border: 1px solid #0f2b5b;background: #0f2b5b 0% 0% no-repeat padding-box;border: 1px solid #0F2B5B;
                                                                                         border-radius: 12px;opacity: 1; width: 54px;height: 44px; color:#FFFF; font-size:20px">></a></li>
                                                </ul>
                                            </nav>
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
