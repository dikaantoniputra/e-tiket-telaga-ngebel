@extends('layouts.app')

@section('title')
 
    
@endsection


@section('content')
	
<main>		
    <div class="hero_in ">
        <div class="container">
            <img src="{{ asset($detail->gambar) }}" class="img-fluid" alt="...">
        </div>
    </div>
    <!--/hero_in-->
    
    <nav class="secondary_nav sticky_horizontal_2">
        <div class="container">
            <ul class="clearfix">
                <li><a href="#description" class="active">Description</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#sidebar">Booking Layanan</a></li>
            </ul>
        </div>
    </nav>

    <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <section id="description">
                        <div class="detail_title_1">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h1>{{ $detail->nama_layanan }}</h1>
                            <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361">Tiket Pemesanan</a>
                        </div>
                        <p>{!! $detail->deskrispi !!}</p>
                       
                     
                        <!-- /row -->						
                        <hr>
                        <div class="room_type first">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset($detail->gambar) }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4>Single Room</h4>
                                    <p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                    <ul class="hotel_facilities">
                                        <li><img src="img/hotel_facilites_icon_2.svg" alt="">Single Bed</li>
                                        <li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
                                        <li><img src="img/hotel_facilites_icon_5.svg" alt="">Shower</li>
                                        <li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
                                        <li><img src="img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /rom_type -->
                       
                        <hr>
                       
                        <hr>
                        
                    </section>
                    <!-- /section -->
                
                    <section id="reviews">
                        <h2>Reviews</h2>
                        <div class="reviews-container add_bottom_30">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>8.5</strong>
                                        <em>Superb</em>
                                        <small>Based on 4 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <div class="reviews-container">

                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Admin – April 03, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Ahsan – April 01, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Sara – March 31, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                    <hr>

                        <div class="add-review">
                            <h5>Leave a Review</h5>
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Name and Lastname *</label>
                                        <input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email *</label>
                                        <input type="email" name="email_review" id="email_review" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rating </label>
                                        <div class="custom-select-form">
                                        <select name="rating_review" id="rating_review" class="wide">
                                            <option value="1">1 (lowest)</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected>5 (medium)</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10 (highest)</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Your Review</label>
                                        <textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 add_top_20 add_bottom_30">
                                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
                <!-- /col -->
                
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail booking">
                        <!-- booking_form.blade.php -->
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <input class="form-control" type="hidden" name="booking_id" value="{{ $detail->id }}">
                        <input class="form-control" type="hidden" name="harga" value="{{ $detail->harga }}">
                        <div class="price">
                            <span>Rp.{{ $detail->harga }}<small>Harga</small></span>
                            <div class="score"><span><em>1 Tiket</em></span><strong>Masuk</strong></div>
                        </div>

                        <div class="form-group" id="input-dates">
                            <input class="form-control" type="text" name="tgl_boking" placeholder="When..">
                            <i class="icon_calendar"></i>
                        </div>


                        <div class="form-group">
                            <input class="form-control" type="number" name="jumlah" placeholder="Jumlah">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi">
                        </div>

                        <button type="submit"  class=" add_top_30 btn_1 full-width purchase">Purchase</button>
                    </form>
                        <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
                       
                    </div>
                    {{-- <ul class="share-buttons">
                        <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                        <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                        <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                    </ul> --}}
                </aside>
            </div>
            <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
<!--/main-->
@endsection

@push('after-script')

<script>
	$(function() {
	  $('input[name="tgl_boking"]').daterangepicker({
		  singleDatePicker: true, // Mengaktifkan pemilih tanggal tunggal
		  autoUpdateInput: false,
		  parentEl:'#input-dates',
		  opens: 'left',
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="tgl_boking"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('YY-MM-DD'));
	  });
	});
</script>



@endpush




