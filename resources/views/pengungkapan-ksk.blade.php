@include('layout.header')

<section id="img-header" class="img-header">
<img src="{{ asset('asset/slider10.png') }}">
<ul class="breadcrumb">
<div class="container">
  <li><a href="#">Home</a></li>
  <li>Tentang Kami</li>
  <li>Pengungkapan Kuantitatif Eksposur Risiko</li>
</div>
</ul>
</section>

<div class="container">
<h4 style="color:#0F2B5B;">Pengungkapan Kuantitatif Eksposur Risiko</h4>
<p  class="mb-4">Laporan pengungkapan kuantitatif eksposur risiko</p>

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
<table>
<thead>
  <tr>
    <th class="pl-4" style="border-radius: 16px 0px 0px 0px;" colspan="2">Tahun 2000</th>
    <th>Diskripsi</th>
    
  <th style="border-radius: 0px 16px 0px 0px; width:12%;">
  <div class="btn-group">
  <button type="button" class="btn btn-sm btn-primary dropdown-toggle text-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih Tahun
  </button>
 
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">2010</button>
    <button class="dropdown-item" type="button">2011</button>
    <button class="dropdown-item" type="button">2012</button>
  </div>
  </div>
  </th>
  </tr>
</thead>
<tbody>
    @foreach($laporan as $l)
        <tr>
            <td class="text-right" style="width:4%">{{$l->id}}</td>
            <td>{{$l->tahun}}</td>
            <td>{{$l->deskripsi}}</td>
            <td><a href="{{url('storage/'. $l->nama_file)}}">lihat file</a> <img class="ml-2" src="{{ asset('asset/download.svg') }}"></td>
        </tr>
   @endforeach
</tbody>

</table>
@if($laporan->hasPages())
    <nav aria-label="Page navigation example" class="mb-5">
        <ul class="pagination">
            <li class="page-item"><a class="btn page-link
                                     @if($laporan->onFirstPage()) disabled @endif "
                                     href="{{$laporan->previousPageUrl()}}"
                                     style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Prev</a></li>
            @for($i = 1; $i <= $laporan->lastPage(); $i++)
                <li class="page-item"><a class="btn page-link
                                                @if($laporan->currentPage() == $i ) bg-warning @endif"
                                         href="{{$laporan->url($i)}}"
                                         style="border-radius: 8px;background: #FFF 0% 0% no-repeat padding-box;">{{$i}}</a></li>
            @endfor
            <li class="page-item"><a class="btn page-link"
                                     href="{{$laporan->nextPageUrl()}}"
                                     style="color:#FFF;border-radius: 8px;background: #0F2B5B 0% 0% no-repeat padding-box;">Next</a></li>
        </ul>
    </nav>
@endif
</div>

@include('layout.footer')
