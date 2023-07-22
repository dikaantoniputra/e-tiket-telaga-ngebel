@extends('layouts.app')


@push('after-style')
<style>
    .account-information {
      text-align: center;
      -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      border-radius: 10px;
    }
    
    .account-information .profile-thumb {
      padding: 20px;
    }
    
    .account-information .profile-thumb img {
      border-radius: 50%;
      margin-bottom: 15px;
    }
    
    .account-information .profile-thumb h3 {
      margin-bottom: 12px;
    }
    
    .account-information .profile-thumb p {
      margin-bottom: 0;
      line-height: 1;
    }
    
    .account-information ul {
      padding-left: 0;
      margin-bottom: 0;
      text-align: left;
    }
    
    .account-information ul li {
      list-style: none;
    }
    
    .account-information ul li a {
      color: #707070;
      border-top: 1px dashed #ddd;
      display: block;
      padding: 10px 20px;
    }
    
    .account-information ul li a:hover {
      background: #79C121;
      color: #ffffff;
    }
    
    .account-information ul li a.active {
      background: #79C121;
      color: #ffffff;
    }
    
    .account-information ul li a i {
      top: 2px;
      position: relative;
      margin-right: 5px;
    }
    
    .account-details {
      -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      border-radius: 10px;
      padding: 30px 30px;
    }
    
    .account-details h3 {
      margin-bottom: 15px;
    }
    
    /* input */
    .form-group.input-material {
      position: relative;
      margin-top: 50px;
      margin-bottom: 25px;
      /* textarea label */
    }
    .form-group.input-material label {
      color: #b1bbc4;
      font-size: 16px;
      font-weight: normal;
      position: absolute;
      pointer-events: none;
      left: 5px;
      bottom: 1px;
      transition: 0.1s ease all;
      -moz-transition: 0.1s ease all;
      -webkit-transition: 0.1s ease all;
    }
    .form-group.input-material textarea.form-control ~ label {
      bottom: 90%;
      bottom: calc(100% - 38px);
    }
    .form-group.input-material .form-control, .form-group.input-material .form-select {
      border: none;
      border-bottom: 2px solid #ced4da;
      border-radius: 0px;
      background-color: transparent;
      padding-left: 5px;
      box-shadow: none;
      /* required fields */
      /* active state */
      /* invalid state */
    }
    .form-group.input-material .form-control:required ~ label::after, .form-group.input-material .form-select:required ~ label::after {
      content: "*";
      color: #79C121;
      padding-left: 2px;
      font-size: 0.8em;
    }
    .form-group.input-material .form-control:focus, .form-group.input-material .form-control[value]:not([value=""]), .form-group.input-material .form-select:focus, .form-group.input-material .form-select[value]:not([value=""]) {
      border-bottom-color: #007bff;
      color: #000;
    }
    .form-group.input-material .form-control:focus ~ label, .form-group.input-material .form-control[value]:not([value=""]) ~ label, .form-group.input-material .form-select:focus ~ label, .form-group.input-material .form-select[value]:not([value=""]) ~ label {
      top: unset;
      bottom: 100%;
      bottom: calc(100% - 16px);
      font-size: 14px;
      color: #007bff;
      font-weight: 500;
    }
    .form-group.input-material .form-control:focus.invalid, .form-group.input-material .form-control.invalid, .form-group.input-material .form-control:focus.parsley-error, .form-group.input-material .form-control[value]:not([value=""]).parsley-error, .form-group.input-material .form-select:focus.invalid, .form-group.input-material .form-select.invalid, .form-group.input-material .form-select:focus.parsley-error, .form-group.input-material .form-select[value]:not([value=""]).parsley-error {
      border-bottom-color: #79C121;
    }
    .form-group.input-material .form-control:focus.invalid ~ label, .form-group.input-material .form-control.invalid ~ label, .form-group.input-material .form-control:focus.parsley-error ~ label, .form-group.input-material .form-control[value]:not([value=""]).parsley-error ~ label, .form-group.input-material .form-select:focus.invalid ~ label, .form-group.input-material .form-select.invalid ~ label, .form-group.input-material .form-select:focus.parsley-error ~ label, .form-group.input-material .form-select[value]:not([value=""]).parsley-error ~ label {
      color: #79C121;
    }
    .form-group.input-material .form-select {
      background-position: right 0 center;
      padding-left: 0;
    }
    .form-group.input-material .parsley-errors-list {
      color: #79C121;
      list-style: none;
      font-size: 0.7em;
      padding-left: 5px;
      position: absolute;
      top: 107%;
    }
    
    .contact-h {
        font-size: 24px;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 40px;
        color: #1C913C;
    }
    .contact .form-group {
        margin-bottom: 40px;
    }
    .contact .form-control {
        border-radius: 0;
        border: none;
        border-bottom: 4px solid #00BCD4;
        box-shadow: none;
    }
    .contact .btn-primary {
        background-color: #1C913C;
        border-color: #1C913C;
        border-radius: 0;
        text-transform: uppercase;
        font-weight: bold;
    }
    .contact .btn {
        padding: 12px 15px;
    }
    .group {
        position: relative;
        margin-bottom: 45px;
    }
    input:focus {
        outline: none;
    }
    label {
        color: #999;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 0;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }
    input:focus ~ label,
    input:valid ~ label {
        top: -20px;
        font-size: 14px;
        color: #96c93d;
    }
    .bar {
        position: relative;
        display: block;
        width: 100%;
    }
    .bar:before,
    .bar:after {
        content: '';
        height: 4px;
        width: 0;
        bottom: 0px;
        position: absolute;
        background: #96c93d;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }
    .bar:before {
        left: 50%;
    }
    .bar:after {
        right: 50%;
    }
    input:focus ~ .bar:before,
    input:focus ~ .bar:after {
        width: 50%;
    }
    .highlight {
        position: absolute;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }
    /* active state */
    
    input:focus ~ .highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }
    /* ANIMATIONS ================ */
    
    @-webkit-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }
        to {
            width: 0;
            background: transparent;
        }
    }
    @-moz-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }
        to {
            width: 0;
            background: transparent;
        }
    }
    @keyframes inputHighlighter {
        from {
            background: #5264AE;
        }
        to {
            width: 0;
            background: transparent;
        }
    }
    .text-group textarea {
        display: block;
        background: none;
        padding: 0.125rem 0.125rem 0.0625rem;
        border-width: 0;
        border-color: transparent;
        line-height: 1.9;
        width: 100%;
        -webkit-transition: all 0.28s ease;
        transition: all 0.28s ease;
        box-shadow: none;
    }
    .text-group textarea:focus ~ .input-label,
    .text-group textarea:valid ~ .input-label,
    .text-group textarea.form-file ~ .input-label,
    .text-group textarea.has-value ~ .input-label {
        font-size: 14px;
        ;
        color: gray;
        top: -1rem;
        left: 0;
    }
    .text-group textarea:focus ~ .input-label {
        color: #96c93d;
    }
    .text-group textarea:focus ~ .bar::before {
        width: 100%;
        left: 0;
    }
    .text-group {
        position: relative;
        margin-top: 2.25rem;
        margin-bottom: 4.25rem;
    }
    
    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: transparent;
      padding: 0.5rem 0.5rem 0.25rem;
      font-size: 18px;
      border: none;
      border-bottom: 4px solid #00BCD4;
      box-shadow: none;
      width: 100%;
      color: #999;
      cursor: pointer;
    }
    
    select:focus {
      outline: none;
    }
    
    select:focus ~ label,
    select:valid ~ label {
      top: -20px;
      font-size: 14px;
      color: #96c93d;
    }
    
    select:focus ~ .bar:before,
    select:focus ~ .bar:after {
      width: 50%;
    }
    
    option {
      font-size: 18px;
      color: #999;
    }
    
    
    
    
    
    /*---------- Account CSS End ----------*/
    /*---------- Resume CSS Start ----------*/
    </style>
@endpush

@section('content')


<section class="account-section ">
    <div class="container">
        <div class="row">
           @include('includes.navprofile')

            <div class="col-md-8 pt-5">
                <div class="account-details">
                    <h3 class="pb-3">Ganti Password</h3>
                  
                  @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
                  @endif

                  @if(session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                  @endif
                    <div class="contact">
                      <div class="col-md-12 col-md-offset-3">
                         <div class="form-area">

                          <form class="job-post-from" method="POST" action="{{ route('profile.updatePassword') }}">
                            @csrf
                            @method('PUT')
                               <div class="group form-group">      
                                  <input type="text" class="form-control" id="old_password" required name="old_password">
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Password Lama</label>
                               </div>

                               <div class="group form-group">      
                                <input type="text" class="form-control" id="new_password" required name="new_password">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Password baru</label>
                             </div>

                              <h6>Konfirm Password</h6>   
                              <div class="group form-group">   
                                <input type="password" class="form-control" id="new_password_confirmation" required name="new_password_confirmation">
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                              </div>

                             
                               <button type="submit"  class="btn btn-primary col-md-12">SUBMIT</button>              
                            </form>
                         </div>
                      </div>
                   </div>

                </div>
            </div>



        </div>
    </div>
</section>
@endsection