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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Previous Publications</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Previous Publications</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Features Start -->
    <div class="container-fluid features overflow-hidden py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Previous Publications Of {!!env('APP_NAME')!!}</h2>
            </div>
            <div class="row g-4 justify-content-center1 text-center1">
                
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2024_v2.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/9789819612666" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2024</h5>
                                <h6 class="text-secondary">(Vol-II)</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2024_v1.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/9789819612635" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2024</h5>
                                <h6 class="text-secondary">(Vol-I)</h6>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2022.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/10.1007/978-981-99-1588-0" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2022</h5>
                                <!-- <h6 class="text-secondary">(2<sup>nd</sup> Edition)</h6> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2021.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/10.1007/978-981-19-1559-8" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2021</h5>
                                <!-- <h6 class="text-secondary">(3<sup>rd</sup> Edition)</h6> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2020.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/10.1007/978-981-16-0980-0" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2020</h5>
                                <!-- <h6 class="text-secondary">(3<sup>rd</sup> Edition)</h6> -->
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2019.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://www.springer.com/in/book/9789811510830" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2019</h5>
                                <!-- <h6 class="text-secondary">(4<sup>th</sup> Edition)</h6> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2017.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/10.1007/978-981-10-7245-1" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2017</h5>
                                <!-- <h6 class="text-secondary">(5<sup>th</sup> Edition, Vol-1)</h6> -->
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-3">
                        <div class="feature-icon p-0 mb-4">
                            <img src="public/assets/img/publications/2016.webp" class="w-100">
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <a  href="https://link.springer.com/book/10.1007/978-981-10-2035-3" target="_blank">
                                <h5 class="mb-1">{!!env('APP_NAME')!!}-2016</h5>
                                <!-- <h6 class="text-secondary">(5<sup>th</sup> Edition, Vol-4)</h6> -->
                            </a>
                        </div>
                    </div>
                </div>               
                
            </div>

        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>