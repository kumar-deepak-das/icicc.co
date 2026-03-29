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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Visa</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Visa</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container-fluid service pb-5 overflow-hidden">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Visa Informations</h2>
            </div>
        </div>
        
        <div class="container pb-5 ">
            <div class="row g-5">
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">How to get Visa for India</h3>
                    <p>You must apply for a Standard Visitor visa online before you travel to the India. A Standard Visitor visa costs $10 to $25. The earliest you can apply is 3 months before you travel. For more details visit: <b><A class="text-secondary" target="_blank" href="https://indianvisaonline.gov.in/">https://indianvisaonline.gov.in/</A></b></p>

                    <p>Attendees from countries that require a India visa for entry are reminded that the process of obtaining a visa may take approximately 3 weeks’ time under normal circumstances.
                </div>

                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <H6>For security purposes, the conference has policy for issuing official Visa Support Letters as follows:</H6>

                    <ul>
                        <li>Visa Support Letters will be issued only after you have successfully registered and paid for your conference.</li>
                        <li>Visa Support Letters can only be issued for the person registered to attend the conference in form of participant, author, chair and speaker. Unfortunately we cannot issue visa Support Letters for guests of participants.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>