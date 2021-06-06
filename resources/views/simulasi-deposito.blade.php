@include('layout.header')

<style>
input[type=text] {
background: #FFFFFF 0% 0% no-repeat padding-box;
border: 2px solid #D0D8E6;
border-radius: 12px;
height: 50px;
}

.input-group-text{
background: #D0D8E6 0% 0% no-repeat padding-box;
border-radius: 12px 0px 0px 12px;
height: 50px;
width: 110px;
}

td {
  height: 40px;
  width:65%;

}

@media (min-width:575px) and (max-width:1024px){
    .card.card-body{
        padding: 5%;
    }
    .col-sm-8.col-md-8.input-group{
        align-content: flex-start;
        height: auto;
    }
}
</style>

<section id="img-header" class="img-header">
<img src="{{asset('asset/slider_simulasi.png')}}">
<ul class="breadcrumb">

    <div class="container">

        <li><a href="#">Home</a></li>
        <li>Simulasi</li>
        <li>Deposito</li>
    </div>

</ul>
</section>



<div class="container" id="input">
    <div class="row">
        <div class="col-sm-6 text-left">
            <h4><strong>Simulasi Deposito</strong></h4>
        </div>

        <div class="col-sm-5 text-center">

            <select name="cars" style="background: #FFFFFF 0% 0% no-repeat padding-box;
                          border: 1px solid #D0D8E6;
                          border-radius: 8px;
                          opacity: 1; width: 260px;
                          height: 40px;" onchange="document.location.href=this.value">
                <option value="volvo" selected>Pilih simulasi produk lain</option>
                <option value="{{url('simulasi-tabungan-berjangka/'.$bahasa)}}">Simulasi Tabungan Berjangka</option>
                <option value="{{url('simulasi-deposito/'.$bahasa)}}">Simulasi Deposito</option>
                <option value="{{url('simulasi-kredit-serbaguna-mikro/'.$bahasa)}}">Simulasi kredit Serbaguna Mikro</option>
                <option value="{{url('simulasi-kredit-pensiun/'.$bahasa)}}">Simulasi Kredit Pensiun</option>
            </select>

        </div> <!-- col-sm-5-->
    </div><!-- row -->

    <div class="mt-5">
        <p><small>Lakukan simulasi perhitungan dana sesuai dengan kebutuhan yang Anda pilih.</small></p>
    </div><!-- mt-5 ml-4 -->


    <div class="card card-body mb-5 col-sm-10" style="box-shadow: 0px 20px 40px #75B2DD1A; border: 1px solid #D0D8E6; border-radius: 12px;">

        <form>
            <div class="form-group row mt-4 ">
                <label class="col-sm-4 col-form-label" for="setor">Jumlah Setoran (perbulan)</label>
                <div class="col-md-8 col-sm-8 input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><b>Rp</b></span></div>
                    <input type="number" class="form-control text-right" id="setor" onkeyup="updateSetor(this); checkInput();" required>
                </div>
                <div class="col-sm-3">
                    <span id="lesss" style="color: red;">*Kurang dari Rp 5.000.000</span>
                    <span id="moree" style="color: red;">*Lebih dari Rp 5.000.000</span>
                </div>
            </div>

            <div class="form-group row  ">
                <label class="col-sm-4 col-form-label" for="waktu">Jangka Waktu</label>
                <div class="col-sm-8 col-md-8 input-group">
                    <input type="number" class="form-control text-right" id="waktu" oninput="updateWaktu(this); checkInput(); updateBunga(this);" required>
                    <div class="input-group-prepend"><span class="input-group-text" style="border-radius: 0px 12px 12px 0px;"><b>Bulan</b></span></div>
                </div>
                <div class="col-sm-3">
                    <span id="less" style="color: red;">*Kurang dari 6 bulan</span>
                    <span id="more" style="color: red;">*Lebih dari 12 bulan</span>
                </div>
            </div>

            <div class="form-group row  ">
                <label class="col-sm-4 col-form-label" for="bunga">Suku Bunga</label>
                <div class="col-sm-8 col-md-8 input-group">
                    <input type="text" class="form-control" id="bunga" disabled value="" style="background-color:#FFF;">
                    <span class="input-group-text" style="border-radius: 0px 0px 0px 0px; width:50px; background-color:#FFF;">,</span>
                    <input type="text" class="form-control"  id="bungaa" disabled value=""  style="background-color:#FFF;">
                    <span class="input-group-text"  style="border-radius: 0px 12px 12px 0px;"><b style="">% Pertahun</b></span>
                </div>
            </div>

            <div class="form-group row  ">
                <div class="col-sm-4 col-form-label"></div>
                <div class="col-sm-5 input-group ">
                    <button class="btn btn-simulasi-flat" type="button" id="btnHitung" onclick="hitung()">HITUNG SIMULASI</button>
                </div>
            </div>
        </form>

    </div> <!-- card -->
</div> <!-- container -->



<div class="container" id="hasil">

<h4><strong>Hasil Perhitungan Simulasi Deposito</strong></h4>

<div class="col-sm-11 mt-5">
<div class="card card-body mb-5 col-sm-10" style="box-shadow: 0px 20px 40px #75B2DD1A; border: 1px solid #D0D8E6; border-radius: 12px;">
<div class="container mt-3">

