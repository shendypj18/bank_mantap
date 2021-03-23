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
    
    </style>
    
<div class="container">

    <div class="card card-body mb-5 mt-5">
        <h4 class="text-center mb-3 mt-3">Formulir Pelaporan Whistleblowing System Bank Mantap</h5>
        <div class="container" style="padding: 6px 5%;">
        <form action="whistleblowing-system-respond.php" method="post">
          <div class="mb-3">
            <label class="form-label">Nama Pelapor*</label>
            <input type="text" name="nama_pelapor" class="form-control" placeholder="Nama lengkap pelapor" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Telepon*</label>
            <input type="text" class="form-control" placeholder="Nomor telepon hp, rumah tau kantor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email*</label>
            <input type="email" class="form-control" placeholder="Misal: joko@gmail.com" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Tindakan/Perbuatan yang dilaporkan</label>
            <br>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" selected>
              <label class="form-check-label" for="inlineRadio1">Fraud</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Pelanggaran Kode Etik</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Gratifikasi</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Pelanggaran Hukum Lainnya</label>
            </div>
          </div>

          <hr>

          <div class="mb-3">
            <label class="form-label">Nama Terlapor*</label>
            <input type="text" class="form-control" placeholder="Nama lengkap terlapor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jabatan Terlapor*</label>
            <input type="text" class="form-control" placeholder="Jabatan terlapor" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Waktu Kejadian (tanggal dan periode)*</label>
            <input type="text" class="form-control" placeholder="Contoh: 5-20 januari 2018 atau selama bulan December di tahin 2018" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Lokasi Kejadian*</label>
            <input type="text" class="form-control" placeholder="Contoh: Sekitar bundaran HI Jakarta" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Kronologis Kejadian*</label>
            <textarea class="form-control" rows="3" placeholder="Ceritakan detail kejadian" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Nominal*</label>
            <input type="number" class="form-control" placeholder="Contoh: kurang lebih 10 juta rupiah" required>
          </div>

          <div class="mb-3">
                {!!htmlFormSnippet()!!}
          </div>

          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <button type="submit" class="btn btn-lg btn-more">Kirim </button> 
        </form>
        </div>
        </div>

    <br/>
</div>
