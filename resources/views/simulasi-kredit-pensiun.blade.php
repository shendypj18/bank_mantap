@include('layout.header')

<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
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
<img src="{{asset(__('bisnis.img_simulasi'))}}">
<ul class="breadcrumb">

<div class="container">
  <li><a href="#">Home</a></li>
  <li>Simulasi</li>
  <li>Kredit Pensiun</li>
</div>

</ul>
</section>



<div class="container" id="input">
  <div class="row">
      <div class="col-sm-6 text-left">
          <h4><strong>{{__("bisnis.simulasi_kredit_pensiuan")}}</strong></h4>
      </div>

      <div class="col-sm-5 text-center">

          <select name="cars" style="background: #FFFFFF 0% 0% no-repeat padding-box;
                        border: 1px solid #D0D8E6;
                        border-radius: 8px;
                        opacity: 1; width: 260px;
                        height: 40px;" onchange="document.location.href=this.value">
              <option value="volvo" selected>{{__("bisnis.pilih_simulasi")}}</option>
              <option value="{{url('simulasi-tabungan-berjangka/'.$bahasa)}}">{{__("bisnis.simulasi_tabungan_berjangka_judul")}}</option>
              <option value="{{url('simulasi-deposito/'.$bahasa)}}">{{__("bisnis.simulasi_deposito")}}</option>
              <option value="{{url('simulasi-kredit-serbaguna-mikro/'.$bahasa)}}">{{__("bisnis.simulasi_kredit_serbaguna_mikro")}}</option>
              <option value="{{url('simulasi-kredit-pensiun/'.$bahasa)}}">{{__("bisnis.simulasi_kredit_pensiuan")}}</option>
          </select>

      </div> <!-- col-sm-5-->
  </div><!-- row -->

  <div class="mt-5">
      <p><small>{{__("bisnis.simulasi_section")}}</small></p>
  </div><!-- mt-5 ml-4 -->


  <div class="card card-body mb-5 col-sm-10" style="box-shadow: 0px 20px 40px #75B2DD1A; border: 1px solid #D0D8E6; border-radius: 12px;">

      <form>
          <div class="form-group row mt-4 ">
              <label class="col-sm-4 col-form-label" for="setor">{{__("bisnis.simulasi_setoran_sb")}}</label>
              <div class="col-md-8 col-sm-8 input-group">
                  <div class="input-group-prepend"><span class="input-group-text"><b>Rp</b></span></div>
                  <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control text-right" id="setor" onkeyup="updateSetor(this); checkInput();" required>
              </div>
              <div class="col-sm-3">
                  <span id="lesss" style="color: red;">*{{__("bisnis.simulasi_kurang_jk")}}</span>
                  <span id="moree" style="color: red;">*{{__("bisnis.simulasiksm_lebih_jk")}}</span>
              </div>
          </div>

          <div class="form-group row  ">
              <label class="col-sm-4 col-form-label" for="waktu">{{__("bisnis.simulasi_jangka_waktu")}}</label>
              <div class="col-sm-8 col-md-8 input-group">
                  <input type="number" class="form-control text-right" id="waktu" oninput="updateWaktu(this); checkInput(); updateBunga(this);" required>
                  <div class="input-group-prepend"><span class="input-group-text" style="border-radius: 0px 12px 12px 0px;"><b>{{__("bisnis.simulasi_bulan")}}</b></span></div>
              </div>
              <div class="col-sm-3">
                  <span id="less" style="color: red;">*{{__("bisnis.simulasijk_kurang_bln")}}</span>
                  <span id="more" style="color: red;">*{{__("bisnis.simulasiksm_lebih_bln")}}</span>
              </div>
          </div>

          <div class="form-group row  ">
              <label class="col-sm-4 col-form-label" for="bunga">{{__("bisnis.simulasi_suku_bunga")}}</label>
              <div class="col-sm-8 col-md-8 input-group">
                  <input type="text" class="form-control" id="bunga" disabled value="9" style="background-color:#FFF;">
                  <span class="input-group-text" style="border-radius: 0px 0px 0px 0px; width:50px; background-color:#FFF;">,</span>
                  <input type="text" class="form-control"  id="bungaa" disabled value="6"  style="background-color:#FFF;">
                  <span class="input-group-text"  style="border-radius: 0px 12px 12px 0px;"><b style="">{{__("bisnis.simulasi_per_tahun")}}</b></span>
              </div>
          </div>

          <div class="form-group row  ">
              <div class="col-sm-4 col-form-label"></div>
              <div class="col-sm-5 input-group ">
                  <button class="btn btn-simulasi-flat" type="button" id="btnHitung" onclick="hitung()">{{__("bisnis.hitung_simulasi")}}</button>
              </div>
          </div>
      </form>

  </div> <!-- card -->
