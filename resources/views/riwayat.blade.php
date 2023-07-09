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

<section class="account-section">
    <div class="container">
        <div class="row">
           @include('includes.navprofile')
            <div class="col-md-8">
              <div class="sub_header_in sticky_header">
                <div class="container">
                  <h1>Bookings Tiket</h1>
                </div>
                <!-- /container -->
              </div>
              <!-- /sub_header -->
              
              <main>
                <div class="container margin_60_35">
                  <div class="box_booking">

                    @foreach ($orderan as $item)
                    <div class="strip_booking">
                      <div class="row">
                        <div class="col-lg-2 col-md-2">
                          <div class="date">
                            <span class="month">{{ \Carbon\Carbon::parse($item->tgl_booking)->format('M') }}</span>
                            <span class="day"><strong>{{ \Carbon\Carbon::parse($item->tgl_booking)->format('d') }}</strong>{{ \Carbon\Carbon::parse($item->tgl_booking)->format('D') }}</span>
                        </div>
                        
                        </div>
                        <div class="col-lg-6 col-md-5">
                          <h3 class="hotel_booking">{{ $item->boking->layanan->nama_layanan }}<span>Tiket : {{ $item->boking->jumlah }} / Total :{{ $item->jumlah }}</span></h3>
                          <h3> Request: {{ $item->boking->deskripsi ?? '' }}</h3>
                        </div>
                        <div class="col-lg-2 col-md-3">
                          <ul class="info_booking">
                            <li><strong>Booking Status</strong>@if ($item->status == 0)
                              Belum Bayar
                          @elseif ($item->status == 1)
                              Sukses
                          @elseif ($item->status == 2)
                          Pending

                          @endif</li>
                            <li><strong>Booked on</strong> {{ $item->boking->tgl_boking }}</li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2">
                          <div class="booking_buttons">
                            <a href="#0" class="btn_2" id="uploadBtn_{{ $item->id }}">Upload</a>
                            <a href="#0" class="btn_3">Cancel</a>
                          </div>
                        </div>
                      </div>

                      <div id="uploadModal_{{ $item->id }}" class="modal pt-5 mt-3">
                        <div class="modal-content">

                            <div class="container">
                              <div class="row">
                                <div class="col-lg-4 col-md-6">
                                  <div class="step first">
                                    <h3>1. User info and billing address</h3>
                                  <ul class="nav nav-tabs" id="tab_checkout" role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">Uplod</a>
                                    </li>
                                   
                                  </ul>
                                  <div class="tab-content checkout">
                                     <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                          <form action="{{ route('bayar.update', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="name_transfer" name="name_transfer">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="nama_bank" name="nama_bank">
                                      </div>
                                      <hr>
                                     
                                      <!-- /row -->
                                      <div class="form-group">
                                        <input type="file" class="form-control" placeholder="gambar" name="gambar">
                                      </div>
                                      <hr>
                                      
                                      <div id="other_addr_c" class="pt-2">
                                      
                              
                                        <script>
                                          // JavaScript code to handle modal
                                          const uploadBtn = document.getElementById('uploadBtn_{{ $item->id }}');
                                          const uploadModal = document.getElementById('uploadModal_{{ $item->id }}');
                                          const closeBtn = uploadModal.querySelector('.close');
                                      
                                          uploadBtn.addEventListener('click', function (e) {
                                            e.preventDefault();
                                            uploadModal.style.display = 'block';
                                          });
                                      
                                          closeBtn.addEventListener('click', function () {
                                            uploadModal.style.display = 'none';
                                          });
                                        </script>
                                      
                                      </div>
                                    
                                      <hr>
                                    </div>
                             
                                  </div>
                                  </div>
                                  <!-- /step -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                  <div class="step middle">
                                    <h3>2. Pembayaran @if ($item->status == 0)
                                      Belum Bayar
                                  @elseif ($item->status == 1)
                                      Sukses
                                  @elseif ($item->status == 2)
                                      Pending
                                  @endif
                                </h3>
                                    
                                    
                                    <div class="payment_info d-none d-sm-block">
{{-- 
                                      @foreach ($rekening as $item)
                                        <figure><img src="img/cards_all.svg" alt=""></figure>
                                        <p>{{ $item->norek }}</p>
                                      @endforeach --}}
                                     
                                    </div>
                                  </div>
                                  <!-- /step -->
                                </div>
                                <div class="col-lg-4 col-md-6">
                                  <div class="step last">
                                    <h3>3. Order Summary</h3>
                                  <div class="box_general summary">
                                    <ul>
                                      <li>Where <span class="float-right">{{ $user->profile->name ?? ''}}</span></li>
                                      <li>Date <span class="float-right"> {{ $item->boking->tgl_boking ?? '' }}</span></li>
                                      <li>Harga <span class="float-right">{{ $item->boking->layanan->harga ?? '' }}</span></li>
                                      <li>Jumlah Tiket <span class="float-right">{{ $item->boking->jumlah ?? '' }}</span></li>
                                      <li>TOTAL COST <span class="float-right">Rp.{{ $item->jumlah ?? '' }}</span></li>
                                    </ul>
                                    <textarea class="form-control add_bottom_15"  style="height: 100px;">{{ $item->boking->deskripsi }}</textarea>
                       
                                    
                                    <button type="submit" class="btn_1 full-width cart">CONFIRM AND PAY</button>
                      
                                  </form>
                                  </div>
                                  <!-- /box_general -->
                                  </div>
                                  <!-- /step -->
                                </div>
                              </div>
                              <!-- /row -->
                            </div>
                        </div>
                      </div>
                      <!-- /row -->

                      
                    </div>

                    
                    @endforeach
                    
                
                   
                  
                    
    
                  </div>

                  
                  <!-- /box_booking -->
                  <p class="text-right"><a href="checkout.html" class="btn_1">Checkout</a></p>
                </div>
                <!-- /container -->
              </main>
            </div>
        </div>
    </div>
</section>


@endsection

@push('after-script')

<script>
  @if (!empty($item))
    const uploadBtn_{{ $item->id }} = document.getElementById('uploadBtn_{{ $item->id }}');
    const uploadModal_{{ $item->id }} = document.getElementById('uploadModal_{{ $item->id }}');
    const closeBtn_{{ $item->id }} = uploadModal_{{ $item->id }}.querySelector('.close');

    uploadBtn_{{ $item->id }}.addEventListener('click', function (e) {
      e.preventDefault();
      uploadModal_{{ $item->id }}.style.display = 'block';
    });

    closeBtn_{{ $item->id }}.addEventListener('click', function () {
      uploadModal_{{ $item->id }}.style.display = 'none';
    });
  @endif
</script>

<script>

$(document).ready(function() {
  $('.close').click(function() {
    $('#uploadModal').hide();
  });
});

// Get the necessary elements
const uploadBtn = document.getElementById('uploadBtn');
const uploadModal = document.getElementById('uploadModal');
const modalClose = document.getElementsByClassName('close')[0];

// Function to open the modal
function openModal() {
    uploadModal.style.display = 'block';
}

// Function to close the modal
function closeModal() {
    uploadModal.style.display = 'none';
}

// Add event listener to the upload button
uploadBtn.addEventListener('click', openModal);

// Add event listener to the close button
modalClose.addEventListener('click', closeModal);

// Close the modal when the user clicks outside of it
window.addEventListener('click', function(event) {
    if (event.target == uploadModal) {
        closeModal();
    }
});

</script>

@endpush


