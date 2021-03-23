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
                                        <a href="{{url('berita/'. $bahasa . '/' .$hasil->slug)}}" style="color: black;" ><p><strong>{{ $hasil->judul_berita }}</strong></p></a>
                                        <a href="{{url('berita/'. $bahasa . '/' .$hasil->slug)}}" class="btn btn-find-more" role="button">Find out more >></a>
                                    </div>
                                    <hr/>
                                </div>
                                @endforeach
                            </div>
			            </div>

                    </div>
                </div>
            </div>

</section>
@include ('layout/footer')
