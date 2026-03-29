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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Submission Guidelines</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Submission Guidelines</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->

    <!-- Services Start -->
    <div class="container-fluid pb-5 service overflow-hidden">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Submission Guidelines</h2>
            </div>
        </div>

        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title1 pe-3 my-3">Paper Submission has to be made through Microsoft CMT using the following link.</h5>

                    <div class="ms-3">
                        <A class="btn btn-primary" href="{!!env('SUBMISSION_LINK')!!}" target="_blank">Paper Submission Link</A>
                    </div>
                </div>

                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="m-3">
                        <p>All accepted and registered papers under this conference will be submitted to Springer Nature Scopus Indexed Book Series.</p>
                    </div>
                    <div class="m-3">
                        <p>All submissions must comply with the Springer LNNS format:</p>
                        <p>
                            <A class="btn btn-secondary" target="_blank" href="https://www.springer.com/gp/authors-editors/conference-proceedings/conference-proceedings-guidelines"> https://www.springer.com/gp/authors-editors/conference-proceedings/conference-proceedings-guidelines</A>
                        </p>
                   </div>
                   <div class="m-3">
                        <p>Page limit for Camera Ready papers is 10-12 pages. Short papers (less than 10 pages) may not be considered.</p>
                        <p>Before submission, Read the Springer LNNS publication ethics and guidelines<br/><A class="btn btn-secondary" target="_blank"
                            href="https://www.springer.com/de/authors-editors/editors/publishing-ethics-for-journals/4176" target="_blank">https://www.springer.com/de/authors-editors/editors/publishing-ethics-for-journals/4176</A></p>
                        <p>
                        <!-- 
                        <A class="btn btn-secondary" target="_blank" href="ftp://ftp.springernature.com/cs-proceeding/svproc/guidelines/Springer_Guidelines_for_Authors_of_Proceedings.pdf" target="_blank">ftp://ftp.springernature.com/cs-proceeding/svproc/guidelines/Springer_Guidelines_for_Authors_of_Proceedings.pdf</A></p> -->
                    </div>
                </div>

                
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h5 class="sub-title1 pe-3 my-3">Template Download Link</h5>
                    <div class="ms-3">
                        
                        <h6 class="ms-5 py-2"><A class="text-secondary" href="public/assets/doc/Springer-Template-latex.zip" target="_blank"> <i class="fas fa-download"></i> LaTeX Template </A></h5>

                        <H6 class="ms-5 py-2"><A class="text-secondary" href="public/assets/doc/Springer-Template-word.zip" target="_blank"> <i class="fas fa-download"></i> Microsoft Word Template </A></H5>

                    </div>
                </div>   
            </div>
        </div>


         <!-- Declaration Start -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                        <h6>Declaration:</h6>

                        <p class="text-secondary mx-5"> <small>The Microsoft CMT service was used for managing the peer-reviewing process for this conference. This service was provided for free by Microsoft and they bore all expenses, including costs for Azure cloud services as well as for software development and support.</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Declaration End -->

    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>