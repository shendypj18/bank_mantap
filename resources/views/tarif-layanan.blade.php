
<style>
  .strip-txt{
    text-indent: 1.2%;
  }
table {
 margin-bottom:8%;
 margin-top:2%;
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
 color: #121212;
 background-color: #fff;
 border-top-style: solid;
 border-top-width: 1px;

 border-color:#D0D8E6;
}
tr:nth-child(even){
   background-color: #FCD1161A;
}

th {
 background-color: #FCD116;
 color: #0F2B5B;
}

</style>


{{-- <section id="img-header" class="img-header">
<img src="{{ asset('asset/slider21.png') }}">

<ul class="breadcrumb">
<div class="container">
 <li><a href="#">Home</a></li>
 <li>Jasa Bank</li>
 <li>Tarif Layanan</li>
</div>
</ul>

</section> --}}

<section class="section">
<!-- Content Start Here -->

<div class="container">
<h4><strong>{{__("bisnis.tarif_layanan_judul")}}</strong></h4>
<table>

<thead>
 <tr>
   <th class="pl-5" style="border-radius: 16px 0px 0px 0px;">{{__("bisnis.tarif_layanan_no")}}</th>
   <th>{{__("bisnis.tarif_layanan_jl")}}</th>
   <th class="pl-4" style="border-radius: 0px 16px 0px 0px;">{{__("bisnis.tarif_layanan_tarif")}}</th>
 </tr>
