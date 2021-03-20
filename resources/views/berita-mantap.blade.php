@include('layout.header')
<style>
.active,.btn-wr:hover{
	background-color: #FCD116;
	color:black;
	color: #121212;
	opacity: 1;
	font-size: 13px;
	border-radius: 25px;
	width: 179px;
	font-family: 'Roboto', sans-serif;
	font-weight: 900;
	border:none;
	transition-duration: 0.7s;
	box-shadow: 0 8px 10px 0 rgba(0,0,0,0.24), 0 14px 40px 0 rgba(0,0,0,0.15);
 }
</style>

<section id="img-header" class="img-header">
    @if($berita)
        <img src="{{ asset('storage/'. $berita->gambar_berita) }}">
    <ul class="breadcrumb">
        <div class="container">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Info Mantap</li>
            <li>Berita Mantap</li>
        </div>
    </ul>
    @endif
</section>

<section class="section">
    <!-- Content Start Here -->
    <div class="container text-center" id="news">
        <h3 class="text-center">@if($berita){{$berita->judul_berita}} @endif</h3>
        <div style="text-align: left;">
            @if($berita)
                {!!  $berita->isi_berita !!}
            @endif
        </div>
        <p><br/></p>
        <p><a class="btn btn-lg btn-wr active" href="#" role="button">Berita Mantap</a>
            <a class="btn btn-lg btn-wr" href="#" role="button">Promosi Mantap</a>
            <a class="btn btn-lg btn-wr" href="#" role="button">Program Mantap</a>
            <a class="btn btn-lg btn-wr" href="#" role="button">Laporan Keuangan</a></p>

    </div>

    <div class="container text-center mt-5">
        <div class="row">
            @foreach ($pages as $page)
                <div class="col-sm-3 mb-5">
                    <div class="card mb-2" style="height: 23rem; box-shadow: 0px 20px 40px #75B2DD1A;border-radius: 12px 12px 0px 0px; opacity: 1;">
                        <img class="card-img-top" src="{{url('storage/'. $page->gambar_berita)}}" alt="Card image cap"  style="height: 12rem;">
                        <div class="card-body">
                            <p class="card-text text-left"><small class="text-muted">Last Update : {{ date("d F Y", strtotime($page->updated_at)) }}</small></p>
                            <p class="card-text text-left" style="color:#0F2B5B; cursor:pointer;" onclick="location.href='{{url('berita/'. $bahasa . '/' .$page->slug)}}'">
                                {{ $page->judul_berita }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->


    <!-- PAGGING -->
    @if ($pages->hasPages())
        <div class="container" id="page">
            <nav aria-label="Page navigation example" class="paging mb-5" style="margin-left:30%;">
                <ul class="pagination">
                    <li class="page-item mr-3"><a class="btn page-link active pl-4
                                                         @if($pages->onFirstPage()) disabled @endif
                                                         " href="{{ $pages->previousPageUrl() }}"
                                                  style="border: 1px solid #0f2b5b;background: #0f2b5b 0% 0% no-repeat padding-box;border: 1px solid #0F2B5B;
                                                         border-radius: 12px;opacity: 1; width: 54px;height: 44px; color:#FFFF; font-size:20px; "><</a></li>
                    @for($i = 1; $i <= $pages->lastPage(); $i++)
                        <li class="page-item mr-3"><a class="btn page-link pl-3
                                                             @if($pages->currentPage() == $i) bg-warning @endif
                                                             "
                                                      href="{{$pages->url($i)}}"
                                                      style="border: 1px solid #0f2b5b;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #0F2B5B;
                                                             border-radius: 12px;opacity: 1; width: 54px;height: 44px; font-size:14px;">{{$i}}</a></li>
                    @endfor
                    <li class="page-item mr-3"><a class="btn page-link pl-3"
                                                  href="{{$pages->nextPageUrl() }}"
                                                  style="border: 1px solid #0f2b5b;background: #0f2b5b 0% 0% no-repeat padding-box;border: 1px solid #0F2B5B;
                                                         border-radius: 12px;opacity: 1; width: 54px;height: 44px; color:#FFFF; font-size:20px">></a></li>
                </ul>
            </nav>
        </div>
    @endif
    <!-- PAGGING -->


    <br/> <br/> <br/> <br/>

</section>

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

@include('layout.footer')
