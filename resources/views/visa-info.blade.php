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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Visa Information</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Visa Information</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->
        

        <!-- Committees -->
        <div class="w3l-about-2 pt-5 pb-0">
            <div class="container py-lg-51 1py-md-4 py-2">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                    <h5 class="small-title mb-2">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="title-style">Visa Information</h3>
                </div>
            </div>
        </div>
        
        <!-- Committees End -->
        <section class="content-section  pt-5 pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                @include('avalable-soon')
                <div class="table-responsive">
                </div>
            </div>
        </section>

        @include('inc.footer')
    </body>

</html>