<table style="width:70%">
<tbody>
  <tr>
    <td style="padding-left:18px;">Jumlah Setoran (perbulan)</td>
    <td style="color:#0F2B5B;">: <strong id="hasil_setor"></strong></td>
  </tr>

  <tr style="background-color: #FCD1161A;">
    <td style="padding-left:18px;">Bunga</td>
    <td style=" color:#0F2B5B;">: <strong id="hasil_bunga"></strong></td>
  </tr>

  <tr>
    <td style="padding-left:18px;">Jangka Waktu</td>
    <td style="color:#0F2B5B;">: <strong id="hasil_waktu"></strong></td>
  </tr>

  <tr style="background-color: #FCD1161A;">
    <td style="padding-left:18px;">Total Dana</td>
    <td  style="color:#0F2B5B;">: <strong id="hasil_total"></strong></td>
  </tr>

 </tbody>

 </table>

 <div class="col-sm-12">
      <h4 class="mt-4"><small>Catatan</small></h4>
        <small>1.&nbsp;&nbsp;&nbsp;Perhitungan di atas belum termasuk pajak bunga.</small><br>
        <small>2.&nbsp;&nbsp;&nbsp;Suku bunga dapat berubah sewaktu-waktu mengikuti ketentuan yang berlaku.</small><br>
        <small>2.&nbsp;&nbsp;&nbsp;Simulasi ini merupakan ilustrasi, perhitungan sebenarnya mengikuti perhitungan di sistem Bank Mantap</small><br>
</div>

<div class="form-group row">
    <div class="col-sm-3 col-form-label"></div>
    <div class="col-sm-5 input-group ">
    <a class="btn btn-simulasi-flat mt-5" role="button" href="{{url('simulasi-deposito/' .$bahasa)}}">KEMBALI KE SIMULASI</a>
    </div>
</div>
 </div>
 </div>
 </div>
</div> <!-- container -->



@include('layout.footer')


<script>
  var bSetor = false;
  var bWaktu = false;
  $(document).ready(function(){
      //$('#setor').maskMoney({thousands:'.', decimal:',', precision:0});
      $('#less').hide();
      $('#more').hide();
      $('#lesss').hide();
      $('#moree').hide();

      $('#hasil').hide();
      $('#btnHitung').prop('disabled', true);
  });

  function findAndReplace(string, target, replacement) {
   var i = 0, length = string.length;
   for (i; i < length; i++) {
     string = string.replace(target, replacement);
   }
   return string;
  }

  function updateSetor(input) {
    var str = input.value;
    var strr=findAndReplace(str,".","");

    if (parseInt(strr) <5000000) {
        $('#lesss').show();
        $('#moree').hide();
        window.bSetor = false;
    } else if(parseInt(strr) > 5000000000){
        $('#moree').show();
        $('#lesss').hide();
        window.bSetor = false;
    }else{
        $('#lesss').hide();
        $('#moree').hide();
        window.bSetor = true;
    }
  }

  function updateWaktu(input) {
    if (input.value <0) {
        $('#less').show();
        $('#more').hide();
        window.bWaktu = false;
    } else if(input.value > 12){
        $('#more').show();
        $('#less').hide();
        window.bWaktu = false;
    }else{
        $('#less').hide();
        $('#more').hide();
        window.bWaktu = true;
    }
  }

  function updateBunga(input) {
      if (input.value>=1 && input.value <=3){
          document.getElementById("bunga").value = 2;
          document.getElementById("bungaa").value = 85;
      } else if (input.value>=6 && input.value<=24){
        document.getElementById("bunga").value = 3;
        document.getElementById("bungaa").value = 0;
      }
  }

  function toRp(angka){
    var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return 'Rp. ' + rev2.split('').reverse().join('') + ',00';
  }

  function checkInput(){
    var bln=findAndReplace($('#setor').val(),".","");
    var setoran_bulanan = parseInt(bln);
    var jangka_waktu = $('#waktu').val();

    if(setoran_bulanan > 0 && jangka_waktu > 0 && window.bSetor && window.bWaktu){
        $('#btnHitung').prop('disabled', false);
    }else{
        $('#btnHitung').prop('disabled', true);
    }
  }

  function hitung(){
    var bln=findAndReplace($('#setor').val(),".","");
    var setoran_bulanan = parseInt(bln);
    var jangka_waktu = $('#waktu').val();
    var bunga_thn = ($('#bunga').val()+"."+$('#bungaa').val())/100;
    var bunga_bln = bunga_thn/12;
    var bunga = setoran_bulanan * bunga_bln;
    var total_dana = setoran_bulanan + bunga;

    for (var i = 1; i < jangka_waktu; i++) {
      var ul = total_dana + setoran_bulanan;
      bunga = ul * bunga_bln;
      total_dana = ul +bunga;


      console.log("no = "+(i+1));
      console.log("setoran = "+ul);
      console.log("bunga = "+bunga);
      console.log("total = " + total_dana);
    }


    $('#input').hide();
    $('#hasil').show();

    $('#hasil_setor').text(toRp(Math.round(setoran_bulanan)));
    $('#hasil_bunga').text(toRp(Math.round(bunga)));
    $('#hasil_waktu').text(jangka_waktu + " Bulan");
    $('#hasil_total').text(toRp(Math.round(total_dana)));
  }
</script>

{{-- @include('layout.footer') --}}
