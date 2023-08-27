<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Nama layanan Atlantis Land</h4>
            <p class="sub-header">Mohon masukan data dengan benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Nama Layanan</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Silahkan masukan nama layanan" name="nama_layanan" value="{{ $layanan->nama_layanan ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                <h4 class="header-title">Deskripsi Layanan</h4>
                <textarea class="form-control" id="editor" name="deskrispi"
                rows="5">{{ $layanan->deskrispi ?? '' }}</textarea>
               
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="validationCustom01" placeholder="Masukan Harga Layanan" name="harga" value="{{ $layanan->harga ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                @if (!empty($layanan))
                <img src="{{ asset($layanan->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
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

                @if (!empty($layanan))
                <div class="form-group mb-3 row">
                  <label class="form-label col-3 col-form-label">Status Layanan</label>
                  <div class="col">
                    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status2" value="active" @if ($layanan->status == 'active') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Aktif</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1" value="tutup" @if ($layanan->status == 'tutup') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Tutup</label>
                      </div>
                      
                    {{-- @error('sex')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                  </div>
                </div>
                 @endif
                

                

              
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->