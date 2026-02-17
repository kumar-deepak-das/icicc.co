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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">How to Reach</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>How to Reach</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        
        
        <!-- contact -->
        <section class="w3l-contact-info-main py-5" id="contact">
            <div class="container pt-lg-5 pt-md-4 pt-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                    <h5 class="small-title mb-1">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="title-style">How to Reach</h3>
                </div>
                <div class="row">
                    <div class="col-md-5 left-cont-contact pe-md-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fas fa-home" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h5 class="contact-text">Host:</h5>
                                    <h6><A target="_blank" href="!!env('CONF_HOST_URL')!!}">{!!env('CONF_HOST')!!}</A></h6>
                                    <p>{!!env('CONF_HOST_ADD')!!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-address p-4 mt-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <div class="ms-3">
                                    <h5 class="contact-text">Venue:</h5>
                                    <h6><A target="_blank" href="{!!env('CONF_HOST_URL')!!}">{!!env('CONF_HOST')!!}</A></h6>
                                    <p>{!!env('CONF_HOST_ADD')!!}</p>

                                </div>
                            </div>
                        </div>
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
                    <div class="col-md-7 right-cont-contact ps-md-4 mt-md-0 mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.6330370088317!2d85.80485347493446!3d20.34754201082767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1908e1e48a6f0f%3A0xd5d1d26ade19d88f!2sSrusti%20Academy%20of%20Management%20and%20Technology!5e1!3m2!1sen!2sin!4v1771293735842!5m2!1sen!2sin" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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