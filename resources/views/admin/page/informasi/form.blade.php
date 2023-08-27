<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Informasi Jam Operasional Atlantis Land</h4>
            <p class="sub-header">Masukan Data informasi dengan benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="judul" value="{{ $informasi->judul ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                <h4 class="header-title">deskripsi</h4>
                <textarea class="form-control" id="editor" name="deskripsi"
                rows="5">{{ $informasi->deskripsi ?? '' }}</textarea>
               
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Jam Buka</label>
                    <input type="time" class="form-control" id="validationCustom01" placeholder="First name" name="jam_buka" value="{{ $informasi->jam_buka ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Jam Tutup</label>
                    <input type="time" class="form-control" id="validationCustom01" placeholder="First name" name="jam_tutup" value="{{ $informasi->jam_tutup ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Hari Buka</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="hari_buka" value="{{ $informasi->hari_buka ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Hari Tutup</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="hari_tutup" value="{{ $informasi->hari_tutup ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="validationCustom01" placeholder="First name" name="harga" value="{{ $informasi->harga ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                @if (!empty($informasi))
                <img src="{{ asset($informasi->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
                @else
                <img class="img-preview img-fluid col-sm-5">
                @endif
              
                <div class="mb-3">
                    <label for="validationCustom05" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="validationCustom05" placeholder="Zip" name="gambar"  />
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>

          
                

                

              
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->