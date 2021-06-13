@include('layout.header')
<style type="text/css">

 .fit-parent{
     box-sizing: border-box;
     width: 100%;
 }
 .img-responsive-3 {
     width: 100%;
     max-width: 80%;
     height: auto;
     max-height: 80%;
 }
 @media (min-width: 1337px) {
     .img-responsive-3 {
         width: 100%;
         max-width: 80%;
         height: auto;
         max-height: 100%;
     }
 }


</style>

<section id="img-header" class="img-header">
<img src="{{ url('storage/'. $navbardata[$bahasa .'_banner'])}}">

<ul class="breadcrumb">
<div class="container">
  <li><a href="{{url('/')}}">Home</a></li>
  @if($navbardata->kategori_navbar != 'NONE')<li>
      {{__('admin.' . strtoupper(Str::slug($navbardata->kategori_navbar, '_')))}}
  </li>
  @endif
  <li>{{$navbardata[$bahasa. '_navigasi']}}</li>
</div>
</ul>
 

</section>



<section class="section cnt-txt" style="position:relative">
    <div class="container fit-parent" >
        {!!  $navbardata[$bahasa. '_text_content']!!}
    </div>
    @if($navbardata->id_slug == substr($id_route, 8, strlen($id_route) -1) or $navbardata->en_slug == substr($en_route, 8, strlen($en_route) -1))
        @php $n = 0 @endphp
        @if(substr($navbardata->id_slug, 0, 3) == 'id-')
            @php $n = 3 @endphp
        @endif
        @if(View::exists(substr($navbardata->id_slug, $n)))
            @include(substr($navbardata->id_slug, $n))
        @endif
    @endif
</section>
   @isset($laporan)
       @include('template-table')
   @endisset


@include('layout.footer')
