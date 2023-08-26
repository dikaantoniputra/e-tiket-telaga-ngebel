<!DOCTYPE html>
<html lang="en">
    <head>
        @stack('before-style')
        @include('admin.include.head')
        @stack('after-style')
      </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        @if(isset($errors))
		@foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <div class="account-pages my-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 col-xl-8">                  
                        <div class="card my-5">
                            <div class="text-center p-2">   
                                <img src="{{ asset('assets/images/logo.jpeg') }}"  style="width: 200px; height:200px"/>
                            </div>
                            <div class="card-body p-2">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Login</h4>
                                </div>

                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email</label>
                                        <input class="form-control" type="text"  name="email" id="username" required="" placeholder="Enter your UserName">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 d-grid text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>
                                </form>

                                {{-- capca --}}
                                
                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        @stack('before-script')
          @include('admin.include.script')
        @stack('after-script')
        
    </body>
</html>