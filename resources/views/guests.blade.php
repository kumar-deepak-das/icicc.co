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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Guests</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Guests</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->
    
    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Guests</h2>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12 py-5 wow fadeInUp" data-wow-delay="0.3s">
                    @include('inc.avalable-soon')
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>