</div> <!-- container -->




<div class="container" id="hasil">

<h4><strong>{{__("bisnis.hasil_kredit_pensiun_title")}}</strong></h4>

<div class="col-sm-11 mt-5">
<div class="card card-body mb-5 col-sm-10" style="box-shadow: 0px 20px 40px #75B2DD1A; border: 1px solid #D0D8E6; border-radius: 12px;">
<div class="container  mt-3">

<table style="width:70%">
<tbody>
  <tr>
    <td style="padding-left:18px;">{{__("bisnis.hasil_angsuran_pokok")}}</td>
    <td style="color:#0F2B5B;">: <strong id="hasil_angsuran_pokok"></strong></td>
  </tr>

  <tr style="background-color: #FCD1161A;">
    <td style="padding-left:18px;">{{__("bisnis.hasil_angsuran_bunga")}}</td>
    <td style=" color:#0F2B5B;">: <strong id="hasil_angsuran_bunga"></strong></td>
  </tr>

  <tr>
    <td style="padding-left:18px;">{{__("bisnis.hasil_angsuran_perbulan")}}</td>
    <td style="color:#0F2B5B;">: <strong id="hasil_total_angsuran_bulan"></strong></td>
  </tr>

  <tr style="background-color: #FCD1161A;">
    <td style="padding-left:18px;">{{__("bisnis.hasil_angsuran_total")}}</td>
    <td  style="color:#0F2B5B;">: <strong id="hasil_total_angsuran"></strong></td>
  </tr>

 </tbody>

 </table>

 <div class="col-sm-12">
      <h4 class="mt-4"><small>{{__("bisnis.hasil_catatan")}}</small></h4>
        <small>1.&nbsp;&nbsp;&nbsp;{{__("bisnis.hasil_catatan_1")}}</small><br>
        <small>2.&nbsp;&nbsp;&nbsp;{{__("bisnis.hasil_catatan_2")}}</small><br>
        <small>2.&nbsp;&nbsp;&nbsp;{{__("bisnis.hasil_catatan_3")}}</small><br>
</div>

<div class="form-group row">
    <div class="col-sm-3 col-form-label"></div>
    <div class="col-sm-5 input-group ">
    <a class="btn btn-simulasi-flat  mt-5" role="button" href="{{url('simulasi-kredit-pensiun/' . $bahasa)}}">{{__("bisnis.hasil_kembali")}}</a>
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
        window.bSetor = false;
    } else if(parseInt(strr) > 350000000){
        $('#moree').show();
        window.bSetor = false;
    }else{
        $('#lesss').hide();
        $('#moree').hide();
        window.bSetor = true;
    }
  }

  function updateWaktu(input) {
    if (input.value <12) {
        $('#less').show();
        window.bWaktu = false;
    } else if(input.value > 180){
        $('#more').show();
        window.bWaktu = false;
    }else{
        $('#less').hide();
        $('#more').hide();
        window.bWaktu = true;
    }

    if(input.value > 24 && input.value <=120){
      $('#bunga').attr('value',11);
      $('#bungaa').attr('value',88);
    }else if(input.value > 120 && input.value <=180){
      $('#bunga').attr('value',11);
      $('#bungaa').attr('value',88);
    }else{
      $('#bunga').attr('value',9);
      $('#bungaa').attr('value',6);
    }
  }

  var rupiah = document.getElementById("setor");
    rupiah.addEventListener("keyup", function(e) {
 
    rupiah.value = formatRupiah(this.value);
  });

/* Fungsi formatRupiah */
function formatRupiah(angka){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
 
	return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	
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
    var angsuran_pokok = setoran_bulanan/jangka_waktu;
    var total_angsuran_bulan = angsuran_pokok + bunga;

    // for (var i = 1; i < jangka_waktu; i++) {
    //   var ul = total_dana + setoran_bulanan;
    //   bunga = ul * bunga_bln;
    //   total_dana = ul +bunga;


      // console.log(isChecked);
    //   console.log("setoran = "+ul);
    //   console.log("bunga = "+bunga);
    //   console.log("total = " + total_dana);
    // }


    $('#input').hide();
    $('#hasil').show();

    $('#hasil_angsuran_pokok').text(toRp(Math.round(angsuran_pokok)));
    $('#hasil_angsuran_bunga').text(toRp(Math.round(bunga)));
    $('#hasil_total_angsuran_bulan').text(toRp(Math.round(total_angsuran_bulan)));
    $('#hasil_total_angsuran').text(toRp(Math.round(total_angsuran_bulan * jangka_waktu)));
  }



</script>
