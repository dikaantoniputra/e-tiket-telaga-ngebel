@extends('layouts.app')

@section('title')
 
    
@endsection


@section('content')

	<!-- /header -->
		
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>TELAGA NGEBEL</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	
	<main>

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>TELAGA NGEBEL</h2>
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
						<p>Telaga Ngebel adalah sebuah waduk yang dibangun di Ngebel, Ponorogo untuk menampung air dari Sungai Jeram. Walaupun begitu, sebagian besar air yang ditampung oleh waduk ini sebenarnya berasal dari Sungai Talun, yang airnya dialirkan ke waduk ini melalui sebuah saluran yang dibangun mulai tahun 1920 hingga 1924. Waduk ini terutama dimanfaatkan untuk mengairi lahan pertanian seluas sekitar 10.000 hektar dan membangkitkan listrik melalui sebuah PLTA berkapasitas 2,25 MW. Waduk ini terletak di kaki Gunung Wilis pada ketinggian sekitar 730 meter di atas permukaan laut dan sekitar 12,5 kilometer dari pusat kota Ponorogo. Kedalaman waduk ini awalnya mencapai 59 meter, tetapi kini diperkirakan tinggal 20 meter, karena terjadinya sedimentasi</p>
						<p>[1] Suhu udara di waduk ini berkisar antara 20-26 °C, sehingga juga menjadi salah satu obyek wisata andalan Ponorogo. Telaga Ngebel merupakan salah satu destinasi wisata yang banyak dikunjungi wisatawan. Ketenangan dan dan keindahan Telaga Ngebel menjadi salah satu daya tarik tempat wisata ini. Telaga Ngebel berada pada ketinggian 734 mdpl yang membuat kawasan ini selalu diselimuti udara sejuk dengan suhu. Kawasan ini berada di lereng barat Gunung Wilis.</p>
						<p><em>TELAGA NGEBEL</em></p>
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
						<p>08.00 WIB – 18.00 WIB</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#0">
						<i class="pe-7s-credit"></i>
						<h3>Tarif</h3>
						<p>RP.15000</p>
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



