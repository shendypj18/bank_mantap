@if($laporan->count() > 0)
    <style>
     table {
         margin-bottom:5%;
         width: 100%;
         font-size:12px;
         box-shadow: 0px 20px 40px #00000014;
         border-radius: 16px;

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
    </style>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th class="pl-4" style="border-radius: 16px 0px 0px 0px;" colspan="2">Tahun</th>
                    <th>Diskripsi</th>

                    <th style="border-radius: 0px 16px 0px 0px; width:12%;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle text-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pilih Tahun
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @foreach($tahun as $tahun)
                                    <a href="{{url('article/'. $navbardata[$bahasa . '_slug'] .'/?tahun=' . $tahun->tahun)}}" class="dropdown-item" type="button">{{$tahun->tahun}}</a>
                                @endforeach
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                   $i = 1;
                @endphp
                @foreach($laporan as $l)
                    <tr>
                        <td class="text-right" style="width:4%">{{$i.'. '}}</td>
                        <td>{{$l->tahun}}</td>
                        <td>{{$l->deskripsi}}</td>
                        @if($l->nama_file)
                        <td><a href="{{url('storage/'. $l->nama_file)}}">lihat file</a> <img class="ml-2" src="{{ asset('asset/download.svg') }}"></td>
                        @endif
                    </tr>
                    @php
                    $i++;
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
