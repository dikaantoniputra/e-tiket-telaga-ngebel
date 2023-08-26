@extends('layouts.app')

@section('title')
About Us
    
@endsection


@section('content')
<div class="sub_header_in sticky_header">
    <div class="container">
        <h1>Atlantis Land</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->

<main>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-9" id="faq">
                <h4 class="nomargin_top">Tentang Kami</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                    <div class="card">
                        <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p> Atlantis Land merupakan wahana air di Kenjeran Park, Surabaya. Dari namanya saja, Atlantis atau kerap disapa Atlantika, terinspirasi dari sebuah pulau legendaris. Wahana ini ramah untuk anak-anak hingga rekreasi keluarga.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h4 class="nomargin_top">Lokasi</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                    <div class="card">
                        <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Lokasi Atlantis Land berada di Jalan Sukolilo Nomor 100, Sukolilo Baru, Kecamatan Bulak, Surabaya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="nomargin_top">Jam Buka</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                    <div class="card">
                        <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>buka mulai pukul 10.00 hingga 18.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection



