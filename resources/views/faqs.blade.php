@extends('layouts.app')

@section('title')
 
    
@endsection


@section('content')
<div class="sub_header_in sticky_header">
    <div class="container">
        <h1>Faq Section</h1>
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
                            <li><a href="#payment" class="active"><i class="icon_document_alt"></i>PENDAHULUAN</a></li>
                            <li><a href="#tips"><i class="icon_document_alt"></i>Suggestions</a></li>
                            <li><a href="#reccomendations"><i class="icon_document_alt"></i>Reccomendations</a></li>
                            <li><a href="#terms"><i class="icon_document_alt"></i>Terms&amp;conditons</a></li>
                            <li><a href="#booking"><i class="icon_document_alt"></i>Booking</a></li>
                        </ul>
                    </div>
                    <!--/sticky -->
            </aside>
            <!--/aside -->
            
            <div class="col-lg-9" id="faq">
                <h4 class="nomargin_top">Pendahuluan</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>Pendahuluan</a>
                            </h5>
                        </div>

                        <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Telaga Ngebel adalah salah satu tempat wisata yang ada di Ponorogo, Telaga Ngebel merupakan danau alami yang terletak di kaki gunung wilis yang berada pada kecamatan Ngebel, Kabupaten Ponorogo. Penjualan tiket wisata di telaga ngebel masih menggunakan sistem konvensional, Sistem ini memiliki kelemahan yaitu rentan terjadi kesalahan dalam perekaman maupun pencarian data, permasalahan lain yaitu pembelian tiket wisata dilakukan pada pintu masuk telaga Ngebel yang memiliki jalan cukup curam, tak sedikit kendaraan wisatawan tergelincir mundur saat antri membeli tiket selain itu belum ada website khusus mengenai detail tempat wisata ini, seperti jam operasional dan harga tiket wisata sehingga banyak wisatawan yang harus pulang lagi karena saat sampai tempt wisata belum buka. 
                                    Berdasarkan permasalahan diatas, maka dibuatlah sebuah sistem informasi e-ticketing yang bertujuan untuk dapat membantu pengelolaan data tempat wisata. mempermudah wisatawan mendapatkan informasi mengenai tempat wisata, pembelian tiket wisata, selain itu juga memudahkan pegawai dalam mengelola data penjualan tiket, yang mengarah kepada meningkatnya kualitas tempat wisata
                                    </p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Generative Modeling Review
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Variational Autoencoders
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree_payment" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion payment -->
                
                <h4 class="nomargin_top">Suggestions</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="tips">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator ti-plus"></i>Pendahuluan</a>
                            </h5>
                        </div>

                        <div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                             
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo_tips" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Generative Modeling Review
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo_tips" class="collapse" role="tabpanel" data-parent="#tips">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree_tips" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Variational Autoencoders
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree_tips" class="collapse" role="tabpanel" data-parent="#tips">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion suggestions -->
                
                <h4 class="nomargin_top">Reccomendations</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="reccomendations">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_reccomendations" aria-expanded="true"><i class="indicator ti-plus"></i>Introdocution</a>
                            </h5>
                        </div>

                        <div id="collapseOne_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo_reccomendations" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Generative Modeling Review
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree_reccomendations" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Variational Autoencoders
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion Reccomendations -->
                
                <h4 class="nomargin_top">Terms&amp;conditons</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="terms">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_terms" aria-expanded="true"><i class="indicator ti-plus"></i>Introdocution</a>
                            </h5>
                        </div>

                        <div id="collapseOne_terms" class="collapse" role="tabpanel" data-parent="#terms">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo_terms" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Generative Modeling Review
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo_terms" class="collapse" role="tabpanel" data-parent="#terms">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree_terms" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Variational Autoencoders
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree_terms" class="collapse" role="tabpanel" data-parent="#terms">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion Terms -->
                
                <h4 class="nomargin_top">Booking</h4>
                <div role="tablist" class="add_bottom_45 accordion_2" id="booking">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne_booking" aria-expanded="true"><i class="indicator ti-plus"></i>Introdocution</a>
                            </h5>
                        </div>

                        <div id="collapseOne_booking" class="collapse" role="tabpanel" data-parent="#booking">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo_booking" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Generative Modeling Review
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo_booking" class="collapse" role="tabpanel" data-parent="#booking">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree_booking" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>Variational Autoencoders
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree_booking" class="collapse" role="tabpanel" data-parent="#booking">
                            <div class="card-body">
                                <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion Booking -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!--/container-->
</main>
@endsection



