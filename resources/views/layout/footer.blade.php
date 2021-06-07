{!! htmlScriptTagJsApi() !!}
<!--  ================================================ FIRST FOOTER ========================================================== -->

<style>

 .mmm {
     margin-left: 10%;
 }
 .icon-sz {
     width: 80px;
 }
 @media (max-width: 768px) {
     .icon-sz {
         width: 30px;
     }
 }
 @media(max-width: 480px) {
     .mmm{
         margin-left: 0;
     }
 }
  @media (max-width:992px){
    .display-footer-mobile{
      display: block;

    /* top: 0px; */
    /* left: 0px; */
      /* will-change: transform; */
    }
    .display-footer-mobile .navbar-nav .nav-item .dropdown-menu.show{
      position: relative !important;
      transform: inherit !important;
    }
    .dropdown-menu.show a{
      margin-left: 10px;
    }
    .display-footer{
      display: none;
    }
    .dropdown.show .rgt{
            display: none;
        }
        .dropdown:not(.show) .dwn{
            display: none;
        }
  }
  @media screen and (max-width:992px){
    #footer .dropdown-footer {
        padding-right: 0;
        border-bottom: 1px solid;
    }
  }
  @media (min-width:993px){
    .display-footer-mobile{
      display: none;
    }
    .display-footer{
      display: flex;
      font-size: 1rem;
    }
  }
 @media (min-width: 768px) and (max-width: 1023px) {
     .mmm{
         margin-left: 10%;
     }
 }
@media(max-width: 991px) {
     .l-sz {
         margin-left: -150px;
     }
 }
 @media (max-width:1024px){

   .text-footer .col-sm-8{
     flex: auto !important;
     max-width: inherit !important;
   }
   .text-footer .col-sm-4{
     flex: auto !important;
     max-width: inherit !important;
   }
   .row.icn-logo .col-sm{
     flex-basis: auto;
   }
   .text-footer a.fa{
     font-size: initial;
   }
  .row.small-footer{
    display: block;
  }
 }
</style>

<section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-7 col-md-5">
         <h1 style="padding-top: 30px">{{__("admin.txt_section_footer")}}</h1>
       </div>
        <div class="col-xs-12 col-sm-7 col-md-6">
         <img class="small-logo" src="{{ asset('asset/map-dot.png') }}" width="90%" alt="Logo Corp" />
       </div>
     </div>
      <div class="row text-left text-xs-center text-sm-left text-md-left display-footer">
          @foreach($kategorinavbar as $nv)
              @if($nv->nama != 'NONE' and $nv->nama != 'JASA BANK')
              <div class="col-xs-12 col-sm-2 col-sm-2">
                  <h5>{{  trans('admin.'. str_replace(' ', '_', $nv->nama)) }}</h5>
                  <ul class="list-unstyled quick-links">
                      @foreach($navbar[$nv->nama] as $subnavbar)
                          <li><a  href="{{url('article/' .$subnavbar[$bahasa. "_slug"] .'/'. $bahasa)}}">{{$subnavbar[$bahasa. "_navigasi"]}}</a></li>
                      @endforeach
                  </ul>
              </div>
              @endif
          @endforeach
          <div class="col-xs-12 col-sm-2 col-sm-2">
              <h5>{{trans('admin.lainnya') }}</h5>
              <ul class="list-unstyled quick-links">
                  <li><a href="{{url('kantor-cabang/'. $bahasa)}}">{{trans('admin.kantor_cabang')}}</a></li>
                  <li><a href="{{url('karir/'. $bahasa)}}">{{trans('admin.karir2')}}</a></li>
              </ul>
        </div>
    </div>

    <div class="row text-left text-xs-center text-sm-left text-md-left display-footer-mobile">

      @foreach($kategorinavbar as $nv)
          @if($nv->nama != 'NONE' and $nv->nama != 'JASA BANK')
          <div class="col-12">
            <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
            <li class="nav-item dropdown">
              <a class="nav-link mr-3 dropdown-footer footer-nav" href="" id="navbarDropdown" role="button"
                 data-toggle="dropdown"  aria-expanded="false">{{  trans('admin.'. str_replace(' ', '_', $nv->nama)) }}
                 <i class="rgt">
                  <span class="fa fa-angle-right fa-icn" style="margin: 0 !important; padding:0 !important; right:0; position: absolute;"></span>
               </i>
               <i class="dwn">
                   <span class="fa fa-angle-down fa-icn" style="margin: 0 !important; padding:0 !important; right:0; position: absolute;"></span>
               </i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach($navbar[$nv->nama] as $subnavbar)
                      <a class="dropdown-item " href="{{url('article/' .$subnavbar[$bahasa. "_slug"].'/'. $bahasa) }}">{{$subnavbar[$bahasa. "_navigasi"]}}</a>
                  @endforeach
          </div>
          </li>
        </ul>
          </div>
          @endif
      @endforeach

      <div class="col-12">
        <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
          <li class="nav-item dropdown">
            <a class="nav-link mr-3 dropdown-footer footer-nav" href="" id="navbarDropdown" role="button"
               data-toggle="dropdown"  aria-expanded="false">{{trans('admin.lainnya') }}
               <i class="rgt">
                <span class="fa fa-angle-right fa-icn" style="margin: 0 !important; padding:0 !important; right:0; position: absolute;"></span>
             </i>
             <i class="dwn">
                 <span class="fa fa-angle-down fa-icn" style="margin: 0 !important; padding:0 !important; right:0; position: absolute;"></span>
             </i>
              </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="{{url('kantor-cabang/'. $bahasa)}}">{{trans('admin.kantor_cabang')}}</a>
                    <a class="dropdown-item " href="{{url('karir/'. $bahasa)}}">{{trans('admin.karir2')}}</a>
        </div>
      </li>
    </div>

