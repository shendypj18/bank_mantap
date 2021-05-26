<style>
 ul {
     -webkit-padding-start: 0;
     padding-left: 4%;
 }
 li {
     -webkit-padding-start: 0;
     padding: 0;
 }
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

 .nav-item{
     width: 32.5%;

}
.col.tu{
    margin-left: -150px;
}
.col.on p{
    font-weight: bold;
    color:#0F2B5B;
}
.card-img{
    width: 22rem;
    height: 25rem;
}
@media (min-width:420px) and (max-width:992px){
    .manage{
        width: auto;
        font-size:14px;
        text-align: center;
    }
    .bg-white{
        border-radius: 10%;
        width: 352px;
        margin-bottom: 50px;
        background-color: transparent;
    }
    .card{
        background-color: transparent;
        border: none;
        border-radius: 0;
    }
    .card-img{
        width: auto;
        height: 400px;
    }
}
@media (min-width:990px){
    .card-img{
        margin-left: 10px;
    }
    .bg-white{

        background-color: transparent;
    }
    .card{
        background-color: transparent;
        border: none;
        border-radius: 0;
    }
    .card-img{
        width: 300px;
        height: auto;
    }
}
@media (max-width:420px){
    .manage{
        width: auto;
        font-size:10px;
        text-align: center;
    }
    .card-img{
        width: auto;
        height: auto;
        margin-bottom: 20px;
    }
    .bg-white{

        background-color: transparent;
    }
    .card{
        background-color: transparent;
        border: none;
        border-radius: 0;
    }
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
                                <div class="card bg-white text-white mx-auto">
                                    <img src="{{url('storage/'. $p->gambar)}}" class="card-img" alt="..." style="box-shadow: 0px 20px 40px #00000014; border-radius: 16 px 16px; ">
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
     border-radius: 16px 30px 16px 16px;
     opacity: 1;
 }

 .modal-content{
     background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
     background: #0f2b5b 0% 0% no-repeat padding-box;
     border-radius: 0px 30px 0px 16px;
     opacity: 1;
 }

 .txt{
     color: #fcd116;

 }

 .ttle{
     font-size: 14px;
 }
 .text-left{
     font-size: 14px;
     font-weight: bold;
 }
 .txt-right{
     font-size: 14px;
     text-align: left;
 }
 .bio-cnt{
        margin-top: 10px;
}
.col{
    margin-top: 5px;
}

