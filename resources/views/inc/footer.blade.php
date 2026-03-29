        <!-- Footer Start -->
        <div class="container-fluid footer wow fadeIn mt-5" data-wow-delay="0.2s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Host and Venue</h4>
                            <div class="mb-3" style="min-height: 60px;">
                                <!-- <h6 class="text-muted mb-0">Host & Venue</h6> -->
                                <a target="_blank" href="{!!env('CONF_HOST_WEBSITE')!!}">
                                    <i class="fa fa-home me-2"></i>
                                    {!!env('CONF_HOST')!!}, {!!env('CONF_HOST_ADD')!!}
                                </a>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Email</h6>
                                <a href=""><i class="fas fa-envelope me-2"></i> <strong>TO:</strong> {!!env('APP_EMAIL')!!}</a><br/>
                                <a href=""><i class="fas fa-envelope me-2"></i><strong>CC:</strong> {!!env('CONF_EMAIL')!!}</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Conference Dates</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Day-1</h6>
                                <a class="text-white1 mb-0"><i class="fas fa-calendar me-2"></i> {!!env('CONF_DAY1')!!}</a>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Day-2</h6>
                                <a class="text-white1 mb-0"><i class="fas fa-calendar me-2"></i> {!!env('CONF_DAY2')!!}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Important Links</h4>
                            <a href="./call-for-papers" class=""><i class="fas fa-angle-right me-2"></i> Conference CFP</a>
                            <a href="./special-sessions" class=""><i class="fas fa-angle-right me-2"></i> Special Sessions</a>
                            <a href="./important-dates" class=""><i class="fas fa-angle-right me-2"></i> Important Dates</a>
                            <a href="./crc-info" class=""><i class="fas fa-angle-right me-2"></i> CRC Templates & Guidelines</a>
                            <a href="./submission-guidelines" class=""><i class="fas fa-angle-right me-2"></i> Submission Guidelines</a>
                            <a href="./program-schedule" class=""><i class="fas fa-angle-right me-2"></i> Program Schedule</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Our Policies</h4>
                            <a href="./terms-and-conditions" class=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="./payment-policy" class=""><i class="fas fa-angle-right me-2"></i> Payment Policy</a>
                            <a href="./refund-policy" class=""><i class="fas fa-angle-right me-2"></i> Refund Policy</a>
                            <a href="./privacy-policy" class=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="./publication-policy" class=""><i class="fas fa-angle-right me-2"></i> Publication Policy</a>
                            <a href="./editorial-policy" class=""><i class="fas fa-angle-right me-2"></i> Editorial Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->    

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>{!!env('CONF_NAME')!!}</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        Maintained By <a class="border-bottom text-white" href="https://OdishaAIMS.com" target="_blank">OdishaAIMS</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->