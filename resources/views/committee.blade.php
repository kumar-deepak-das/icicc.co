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
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Committees</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="./">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Committees</li>
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
                <h3 class="title-style">Committees</h3>
            </div>
        </div>
    </div>
    <!-- Committees End -->

    

    <!-- Committee -->
    <section class="w3l-about-2">
        <div class="container py-md-5">
            <div class="row align-items-center">
                @foreach(Config::get('app.committees') as $c)
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">{!!$c['name']!!}:</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                         @foreach($c['members'] as $m)
                        <li class="py-1"><i class="far fa-check-square"></i>{!!$m!!}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Committee End -->



    @include('inc.footer')

    @include('inc.script')

</body>

</html>