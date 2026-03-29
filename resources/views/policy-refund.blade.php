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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Refund Policy</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Refund Policy</li>
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
                <h2 class="display-7 mb-4">Refund Policy</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">

                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Refund Policy</h3>

                    <ol>
                        
                        <li>In case of any additional or error payments made by the candidate, refunds could be processed in not less than ten working days.</li>
                        
                        <li>Kindly take a snapshot of the payment confirmation page while making the payment.</li>
                        
                        <li>Cancellation of registration without any valid reason is not permissible.</li>
                        
                        <li>Change of mode of registration (Physical to online) should be informed at least 30 days in advance to the conference dates</li>
                        
                        <li>Authors are advised to share their grievance <b class="text-primary">To: <span class="text-secondary">{!!env('APP_EMAIL')!!}</span> cc: <span class="text-secondary">newgenresearchconsultancy@gmail.com</span></b> along with the snapshot of the payment confirmation page (obtained while making the payment).</li>
                        <li>Change of mode from physical (offline) to virtual (online) is permissible with prior intimation with proper reason by the registered delegate/author. However, refund is not permissible.</li>

                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>