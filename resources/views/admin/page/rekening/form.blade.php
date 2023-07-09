<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">No Rekening Pembayaran</h4>

            <form class="needs-validation" novalidate>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">NO Rek</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="norek" value="{{ $rekening->norek ?? '' }}"  />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Nama bank</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="nama_bank" value="{{ $rekening->nama_bank ?? '' }}"  />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                @if (!empty($rekening))
                <img src="{{ asset($rekening->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
                @else
                <img class="img-preview img-fluid col-sm-5">
                @endif

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Icon</label>
                    <input type="file" class="form-control" id="validationCustom01" placeholder="First name" name="gambar"  />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->