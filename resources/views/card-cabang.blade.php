<div class="mt-5">
<div class="row mb-5">
    @php $i = 1; @endphp
@foreach($cabang as $c)
    <div class="col-sm"  data-toggle="modal" data-target="#aceh">
        <div class="card branch" onclick="gmap({{$c}})">
            <div class="card-body">
                <br/>
                <img src="{{ asset('asset/logo_mantap.png') }}" style="width: 40%" class="card-img-top mb-2" alt="Image Simulasi"/>
                <small>{{$c->alamat}}</small><br/>
                <small>{{$c->telp}}</small></p>
                <h3><img src="{{ asset('asset/icon/maps.png') }}"  alt="Maps"  style="width: 5%"> &nbsp;<a href="">Lihat Map</a></h3>
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
