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
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Important Dates</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->




    <!-- Important Date -->
    <div class="w3l-homeblock3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">Important Dtaes</h5>
                <h3 class="title-style">{!!env('CONF_NAME')!!}</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="top-pic">
                        @include('inc.important-date')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Important Date End -->


    @include('inc.footer')

    @include('inc.script')

</body>

</html>