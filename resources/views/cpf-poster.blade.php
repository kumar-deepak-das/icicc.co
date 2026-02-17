<!DOCTYPE html>
<html lang="en">
    <head>
        @include('inc.head')
    </head>

    <body>

        <header>            
            @include('inc/nav-bar')

            <div class="position-relative">
                <div class="breadcrumb-img">
                    <div class="breadcrumb-overlay"></div>
                    <div class="breadcrumb-slide">
                        <div class="container text-center">
                            <h1 class="text-header  font-weight-bold">CPF Poster</h1>
                            <p class="event-color text-center"><a href="./">Home</a> / CPF Poster</p>
                            @include('inc.banner-text')
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="content-section pt-5 pb-5 pt-xs-50 pb-xs-50">
            <div class="container">

                <h2 class="m-5 text-center font-weight-bold">CPF Poster</h2>

                @include('avalable-soon')

            </div>
        </section>

        @include('inc.footer')

    </body>

</html>