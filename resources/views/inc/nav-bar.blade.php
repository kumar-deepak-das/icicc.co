    <!-- header -->
        <header id="site-header" class="fixed-top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="./">
                        <!-- <i class="fab fa-wikipedia-w">I</i>CICC -->
                        <img loading="lazy" src="public/assets/images/logo/logo-icicc-26.png" style="height: 60px;" />
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">

                            <li class="nav-item @if(Request::is('/')) active @endif">
                                <a class="nav-link" href="{{asset('')}}">Home</a>
                            </li>
                            
                            <li class="nav-item @if(Request::is('important-dates')) active @endif">
                                <a class="nav-link" href="important-dates">Important Dates</a>
                            </li>
                            
                            <li class="nav-item @if(Request::is('committee')) active @endif">
                                <a class="nav-link" href="committee">Committees</a>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle @if(Request::is('call-for-papers') || 
                                                    Request::is('call-for-special-session') || 
                                                    Request::is('registration') || 
                                                    Request::is('paper-submission')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Author Info <i class="fa fa-caret-down"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="call-for-papers">Call for Paper</a>
                                        <a class="dropdown-item" href="call-for-special-session">Call for Special Session</a>
                                        <a class="dropdown-item" href="registration">Registration</a>
                                        <a class="dropdown-item" href="paper-submission">Paper Submission</a>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item">
                                <div class="dropdown">
                                   <a class="nav-link dropdown-toggle @if(Request::is('conference-schedule') || 
                                                    Request::is('keynote-speaker') || 
                                                    Request::is('session-chair')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Programs <i class="fa fa-caret-down"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="conference-schedule">Conference Schedule</a>
                                        <a class="dropdown-item" href="keynote-speaker">Keynote Speakers</a>
                                        <a class="dropdown-item" href="session-chair">Session Chairs</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle @if(Request::is('previous-publications') || 
                                                    Request::is('crc-guidelines')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Publication <i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="previous-publications">Previous Publications of {!!env('APP_NAME')!!}</a>
                                        <a class="dropdown-item" href="crc-guidelines">Guidelines for Camera Ready Copy (CRC)</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle @if(Request::is('visa-info') ||
                                                    Request::is('how-to-reach') || 
                                                    Request::is('accommodation') || 
                                                    Request::is('near-by-attractions')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Venue <i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="visa-info">VISA</a>
                                        <a class="dropdown-item" href="how-to-reach">How To Reach</a>
                                        <a class="dropdown-item" href="accommodation">Accommodation</a>
                                        <a class="dropdown-item" href="near-by-attractions">Nearby Attractions</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle @if(Request::is('terms-and-conditions') ||
                                                    Request::is('payment-policy') ||
                                                    Request::is('refund-policy') ||
                                                    Request::is('privacy-policy') ||
                                                    Request::is('publication-policy')) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Policies <i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="terms-and-conditions">Terms & Conditions</a>
                                        <a class="dropdown-item" href="payment-policy">Payment Policy</a>
                                        <a class="dropdown-item" href="refund-policy">Refund Policy</a>
                                        <a class="dropdown-item" href="privacy-policy">Privacy Policy</a>
                                        <a class="dropdown-item" href="publication-policy">Publication Policy</a>
                                    </div>
                                </div>
                                
                            </li>

                            <li class="nav-item @if(Request::is('contact-us')) active @endif">
                                <a class="nav-link" href="contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->