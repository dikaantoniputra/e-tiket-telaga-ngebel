@extends('layouts.app')

@section('title')
 
    
@endsection


@section('content')
<div class="sub_header_in sticky_header">
    <div class="container">
        <h1>Contacts Sparker</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->
    
<main>
    <div id="map_contact"></div>
    <!-- /map -->
    <div class="container margin_60_35">
        <div class="row justify-content-center">
            
            <div class="col-xl-5 col-lg-6 pr-xl-5">
                <div class="main_title_3">
                    <span></span>
                    <h2>Send us a message</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet.</p>
                </div>
                <div id="message-contact"></div>
                    <form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" id="name_contact" name="name_contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" id="email_contact" name="email_contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control" type="text" id="phone_contact" name="phone_contact">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" id="message_contact" name="message_contact" style="height:150px;"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Are you human? 3 + 1 =</label>
                                    <input class="form-control" type="text" id="verify_contact" name="verify_contact">
                                </div>
                            </div>
                        </div>
                        <p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
                    </form>
            </div>
            <div class="col-xl-5 col-lg-6 pl-xl-5">
                <div class="box_contacts">
                    <i class="ti-support"></i>
                    <h2>Need Help?</h2>
                    <a href="#0">43 4324265622</a> - <a href="#0">help@sparker.com</a>
                </div>
                <div class="box_contacts">
                    <i class="ti-help-alt"></i>
                    <h2>Questions?</h2>
                    <a href="#0">43 324242322</a> - <a href="#0">info@sparker.com</a>
                </div>
                <div class="box_contacts">
                    <i class="ti-home"></i>
                    <h2>Address</h2>
                    <a href="#0">PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</main>
@endsection