</thead>
<tbody>
 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;">1</td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>Giro Rupiah</strong></td>
 </tr>
  
 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_giro_a")}}</td>
   <td>Rp20,000,-/{{__("bisnis.simulasi_bulan")}}</td>
 </tr>

 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"></td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_adm")}}</strong></td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_adm_a")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_adm_b")}}</td>
   <td>Rp25,000,-/{{__("bisnis.simulasi_bulan")}}</td>
 </tr>

 <tr>
   <td class="pl-4"></td>
   <td>c. {{__("bisnis.tarif_layanan_adm_c")}}</td>
   <td>Rp25,000,-/{{__("bisnis.simulasi_bulan")}}</td>
 </tr>

 <tr>
   <td class="pl-4"></td>
   <td>d. {{__("bisnis.tarif_layanan_adm_d")}}</td>
   <td>Rp25,000,-/{{__("bisnis.tarif_layanan_lembar")}}</td>
 </tr>

 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"></td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_cek")}}</strong></td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_cek_a")}}</td>
   <td>Rp25,000,- per {{__("bisnis.tarif_layanan_warkat")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_cek_b")}}</td>
   <td>Rp25,000,- per {{__("bisnis.tarif_layanan_laporan")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>c. {{__("bisnis.tarif_layanan_cek_c")}}</td>
   <td>Rp20,000,- per {{__("bisnis.tarif_layanan_laporan")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>d. {{__("bisnis.tarif_layanan_cek_d")}}</td>
   <td>Rp2,000,- per {{__("bisnis.tarif_layanan_laporan")}}</td>
 </tr>

 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"></td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_cf")}}</strong></td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td colspan="2">a. {{__("bisnis.tarif_layanan_cf_a")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_cf_a1")}}</td>
   <td>Rp50,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_cf_a2")}}</td>
   <td>Rp100,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_cf_b")}}</td>
   <td>Rp25,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>c. {{__("bisnis.tarif_layanan_cf_c")}}</td>
   <td>Rp3,000,-/{{__("bisnis.tarif_layanan_lembar")}}</td>
</tr>
 
 <tr>
   <td class="pl-5"></td>
   <td>d. {{__("bisnis.tarif_layanan_cf_d")}}</td>
   <td>Rp125,000,-/{{__("bisnis.tarif_layanan_buku")}}</td>
 </tr>

 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;">2</td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_tasimGold")}}</strong></td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_tasimGold_a")}}</td>
   <td>Rp6,500,-/{{__("bisnis.simulasi_bulan")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_tasimGold_b")}}</td>
   <td>Rp25,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>c. {{__("bisnis.tarif_layanan_tasimGold_c")}}</td>
   <td>Rp2,000,-/{{__("bisnis.simulasi_bulan")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td colspan="2">d. {{__("bisnis.tarif_layanan_tasimGold_d")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_tasimGold_d1")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_tasimGold_d2")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_tasimGold_d2")}}</td>
   <td>Rp5,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>e. {{__("bisnis.tarif_layanan_tasimGold_e")}}</td>
   <td>Rp5,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>f. {{__("bisnis.tarif_layanan_tasimGold_f")}}</td>
   <td>Rp15,000,-</td>
 </tr>
 <tr>
   <td class="pl-5"></td>
   <td>g. {{__("bisnis.tarif_layanan_tasimGold_g")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;">3</td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_tasimBer")}}</strong></td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_tasimBer_a")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_tasimBer_b")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>c. {{__("bisnis.tarif_layanan_tasimBer_c")}}</td>
   <td>Rp100,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>d. {{__("bisnis.tarif_layanan_tasimBer_d")}}</td>
   <td>Rp105,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>e. {{__("bisnis.tarif_layanan_tasimBer_e")}}</td>
   <td>Rp10,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>f. {{__("bisnis.tarif_layanan_tasimBer_f")}}</td>
   <td>Rp20,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>g. {{__("bisnis.tarif_layanan_tasimBer_g")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>h. {{__("bisnis.tarif_layanan_tasimBer_h")}}</td>
   <td>Rp3,000,-/{{__("bisnis.tarif_layanan_lembar")}}</td>
 </tr>



  <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;">4</td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_tasimKu")}}</strong></td>
 </tr>


 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_tasimKu_a")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_tasimKu_b")}}</td>
   <td>Rp20,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>c. {{__("bisnis.tarif_layanan_tasimKu_c")}}</td>
   <td>Rp2,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td colspan="2">d. {{__("bisnis.tarif_layanan_tasimKu_d")}}</td>
    
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_tasimKu_d1")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td  class="strip-txt">- {{__("bisnis.tarif_layanan_tasimKu_d2")}}</td>
   <td>Rp5,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>e. {{__("bisnis.tarif_layanan_tasimKu_e")}}</td>
   <td>Rp5,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>f. {{__("bisnis.tarif_layanan_tasimKu_f")}}</td>
   <td>Rp15,000,-</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>g. {{__("bisnis.tarif_layanan_tasimKu_g")}}</td>
   <td>Rp5,000,-</td>
 </tr>


 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;">5</td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_tasimDeposito")}}</strong></td>
 </tr>



 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_tasimDeposito_a")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_tasimDeposito_b")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>

 <tr>
   <td class="pl-5" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;">6</td>
   <td colspan="2" style="background-color: #FCD1161A; color:#0F2B5B; font-weight:bold;"><strong>{{__("bisnis.tarif_layanan_tasimATM")}}</strong></td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>a. {{__("bisnis.tarif_layanan_tasimATM_a")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>b. {{__("bisnis.tarif_layanan_tasimATM_b")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>c. {{__("bisnis.tarif_layanan_tasimATM_c")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>d. {{__("bisnis.tarif_layanan_tasimATM_d")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>


 <tr>
   <td class="pl-5"></td>
   <td>e. {{__("bisnis.tarif_layanan_tasimATM_e")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>f. {{__("bisnis.tarif_layanan_tasimATM_f")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>g. {{__("bisnis.tarif_layanan_tasimATM_g")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>h. {{__("bisnis.tarif_layanan_tasimATM_h")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>i. {{__("bisnis.tarif_layanan_tasimATM_i")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>j. {{__("bisnis.tarif_layanan_tasimATM_j")}}</td>
   <td>{{__("bisnis.tarif_layanan_bebas")}}</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>k. {{__("bisnis.tarif_layanan_tasimATM_k")}}</td>
   <td>5% {{__("bisnis.tarif_layanan_dari")}} nominal</td>
 </tr>

 <tr>
   <td class="pl-5"></td>
   <td>l. {{__("bisnis.tarif_layanan_tasimATM_l")}}</td>
   <td>{{__("bisnis.tarif_layanan_tasimATM_k1")}}</td>
 </tr>

 <tr>
   <td colspan="2"></td>
   <td>{{__("bisnis.tarif_layanan_tasimATM_k2")}}</td>
 </tr>
 <tr>
   <td colspan="2"></td>
   <td>{{__("bisnis.tarif_layanan_tasimATM_k3")}}</td>
 </tr>
 <tr>
   <td colspan="2"></td>
   <td>{{__("bisnis.tarif_layanan_tasimATM_k4")}}</td>
 </tr>
 <tr>
   <td colspan="2"></td>
   <td>{{__("bisnis.tarif_layanan_tasimATM_k5")}}</td>
 </tr>

 <tr>
   <td class="pl-4" style="border-radius: 0px 0px 0px 16px;"></td>
   <td></td>
   <td class="pl-4" style="border-radius: 0px 0px 16px 0px;"></td>
 </tr>
</tbody>

  

</table>



</section>