</section>
<!--  ================================================ /FIRST FOOTER ========================================================= -->




<!--  ================================================ SECOND FOOTER ========================================================= -->
<section class="footer">
<div class="container">


<div class="table">
<div class="row icn-logo">

<div class="col-sm txt-ctr">
      <!-- Left Coloum -->
      <div class="text-footer text-center">
        <div class="row">

          <div class="col-sm-4">
              <img class="logo-footer" src="https://www.bankmantap.co.id/assets/images/mantap.png" alt="Logo Corp" />
            </div>

          <div class="col-sm-8">
            <b>PT Bank Mandiri Taspen</b><br/>
            <b>{{__("admin.txt_footer_kantor")}}</b>
            <br/>
            <small class="small">
            <a>Graha Mantap</a> <br/>
            <a>{{__("admin.txt_footer_alamat")}}</a>
            <a>Indonesia</a>
            <br/></small><br/>

            <a href="https://web.facebook.com/BankMandiriTaspen" target="_blank" class="fa fa-facebook"></a>
            <a href="https://twitter.com/BankMantap_id" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/bankmantap_id" target="_blank" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" target="_blank" class="fa fa-youtube-play"></a>

          </div>
         </div>
      </div>
</div>
      <!-- Right Coloum -->
      <div class="col-sm">
        <br/>
      <div class="cell text-center">
        <img src="{{ asset('asset/logo-OJK.png') }}" alt="Ojk" width="12%"/>
        <img src="{{ asset('asset/logo-lps.png') }}" alt="Lps" width="12%"/>
        <img src="{{ asset('asset/logo-kebank.png') }}" alt="AyoKebank" width="12%">
        <img src="{{ asset('asset/mantapcall.png') }}" alt="Partner2" width="12%"/>
        <img src="{{ asset('asset/milea.png') }}" alt="Partner3" width="12%"/>
      </div>
      </div>
      <!-- End Right Coloum -->

    </div>
  </div>
</div>


</section>
<!--  ================================================ /SECOND FOOTER ======================================================== -->


<hr/>
<div class="container">
  <div class="table box small-footer">
    <div class="row small-footer">
      <div class="col-sm">
      <div class="cell text-center">
        <small><a style="color: #808080;">Copyright &copy; 2017 PT. Bank Mandiri Taspen. All Rights Reserved</a></small>
      </div>
    </div>
     <div class="col-sm small-footer">
      <div class="cell box text-center">
       <small class="small-footer">
         <a href={{url('term-condition/' . $bahasa)}} style="color: #808080;">Terms & Conditions</a>
       </small>
      </div>
    </div>
    </div>
  </div>
  </div>



<!-- ================================================= FLOATING MENU ========================================================== -->
<div class="float-menu">
    <ul>
      <li>
        <a data-toggle="modal" data-target="#ModalEmail" data-whatever="email" href="#">
          <span class="text">email</span>
          <img style="height: 30px;" src="{{ asset('asset/icon/mail.png') }}">
        </a>
      </li>
      <li>
        <a data-toggle="modal" data-target="#ModalPhone" data-whatever="phone" href="#">
          <span class="text">phone</span>
          <img style="height: 30px;" src="{{ asset('asset/icon/phone.png') }}">
        </a>
      </li>
      <li>
        <a href="{{url('/kantor-cabang/'.$bahasa)}}">
          <span class="text">location</span>
          <img style="width: 30px;" src="{{ asset('asset/icon/maps.png') }}">
        </a>
      </li>
      <li>
        <a data-toggle="modal" data-target="#ModalShare" data-whatever="share" href="#">
          <span class="text">share</span>
          <img style="height: 30px;" src="{{ asset('asset/icon/share.png') }}">
      </li>
    </ul>
  </div>
  <!-- ================================================= END FLOATING MENU ======================================================-->


