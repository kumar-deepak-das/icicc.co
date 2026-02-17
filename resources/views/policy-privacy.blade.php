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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Privacy Policy</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        

        <!-- Committees -->
        <div class="w3l-about-2 pt-5 pb-0">
            <div class="container py-lg-51 1py-md-4 py-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                    <h5 class="small-title mb-2">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="title-style">Privacy Policies</h3>
                </div>
            </div>
        </div>
        
        <section class="content-section pb-5 pt-xs-50 pb-xs-50">
            <div class="container">                
                <div class="col-lg-12 tabw3-left">
                    <p class="my-2 text-dark" style="text-align: justify;">This policy document highlights our privacy practices regarding personal information that we collect and store about you through this website and also for those personal Information that you provide us while participating in our conferences/events and campaigns.</p>

                    <table class="table table-borderless">
                        <tr><td><i class="far fa-check-square"></i></td><td>We process your personal information when it is necessary for the purposes of a legitimate interest pursued by us or a third party (when these interests are not overridden by your data protection rights). This applies in the following circumstances:</td></tr>
                        <tr>
                            <td></td>
                            <td>
                                <table class="table table-borderless">
                                    <tr><td><i class="far fa-check-square"></i></td><td> to identify you once you register on our website; and</td></tr>
                                    <tr><td><i class="far fa-check-square"></i></td><td> to contact you and respond to your questions or requests;</td></tr>
                                    <tr><td><i class="far fa-check-square"></i></td><td> to understand which parts of the website are visited and how frequently; and</td></tr>
                                    <tr><td><i class="far fa-check-square"></i></td><td> to provide access to desirable content based on your preferences.The information supplied by you after the registration will be kept as a record and we are committed to data privacy will protect your personal information, wherever necessary.</td></tr>
                                    
                                </table>
                            </td>
                        </tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> We may also share the personal information provided by you to our third-party service providers engaged in the conference held and to our co– sponsors for event purpose only.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> Except to the disclosure of the information to the above concerned parties, we will not disclose your personal information to any other third party without your consent.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> If you do not wish to get contacted in the future for event purposes, write to us via email to unsubscribe this service provided by us.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> If you choose not to provide your personal information that is mandatory to process your request, we may not be able to provide the corresponding service for publication-related communication from organizers or publishers in the future.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> The information of the reviewer body is highly considered to be confidential and cannot be disclosed at any point in time even if claimed or requested.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> The contact details and personal information of speakers agreed to be a part of our conference may be shared with event attendees. We may also post the information containing name, affiliation, email address, etc., with a photograph on our various conference websites for visitors knowledge attending a particular conference.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> We prohibit the creation of frames around all the web pages which alters and affects the visual presentation of any of our websites.</td></tr>
                        <tr><td><i class="far fa-check-square"></i></td><td> Filming and photography may take place at the conference. You consent to your image and likeness being used in marketing and films without any payment to you. By attending a conference, you hereby have the absolute right and permission to use your photograph or video image in promotional materials and publicity. In addition, you hereby consent to waive any and all future claims, causes of actions, and/or demands against conference secretariat.</td></tr>
                    </table>

                </div>            
            </div>
        </section>

        @include('inc.footer')
    </body>

</html>