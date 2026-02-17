<!doctype html>
<html lang="en">

    <head>
        @include('inc.head')
    </head>

    <body>
        
        @include('inc.nav-bar')

        <!-- inner banner -->
        <section class="inner-banner py-5">
            <div class="w3l-breadcrumb py-lg-5">
                <div class="container pt-5 pb-sm-4">
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Session Chair</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Session Chair</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        
        <!-- contact -->
        <section class="w3l-contact-info-main py-5" id="contact">
            <div class="container pt-lg-5 pt-md-4 pt-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                    <h5 class="small-title mb-1">Get In Touch</h5>
                    <h3 class="title-style">Contact Us</h3>
                </div>
                <div class="row">
                    <div class="col-md-8 left-cont-contact pe-md-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h5 class="contact-text">{!!env('CONF_HOST')!!}</h5>
                                    <p>{!!env('CONF_HOST_ADD')!!}</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="contact-address p-4 mt-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h5 class="contact-text">Call Us:</h5>
                                    <a href="tel:+12 23456790">+12 23456790</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="contact-address p-4 mt-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h5 class="contact-text">Mail Us:</h5>
                                    <a href="mailto:{!!env('CONF_EMAIL')!!}">{!!env('CONF_EMAIL')!!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 right-cont-contact ps-md-4 mt-md-0 mt-5">
                        <img class="img-fluid" src="public/assets/images/logo/logo-icicc-1.png">
                    </div>
                </div>
            </div>
        </section>

        <div class="map-contact pt-5">
            
        </div>
        <!-- //contact -->

        @include('inc.footer')
    </body>

</html>