<!--  ================================================ MILEA ================================================================== -->
<div class="chat-float">
<a id="milea" href="https://milea.bankmantap.co.id/" target="_blank">

    <div>
      <img src="{{ asset('asset/icon/milea.png') }}" width="5%">
    </div>
  </a>
  <div id="milea-tol" class="tooltip fade top in" role="tooltip" id="tooltip416138" style="top: -35px; left: -60px; display: none;">
    <div class="tooltip-arrow" style="left: 50%; border-top-color: #ffd427;"></div>
    <div class="tooltip-inner" style="padding: 7px;background: #ffd00a;color: #043364;font-weight: bold;    -webkit-box-shadow: 0 5px 15px 0 #808080;-ms-box-shadow: 0 5px 15px 0 #808080; -o-box-shadow: 0 5px 15px 0 #808080;box-shadow: 0 5px 15px 0 #808080;">Chat langsung dengan MILeA</div>
  </div>
</div>
<!--  ================================================ END MILEA ============================================================== -->

<!-- Modal email -->
<div class="modal fade bs-example-modal-lg" id="ModalEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div style="text-align: right;    width: 103%;">
            <a data-dismiss="modal" href="#" id="x"><i class="fa fa-times-circle-o fa-3x" aria-hidden="true" style="color: #b6b7ba;"></i></a>
        </div>
        <div class="modal-content" style="background-color: transparent; box-shadow: none; border: none;" >
            <div class="modal-body"  >
                <div class="container-fluid" >
                    <div class="row">

                        <div class="col-xs-6 col-md-6 hilang" style="padding-left: 4px; padding-right: 0;" >
                            <img style="width: 100%" src="{{ asset('asset/modal_backg.png') }}">
                        </div>
                        <div class="col-xs-12 col-md-6" style="background-color: #b6b7ba;">
                            <form id="formEmailModal" action="{{url('send/keluhan')}}" method="POST" style="padding-top: 20px;
                                      padding-right: 33px;
                                      padding-bottom: 19px;" >
                                @csrf
                                <div class="form-group">

                                    <input type="text" class="form-control" required="required" id="nama_cs" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" id="email_cs" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" id="telp_cs" name="telp" placeholder="Telp">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" required="required" id="pesan_cs" name="pesan" placeholder="Pesan"></textarea>
                                </div>


                                <div class="row">
                                    <div class="col-xs-4 form-group has-feedback {!! !$errors->has('g-recaptcha-response') ?: 'has-error' !!}">
                                        @if($errors->has('g-recaptcha-response'))
                                            @foreach($errors->get('g-recaptcha-response') as $message)
                                                <label class="control-label text-danger" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label><br>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>


                                <div class="mb-3">
                                    {!!htmlFormSnippet()!!}
                                </div>
                                <br>
                                <button type="button" class="btn btn-warning" onclick="validateModal()" style="background-color: #fcd10d;    border-radius: 5px;" >Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Modal Phone -->
<div class="modal fade" id="ModalPhone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div style="text-align: right;">
        <a data-dismiss="modal" href="#" id="x"><i class="fa fa-times-circle-o fa-3x" aria-hidden="true" style="color: #1a3562;"></i></a>
      </div>
    <div class="modal-content" style="background-color: transparent; box-shadow: none; border: none;" >
      <a href="tel:14024"><img src="{{asset('asset/call_po.png')}}" style="width: 100%;" ></a>
    </div>
  </div>
</div>

