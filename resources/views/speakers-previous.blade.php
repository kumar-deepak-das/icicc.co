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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Past Keynote Speakers, Guests and Session Chairs</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Past Keynote Speakers, Guests and Session Chairs</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->

    <!-- Countries We Offer Start -->
    <div class="container-fluid country overflow-hidden py-5">
        <div class="container pt-5">
            <div class="section-title text-center wow fadeInUp mb-5 pb-5" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Past Keynote Speakers & Guests</h2>
            </div>
        </div>

        <div class="container pb-5">            
            <div class="row g-4 text-center">
                @php
                    $data = Config::get('app.past-speakers');
                    usort($data, function($a, $b) {
                        return $a['name'] <=> $b['name']; // Sorts by 'name' in ascending order
                    });

                @endphp
                @foreach($data as $s)
                <div class="col-lg-3 col-md-3 col-sm-6 my-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s"> 
                    <div class="country-item my-3">
                        <div class="rounded overflow-hidden bg-light" style="height: 300px">
                            <H6 class="text-secondary" style="margin-top: 120px;">{!!$s['init']!!} {!!$s['name']!!}</H6>
                            <p class="mx-3 text-primary text-center">{!!$s['desg']!!}</p>
                        </div>
                        <div class="country-flag" style="height: 150px; width: 150px">
                            <img src="public/assets/img/speakers/past-speakers/{!!$s['image']!!}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>