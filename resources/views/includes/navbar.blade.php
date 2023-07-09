<header class="header_in is_sticky menu_fixed">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12">
				<div id="logo">
					<a href="index.html">
						<img src="{{ asset('assets/images/logo2.png') }}" width="50" height="50" alt="" class="logo_sticky"><span>Telaga Ngebel</span>
					</a>
				</div>
			</div>
			<div class="col-lg-9 col-12">
				@guest
				<ul id="top_menu">
					<li><a href="{{ url('daftar') }}" class="btn_add">Buat Akun</a></li>
					<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
					{{-- <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li> --}}
				</ul>
				@else
				<ul id="top_menu">
					<li><a href="{{ url('profile') }}" class="btn_add">Akun Saya</a></li>
				</ul>
				@endguest
				<!-- /top_menu -->
				<a href="#menu" class="btn_mobile">
					<div class="hamburger hamburger--spin" id="hamburger">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</a>
				<nav id="menu" class="main-menu">
					<ul>
						<li><span><a href="{{ url('/') }}">Home</a></span>
							
						</li>
						
						
						</li>
						<li><span><a href="#0">Info Wisata</a></span>
							<ul>
								<li><a href="{{ url('telaga-ngebel') }}">TELAGA NGEBEL</a></li>
								<li><a href="{{ url('mloko-sewu') }}">MLOKO SEWU</a></li>
								
							</ul>
						</li>
						<li><span><a href="{{ url('about') }}">About</a></span>
				
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->		
</header>