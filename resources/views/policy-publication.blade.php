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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Publication Policy</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Publication Policy</li>
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
                <h2 class="display-7 mb-4">Publication Policy</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">

                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Publication Policy</h3>

                    <p>Publication of papers is solely dependent upon the author’s response to queries and proofreading during the production stage. Publishers can decline to publish the conference paper that does not meet their quality or ethical standards during the production stage. Refund of registration fee could not be claimed in such circumstances.</p>

                    <p class="my-2">We do not claim or guarantee that any papers will be indexed in any database. Indexing services evaluate conference papers and independently determine what they will index. The procedures for the same are dynamic and are liable to change from time-to-time.</p>
                    

                    <p>The publication time for the papers received is not fixed. It may take up to 9-10 months from the date of completion of the conference or even more for further processing. The same can also be extended due to unavoidable circumstances or as per the publisher requirements or delayed response by authors to publishers’ queries.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>