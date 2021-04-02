@foreach($cabang as $c)
    <div class="col-sm">
        <div class="card branch">
            <div class="card-body">
                <br/>
                <img src="{{ asset('asset/logo_mantap.png') }}" style="width: 40%" class="card-img-top mb-2" alt="Image Simulasi"/>
                <small>{{$c->alamat}}</small><br/>
                <small>{{$c->telp}}</small></p>
                <h3><img src="{{ asset('asset/icon/maps.png') }}"  alt="Maps"  style="width: 5%"> &nbsp;<a href="">Lihat Map</a></h3>
            </div>
        </div>
    </div>
@endforeach
