@if($berita)
    @include('layout.header')
@endif

<style>
 @media(min-width: 576px) and (max-width: 767px) {
     .pad-sz {
		-webkit-box-flex: 0;
		flex: 0 0 50%;
		max-width: 50%;
	}
 }
@media(max-width: 480px) {
     .fz-berita {
         font-size: 17px;
     }
 }
.active,.btn-wr:hover{
	background-color: #FCD116;
		color:black;
		color: #121212;
		opacity: 1;
		font-size: 13px;
		border-radius: 25px;
		width: 82px;
		font-family: 'Roboto', sans-serif;
		font-weight: 900;
		border:none;
		transition-duration: 0.7s;
		box-shadow: 0 8px 10px 0 rgba(0,0,0,0.24), 0 14px 40px 0 rgba(0,0,0,0.15);
 }

.img-responsive {
     width: 100%;
     max-width: 70%;
     height: auto;
     max-height: 70%;
 }
.img-responsive-2 {
    width: 100%;
    max-width: 100%;
    height: auto;
    max-height: 60%;
 }
 @media (min-width: 1337px) {
     .img-responsive-2 {
         width: 100%;
         max-width: 70%;
         height: auto;
         max-height: 60%;
     }
     .h {
         height: 400px;
     }
 }

</style>

@if($berita)
    <section id="img-header" class="img-header">
        <img src="{{ url('storage/'. $navbardata[$bahasa .'_banner'])}}">
        <ul class="breadcrumb">
            <div class="container">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{$navbardata->kategori_navbar}}</li>
                <li>{{$navbardata[$bahasa. '_navigasi']}}</li>
            </div>
        </ul>
    </section>
@endif

    <!-- Content Start Here -->
<div class="container text-center" id="news">
    @if($berita)
        <img class="img-responsive-2 h justify-content-md-center" src="{{ url('storage/'. $berita->gambar)}}">
        <div class="row justify-content-md-center">
            <div class="col-md-10 mt-5">
                <h4 class="fz-berita text-justify" ><strong>{{$berita[$bahasa .'_judul']}}</strong></h4>
            </div>
        </div>
        <div class="row justify-content-md-center text-justify">
            <div class="col-md-10" >
                {!!  $berita[$bahasa. '_isi'] !!}
            </div>
        </div>
    @endif
    <div class="col-sm-8 mt-3" style="float:none;margin:auto;">
        @if($berita)
            <p class="text-center"><a class="btn btn-sm btn-share" data-toggle="modal" data-target="#ModalShare" data-whatever="share" href="#" role="button"><span class="fa fa-share-alt"></span> {{ __('bisnis.bagikan_konten') }}</a></p>
        @endif
        <h3 class="text-center" >{{ __('admin.dapatkan_informasi_berita') }} <strong>Bank Mandiri Taspen</strong></h3>
    </div>
    <p><br/></p>
    <p>
        <div class="display-button">
        @foreach($navbar["INFO MANTAP"] as $nv)
            @if(in_array($nv->id_slug, ['berita-mantap', 'id-berita-mantap', 'promosi-mantap', 'id-promosi-mantap', 'program-mantap', 'id-program-mantap',
                       'laporan-keuangan', 'id-laporan-keuangan']))
            <a class="btn-wr
                      @if($nv['id_slug'] == 'promosi-mantap') active @endif "
               href="{{url('article/'. $nv[$bahasa. '_slug'] .'/'. $bahasa)}}" role="button">{{$nv[$bahasa . '_navigasi']}}</a>
            @endif
        @endforeach
        </div>
    </p>
</div>
    <div class="container text-center mt-5">
        <div class="row">
            @isset($pages["Promosi Mantap"])
            @foreach ($pages["Promosi Mantap"] as $page)
                @if(!empty($page[$bahasa. '_judul']))
                <div class="col-sm-3 mb-5 pad-sz">
                    <div class="card mb-2" style="height: fit-content; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
                        <img class="card-img-top" src="{{url('storage/'. $page->gambar)}}" alt="Card image cap"  style="height: 12rem;">
                        <div class="card-body cardd-body">
                            <p class="card-text text-left fz"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($page->updated_at)) }}</small></p>
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-lg-12 d-flex align-items-stretch">
                                        <p class="card-text wrapp-text text-left mll" style="color:#0F2B5B; cursor:pointer;" onclick="location.href='{{url('info/'. $page[$bahasa. '_slug'] .'/'. $bahasa)}}'">
                                            {{-- @if(strlen($page[$bahasa. '_judul']) > 56)
                                            {{ substr($page[$bahasa. '_judul'], 0, 56) . '....'}}
                                            @else  --}}
                                            {{$page[$bahasa. '_judul']}}
                                            {{--  @endif --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            @endisset
        </div> <!-- row -->
    </div> <!-- container -->

    @php $link_limit = 7; @endphp
    <!-- PAGGING -->
    @if ($pages["Promosi Mantap"])
        @if ($pages["Promosi Mantap"]->hasPages())
            <div class="container mt-3 pl-4">
                <div class="row">
                    <nav aria-label="Page navigation example" class="mb-5">
                        <ul class="pagination">
                            <li class="page-item"><a class="btn page-link
                                                            @if($pages["Promosi Mantap"]->onFirstPage()) disabled @endif
                                                            "
                                                     href="{{$pages["Promosi Mantap"]->previousPageUrl()}}"
                                                     style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Prev</a></li>
                            @for($i = 1; $i <= $pages["Promosi Mantap"]->lastPage(); $i++)
                                 @php
                                $half_total_links = floor($link_limit / 2);
                                $from = $laporan->currentPage() - $half_total_links;
                                $to = $laporan->currentPage() + $half_total_links;
                                if ($laporan->currentPage() < $half_total_links) {
                                $to += $half_total_links - $laporan->currentPage();
                                }
                                if ($laporan->lastPage() - $laporan->currentPage() < $half_total_links) {
                                $from -= $half_total_links - ($laporan->lastPage() - $laporan->currentPage()) - 1;
                                }
                                @endphp
                                @if ($from < $i && $i < $to)
                                    <li class="page-item"><a class="btn page-link
                                                                    @if($pages["Promosi Mantap"]->currentPage() == $i ) bg-warning @endif
                                                                    "
                                                             href="{{$pages["Promosi Mantap"]->url($i)}}"
                                                             style="border-radius: 8px;background: #FFF 0% 0% no-repeat padding-box;">{{$i}}</a></li>
                                @endif
                            @endfor
                            <li class="page-item"><a class="btn page-link"
                                                     href="{{$pages["Promosi Mantap"]->nextPageUrl()}}"
                                                     style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        @endif
     @endif
    <!-- PAGGING -->


    <br/> <br/> <br/> <br/>


<script>
 // Add active class to the current button (highlight it)
 var header = document.getElementById("news");
 var btns = header.getElementsByClassName("btn");
 for (var i = 0; i < btns.length; i++) {
     btns[i].addEventListener("click", function() {
         var current = document.getElementsByClassName("active");
         current[0].className = current[0].className.replace(" active", "");
         this.className += " active";
     });
 }
</script>
@if($berita)
    @include('layout.footer')
@endif
