@extends('layouts.app')

@section('title')
E-TICKET Atlantis Land
    
@endsection


@section('content')

	
<main>
    <section class="hero_single version_4">
        <div class="wrapper">
            <div class="container">
                <h3>Atlantis Land</h3>
                <p>Tetap Cool Meski Basah-Basahan! Ayo, Bikin Gelombang Bahagia di Atlantastis Land!</p>
            
            </div>
        </div>
    </section>
    <!-- /hero_single -->	
    <div class="container margin_60_35">
        <div class="main_title_3">
            <span></span>
            <h2>E-TICKETING</h2>
            <p>APLIKASI E-TICKETING TELAGA NGEBEL</p>

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
                            <h3>{{ "Rp " . number_format($item->harga, 0, ',', '.') }}</h3>
                        </div>
                    </figure>
                </a>
            </div>
            @endforeach

        </div>
        <!-- /row -->

    </div>
    
 
    
    <div class="call_section ">
        <div class="wrapper">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Cara Pesan Tiket Masuk</h2>
                    <p>Atlantis Land</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_how wow">
                            <i class="pe-7s-search"></i>
                            <h3>Registrasi </h3>
                            <p>Isi identitas anda pada menu registrasi</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <i class="pe-7s-info"></i>
                            <h3>Pembayaran</h3>
                            <p>Lakukan pembayaran dengan tepat waktu</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <i class="pe-7s-like2"></i>
                            <h3>Selesai</h3>
                            <p>Selamat menikmati wisata atlantis land</p>
                        </div>
                    </div>
                </div>
                <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="{{ url('daftar') }}" class="btn_1 rounded">Daftar Disini</a></p>
            </div>
        </div>
    </div>
</main>


@endsection

@push('after-script')


@endpush


