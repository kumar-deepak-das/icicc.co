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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Previous Publications</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Previous Publicationsr</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        
        <section class="w3l-team py-5" id="team">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">{!!env('CONF_NAME')!!}</h5>
                <h3 class="title-style">Our Publications</h3>
            </div>
            <div class="row text-center">
                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/9789819612666"><img src="public/assets/images/publications/2024_v2.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/9789819612666">{!!env('APP_NAME')!!}-2024</A></h4>
                    <h4>Vol-II</h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/9789819612635"><img src="public/assets/images/publications/2024_v1.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/9789819612635">{!!env('APP_NAME')!!}-2024</A></h4>
                    <h4>Vol-I</h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/10.1007/978-981-99-1588-0"><img src="public/assets/images/publications/2022.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/10.1007/978-981-99-1588-0">{!!env('APP_NAME')!!}-2022</A></h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/10.1007/978-981-19-1559-8"><img src="public/assets/images/publications/2021.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/10.1007/978-981-19-1559-8">{!!env('APP_NAME')!!}-2021</A></h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/10.1007/978-981-16-0980-0"><img src="public/assets/images/publications/2020.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/10.1007/978-981-16-0980-0">{!!env('APP_NAME')!!}-2020</A></h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://www.springer.com/in/book/9789811510830"><img src="public/assets/images/publications/2019.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://www.springer.com/in/book/9789811510830">{!!env('APP_NAME')!!}-2019</A></h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/10.1007/978-981-10-7245-1"><img src="public/assets/images/publications/2017.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/10.1007/978-981-10-7245-1">{!!env('APP_NAME')!!}-2017</A></h4>
                </div>

                <div class="team-info col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="column position-relative mt-5">
                        <A href="https://link.springer.com/book/10.1007/978-981-10-2035-3"><img src="public/assets/images/publications/2016.webp" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><A href="https://link.springer.com/book/10.1007/978-981-10-2035-3">{!!env('APP_NAME')!!}-2016</A></h4>
                </div>

            </div>
        </div>
    </section>

        @include('inc.footer')

    </body>

</html>