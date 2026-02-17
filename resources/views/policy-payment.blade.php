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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Payment Policies</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Payment Policies</li>
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
                    <h3 class="title-style">Payment Policies</h3>
                </div>
            </div>
        </div>
        
        <section class="content-section pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                
                <div class="row mt-4">
                    <div class="col-lg-12 tabw3-left">

                        <p class="my-2 text-darktext-justify">Instructions for Author(s) Registration & Payment of Registration Fee</p>

                        <table class="table table-borderless">
                            <tr><td><i class="far fa-check-square"></i></td><td> Each paper must be at least registered by one author for presentation in the conference getting it published in Springer.</td></tr>
                            <tr><td><i class="far fa-check-square"></i></td><td> Registration fee for each category has been defined in the Registration Fee table. No registration will be confirmed until payment is received.</td></tr>
                            <tr><td><i class="far fa-check-square"></i></td><td> Additional Paper Registration and Co-author registration applies as mentioned in table above.</td></tr>
                            <tr><td><i class="far fa-check-square"></i></td><td> Kindly pay the conference registration fee through online mode.</td></tr>
                            <tr><td><i class="far fa-check-square"></i></td><td> Paper has to be presented in the conference virtually (online) or physically (offline) based on the selected mode by the presenter and paying the applicable registration fee.</td></tr>
                            <tr><td><i class="far fa-check-square"></i></td><td> Registration fee can be paid by Credit Card through the payment gateway provided. Credit card details will not be accepted via email.</td></tr>
                        </table>
                        <div class="text-danger">
                            <H5 class="my-3 pt-3">Registration Fee (Physical Mode):</H5>

                            <p class="my-2 text-dark" style="text-align: justify;">This fee includes access to Inaugural Session, Keynotes/Invited Lectures, Oral Paper Presentation Sessions, Networking, Conference Lunch and Refreshment, Conference Kit, Participation/Presentation Certificate. The conference is non-residential and delegates are kindly requested to make their own arrangement for accommodation.</p>


                            <H5 class="my-3 pt-3">Registration Fee (Online Mode):</H5>

                            <p class="my-2 text-dark" style="text-align: justify;">This fee includes access to Inaugural Session, Keynotes/Invited Lectures, Oral Paper Presentation Sessions in online mode, Participation/Presentation Certificate (through e-mail after the completion of conference).</p>

                            <p class="my-2 text-dark" style="text-align: justify;">Registration must be paid and confirmed before the deadline. We may revise our terms and conditions as per the government norms, for example to reflect changes in relevant laws or regulatory requirements or improvements.</p>
                        </div>
                    </div>            
                </div>
            </div>
        </section>

        @include('inc.footer')
    </body>

</html>