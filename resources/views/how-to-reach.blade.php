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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">How to Reach</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">How to Reach</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->
    
        <!-- Services Start -->
        <div class="container service py-5 overflow-hidden">
            <div class="container">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                    </div>
                    <h2 class="display-7 mb-4">How to Reach Conference Venue</h2>
                </div>
            </div>
            <div class="container ">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInRight" data-wow-delay="0.1s">

                        <h5 class="display-7">Venue</h5>
                        <h6 class="ms-3 text-secondary">{!!env('CONF_VENUE')!!}</h6>

                        <h5 class="display-7 mt-4">Address</h5>
                        <h6 class="ms-3 text-secondary">{!!env('CONF_HOST_ADD')!!}</h6>

                    </div>
                    <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.6330370088317!2d85.80485347493446!3d20.34754201082767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1908e1e48a6f0f%3A0xd5d1d26ade19d88f!2sSrusti%20Academy%20of%20Management%20and%20Technology!5e1!3m2!1sen!2sin!4v1771293735842!5m2!1sen!2sin" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    
                       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.2975067070074!2d78.37137229999999!3d17.5269967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8defd4fe2b81%3A0x64cfbb18950c8603!2sBVRIT%20Hyderabad%20College%20of%20Engineering%20for%20Women!5e1!3m2!1sen!2sin!4v1773505969112!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                      -->


                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>