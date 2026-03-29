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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Payment Policy</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Payment Policy</li>
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
                <h2 class="display-7 mb-4">Payment Policy</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">

                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Online Registration and Payment Policy</h3>

                    <p>Instructions for Author(s) Registration & Payment of Registration Fee</p>

                    <ol>
                        <li>Each paper must be at least registered by one author for presentation in the conference getting it published in Springer.</li>
                        <li>Registration fee for each category has been defined in the above table. Registration fee can be paid by online payment transfer through the payment gateway provided. The conference registration process is handled by Newgen Research Consultancy. For registration, sharing card details will not be accepted via email.</li>

                        <li>Additional Paper Registration and Co-author registration applies as mentioned in table above.</li>
                        <li>Extra page length charges would be applicable beyond 12 pages strictly. You have to make a combined fund transfer in such a case (i.e. Normal Registration + Extra Page Charges).</li>
                        <li>Kindly pay the conference registration fee online through the given link below.</li>
                        <li>Paper has to be presented in the conference virtually (online) or physically (offline) based on the selected mode by the presenter and paying the applicable registration fee.</li>
                        <li>In case of any additional or error payments made by the candidate, refunds could be processed in not less than ten working days.</li>
                        <li>Kindly take a snapshot of the payment confirmation page while making the payment.</li>
                        <li>Cancellation of registration without any valid reason is not permissible.</li>
                        <li>Registration must be paid and confirmed before the deadline. We may revise our terms and conditions as per the government norms, for example to reflect changes in relevant laws or regulatory requirements or improvements.</li>
                        <li>Authors are advised to share their grievance at <A class="text-secondary" href="mailto:{!!env('APP_EMAIL')!!}">{!!env('APP_EMAIL')!!}</A> and cc to <A class="text-secondary" href="mailto:newgenresearchconsultancy@gmail.com">newgenresearchconsultancy@gmail.com</A> along with the snapshot of the payment confirmation page (obtained while making the payment).</li>
                    </ol>

                    <h5 class="display-7 mt-5">Registration Fee (<span class="text-secondary">Physical Mode</span>):</h5>

                    <p>This fee includes access to Inaugural Session, Keynotes/Invited Lectures, Oral Paper Presentation Sessions, Networking, Conference Lunch and Refreshment, Conference Kit, Participation/Presentation Certificate. The conference is non-residential and delegates are kindly requested to make their own arrangement for accommodation.</p>
                    
                    <h5 class="display-7 mt-5">Registration Fee (<span class="text-secondary">Online Mode</span>):</h5>

                    <p>This fee includes access to Inaugural Session, Keynotes/Invited Lectures, Oral Paper Presentation Sessions in online mode, Participation/Presentation Certificate (through e-mail after the completion of conference).</p>

                    <!-- <p>Registration must be paid and confirmed before the deadline. We may revise our terms and conditions as per the government norms, for example to reflect changes in relevant laws or regulatory requirements or improvements.</p> -->
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>