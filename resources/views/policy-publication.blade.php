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
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Publication Policy</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Publication Policy</li>
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
                    <h3 class="title-style">Publication Policies</h3>
                </div>
            </div>
        </div>
        
        <section class="content-section pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                <div class="col-lg-12">

                    <p>Publication of papers is solely dependent upon the author’s response to queries and proofreading during the production stage. Publishers can decline to publish the conference paper that does not meet their quality or ethical standards during the production stage. Refund of registration fee could not be claimed in such circumstances.</p>

                    <p>We do not claim or guarantee that any papers will be indexed in any database. Indexing services evaluate conference papers and independently determine what they will index. The procedures for the same are dynamic and are liable to change from time-to-time.</p>

                    <p>The publication time for the papers received is not fixed. It may take up to 9-10 months from the date of completion of the conference or even more for further processing. The same can also be extended due to unavoidable circumstances or as per the publisher requirements or delayed response by authors to publishers’ queries.</p>

                </div>             
            </div>
        </section>

        @include('inc.footer')
    </body>

</html>