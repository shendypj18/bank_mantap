<style type="text/css" media="screen">


body {
  background-color: #95c2de;
}

.mainbox {
  background-color: #95c2de;
  margin: auto;
  height: 600px;
  width: 600px;
  position: relative;
    margin-top: 3%;
}

  .err {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 20%;
    top: 8%;
  }

.far {
  position: absolute;
  font-size: 8.5rem;
  left: 42%;
  top: 15%;
  color: #ffffff;
}

 .err2 {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 68%;
    top: 8%;
  }

.msg {
    text-align: center;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1.6rem;
    position:absolute;
    left: 16%;
    top: 45%;
    width: 75%;
  }

a {
  text-decoration: none;
  color: white;
}

a:hover {
  text-decoration: underline;
}
.img-responsive-2 {
    width: 100%;
    max-width: 100%;
    height: auto;
    max-height: 60%;
 }
 @media (min-width: 1337px) {
     .img-responsive-2 {
         width: 100%;
         max-width: 100%;
         height: auto;
         max-height: 60%;
     }
     .h {
         height: 400px;
     }
 }

</style>

<!-- purple x moss 2020 -->

<head>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="mainbox" style="">
      <img class="img-responsive-2"  src="{{asset('asset/amplop.png')}}">
      <div style="margin-top: 20%;" class="msg">Terimakasih {{$nama}}. Laporan anda telah kami terima dan akan kami tindak lanjuti<p>klik <a href="{{url('/')}}">tombol ini</a> untuk kembali ke beranda</p></div>
  </div>
</body>
