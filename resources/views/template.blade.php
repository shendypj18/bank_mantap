@include('layout.header')

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



<section class="section">
    <div class="container ">
        {!!  $navbardata[$bahasa. '_text_content']!!}
    </div>
    @if($navbardata->id_slug == substr($id_route, 8, strlen($id_route) -1) or $navbardata->en_slug == substr($en_route, 8, strlen($en_route) -1))
        @if(View::exists($navbardata->id_slug))
            @include($navbardata->id_slug)
        @endif
    @endif
</section>
   @isset($laporan)
       @include('template-table')
   @endisset


@include('layout.footer')
