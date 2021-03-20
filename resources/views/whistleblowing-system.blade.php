{!! htmlScriptTagJsApi() !!}

<div class="container">

    <div class="card card-body mb-5 mt-5">
        <h4 class="text-center mb-3 mt-3">Formulir Pelaporan Whistleblowing System Bank Mantap</h5>
            <div class="container" style="padding: 6px 5%;">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelapor*</label>
                        <input type="name" class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="Nama lengkap pelapor" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor Telepon*</label>
                        <input type="tel" class="form-control" id="nomor_telpon" name="nomor_telpon" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Nomor telepon hp, rumah tau kantor">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email*</label>
                        <input type="email" name="email" id="email" class="form-control" id="exampleInputPassword1" placeholder="Misal: joko@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tindakan/Perbuatan yang dilaporkan</label>
                        <br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="fraud" value="fraud" selected>
                            <label class="form-check-label" for="inlineRadio1">Fraud</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="pelangaran_kode_etik" value="pelanggaran_kode_etik">
                            <label class="form-check-label" for="inlineRadio2">Pelanggaran Kode Etik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="gratifikasi" value="gratifikasi">
                            <label class="form-check-label" for="inlineRadio2">Gratifikasi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tindakan" id="pelanggaran_hukum_lainnya" value="pelanggaran_hukum_lainnya">
                            <label class="form-check-label" for="inlineRadio2">Pelanggaran Hukum Lainnya</label>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Terlapor*</label>
                        <input type="name" class="form-control" id="nama_terlapor" name="nama_terlapor" placeholder="Nama lengkap terlapor">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jabatan Terlapor*</label>
                        <input type="text" class="form-control" id="jabatan_terlapor" name="jabatan_terlapor" placeholder="jabatan terlapor">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Waktu Kejadian (tanggal dan periode)*</label>
                        <input type="text" class="form-control" id="waktu_kejadian" name="waktu_kejadian" placeholder="Contoh: 5-20 januari 2018 atau selama bulan December di tahin 2018">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lokasi Kejadian*</label>
                        <input type="text" class="form-control" id="lokasi_kejadian" name="lokasi_kejadian" placeholder="Contoh: 5-20 januari 2018 atau selama bulan December di tahin 2018">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kronologis Kejadian*</label>
                        <textarea class="form-control" id="kronologis_kejadian" name="kronologis_kejadian" rows="3" placeholder="Ceritakan detail kejadian"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nominal*</label>
                        <input type="text" class="form-control" id="nominal" name="nominal" placeholder="Contoh: kurang lebih 10 juta rupiah">
                    </div>


                    <div class="mb-3">
                        {!! htmlFormSnippet() !!}
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-lg btn-more">Kirim </button>
                </form>
            </div>
    </div>

    <br/>
</div>