@media (max-width:1366px){

    .modal-dialog{
     width: 729px;
     height: auto;
     background: #FFFFFF 0% 0% no-repeat padding-box;
     border-radius: 16px 30px 16px 16px;
     opacity: 1;
    }
    .txt h3{
     margin-top: 120px;
    }
    .card-img-top{
        width: auto;
        height: 246px;
    }
    .txt h3{
     margin-top: 120px;
     font-size: 20px;
    }
    .txt p{
        font-size: 14px;
    }
    .txt{
        margin-left: -250px;
    }
    .col{
        font-size: 14px;
    }



}
 @media (min-width:576px) and (max-width:990px){
    .modal-dialog{
     width: 729px;
     height: auto;
     background: #FFFFFF 0% 0% no-repeat padding-box;
     border-radius: 16px 30px 16px 16px;
     opacity: 1;
    }
    .txt h3{
     margin-top: 120px;
    }
    .card-img-top{
        width: auto;
        height: 246px;
    }
    .txt h3{
     margin-top: 120px;
     font-size: 20px;
    }
    .txt p{
        font-size: 14px;
    }
    .txt{
        margin-left: -20px;
    }
    .col{
        font-size: 14px;
    }

 }

 @media (max-width:576px){
    .modal-dialog{
    align-items: center;
     width: 100%;;
     height: auto;
     background: #FFFFFF 0% 0% no-repeat padding-box;
     border-radius: 16px 30px 16px 16px;
     opacity: 1;
    }


    .modal-content{
        background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
        background: #0f2b5b 0% 0% no-repeat padding-box;
        border-radius: 0px 30px 0px 16px;
        opacity: 1;
    }

    .card-img-top{
        width: auto;
        max-height: 200px;
    }
    .txt h3{
     margin-top: 80px;
     font-size: 16px;;
    }
    .txt p{
        font-size: 8px;
    }
    .txt{
        margin-left: -20px;
    }
    .col-sm{
        width: auto;
    }
    .col {
        font-size: 8px;
    }
    .col.tu{
        margin-left: -100px;
    }

 }
 @media (max-width:345px){
    .modal-dialog{
    align-items: center;
     width: 100%;
     height: auto;
     background: #FFFFFF 0% 0% no-repeat padding-box;
     border-radius: 16px 30px 16px 16px;
     opacity: 1;
    }


    .modal-content{
        background: var(--yellow-fcd116) 0% 0% no-repeat padding-box;
        background: #0f2b5b 0% 0% no-repeat padding-box;
        border-radius: 0px 30px 0px 16px;
        opacity: 1;
    }

    .card-img-top{
        width: auto;
        height: 166px;
    }
    .txt h3{
     margin-top: 60px;
     font-size: 10px;;
    }
    .txt p{
        font-size: 6px;
    }
    .txt{
        margin-left: -20px;
    }
    .col-sm{
        width: auto;
    }
    .col {
        font-size: 6px;
    }

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
                                <img class="card-img-top mx-auto" src="{{url('storage/'.$p->gambar)}}">
                            </div>
                            <div class="col-sm mt-5 txt">
                                <h3 class="nme">{{$p->nama}}</h3>
                                <p class="ttle">{{$p->jabatan}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col bio-cnt">
                              <div class="row">
                                <div class="col on">
                                    <p>Umur</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->umur}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Warga Negara</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->warga_negara}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Domisili</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->domisili}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Pendidikan</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->pendidikan}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Pengalaman Kerja</p>
                                </div>
                                <div class="col tu">
                                    <p>
                                      {!! $p->pengalaman_kerja !!}
                                    </p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Posisi Saat Ini</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->posisi_saat_ini}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Dasar Hukum Penunjukan</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->dasar_hukum_penunjukan}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Hubungan Afiliasi</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->hubungan_afiliasi}}</p>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col on">
                                    <p>Masa Jabatan</p>
                                </div>
                                <div class="col tu">
                                    <p>{{$p->masa_jabatan}}</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mt-5" sytle="font-size:10px;">
                        <div class="col text-left" style="color: #0F2B5B;">

                                <p>Umur</p>
                                <p>Warga Negara</p>
                                <p>Domisili</p>
                                <p>Pendidikan</p>
                                <p>Pengalaman Kerja</p>
                                <p>Posisi Saat Ini</p>
                                <p>Dasar Hukum Penunjukan</p>
                                <p>Hubungan Afiliasi</p>
                                <p>Masa Jabatan</p>



                        </div>
                        <div class="col txt-right" style="width:70%;">
                            <p>52 Tahun</p>
                            <p>Indonesia</p>
                            <p>Jakarta</p>
                            <p>Sarjana Keuangan dan Akutansi</p>
                            <p>
                                <li>Chief Country Officer Citi Indonesia <sub>(2011-2015)</sub></li>
                                <li>Country Head - Institutional Clients <sub>(2015-2016)</sub></li>
                            </p>
                            <p>Tidak Merangkap Jabatan, baik sebagai...</p>
                            <p>Diangkat pertama kali sebagai Komisaris Utama Bank Mantap berdasarkan...</p>
                            <p>Tidak ada hubungan afiliasi</p>
                            <p>2019-2020</p>
                        </div>

                    </div> --}}
                </div>
            </div>
            @php $i++; @endphp
        @endforeach
    @endif
@endforeach
