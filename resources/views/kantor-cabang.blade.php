@include('layout.header');
<section id="img-header" class="img-header">
<div>
     
        <div class="row">
            &nbsp
            <div id="googlemap"  style="width: 100%; height: 470px;"></div>
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
         xmlhttp.open("GET", "{{url('/cabang/kantor?provinsi=')}}" + no, true);
         xmlhttp.send();
     }
     document.addEventListener("DOMContentLoaded", function(event) {
         let select = document.getElementById("pilih");
         select.dispatchEvent(new Event('change'));
     });
    </script>

    <h4><b>Lokasi Kantor Cabang Mandiri Taspen</b></h4>
    <div class="row mt-5">
        <div class="col-md-5 text-left">
            <form action="">
                @csrf
                <select id="pilih" class="btn btn-lg" aria-label="Default select example" onchange="showw(this)">
                    @php $i = 1; @endphp
                    @foreach($provinsi as $pr)
                        <option value="{{$pr->provinsi}}" @if($i == 1) selected="selected" @endif>{{$pr->provinsi}}</option>
                        @php $i++; @endphp
                    @endforeach
                </select>
            </form>
        </div>
    </div>

    <div id="myDiv"></div>
</div>

</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<style>
 
</style>
<!-- MODAL MAPS -->  
<div class="modal fade" id="aceh" role="dialog">
    <div class="modal-dialog modal-lg">
        <div style="text-align: right;">
            <a data-dismiss="modal" href="#" id="x"><i class="fa fa-times-circle-o fa-3x" aria-hidden="true" style="color: #FFF;"></i></a>
        </div>

        <div class="modal-content">
            <div id="acehmaps" style="width: 100%; height: 470px;"></div>
        </div>

    </div>
</div>
</div>
<!-- MODAL END --->

 

<!-- MAPS 1 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIZgjTse1wQSgjfHDf-a3DIJQNH570C_U"></script>
<script type="text/javascript">
 var map = null;
 var marker = null;
 var infowindow = null;
 function initMap() {
     //var myLatLng = { lat: -6.914864, lng: 107.608238};
     var myLatLng = { lat: 0, lng: 0};
     map = new google.maps.Map(document.getElementById("acehmaps"), {
         zoom: 4,
         center: myLatLng,
     });
     marker = new google.maps.Marker({
         position: myLatLng,
         map: map,
         title: "hellow",
     });
     infowindow = new google.maps.InfoWindow();

     google.maps.event.addListener(map, 'click', function() {
         infowindow.close();
     });

     //marker.setPosition(myLatLng);
 }
 function gmap(data) {
     var lat = parseFloat(data['latitude']).toFixed(6);
     var lng = parseFloat(data['longitude']).toFixed(6);
     //console.log(data['telp']);
     //console.log(data['alamat']);
     //console.log(lat, lng);
     //var latlng = new google.maps.LatLng(parseInt(data['latitude']), parseInt(data['longitude']));
     var latlng = new google.maps.LatLng(lat, lng);
     //var latlng = new google.maps.LatLng(-6.914864, 107.608238);
     //var latlng = new google.maps.LatLng(data['longitude'], data['latitude']);
     //var latlng = new google.maps.LatLng( 35.652832, 139.839478);
     var htmlString = "<strong><center><div style=\'paddinng-left:12px\'><img src=\"{{asset('asset/logo_mantap.png')}}\" class=\"img-responsive\" width=\"80px\"  ></div> </center>"
     htmlString += data['alamat'] + '<br><a href=\"tel:-\">(';
     htmlString += data['telp'] + ')</a></strong><br><br>';
     marker.setPosition(latlng);
     marker.addListener('click', function() {
         infowindow.setContent(htmlString);
         infowindow.open(map, marker);
     });
     map.setCenter(latlng);
 }
 google.maps.event.addDomListener(window, 'load', initMap);
 function open_location(id){
     google.maps.event.trigger(markers, 'click');
 }

</script>
@include('layout.footer')
