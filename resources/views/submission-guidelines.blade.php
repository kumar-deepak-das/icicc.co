<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Welcome to FICTA 2025 - Special Sessions</title>
        @include('inc.head')
    </head>

    <body>

        <header>
            <!-- navbar navbar-expand-md navbar-dark fixed-top -->
            
            @include('inc/nav-bar')
            <div class="position-relative">
                <div class="breadcrumb-img">
                    <div class="breadcrumb-overlay"></div>
                    <div class="breadcrumb-slide">
                        <div class="container text-center">
                            <h1 class="text-header  font-weight-bold">Submission Guidelines</h1>
                            <p class="event-color"><a href="./">Home</a> / Submission Guidelines</p>
                            <p class="sub-text-header text-center">FICTA-2025 conference will be conducted in Hybrid mode</p>

                            @include('inc.banner-text')

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="content-section pt-5 pb-5 pt-xs-50 pb-xs-50">
            <div class="container">
                <h2 class="mb-3">Submission Guidelines</h2>
                <div class=row>
                    <div class="col-12 col-md-3 col-lg-3">
                        <img src="{{asset('public/assets/img/springer_logo.jpg')}}" alt="" class="w-100">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                        <p class="fontsize-1rem">Papers may be submitted via the Online Conference Submission System through the
                            following link<br>
                        </p>
                        <div>
                            <!-- <a class="btn btn-info" target="_blank" href="https://forms.gle/LzN5G5razrSf2h6RA">Submit</a> -->
                            <a class="btn btn-info" target="_blank"
                                href="">Submit</a>
                        </div>

                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <img src="{{asset('public/assets/img/springer_logo_2.jpg')}}" alt="" class="w-100">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3"></div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                        <p class="fontsize-1rem">All accepted, presented and registered papers under this conference will be
                            published in <a class="hyper-link" target="_blank"
                                href="https://www.springer.com/series/8767">Springer-Smart
                                Innovation, Systems and Technologies (SIST) Series</a> </p>
                        <!-- <p>All accepted, presented and registered papers under this conference will be published in <a class="hyper-link" target="_blank" href="https://www.springer.com/series/8767">Springer-Smart Innovation, Systems and Technologies (SIST) Series</a> (Approved).  Now indexed by SCOPUS, EI Compendex, INSPEC, WTI Frankfurt eG, zbMATH, Japanese Science and Technology Agency (JST), SCImago, DBLP. All books published in the series are submitted for consideration in the Web of Science.</p> -->
                        <p class="fontsize-1rem">Books published under this series are Indexed by SCOPUS, EI Compendex, INSPEC,
                            WTI Frankfurt eG,
                            zbMATH, Japanese Science and Technology Agency (JST), SCImago, DBLP & Web of Science.</p>
                        <p class="fontsize-1rem">All submissions must comply with the Springer format: <a class="hyper-link"
                                target="_blank"
                                href="https://www.springer.com/gp/computer-science/lncs/conference-proceedings-guidelines">https://www.springer.com/gp/computer-science/lncs/conference-proceedings-guidelines</a>
                        </p>
                        <p class="font-weight-bold fontsize-1rem">Page limit for Camera Ready papers is 10-12 pages. Short
                            papers
                            (less
                            than
                            10
                            pages) may not be considered.</p>
                        <p class="fontsize-1rem">Before submission, <a class="hyper-link" target="_blank"
                                href="https://www.springer.com/gp/authors-editors/conference-proceedings/conference-proceedings-guidelines">click
                                here to read the Springer publication ethics and guidelines.</a></p>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3"><img src="{{asset('public/assets/img/sist.jpeg')}}" alt="" class="w-100"></div>
                    <div class="col-12 col-md-3 col-lg-3"></div>
                </div>

                <hr class="my-3">

                <h2 class="mb-3"><a href="crc">Template Download Link</a></h2>


                

                <A class="text-secondary" href="public/assets/doc/Springer-Template-word.zip">
                    <img src="public/assets/img/logo/word.png" class="mx-5 h-50 hover-red-border" />
                </A>

                <A class="text-secondary" href="public/assets/doc/Springer-Template-latex.zip">
                    <img src="public/assets/img/logo/latex.png" class="mx-5 h-50 hover-red-border" />
                </A>
                
            </div>
        </section>

        @include('inc.footer')

    </body>

</html>