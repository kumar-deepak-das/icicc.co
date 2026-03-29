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
            <h2 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Committees</h2>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.1s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Committees</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->
    
    <!-- Services Start -->
    <div class="container-fluid my-5 service overflow-hidden">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Committees</h2>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row g-5">

                @foreach(Config::get('app.committees') as $c)
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="sub-title pe-3 my-3">{!!$c['name']!!}</h4>
                    <div class="ms-3">
                        @foreach($c['members'] as $m)
                        <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-3"></i>{!!$m!!}</p>
                        @endforeach
                    </div>
                </div>       
                @endforeach


            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>