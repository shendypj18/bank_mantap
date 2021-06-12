@if($laporan->count() > 0)
    <style>
     .img-table {
         width: 5%;
     }
     table {
         margin-bottom:5%;
         width: 100%;
         font-size:12px;
         box-shadow: 0px 20px 40px #00000014;
         border-radius: 16px;
         font-family:'Calibri', sans-serif !important;
     }

     th {

         height: 60px;
         color: #121212;

     }
     td {
         text-align: left;
         height: 40px;
         color: #121212;;
     }
     tr:nth-child(even){
         background-color: #FCD1161A;
     }

     th {
         background-color: #FCD116;
         color: #0F2B5B;
     }

     tr .footer{
         font-weight:bold;
         background-color: #D0D8E6;
         height: 50px;
         color: #0F2B5B;

     }

    .desc-txt{
             width: 60%;
             margin-left: 10px;

    }
    .thn-txt{
             width: 40%;
    }

    .thn-btn {
             width: 12%;
    }

     @media (min-width:1025px){
        .btn-o-tbl{
             display: none;
         }

         .col-12{
             display: none;
         }
     }

     @media (max-width:1025px){
         .btn-tbl{
             visibility: hidden;
         }
         .btn-txt{
            border-radius: 25px 0px 0px 25px;
            width: 100%;
            border: 1px solid #0F2B5B;

         }
         .btn-txt:hover{
            width: 100%;
            border-radius: 25px 0px 0px 25px;
         }
         .txt-pil{
             float: left;
             margin-left: 50px;
         }
         .btn-group.btn-o-tbl{
             margin-top: -10px;
             margin-bottom: 30px;
             width: 100%;
         }
         .btn-tgl{
             border: 2px solid #0F2B5B
         }
         .btn-tbl{
             display: none;
         }
         .desc-txt{
             width: 60%;
             margin-left: 10px;

         }
         .thn-txt{
             width: 40%;
         }

         .thn-btn {
             width: 12%;
         }


         @media (max-width: 480px)  {
            .desc-txt{
                 width: 50%;
                 margin-left: 10px;
             }
             .thn-txt{
                 width: 30%;
             }

             .thn-btn {
                  width: 20%;
            }

            .img-table {
                 margin-left: 17px;
                 width: 22px;
             }

             .txt-unduh {
                font-size: 9px;
                margin-left: 7px;
            }
         }

         @media (max-width: 720px) {
            .desc-txt{
                 width: 50%;
                 margin-left: 10px;
             }
             .thn-txt{
                 width: 30%;
             }

             .thn-btn {
                  width: 20%;
            }

            .img-table {
                 margin-left: 17px;
                 width: 22px;
             }

             .txt-unduh {
                font-size: 9px;
                margin-left: 7px;
            }

         }
     }
     thead,
     tfoot {
         background-color: #3f87a6; !important
         color: #fff;
     }
    </style>
    <div class="container">
       <div class="row">
        <div class="col-12">
            <div class="btn-group btn-o-tbl">
                <button class="btn btn-sm btn-primary bg-white btn-txt " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#121212; ">
                   <div class="txt-pil">
                    {{__("admin.txt_table_pilih_tahun")}}
                   </div>
                </button>
                <button type="button" class="btn btn-sm btn-primary dropdown-toggle text-right btn-tgl" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 20%;">
                </button>
                <div class="dropdown-menu dropdown-menu-right col-xs-5 bg-warning">
                    @foreach($tahun as $tt)
                        <a href="{{url('article/'. $navbardata[$bahasa . '_slug'] .'/?tahun=' . $tt->tahun)}}" class="dropdown-item" type="button">{{$tt->tahun}}</a>
                    @endforeach
                </div>
            </div>
           </div>
       </div>
        <table>
            <thead>
                <tr>
                    <th class="pl-4 thn-txt" style="border-radius: 16px 0px 0px 0px;" colspan="2">
                        @if($kategori_laporan == "Penghargaan")
                            {{__("admin.txt_table_penghargaan")}}
                        @else
                            {{__("admin.txt_table_tahun")}}
                        @endif
                        </th>
                    <th class="desc-txt">{{__("admin.txt_table_deskripsi")}}</th>

                    <th class="thn-btn" style="border-radius: 0px 16px 0px 0px;">
                        <div class="btn-group btn-tbl">
                            <button class="btn btn-sm btn-primary bg-white " type="button" style="color:#121212;">
                                {{__("admin.txt_table_pilih_tahun")}}
                            </button>
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle text-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 20%;">

                            </button>
                            <div class="dropdown-menu dropdown-menu-right bg-warning">
                                @foreach($tahun as $cc)
                                    <a href="{{url('article/'. $navbardata[$bahasa . '_slug'] .'/?tahun=' . $cc->tahun)}}" class="dropdown-item" type="button">{{$cc->tahun}}</a>
                                @endforeach
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                   $i = (($laporan->currentPage() - 1) * 10);
                   $ii = 1;
                @endphp
                @foreach($laporan as $l)
                    <tr>
                        <td class="text-center font-weight-bold" id="idx" style="width:5%">{{$i + $ii}} <span>. </span></td>
                        <td class="font-weight-bold">@if($l->jenis_laporan == "7") {{$l->nama. ' '}} @endif {{$l->tahun}}</td>
                        <td >{{$l->deskripsi}}</td>
                        @if($l->jenis_laporan != "7")
                            <td> <img class="img-table" src="{{ asset('asset/download.svg') }}"> <a class="txt-unduh" href="{{url('storage/'. $l->nama_file)}}">{{__("bisnis.unduh_file")}}</a></td>
                        @endif
                    </tr>
                    @php
                    $ii++;
                    @endphp
                @endforeach
            </tbody>

        </table>
        <nav aria-label="Page navigation example" class="mb-5">
            <ul class="pagination">
                <li class="page-item"><a class="btn page-link
                                                @if($laporan->onFirstPage()) disabled @endif
                                                "
                                         href="{{$laporan->previousPageUrl()}}"
                                         style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Prev</a></li>
                @for($i = 1; $i <= $laporan->lastPage(); $i++)
                    <li class="page-item"><a class="btn page-link
                                                    @if($laporan->currentPage() == $i ) bg-warning @endif
                                                    "
                                             href="{{$laporan->url($i)}}"
                                             style="border-radius: 8px;background: #FFF 0% 0% no-repeat padding-box;">{{$i}}</a></li>
                @endfor
                <li class="page-item"><a class="btn page-link"
                                         href="{{$laporan->nextPageUrl()}}"
                                         style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Next</a></li>
            </ul>
        </nav>
    </div>
@endif
