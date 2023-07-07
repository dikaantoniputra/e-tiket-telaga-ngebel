<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Wisata Form Penginputan Pengumuman</h4>
            <p class="sub-header">Masukan Data Tiket Secara Benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Nama Wisatawan</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $detailUser->name ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $detailUser->phone ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $user->email ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

    
                <div class="border border-top"></div>


                <div class="mb-3 pt-4">
                    <label for="validationCustom01" class="form-label">Tiket Layanan</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $orderan->boking->layanan->nama_layanan ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="validationCustom01" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $orderan->boking->layanan->harga ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="validationCustom01" class="form-label">Jumlah TIket</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $orderan->boking->jumlah ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="validationCustom01" class="form-label">Total Bayar</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_layanan" value="{{ $orderan->jumlah ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="border border-top"></div>
 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    @if ($orderan->status == 0)
                          Belum Bayar
                      @elseif ($orderan->status == 1)
                          Sukses
                      @elseif ($orderan->status == 2)
                      Pending

                      @endif.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

                <div class="mb-3 ">
                    <label for="validationCustom01" class="form-label">Nama Tranfer</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="harga" value="{{ $orderan->name_transfer ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="mb-3 ">
                    <label for="validationCustom01" class="form-label">Nama Bank</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="harga" value="{{ $orderan->nama_bank ?? '' }}" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

               
                  

                @if (!empty($orderan))
                <img src="{{ asset($orderan->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
                @else
                <img class="img-preview img-fluid col-sm-5">
                @endif
              
                <div class="mb-3">
                    
                </div>

                @if (!empty($orderan))
                <div class="form-group mb-3 row">
                  <label class="form-label col-3 col-form-label">Status Layanan</label>
                  <div class="col">
                    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status2" value="active" @if ($orderan->status == '0') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Belum Bayar</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1" value="tutup" @if ($orderan->status == '2') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Pending</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1" value="tutup" @if ($orderan->status == '1') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Sukses</label>
                      </div>
                      
                    
                  </div>
                </div>
                 @endif
                

                

              
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->