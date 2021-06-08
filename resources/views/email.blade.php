<!-- <style type="text/css">
     table {
	 width: 750px;
	 border-collapse: collapse;
	 margin:50px auto;
	 }

     /* Zebra striping */
     tr:nth-of-type(odd) {
	 background: #eee;
	 }

     th {
	 background: #3498db;
	 color: white;
	 font-weight: bold;
	 }

     td, th {
	 padding: 10px;
	 border: 1px solid #ccc;
	 text-align: left;
	 font-size: 18px;
	 }

     /*
     Max width before this PARTICULAR table gets nasty
     This query will take effect for any screen smaller than 760px
     and also iPads specifically.
     */
     @media
     only screen and (max-width: 760px),
     (min-device-width: 768px) and (max-device-width: 1024px)  {

	 table {
	 width: 100%;
	 }

	 /* Force table to not be like tables anymore */
	 table, thead, tbody, th, td, tr {
	 display: block;
	 }

	 /* Hide table headers (but not display: none;, for accessibility) */
	 thead tr {
	 position: absolute;
	 top: -9999px;
	 left: -9999px;
	 }

	 tr { border: 1px solid #ccc; }

	 td {
	 /* Behave  like a "row" */
	 border: none;
	 border-bottom: 1px solid #eee;
	 position: relative;
	 padding-left: 50%;
	 }

	 td:before {
	 /* Now like a table header */
	 position: absolute;
	 /* Top/left values mimic padding */
	 top: 6px;
	 left: 6px;
	 width: 45%;
	 padding-right: 10px;
	 white-space: nowrap;
	 /* Label the data */
	 content: attr(data-column);

	 color: #000;
	 font-weight: bold;
	 }

     }
     </style> -->

<p>Laporan whistle blowing oleh {{$nama_pelapor}}</p>
<p>Nama Pelapor &nbsp; : &nbsp; {{ $nama_pelapor}}</p>
<p>nomer telepon &nbsp; : &nbsp; {{ $nomer_telepon }}</p>
<p>Email &nbsp; : &nbsp; {{ $email }}</p>
<p>tindakan &nbsp; : &nbsp; {{ $tindakan }}</p>
<p>nama terlapor &nbsp; : &nbsp; {{ $nama_terlapor}}</p>
<p>jabatan terlapor &nbsp; : &nbsp; {{ $jabatan_terlapor }}</p>
<p>waktu kejadian &nbsp; : &nbsp; {{ $waktu_kejadian}}</p>
<p>lokasi kejadian &nbsp; : &nbsp; {{ $lokasi_kejadian}}</p>
<p>kronologis kejadian &nbsp; : &nbsp; {{ $kronologis_kejadian}}</p>
<p>nominal &nbsp; : &nbsp; Rp. &nbsp; {{ $nominal }}</p>
<!-- <table>
     <thead>
     <tr>
     <th>Nama Pelapor</th>
     <th>Nomer Telepon</th>
     <th>Email</th>
     <th>Tindakan</th>
     <th>Nama Terlapor</th>
     <th>Jabatan Terlapor</th>
     <th>Waktu Kejadian</th>
     <th>Lokasi Kejadian</th>
     <th>Kronologi Kejadian</th>
     <th>Nominal</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <td data-column="Nama Pelapor">{{$nama_pelapor}}</td>
     <td data-column="Nomer Telepon">{{$nomer_telepon}}</td>
     <td data-column="Email">{{$email}}</td>
     <td data-column="Tindakan">{{$tindakan}}</td>
     <td data-column="Nama Terlapor">{{$nama_terlapor}}</td>
     <td data-column="Jabatan Terlapor">{{$jabatan_terlapor}}</td>
     <td data-column="Waktu Kejadian">{{$waktu_kejadian}}</td>
     <td data-column="Lokasi Kejadian">{{$lokasi_kejadian}}</td>
     <td data-column="Kronologi Kejadian">{{$kronologis_kejadian}}</td>
     <td data-column="Nominal"></td>
     </tr>
     </tbody>
     </table> -->
