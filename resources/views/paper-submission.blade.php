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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Paper Submission</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Paper Submission</li>
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
                    <h3 class="title-style">Paper Submission</h3>
                </div>
            </div>
        </div>
        <!-- Committees End -->

        <section class="content-section pb-5 1pt-xs-50 pb-xs-50">
            <div class="container 1py-lg-5 1py-md-4 py-2">
                <div class="container py-lg-5 py-md-4 py-2">
                    <div class="row">
                        <div class="col-lg-12 text-justify">
                            <p class="fontsize-1rem">Submitted papers should not have been previously published nor be currently under consideration for publication elsewhere. All submissions will be thoroughly peer-reviewed by experts based on originality, significance and clarity. Only papers presenting novel research results or successful innovative applications will be considered for publication in the conference proceedings. Kindly ensure that your paper is formatted as per Springer Template (not exceeding 12 pages). Short papers (less than 10 pages) may not be considered. The papers can be submitted through Microsoft CMT.</p>
                        </div>
                        <div class="col-lg-12 tabw3-left mt-5 text-center text-primary">
                            
                            <H4 class="my-3 font-weight-bold text-dark">Springer Template for Download</H4>
                            
                            <H5 class="my-3"><A target="_blank" href="https://www.springer.com/gp/computer-science/lncs/conference-proceedings-guidelines">Template Download Links</A></H5>
                            
                            <H5 class="my-3"><A target="_blank" href="{{asset('public/assets/documents/springer-template.doc')}}">Word Format</A></H5>
                            
                            <H5 class="my-3"><A target="_blank" href="{{asset('public/assets/documents/contributed-books.zip')}}">LaTeX Format</A></H5>

                            <H5 class="my-3"><A target="_blank" href="{{env('SUBMISSION_LINK')}}">Click here for submission of paper</A></H5>
                        </div>          
                    </div>
                </div>
            </div>
        </section>

        @include('inc.footer')

    </body>

</html>