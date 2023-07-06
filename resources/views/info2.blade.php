@extends('layouts.app')

@section('title')
 
    
@endsection


@section('content')

	<!-- /header -->
		
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>MLOKO SEWU</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	
	<main>

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>MLOKO SEWU</h2>
					<p>Penjelasan singkat</p>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="data:image/jpeg;base64,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" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
						<p>Mloko Sewu merupakan obyek wisata yang berupa bukit dengan ketinggian 800 meter di atas permukaan laut. Dari atas bukit ini, pengunjung akan disuguhi pemandangan luas yang juga dapat melihat Telaga Ngebel. Pengunjung juga dapat menikmati keindahan kebun bunga yang terdapat di tempat ini. Pemandangan ini membuat kawasan Mloko Sewu terlihat semakin asri perbukatan hijau di sekitaranya. Mloko Sewu merupakan tempat wisata yang masih tergolong baru, tempat ini dibuka pada tahun 2019.
                            Namun, fasilitas yang dimiliki sudah terbilang lengkap.</p>
						<p>Ada spot foto yang dapat digunakan mengambil gambar untuk diunggah ke media sosial. Spot foto yang dimiliki antara lain berupa anjungan dengan latar belakang Telaga Ngebel. Pengunjung juga dapat menikmati sunset yang indah dari atas perbukitan. Hingga saat ini, pengelola terus berupaya mengembangkan kawasan wisata ini untuk semakin menarik minat wisatawan.</p>
						<p><em>MLOKO SEWU</em></p>
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
				<h2>Why Choose Sparker</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-headphones"></i>
						<h3>Jam Operasional</h3>
						<p>09.00 WIB – 18.00 WIB</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-credit"></i>
						<h3>Tarif</h3>
						<p>RP.10000</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-chat"></i>
						<h3>BUKA</h3>
						<p>Senin - Minggu</p>
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



