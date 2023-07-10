@extends('layouts.app')

@section('title')
About Us
    
@endsection


@section('content')
<div class="sub_header_in sticky_header">
    <div class="container">
        <h1>About Us</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->

<main>
    <div class="container margin_60_35">
        <div class="row">
            <aside class="col-lg-3" id="faq_cat">
                    <div class="box_style_cat" id="faq_box">
                        <ul id="cat_nav">
                            <li><a href="#payment" class="active"><i class="icon_document_alt"></i>Telaga Ngebel</a></li>
                            <li><a href="#tips"><i class="icon_document_alt"></i>Potensi Obyek Wisata Telaga Ngebel</a></li>
                            <li><a href="#reccomendations"><i class="icon_document_alt"></i>Kebijakan Pemerintah Daerah </a></li>
                        </ul>
                    </div>
                    <!--/sticky -->
            </aside>
            <!--/aside -->
            
            <div class="col-lg-9" id="faq">
                <h4 class="nomargin_top">Telaga Ngebel</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>Pendahuluan</a>
                            </h5>
                        </div>

                        <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Obyek wisata Telaga Ngebel adalah salah satu obyek wisata andalan dari Kabupaten Ponorogo. Obyek wisata tersebut terletak pada ketinggian 734 meter di atas permukaan laut dan terletak di Kecamatan Ngebel serta sekitar 23 kilometer dari pusat kota Ponorogo. Obyek wisata Telaga Ngebel mempunyai suhu diantara 20–26 derajat celcius membuat udara di sekitar obyek wisata menjadi sejuk dan dingin.11 Obyek wisata Telaga Ngebel merupakan salah satu destinasi pariwisata yang terkenal di Kabupaten Ponorogo. Obyek wisata Telaga Ngebel mempunyai keliling telaga mencapai 5 kilometer dan luas mencapai 150 hektar. Adanya hal ini membuat panorama alam di kawasan Telaga Ngebel semakin mempesona.12 Obyek wisata Telaga Ngebel masuk wilayah sebagian Desa Ngebel, Desa Sahang, Desa Wagir Lor dan Gondowido.

                                    </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                 
                </div>
                <!-- /accordion payment -->
                
                <h4 class="nomargin_top">Potensi Obyek Wisata Telaga Ngebel</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="tips">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator ti-plus"></i>Potensi Obyek Wisata Telaga Ngebel</a>
                            </h5>
                        </div>

                        <div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
                            <div class="card-body">
                                <p>Masyarakat di sekitar obyek wisata Telaga Ngebel memiliki tanah yang subur dan alam yang hijau. Masyarakat mayoritas menggantungkan hidupnya pada pertanian dan perkebunan yang terdapat pada desa–desa sebagian wilayahnya menjadi wilayah obyek wisata Telaga Ngebel. Masyarakat desa–desa sekitar obyek wisata Telaga Ngebel mempunyai berkah tersendiri dengan adanya hal tersebut. 
                                    Fasilitas pelayanan dan sarana prasarana yang ada di objek wisata Telaga Ngebel setiap tahunnya mengalami perubahan kearah positif pemerintah setempat bekerjasama dengan pemerintah daerah terus berusaha membangun infrastruktur yang ada guna kemajuan dibidang wisata dan menunjang ekonomi warga sekitar.
                                    </p>
                             
                            </div>
                        </div>
                    </div>
              
                </div>
                <!-- /accordion suggestions -->
                
                <h4 class="nomargin_top">Kebijakan Pemerintah Daerah </h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="reccomendations">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_reccomendations" aria-expanded="true"><i class="indicator ti-plus"></i>Kebijakan Pemerintah Daerah</a>
                            </h5>
                        </div>

                        <div id="collapseOne_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                            <div class="card-body">
                                <p>Potensi pariwisata terdapat di daerah potensi pariwisata diupayakan dengan memaksimalkan sektor pariwisata yang telah dimiliki. Negara sebagai pemangku dari kebijakan melakukan upaya penyelenggaraan dan pengembangan. Penyelenggaraan dan pengembangan pariwisata dengan maksimal untuk memperbanyak wisatawan yang hendak berwisata, baik wisatawan domestik maupun wisatawan mancanegara. Pada Undang– Undang Republik Indonesia No. 9 Tahun 1990 yang dikeluarkan negara berisi tentang kepariwisataan mempunyai tujuan dan dasar pelaksanaan sektor pariwisata. Inti dari tujuan ini mengindikasikan bahwa penyelenggaraan dan pengembangan terhadap sektor pariwisata dengan pemberian pedoman dasar atas tujuan pengelolaan dan pemeliharaan potensi pariwisata</p>
                               
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                  
                </div>
               
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!--/container-->
</main>
@endsection



