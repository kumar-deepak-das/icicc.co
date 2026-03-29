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
    <!-- <div class="container-fluid bg-breadcrumb d-none1">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Gallery</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Gallery</li>
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
                <h2 class="display-7 mb-4">Gallery</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <h5 class="sub-title pe-3">Glimpses of SCI-2025, Malaysia</h5>
                </div>            

                @for($i=1;$i<28;$i++)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="public/assets/img/gallery/2025/image{{$i}}.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <h5 class="sub-title pe-3">Glimpses of SCI-2024, Visakhapatnam, India</h5>
                </div>
                @for($i=1;$i<19;$i++)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="public/assets/img/gallery/2024/img{{$i}}.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <h5 class="sub-title pe-3">Glimpses of SCI-2018, Vijayawada, India</h5>
                </div>
                @for($i=1;$i<24;$i++)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="public/assets/img/gallery/2018/image ({{$i}}).jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                    </div>
                </div>
                @endfor
            </div>

        </div>
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                    <h5 class="sub-title pe-3">Glimpses of SCI-2017, Visakhapatnam India</h5>
                </div>
                @for($i=1;$i<9;$i++)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="public/assets/img/gallery/2017/img{{$i}}.jpg" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                    </div>
                </div>
                @endfor
            </div>

        </div>
    </div>
    <!-- About End -->
        
    @include('inc.footer')
    @include('inc.script')

</body>

    </html>