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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Conference Schedule</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Conference Schedule</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- //inner banner -->

        <section class="content-section  pt-5 pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                @include('avalable-soon')
            </div>
        </section>

        @include('inc.footer')

    </body>

</html>