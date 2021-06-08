<style>
 /* -----------------> can start accordion style copy from here ------------------------*/
 .mt-5, .my-5 {
    margin-top: 25px!important;
}

.mt-4, .my-4 {
    margin-top: 24px!important;
}
img.img-responsive{
    width: inherit !important;
    height: auto !important;
}
 .accordion-started.accordion-bral {
     min-height: 0;
     min-width: 220px;
     width: 100%;
     background-color: #FFF;
     margin: 0px!important;
     color: #484848;
 }
 .accordion-started.accordion-bral img {
     width: 100%;
     height: 100%;
 }
 .accordion-started.accordion-bral .ac-label {
     font-family: 'Roboto', sans-serif;
     padding: 15px 20px;
     position: relative;
     display: block;
     height: auto;
     cursor: pointer;
     color: #000;
     border-bottom: 1px solid #e8efff;
     border-bottom-right-radius: 4px;
     border-bottom-left-radius: 4px;
     line-height: 33px;
     font-size: 18px;
     margin-bottom: 8px;
 }
 .accordion-started.accordion-bral .ac-label:hover {

 }
 .accordion-started.accordion-bral input + .ac-label  {
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
 }
 .accordion-started.accordion-bral input:checked + .ac-label,
 .accordion-started.accordion-bral input:checked + .ac-label:active {

 }
 .accordion-started.accordion-bral input.ac-input {
     display: none;
 }
 .accordion-started.accordion-bral .article {
     overflow: hidden;
     height: 0px;
     max-height: auto;
     -webkit-transition: all 0.3s ease-in-out;
     -moz-transition: all 0.3s ease-in-out;
     -o-transition: all 0.3s ease-in-out;
     -ms-transition: all 0.3s ease-in-out;
     transition: all 0.3s ease-in-out;
 }
 .accordion-started.accordion-bral .article p {
     line-height: 23px;
     padding-left: 5px;
 }
 .accordion-started.accordion-bral input:checked ~ .article i {
     -webkit-transition: all 0.5s ease-in-out;
     -moz-transition: all 0.5s ease-in-out;
     -o-transition: all 0.5s ease-in-out;
     -ms-transition: all 0.5s ease-in-out;
     transition: all 0.5s ease-in-out;
 }
 .accordion-started.accordion-bral input:checked ~ .article.ac-content {
     height: auto;
 }

 .accordion-started.accordion-bral i {
     position: absolute;
     transform: translate(-30px, 0);
     margin-top: 16px;
     right: 0;
 }
 .accordion-started.accordion-bral input:checked ~ .ac-label i:before {
     transform: translate(2px, 0) rotate(-45deg);
 }
 .accordion-started.accordion-bral input:checked ~ .ac-label i:after {
     transform: translate(-2px, 0) rotate(45deg);
 }
 .accordion-started.accordion-bral i:before, .accordion-bral i:after {
     content: "";
     position: absolute;
     background-color: #173B6B;
     width: 3px;
     height: 9px;
 }
 .accordion-started.accordion-bral i:before {
     transform: translate(-2px, 0) rotate(-45deg);
 }
 .accordion-started.accordion-bral i:after {
     transform: translate(2px, 0) rotate(45deg);
 }

 .accordion-started ul.ac-list {
     padding-left: 40px;
     list-style-type: disc;
 }
 .sum-color {
     color: #000066;
 }

 /* ---------- accordion style end --------------------------------------- */
