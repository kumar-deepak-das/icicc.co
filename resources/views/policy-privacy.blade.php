<!DOCTYPE html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body>

    @include('inc.spinner')

    @include('inc.nav-bar-top')

    @include('inc.nav-bar-sm')

    @include('inc.content-top')

    @include('inc.nav-bar-lg')

    @include('inc.marquee')

    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Privacy Policy</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Privacy Policy</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">

            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Privacy Policy</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">

                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Privacy Policy</h3>

                    <p>This policy document highlights our privacy practices regarding personal information that we collect and store about you through this website and also for those personal Information that you provide us while participating in our conferences/events and campaigns.</p>

                    <ul>
                        <li>We process your personal information when it is necessary for the purposes of a legitimate interest pursued by us or a third party (when these interests are not overridden by your data protection rights). This applies in the following circumstances:</li>
                        <ul>
                            <li>to identify you once you register on our website; and</li>
                            <li>to contact you and respond to your questions or requests;</li>
                            <li>to understand which parts of the website are visited and how frequently; and</li>
                        </ul>
                        <li>to provide access to desirable content based on your preferences.The information supplied by you after the registration will be kept as a record and we are committed to data privacy will protect your personal information, wherever necessary.</li>
                        <li>We may also share the personal information provided by you to our third-party service providers engaged in the conference held and to our co– sponsors for event purpose only.</li>
                        <li>Except to the disclosure of the information to the above concerned parties, we will not disclose your personal information to any other third party without your consent.</li>
                        <li>If you do not wish to get contacted in the future for event purposes, write to us via email to unsubscribe this service provided by us.</li>
                        <li>If you choose not to provide your personal information that is mandatory to process your request, we may not be able to provide the corresponding service for publication-related communication from organizers or publishers in the future.</li>
                        <li>The information of the reviewer body is highly considered to be confidential and cannot be disclosed at any point in time even if claimed or requested.</li>
                        <li>The contact details and personal information of speakers agreed to be a part of our conference may be shared with event attendees. We may also post the information containing name, affiliation, email address, etc., with a photograph on our various conference websites for visitors knowledge attending a particular conference.</li>
                        <li>We prohibit the creation of frames around all the web pages which alters and affects the visual presentation of any of our websites.</li>
                        <li>Filming and photography may take place at the conference. You consent to your image and likeness being used in marketing and films without any payment to you. By attending a conference, you hereby have the absolute right and permission to use your photograph or video image in promotional materials and publicity. In addition, you hereby consent to waive any and all future claims, causes of actions, and/or demands against conference secretariat.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>