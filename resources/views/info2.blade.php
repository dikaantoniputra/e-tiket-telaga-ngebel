@extends('layouts.app')

@section('title')
{{ $informasi->judul }}
    
@endsection


@section('content')

	<!-- /header -->
		
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>{{ $informasi->judul }}</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	
	<main>

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>{{ $informasi->judul }}</h2>
					<p>Penjelasan singkat</p>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{ asset($informasi->gambar) }}" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
						<p>{!! $informasi->deskripsi !!}</p>
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

        <div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Informasi Lain</h2>
				<p>{{ $informasi->judul }}</p>
			</div>
			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-headphones"></i>
						<h3>Jam Operasional</h3>
						<p>{{ $informasi->jam_buka }} WIB – {{ $informasi->jam_tutup }} WIB</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-credit"></i>
						<h3>Tarif</h3>
						<p>RP.{{ $informasi->harga ?? '' }}</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-chat"></i>
						<h3>BUKA</h3>
						<p>{{ $informasi->hari_buka }} - {{ $informasi->hari_tutup }}</p>
					</a>
				</div>
			</div>
			<!--/row-->
		</div>
		<!-- /container -->
		<!--/container-->
	</main>
	<!--/main-->
@endsection