</style>
<section class="section">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="mt-5" style="color:#063462;">Frequently Asked & Question (FAQ) “Produk Kredit Mantap Pensiun (KMP)”</h1>

                <br/>
                <div class="accordion-started accordion-bral row">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 1 start -->
                        <input class="ac-input" id="ac-1"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-1"><strong>{{ __('kredit-mantap-pensiun.1') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11">
                            <small>{!!  __('kredit-mantap-pensiun.d1') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 1 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 2 start -->
                        <input class="ac-input" id="ac-2" name="accordion-1" type="radio"/>
                        <label class="ac-label" for="ac-2"><strong> {{ __('kredit-mantap-pensiun.2') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11">
                            <small> {!!  __('kredit-mantap-pensiun.d2') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 2 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 3 start -->
                        <input class="ac-input" id="ac-3"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-3"><strong> {{ __('kredit-mantap-pensiun.3') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11" style="font-type:italic;">
                            <small> {!!  __('kredit-mantap-pensiun.d3') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 3 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 4 start -->
                        <input class="ac-input" id="ac-4"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-4"><strong> {{ __('kredit-mantap-pensiun.4') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11" style="font-type:italic;">
                            <small> {!!  __('kredit-mantap-pensiun.d4') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 4 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 4 start -->
                        <input class="ac-input" id="ac-5"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-5"><strong> {{ __('kredit-mantap-pensiun.5') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11" style="font-type:italic;">
                            <small> {!!  __('kredit-mantap-pensiun.d5') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 4 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 4 start -->
                        <input class="ac-input" id="ac-6"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-6"><strong> {{ __('kredit-mantap-pensiun.6') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11" style="font-type:italic;">
                           <small> {!!  __('kredit-mantap-pensiun.d6') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 4 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 4 start -->
                        <input class="ac-input" id="ac-7"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-7"><strong> {{ __('kredit-mantap-pensiun.7') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11" style="font-type:italic;">
                           <small> {!!  __('kredit-mantap-pensiun.d7') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 4 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 4 start -->
                        <input class="ac-input" id="ac-8"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-8"><strong> {{ __('kredit-mantap-pensiun.8') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11">
                           <small>{!! __('kredit-mantap-pensiun.d8') !!}</small>
                        </div>
                    </div>
                    <!-- accordion item 4 end -->

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- accordion item 4 start -->
                        <input class="ac-input" id="ac-9"  name="accordion-1" type="radio" checked/>
                        <label class="ac-label" for="ac-9"><strong> {{ __('kredit-mantap-pensiun.9') }}</strong><i></i></label>
                        <div class="article ac-content col-sm-11">
                            <small>{!!  __('kredit-mantap-pensiun.d9') !!}</small>
				                </div>
			              </div>
			              <!-- accordion item 4 end -->


                          <div class="col-sm-12 col-md-12 col-lg-12">
                              <!-- accordion item 4 start -->
                              <input class="ac-input" id="ac-10"  name="accordion-1" type="radio" checked/>
                              <label class="ac-label" for="ac-10"><strong> {{ __('kredit-mantap-pensiun.10') }}</strong><i></i></label>
                              <div class="article ac-content col-sm-11">
                                 <small>{!! __('kredit-mantap-pensiun.d10') !!}</small>
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-12">
                              <!-- accordion item 4 start -->
                              <input class="ac-input" id="ac-11"  name="accordion-1" type="radio" checked/>
                              <label class="ac-label" for="ac-11"><strong> {{ __('kredit-mantap-pensiun.11') }}</strong><i></i></label>
                              <div class="article ac-content col-sm-11">
                             <small>{!!  __('kredit-mantap-pensiun.d11') !!}</small>
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-12">
                              <!-- accordion item 4 start -->
                              <input class="ac-input" id="ac-12"  name="accordion-1" type="radio" checked/>
                              <label class="ac-label" for="ac-12"><strong> {{ __('kredit-mantap-pensiun.12') }}</strong><i></i></label>
                              <div class="article ac-content col-sm-11">
                             <small> {!! __('kredit-mantap-pensiun.d12') !!}</small>
                              </div>
                          </div>

                          <!-- accordion item 4 end -->
                </div>




            </div><!-- col-sm-12 -->
        </div><!-- row -->
    </div><!-- coontainer -->
    <br/> <br/><br/><br/>



    {{-- <div class="container mt-5">
		    <div class="card card-simulation">
		        <div class="card-body">
		            <br/>
		            <h4 class="card-title"> <img class="img-responsive" src="{{ asset('asset/icon/calculator.png') }}"  alt="Logo" width="15%"><strong> Simulasi Kredit Pensiun</strong></h4>
		            <p class="card-text mt-5">Manfaat kesempatan untuk terus berkarya dan<br/>mewujudkan rencana Anda kedepan</p>
                <a class="btn btn-outline-light btn-simulasi-flat" href="{{url('simulasi-kredit-pensiun/'.$bahasa)}}" role="button">HITUNG SIMULASI</a>
		        </div>
		    </div>
    </div> --}}
</section>
