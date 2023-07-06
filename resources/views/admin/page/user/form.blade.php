<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Desa Ngarum Form Kategori Kegiatan</h4>
            <p class="sub-header">Masukan Data Kategori Kegiatan Secara Benar</p>

            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $user->email ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $user->detail->name ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">lash_name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{ $user->detail->lash_name ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">address</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{  $user->detail->address ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">city</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{  $user->detail->city ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">zip_code</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{  $user->detail->zip_code ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">country</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{  $user->detail->country ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">phone</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{  $user->detail->phone ?? '' }}" disabled />
                    <div class="valid-feedback">
                        Looks good!
                    </div>                    
                </div>


              
               
                

               
               
               

                
                
                
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div> <!-- end col -->