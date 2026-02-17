<!doctype html>
<html lang="en">

<head>
    @include('inc.head')
</head>

<body>
    
    @include('inc.nav-bar')

    <!-- banner section -->
    <div class="slider">
        <div class="slide current">
            <div class="bg-layer">
                <div class="content">
                    <h3><A href="$about-icicc">{!!env('CONF_NAME')!!}</A></h3>
                    <h6>{!!env('CONF_FULL_NAME')!!}</h6>
                    <p class="pt-3"><strong>Date:</strong> <A href="./important-dates">{!!env('CONF_DATE')!!}</A></p>
                    <!-- <a href="#about-icicc" class="btn btn-style mt-4">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    <h3><A href="$about-icicc">{!!env('CONF_NAME')!!}</A></h3>
                    <h6>{!!env('CONF_FULL_NAME')!!}</h6>
                    <p><strong>Organised By:</strong> <a href="{!!env('CONF_HOST_URL')!!}">{!!env('CONF_HOST')!!}</a></p>
                    <p><strong>Venue:</strong> <a href="{!!env('CONF_VENUE_URL')!!}">{!!env('CONF_VENUE')!!}</a></p>
                    <!-- <a href="#about_host" class="btn btn-style mt-4">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    <h3><A href="$about-icicc">{!!env('CONF_NAME')!!}</A></h3>
                    <h6>{!!env('CONF_FULL_NAME')!!}</h6>
                    <p class="pt-3"><strong>Date:</strong> <A href="./important-dates">{!!env('CONF_DATE')!!}</A></p>
                    <!-- <a href="#about-icicc" class="btn btn-style mt-4">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="bg-layer">
                <div class="content">
                    <h3><A href="$about-icicc">{!!env('CONF_NAME')!!}</A></h3>
                    <h6>{!!env('CONF_FULL_NAME')!!}</h6>
                    <p><strong>Organised By:</strong> <a href="{!!env('CONF_HOST_URL')!!}">{!!env('CONF_HOST')!!}</a></p>
                    <p><strong>Venue:</strong> <a href="{!!env('CONF_VENUE_URL')!!}">{!!env('CONF_VENUE')!!}</a></p>
                    <!-- <a href="#about_host" class="btn btn-style mt-4">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button id="prev"><i class="fas fa-arrow-left"></i></button>
        <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>
    <!-- //banner section -->

    <!-- Partner section -->
    <section class="w3l-team py-5" id="team">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:900px;">
                <h5 class="small-title mb-2">{!!env('CONF_NAME')!!}</h5>
                <h3 class="title-style1">{!!env('CONF_FULL_NAME')!!}</h3>
                <h4 class="text-theme mt-3">{!!env('CONF_DATE')!!}</h4>
            </div>

            <div class="row text-center">
                <div class="team-info col-md-12">
                    <h3 class="title-style1">Organised By</H3>
                    <!-- <div class="column position-relative"> -->
                        <a href="{!!env('CONF_HOST_VENUE')!!}">
                            <img loading="lazy" src="public/assets/images/logo/logo-srusti.jpg" alt="" class="img-fluid m-3" />
                        </a>
                    <!-- </div> -->
                    <h5><a target="_blank" href="{!!env('CONF_HOST_URL')!!}">{!!env('CONF_HOST')!!}, {!!env('CONF_HOST_ADD')!!}</a></h5>
                </div>
            </div>

            <div class="row text-center mt-5">

                <h3 class="title-style1">In association with</H3>

                <div class="team-info col-md-4 col-61">
                    <a href="{!!env('CONF_HOST_VENUE')!!}">
                        <img loading="lazy" src="public/assets/images/logo/logo-springer.png" alt="" class="img-fluid w-75 m-3" />
                    </a>
                    <h6><a target="_blank" href="https://www.openrag.in/">Springer Nature as Publication Partner</a></h6>
                </div>

                <div class="team-info col-md-4 col-61">
                    <a href="{!!env('CONF_HOST_VENUE')!!}" target="_blank">
                        <img loading="lazy" src="public/assets/images/logo/logo-openrag.png" alt="" class="img-fluid w-75 m-3" />
                    </a>
                    <h6><a target="_blank" href="https://www.openrag.in/">OpenRAG.in as AI Partner</a></h6>
                </div>

                <div class="team-info col-md-4 col-61">
                    <a href="{!!env('CONF_HOST_VENUE')!!}">
                        <img loading="lazy" src="public/assets/images/logo/logo-newgen.png" alt="" class="img-fluid w-75 m-3" />
                    </a>
                    <h6><a target="_blank" href="https://www.openrag.in/">NewGen Research Consultancy as Managing Partner</a></h6>
                </div>

            </div>


            <!-- <div class="row text-center mt-5">
                <div class="team-info col-md-12">
                    <h3 class="title-style1">Venue</H3>
                    <a href="{!!env('CONF_HOST_VENUE_URL')!!}">
                        <img loading="lazy" src="public/assets/images/logo/logo-swosti.jpg" alt="" class="img-fluid m-3" />
                    </a>
                    <h5><a target="_blank" href="{!!env('CONF_VENUE_URL')!!}">{!!env('CONF_VENUE')!!}</a></h5>
                </div>
            </div> -->

        </div>
    </section>
    <!-- Partner section -->

    <!-- About Start -->
    <section class="w3l-servicesblock py-5" id="about-icicc">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h5 class="small-title mb-2">About us</h5>
                    <h3 class="title-style1">{!!env('CONF_NAME')!!}</h3>
                </div>
                <div class="col-lg-7">
                    <p class="mt-3">The <b>{!!env('CONF_FULL_NAME')!!}</b> (<b>{!!env('CONF_NAME')!!}</b>), a Scopus-indexed flagship forum, aims to provide a globally unified platform for researchers, academicians, industry practitioners, and policy thinkers to deliberate on cutting-edge, multi-disciplinary advances in intelligent computing, communication technologies, and smart systems. The conference envisions fostering innovation at the intersection of computing, electronics, management sciences, and sustainability, enabling transformative solutions for complex real-world challenges.</p>
                    <p class="mt-3">The central theme of <b>{!!env('CONF_NAME')!!}</b> emphasizes intelligent, data-driven, and sustainable paradigms that integrate system knowledge, artificial intelligence, analytics, and optimization to support resilient decision-making, efficient resource utilization, and responsible technological growth. Special focus is placed on the application of intelligent computing in management and organizational domains, including smart business systems, digital governance, financial technologies, supply chain intelligence, human resource analytics, strategic decision support, and sustainable enterprise transformation.</p>
                    <p class="mt-3">The scope of the conference is further extended to the deployment of emerging computational models, knowledge engineering techniques, and intelligent communication frameworks that optimize solutions across diverse disciplines such as Computer Science and Engineering, Electronics and Communication Engineering, Electrical and Electronics Engineering, Electronics and Instrumentation Engineering, as well as technology-enabled management practices and sustainability-driven systems. Contributions addressing green computing, sustainable innovation, smart cities, energy-aware systems, circular economy models, and ESG-oriented intelligent solutions are particularly encouraged.</p>
                </div>
                <div class="col-lg-5 offset-lg-0 text-center mt-lg-0 1mt-5 position-relative">
                    <img loading="lazy" loading="lazy" src="public/assets/images/about/about-icicc.png" alt="" class="img-fluid radius-image w1-75">
                    <!-- <div class="imginfo__box">
                        <p>9<sup>th</sup> Edition of</p>
                        <p><b>{!!env('CONF_NAME')!!}</b></p>
                    </div> -->
                </div>

                <div class="col-lg-12">
                    <p class="mt-3">The proceedings of <b>{!!env('CONF_NAME')!!}</b> aim to publish high-quality, original, and unpublished research that advances theory, methodology, and applications aligned with the conference themes. <b>{!!env('CONF_NAME')!!}</b> is scheduled to be held on <b>{!!env('CONF_DATE')!!}</b> at Bhubaneswar, Odisha , India India, providing an intellectually stimulating environment for knowledge exchange, collaboration, and future-ready innovation.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

     <!-- content block -->
    <section class="w3l-content-1 bg-dark py-5">
        <div class="container py-md-5 py-sm-4 py-2">
            <div class="row py-4">
                <div class="col-md-8">
                    <h1 class="title-style text-white">{!!env('CONF_NAME')!!}</h1>
                    <h4 class="mt-4 text-light">{!!env('CONF_FULL_NAME')!!}</h4>
                    <a href="{!!env('SUBMISSION_LINK')!!}" class="btn btn-style mt-md-5 mt-4">Submit Your Paper</a>
                </div>

                <div class="col-lg-4">
                    <img loading="lazy" loading="lazy" class="img-fluid" src="public/assets/images/logo/logo-icicc-1.png" />
                </div>
                <div class="col-md-12">
                    <h6 class="mt-4 text-white" style="text-align: justify;">The Microsoft CMT service was used for managing the peer-reviewing process for this conference. This service was provided for free by Microsoft and they bore all expenses, including costs for Azure cloud services as well as for software development and support.</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- //content block -->

    <!-- About Start -->
    <section class="w3l-servicesblock1 py-5" id="about_host">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h5 class="small-title mb-2">About SRUSTI</h5>
                    <h3 class="title-style1">{!!env('CONF_HOST')!!}</h3>
                </div>
                
                <div class="col-lg-7">
                    <p class="mt-3">Srusti Academy of Management & Technology (Autonomous), Bhubaneswar, has established itself as a prominent centre for management and IT education in Eastern India over the last 23 years. Consistently recognized among leading B-Schools by reputed ranking agencies, the institute has been accredited with an “A” Grade by three cycles of the National Assessment & Accreditation Council (NAAC) since 2011, and its MBA programme holds accreditation for two cycles of the National Board of Accreditation (NBA). The institute was conferred autonomous status on the recommendation of the University Grants Commission (UGC).</p>

                    <p class="mt-3">The institute is an institutional life member of the All-India Management Association (AIMA) and the Association of Indian Management Schools (AIMS), and an active member of professional bodies such as CMAI and NHRD. In The Week B-School Ranking Survey 2022, Srusti Academy was ranked 161st nationally and 15th in Eastern India.</p>
                </div>
                <div class="col-lg-5 offset-lg-0 text-end mt-lg1-0 mt-5 position-relative">
                    <img loading="lazy" src="public/assets/images/about/about-srusti.jpg" alt="" class="img-fluid radius-image">
                    <!-- <div class="imginfo__box">
                        <p>Our</p>
                        <h6 class="imginfo__title1">Hosting Partner</h6>
                    </div> -->
                </div>
                <div class="col-lg-12">
                    <p class="mt-3 ">For more information about {!!env('CONF_HOST')!!} please visit the site: <A href="{!!env('CONF_HOST_URL')!!}" target="_blank">{!!env('CONF_HOST_URL')!!}</A></p>
                </div>

            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- About Start -->
    <section class="w3l-homeblock3 py-5" id="about_bput">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h5 class="small-title mb-2">About BPUT</h5>
                    <h3 class="title-style1">Biju Patnaik University of Technology</h3>
                </div>

                <div class="col-lg-7">
                    <p class="mt-3">As the College is affiliated to Biju Patnaik University of Technology, the present Hon’ble Vice Chancellor Prof. Amiya Kumar Rath is taking all futuristic initiatives in BPUT level which has direct impact and benefits in the institution level. The Key initiatives since his joining are Hosting of Sports meet, Industry Academia Conclave, promoting Start up and Incubation, Seminar/work shop on NBA,NAAC preparedness ,Human Values & Indian Knowledge system (IKS), Several FDP programs, Project exhibition & Presentation in institutions, conducting several Hackathons and many more. He is working hard doing several reforms in the university level to make the University a global standard so that all stake holders including institutions, students and faculty members will be benefited.</p>

                    <p class="mt-3 ">For more information about BPUT University please visit the site: <A href="https://www.bput.ac.in/" target="_blank">https://www.bput.ac.in/</A></p>
                </div>
                <div class="col-lg-5 offset-lg-0 text-end mt-lg1-0 position-relative">
                    <img loading="lazy" src="public/assets/images/about/about-bput.png" alt="" class="img-fluid radius-image">
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- About Start -->
    <section class="w3l-servicesblock1 py-5" id="about_openrag">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h5 class="small-title mb-2">About OpenRAG</h5>
                    <h3 class="title-style1">OpenRAG the AI Partner</h3>
                    <p class="mt-3"><b>OpenRAG</b>, is a trust infrastructure for AI that verifies whether an AI-generated answer is actually supported by its source context, highlights risky or contradictory claims, and refuses to blindly endorse hallucinations. As AI systems move into research, enterprise, finance, and policy decisions, the cost of incorrect or overconfident answers becomes critical. OpenRAG works as a model-agnostic verification layer that plugs into any LLM pipeline, API, or application. It breaks answers into claims, checks them against evidence, and generates human-readable trust reports with confidence and risk signals. Unlike chatbots or UI wrappers, OpenRAG is pure infrastructure designed for scale and integration. Users can access it via SDKs, APIs, web interfaces, or browser extensions. OpenRAG aims to become the default verification standard for AI-generated content, similar to how SSL became essential for web security.</p>

                    <p class="mt-3 ">For more information about OpenRAG please visit the site: <A href="https://www.openrag.in" target="_blank">https://www.openrag.in</A></p>
                </div>
                <div class="col-lg-5 offset-lg-0 text-end mt-lg1-0 mt-5 position-relative">
                    <img loading="lazy" src="public/assets/images/logo/logo-openrag.png" alt="" class="img-fluid radius-image">
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->


    <!-- Important Date -->
    <div class="w3l-homeblock3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">Important Dtaes</h5>
                <h3 class="title-style1">{!!env('CONF_NAME')!!}</h3>
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