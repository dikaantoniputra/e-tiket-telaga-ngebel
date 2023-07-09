@extends('layouts.app')

@section('title')
Daftar
@endsection

@section('content')

<div class="sub_header_in sticky_header">
    <div class="container">
        <h1>Akun Telaga Ngebel</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<main>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="box_account">
                    <h3 class="new_client">Wisatawan Baru</h3>
                    
                    <div class="form_container">
                        <form method="POST" action="{{ route('daftar.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_in_2" id="password_in_2" placeholder="Password*" required>
                            </div>
                            <hr>
                            <div class="private box">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name*" name="last_name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Address*" name="address" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City*" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postal Code*" name="zip_code" required>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Country*" name="country" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Telephone *" name="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn_1 full-width">Register</button>
                            </div>
                        </form>
                    </div>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>

@endsection

@push('after-script')


@endpush
