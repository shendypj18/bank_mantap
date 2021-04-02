@include('layout.header')
<section id="img-header" class="img-header">
    <div>

        <div class="row">
            &nbsp
            <div id="googlemap" style="width: 100%; height: 470px;"></div>
        </div>

    </div>

    <ul class="breadcrumb">

        <div class="container">
            <li><a href="#">Home</a></li>
            <li>Kantor Cabang</li>
        </div>

    </ul>
</section>

<div class="container" id="search">
    <script type="text/javascript">
     function show(obj) {
         no = obj.options[obj.selectedIndex].value;
         count = obj.options.length;
         for(i=1;i<=count;i++)
             document.getElementById('myDiv'+i).style.display = 'none';
         document.getElementById('myDiv'+no).style.display = 'block';
     }
     function showw(obj) {
         no = obj.options[obj.selectedIndex].value;
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
                 if (xmlhttp.status == 200) {
                     document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
                 }
                 else if (xmlhttp.status == 400) {
                     alert('There was an error 400');
                 }
                 else {
                     alert('something else other than 200 was returned');
                 }
             }
         };
         xmlhttp.open("GET", "{{url('/cabang/teling?provinsi=')}}" + no, true);
         xmlhttp.send();
     }
     document.addEventListener("DOMContentLoaded", function(event) {
         let select = document.getElementById("pilih");
         select.dispatchEvent(new Event('change'));
     });

    </script>
    <h4><b>Lokasi Kantor Cabang Mandiri Taspen</b></h4>
    <div class="row mt-4">
        <div class="col-sm-4 text-left">
            <form action="">
                @csrf
                <select id="pilih" class="btn btn-lg" aria-label="Default select example" onchange="showw(this)">
                    @php $i = 1; @endphp
                    @foreach($provinsi as $pr)
                        <option value="{{$pr->provinsi}}" @if($i == 1) selected="selected" @endif>{{$pr->provinsi}}</option>
                        @php $i++; @endphp
                    @endforeach
                </select>
        </div>
        <!-- <div class="col-sm text-center"><button class="btn btn-lg btn-search" type="submit">Cari</button></div> -->
            </form>

    </div>
    <div id="myDiv" style="display:block;" class="mt-5">
        <div  class="row mb-5">
        </div>
    </div>
</div>




    </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

@include('layout.footer')
