@extends('layouts.app')

@section('title')
    BUMDES | Home
    
@endsection


@section('content')

	
<main>
    <section class="hero_single version_4">
        <div class="wrapper">
            <div class="container">
                <h3>E-TICKETING TELAGA NGEBEL</h3>
                <p>APLIKASI E-TICKETING TELAGA NGEBEL LANGSUNG PESAN SEKARANG</p>
            
            </div>
        </div>
    </section>
    <!-- /hero_single -->	

    <div class="container margin_60_35">
        <div class="main_title_3">
            <span></span>
            <h2>E-TICKETING</h2>
            <p>APLIKASI E-TICKETING TELAGA NGEBEL</p>
            <a href="grid-listings-filterscol.html">See all</a>
        </div>
       
   
        <div class="row add_bottom_30">
            @foreach ($layanan as $item)
            <div class="col-lg-3 col-sm-6">
             
                    <a href="{{ route('detaillayanan', ['slug' => $item->slug]) }}" class="grid_item small">
                    <figure>
                        <img src="{{ asset($item->gambar) }}" alt="">
                        <div class="info">
                            <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                            <h3>{{ $item->nama_layanan }}</h3>
                            <h3>{{ $item->harga }}</h3>
                        </div>
                    </figure>
                </a>
            </div>
            @endforeach
           
        </div>
        <!-- /row -->
     
    </div>
    
 
    
    <div class="call_section image_bg">
        <div class="wrapper">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>How it Works</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_how wow">
                            <i class="pe-7s-search"></i>
                            <h3>Search Locations</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <i class="pe-7s-info"></i>
                            <h3>View Location Info</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <i class="pe-7s-like2"></i>
                            <h3>Book, Reach or Call</h3>
                            <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent eloquentiam id.</p>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="register.html" class="btn_1 rounded">Register Now</a></p>
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    <!--/call_section-->
</main>


@endsection

@push('after-script')


@endpush


