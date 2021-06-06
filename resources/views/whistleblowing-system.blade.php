{!! htmlScriptTagJsApi() !!}


<style>
    table {
      margin-bottom:5%;
      width: 70%;
      font-size:12px;
      box-shadow: 0px 20px 40px #00000014;
      border-color:red;
    }

    th {
      height: 60px;
      color: #121212;
    }
    td {
      text-align: left;
      height: 40px;
      width:2px;
      color: #121212;;
    }
    tr:nth-child(even){
        background-color: #FCD1161A;
    }

    th {
      background-color: #FCD116;
      color: #0F2B5B;
    }
    .mt-5, .my-5 {
    margin-top: 25px!important;
}
    </style>

<div class="container">

    <div class="card card-body mb-5 mt-5">
        <h4 class="text-center mb-3 mt-3">{{__("admin.txt_wbs_title")}}</h5>
        <div class="container" style="padding: 6px 5%;">
        <form action="{{url('/send/whistle')}}" method="post">
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_nama_pelapor")}}*</label>
            <input type="text" name="nama_pelapor" class="form-control" placeholder="{{__("admin.txt_wbs_nama_pelapor_placeholder")}}" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">{{__("admin.txt_wbs_nomor_telepon")}}*</label>
            <input type="text" name="nomer_telepon" class="form-control" placeholder="{{__("admin.txt_wbs_nomor_telepon_placeholder")}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_email")}}*</label>
            <input type="email" name="email" class="form-control" placeholder="{{__("admin.txt_wbs_email_placeholder")}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_tindakan")}}</label>
            <br>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio1" value="Fraud" selected>
              <label class="form-check-label" for="inlineRadio1">{{__("admin.txt_wbs_fraud")}}</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio2" value="Pelanggaran Kode Etik">
              <label class="form-check-label" for="inlineRadio2">{{__("admin.txt_wbs_pelanggaran")}}</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio2" value="Gratifikasi">
              <label class="form-check-label" for="inlineRadio2">{{__("admin.txt_wbs_gratifikasi")}}</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tindakan" id="inlineRadio2" value="Pelanggaran Hukum Lainnya">
              <label class="form-check-label" for="inlineRadio2">{{__("admin.txt_wbs_hukum")}}</label>
            </div>
          </div>

          <hr>

          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_nama_terlapor")}}*</label>
            <input type="text" name="nama_terlapor" class="form-control" placeholder="{{__("admin.txt_wbs_nama_terlapor_placeholder")}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_jabatan_terlapor")}}*</label>
            <input type="text" class="form-control" name="jabatan_terlapor" placeholder="{{__("admin.txt_wbs_jabatan_terlapor")}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_waktu_kejadian")}}*</label>
            <input type="text" class="form-control" name="waktu_kejadian" placeholder="{{__("admin.txt_wbs_waktu_kejadian_placeholder")}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_lokasi_kejadian")}}*</label>
            <input type="text" class="form-control" name="lokasi_kejadian" placeholder="{{__("admin.txt_wbs_lokasi_kejadian_placeholder")}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_kronologis")}}*</label>
            <textarea name="kronologis_kejadian" class="form-control" rows="3" placeholder="{{__("admin.txt_wbs_kronologis_placeholder")}}" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">{{__("admin.txt_wbs_nominal")}}*</label>
            <input type="number" name="nominal" class="form-control" placeholder="{{__("admin.txt_wbs_nominal")}}" required>
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

          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <button type="submit" class="btn btn-lg btn-whistle">{{__("admin.txt_wbs_btn")}} </button>
        </form>
        </div>
        </div>

    <br/>
</div>
