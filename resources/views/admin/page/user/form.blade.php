<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">User Atlantis Land</h4>
            <p class="sub-header">Masukan data user dengan benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $user->email ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $user->detail->name ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Nama Terakhir</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $user->detail->lash_name ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan Alamat Lengkap Anda" name="name" value="{{  $user->detail->address ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan Kota Anda" name="name" value="{{  $user->detail->city ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan Kode Pos Anda" name="name" value="{{  $user->detail->zip_code ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Negara</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan Nama Negara Anda" name="name" value="{{  $user->detail->country ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">No. Handphone</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan No. Handphone Anda" name="name" value="{{  $user->detail->phone ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>


              
               
                

               
               
               

                
                
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->