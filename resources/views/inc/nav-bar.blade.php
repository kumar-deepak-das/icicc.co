            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <!-- <a href="./" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0">
                        <img src="public/assets/img/logo/logo-icmeet.png" class="img-fluid" alt="">
                        {!!env('APP_NAME')!!}
                    </h1>
                    <img src="img/logo.png" alt="Logo">
                </a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="./" class="nav-item nav-link @if(Request::is('/')) active @endif">Home</a>
                        <a href="./important-dates" class="nav-item nav-link @if(Request::is('important-dates')) active @endif">Important Dates</a>
                        <a href="./committees" class="nav-item nav-link @if(Request::is('committees')) active @endif">Committees</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @if(Request::is('call-for-papers') || Request::is('special-sessions')) active @endif" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Papers</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="./call-for-papers" class="dropdown-item">Conference CFP</a>
                                <a href="./special-sessions" class="dropdown-item">Special Sessions</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @if(Request::is('crc-info') || Request::is('submission-guidelines')) active @endif" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Submission</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="./crc-info" class="dropdown-item">CRC Templates & Guidelines</a>
                                <a href="./submission-guidelines" class="dropdown-item">Submission Guidelines</a>
                            </div>
                        </div>

                        <a href="./registration" class="nav-item nav-link @if(Request::is('registration')) active @endif">Registration</a>

                        <a href="./program-schedule" class="nav-item nav-link @if(Request::is('program-schedule')) active @endif">Program Schedule</a>
                        <a href="./previous-publications" class="nav-item nav-link @if(Request::is('previous-publications')) active @endif">Publications</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @if(Request::is('guests') || 
                                                            Request::is('keynote-speakers') || 
                                                            Request::is('session-chairs')) || 
                                                            Request::is('previous-speakers')) active @endif" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Speakers</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="./guests" class="dropdown-item">Guests</a>
                                <a href="./keynote-speakers" class="dropdown-item">Keynote Speakers</a>
                                <a href="./session-chairs" class="dropdown-item">Session Chairs</a>
                                <a href="./previous-speakers" class="dropdown-item">Past Speakers, Guests and Session Chairs</a>
                            </div>
                        </div>
                        <!-- <a href="./gallery" class="nav-item nav-link @if(Request::is('gallery')) active @endif">Gallery</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link @if(Request::is('visa') || Request::is('how-to-reach') || Request::is('accommodation') || Request::is('near-by-attractions')) active @endif" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Travel</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="./visa" class="dropdown-item">Visa</a>
                                <a href="./how-to-reach" class="dropdown-item">How to Reach</a>
                                <a href="./accommodation" class="dropdown-item">Accommodation</a>
                                <a href="./near-by-attractions" class="dropdown-item">Near By Attractions</a>
                            </div>
                        </div>
                        <a href="./contact-us" class="nav-item nav-link @if(Request::is('contact-us')) active @endif">Contact Us</a>
                    </div>
                    <!-- <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Get A Quote</a> -->
                </div>
            </nav>

        <!-- Navbar & Hero End -->