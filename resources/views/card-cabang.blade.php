<style type="text/css">
.card-margin {
     margin: 1%;
 }
 @media (max-width: 520px) {
     .card-margin {
         margin-left: 20%;
     }
 }
 @media (min-width: 768px) and (max-width: 1024px) {
     .kantor-cabang-fz {
         font-size: 50%;
         display: block;
         line-height: 1.5em;
     }
 }
 @media (max-width:1024px){
    .card.branch{
        width: auto !important;
        height: auto !important;
    }
    .crd-cbg{
        margin-bottom: inherit !important;
    }

 }
@media (min-width:992px) and (max-width:1199px){
    .crd-itm.col-lg-3{
        flex: 0 0 45%;
        max-width: 50%;
    }
    .card.branch{
        width: auto !important;
        height: auto !important;
    }
}
</style>

<div class="mt-5">
<div class="row mb-5">
    @php $i = 1; @endphp
@foreach($cabang as $c)
    <div class="crd-itm crd-cbg col-6 col-md-6 col-lg-3 card-margin" >
        <div class="card branch">
            <div class="card-body">
                <img src="{{ asset('asset/logo_mantap.png') }}" style="width: 40%" class="card-img-top mb-2 mt-2" alt="Image Simulasi"/>
                <br/>
                <small class="kantor-cabang-fz">
                @if(strlen($c->alamat) > 81)
                    {{ substr($c->alamat, 0, 81) . '....'}}
                @else
                    {{$c->alamat}}
                @endif
                </small>
                <p><small class="kantor-cabang-fz mt-2">{{$c->telp}}</small></p>
                <h3 class="text-bold" data-toggle="modal" data-target="#aceh" onclick="gmap({{$c}})"><img src="{{ asset('asset/icon/maps.png') }}"  alt="Maps"  style="width: 15%"> &nbsp;<a>Lihat Map</a></h3>
            </div>
        </div>
    </div>

    @if($i % 4 == 0) </div></div>
        @if($i <= count($cabang) - 1)
            <div class="mt-5">
                <div class="row mb-5">
        @endif
    @endif
    @if($i == count($cabang) and $i % 4 != 0) </div></div> @endif
   @php $i++; @endphp
@endforeach