<!-- Modal Share -->
<div class="modal fade bs-example-modal-lg" id="ModalShare" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div style="text-align: right;">
      <a data-dismiss="modal" href="#" id="x"><i class="fa fa-times-circle-o fa-3x" aria-hidden="true" style="color: #b6b7ba;"></i></a>
    </div>
    <div class="modal-content" style="background-color: transparent; box-shadow: none; border: none;" >
      <div class="modal-body">
        <div class="row" style="position: absolute; bottom: 30%;" >
          <div class="col-xs-1 col-md-3 l-sz"></div>
          <div class="col-xs-10 col-md-6">
            <div class="row-share">
              <div class="col-xs-2 col-md-2 ml-3">
                <a href="https://www.facebook.com/BankMandiriTaspen" >
                  <img class="icon-sz" id="f-s" src="{{asset('asset/icon/fb_yellow.png')}}">
                </a>
              </div>
              <div class="col-xs-2 col-md-2 mmm">
                <a href="https://twitter.com/BankMantap_id" >
                  <img class=" icon-sz" id="t-s" src="{{asset('asset/icon/tw_yellow.png')}}">
                </a>
              </div>
              <div class="col-xs-2 col-md-2 mmm">
                <a href="https://www.instagram.com/bankmantap_id/" >
                  <img class=" icon-sz" id="i-s" src="{{asset('asset/icon/insta_yellow.png')}}">
                </a>
              </div>
              <div class="col-xs-2 col-md-2 mmm">
                <a href="https://plus.google.com/u/0/112849376688825884019" >
                  <img class=" icon-sz" id="g-s" src="{{asset('asset/icon/gplus_yellow.png')}}">
                </a>
              </div>
              <div class="col-xs-2 col-md-2 mr-3 mmm">
                <a href="https://www.youtube.com/channel/UCtV1KsHbxe2bbP3MA-eYfJA/featured?view_as=subscriber" >
                  <img class=" icon-sz" id="y-s" src="{{asset('asset/icon/yt_yellow.png')}}">
                </a>
              </div>

            </div>
          </div>
          <div class="col-xs-1 col-md-3"></div>
        </div>

        <img style="width: 100%" src="{{asset('asset/sosmed.png')}}">
      </div>
    </div>
  </div>
</div>


<!-- Start Scrolling -->
<button onclick="topFunction()" id="onTop" title="Go to top" class="fa fa-angle-double-up"></button>
<!-- End Scrolling -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script> AOS.init(); </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

</body>
</html>


<script type="text/javascript">
  function validateModal(){
    var bValidName = check_validation("#nama_cs");
    var bValidEmail = check_validation_email("#email_cs");
    var bValidTelp = check_validation("#telp_cs");
    var bValidDigit = check_validation_modal_phone("#telp_cs");
    var bValidMessage = check_validation("#pesan_cs");


    if(bValidName && bValidEmail && bValidTelp && bValidDigit && bValidMessage){
      submit_form();
    }
  }

  function submit_form(){
    $('#formEmailModal').submit();
  }

  function check_validation_modal_phone(id){
    var number = $(id).val();
    if(isNaN(number)){
      $(id).attr("placeholder", "Input harus berupa angka");

      return false;
    }
    else{
      if(number.length < 10 || number.length > 13){
        //alert(number.length);
        $(id).val("");
        $(id).attr("placeholder", "Input harus 10 - 13 digit");

        return false;
      }
      else{
        return true;
      }
    }
  }

  function check_validation(id){
    var nama_pel = $(id).val();
    if(nama_pel == "")
    {
      $(id).attr("placeholder", "Wajib diisi");

      return false;
    }
    else{
      return true;
    }
  }

  function check_validation_email(id){
    var value = $(id).val();

    if(value == "")
    {
      $(id).attr("placeholder", "Wajib diisi");

      return false;
    }
    else
    {
      if (!validateEmail(value)) {
        $(id).val("");
        $(id).attr("placeholder", "Format email salah");

        return false;
      }
      else{
        return true;
      }
    }
  }

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

</script>

<script>
 //Get the button
 var mybutton = document.getElementById("onTop");

 // When the user scrolls down 20px from the top of the document, show the button
 window.onscroll = function() {scrollFunction()};

 function scrollFunction() {
     if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
         mybutton.style.display = "block";
     } else {
         mybutton.style.display = "none";
     }
 }

 // When the user clicks on the button, scroll to the top of the document
 function topFunction() {
     document.body.scrollTop = 0;
     document.documentElement.scrollTop = 0;
 }
</script>


<script>
// footer remove class text-center
$(window).resize(function(){
  var viewSize = $(window).width();
  if (viewSize > 1024){
    $(".text-footer").removeClass("text-center");
  } else{
    $(".text-footer").addClass("text-center");
  }
})
</script>


<script>
  $('#milea').hover(function() {
       if (width >= 768) {
         $("#milea-tol").show();
       }else{
         $("#milea-tol").hide();
       }

     }, function() {
       $("#milea-tol").hide();
     });

    function showModalImage(img) {
      $("#imageModalDialog").attr('src', "");
      $("#imageModalDialog").attr('src', "https://staticx.bankmantap.co.id/assets/images/upload/" + img);
      $("#modalImageDialog").modal('show');

    }
  </script>


<script>
  $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>


<script>
  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }

  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
</script>

<script>
  // footer remove class text-center
  $(window).resize(function(){
    var viewSize = $(window).width();
    if (viewSize < 1200){
      $(".crd-itm").addClass("crd-cbg col-6 col-md-6 col-lg-3").removeClass("card-margin");
    } else{
      $(".crd-itm").removeClass("crd-cbg col-6 col-md-6 col-lg-3").addClass("card-margin");
    }
  })
  </script>
