<style>


 .manage{
     border: none;
     width: 300px;
     height: 50px;
     text-align:center;
     margin-top:15px;

     letter-spacing: var(--unnamed-character-spacing-0);
     color: var(--darkblue-0f2b5b);
     font-size:24px;
     font-family:roboto;
     font: normal normal medium 24px/54px Roboto;
     letter-spacing: 0px;
     color: #0F2B5B;
 }

 .nav-link.manage:hover{
     border: none;
     color: #FFF;
     border-bottom: 3px solid #0F2B5B;
     background-color:#0F2B5B;

 }

 .nav-link.manage.active {
     border: none;
     border-bottom: 3px solid #0F2B5B;
 }
</style>

<div class="container mt-3 mb-5">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs taps" role="tablist">
        @php $c = 1; @endphp
        @foreach($kategori_jabatan as $k)
            @php $check = isset($profil_manajemen[$k->nama]); @endphp
            @if($check)
                <li class="nav-item">
                    <a class="nav-link manage @if($c == 1) active @endif" data-toggle="tab" href="{{'#' .$k->nama}}">{{$k->nama}}</a>
                </li>
            @endif
            @php $c++; @endphp
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        @php $cc = 1; @endphp
        @foreach($kategori_jabatan as $k)
            @php $check = isset($profil_manajemen[$k->nama]); @endphp
            @if($check)
                <div id="{{$k->nama}}" class="container tab-pane @if($cc == 1) active @endif"><br> @php $cc++; @endphp
                    <div class="row">
                        @php $i = 1; @endphp
                        @foreach($profil_manajemen[$k->nama] as $p)
                            <div class="col-lg-4"  data-toggle="modal" data-target="{{'#'. $k->nama .$i}}">
                                <div class="card bg-white text-white">
                                    <img src="{{url('storage/'. $p->gambar)}}" class="card-img" alt="..." style="width: 22rem; box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; height:25rem;">
                                    <div class="card-img-overlay" style="margin-top:86%;">
                                       <p class="card-text" style="font-size: 20px; font-weight: 500; color:#FCD116;"><strong><!-- ECHO DISINI UNTUK NAMA PEJABAT --></strong></p>
                                       <p class="card-text" style="font-size: 12px; color:#FCD116;"><!-- ECHO DISINI UNTUK JABATAN --></p>
                                    </div>
                                </div>
                            </div>
                            @if($i % 3 == 0) </div>
                                @if($i < count($profil_manajemen[$k->nama]))
                                    <div class="row mt-4">
                                @endif
                            @endif
                            @php $i++; @endphp
                        @endforeach
                        @if(($i - 1) % 3 != 0) </div> @endif
                </div>
            @endif
        @endforeach
    </div>
</div>


<style>
 .modal-dialog{
     width: 729px;
     height: 700px;
     background: #FFFFFF 0% 0% no-repeat padding-box;
     border-radius: 16px 16px 16px 16px;
     opacity: 1;
 }

 .modal-content{
     background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
     background: #FCD116 0% 0% no-repeat padding-box;
     border-radius: 0px 16px 0px 16px;
     opacity: 1;
 }
</style>


@foreach($kategori_jabatan as $k)
    @php $check = isset($profil_manajemen[$k->nama]); @endphp
    @if($check)
        @php $i = 1; @endphp
        @foreach($profil_manajemen[$k->nama] as $p)

            <div class="modal fade" id="{{$k->nama . $i}}" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-sm">
                                <img class="card-img-top" src="{{url('storage/'.$p->gambar)}}">
                            </div>
                            <div class="col-sm mt-5">
                                <h3 class="mt-5">{{$p->nama}}</h3>
                                <p>{{$p->jabatan}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5" sytle="font-size:10px;">
                        <div class="col-sm-3 ml-4 text-left" style="color: #0F2B5B;">
                            <p>Umur</p>
                            <p>Warga Negara</p>
                            <p>Domisili</p>
                            <p>Pendidikan</p>

                        </div>
                        <div class="col-sm-3-right" style="width:70%;">
                            <p>:&nbsp;{{$p->umur}}</p>
                            <p>:&nbsp;{{$p->warga_negara}}</p>
                            <p>:&nbsp;{{$p->domisili}}</p>
                            <p>:&nbsp;{{$p->pendidikan}}</p>
                        </div>

                    </div>
                </div>
            </div>
            @php $i++; @endphp
        @endforeach
    @endif
@endforeach
