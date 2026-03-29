<!DOCTYPE html>
<html lang="en">

    <head>
        @include('inc.head')
    </head>

    <body>

        @include('inc.spinner')

        @include('inc.nav-bar-sm')

        @include('inc.content-top')
        
        @include('inc.nav-bar-lg')

        @include('inc.marquee')
        
        @include('inc.carousel')

        <div class="container-fluid service overflow-hidden">
            <div class="container py-5">
                <div class="section-title text-center mb-5">
                    <div class="sub-style wow fadeInDown" data-wow-delay="0.1s">
                        <h1 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h1>
                    </div>
                    <h4 class="display-7 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        (Will be Conducted in Hybrid Mode)
                    </h4>


                    <div class="row gy-4 align-items-center">

                        <div class="col-md-6">
                            <div class="bg-light text-center rounded py-2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="mb-2">
                                    In Physical Mode
                                </div>
                                <h5 class="display-51 fw-bold mb-2 text-primary">
                                    <i class="fas fa-calendar-alt fa-1x text-primary"></i> {!!env('CONF_DAY1')!!}
                                </h5>
                                <h6 class="display-51 fw-bold text-center m-2" style="min-height: 110px;">
                                    <img loading="lazy" src="public/assets/img/icon/location1.gif" />
                                    <br/>
                                    <A href="{!!env('CONF_VENUE_MAP')!!}" target="_blank">
                                    {!!env('CONF_HOST')!!}, {!!env('CONF_HOST_ADD')!!}</A>
                                </h6>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bg-light text-center rounded py-2 wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="mb-2">
                                    In Online Mode
                                </div>
                                <h5 class="display-51 fw-bold mb-2 text-primary">
                                    <i class="fas fa-calendar-alt fa-1x text-primary"></i> {!!env('CONF_DAY2')!!}
                                </h5>
                                <h6 class="display-51 fw-bold  m-2" style="min-height: 120px;">
                                    <img loading="lazy" src="public/assets/img/icon/google-meet.gif"  style="height: 45px;" />
                                    <p class="text-center text-secondary">Google Meet</p>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Start -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="sub-title pe-3">About {!!env('APP_NAME')!!}</h5>
                        <h2 class="display-7">{!!env('CONF_NAME')!!}</h2>
                    </div>

                    <div class="col-md-7 wow fadeInUp" data-wow-delay="0.1s">
                        <p>The <b>9<sup>th</sup> International Conference on Intelligent Computing and Communication</b> (<b>ICICC-2026</b>), a Scopus-indexed flagship forum, aims to provide a globally unified platform for researchers, academicians, industry practitioners, and policy thinkers to deliberate on cutting-edge, multi-disciplinary advances in intelligent computing, communication technologies, and smart systems. The conference envisions fostering innovation at the intersection of computing, electronics, management sciences, and sustainability, enabling transformative solutions for complex real-world challenges.</p>
                        <p>The central theme of <b>ICICC-2026</b> emphasizes intelligent, data-driven, and sustainable paradigms that integrate system knowledge, artificial intelligence, analytics, and optimization to support resilient decision-making, efficient resource utilization, and responsible technological growth. Special focus is placed on the application of intelligent computing in management and organizational domains, including smart business systems, digital governance, financial technologies, supply chain intelligence, human resource analytics, strategic decision support, and sustainable enterprise transformation.</p>
                        <p>The scope of the conference is further extended to the deployment of emerging computational models, knowledge engineering techniques, and intelligent communication frameworks that optimize solutions across diverse disciplines such as Computer Science and Engineering, Electronics and Communication Engineering, Electrical and Electronics Engineering, Electronics and Instrumentation Engineering, as well as technology-enabled management practices and sustainability-driven systems. Contributions addressing green computing, sustainable innovation, smart cities, energy-aware systems, circular economy models, and ESG-oriented intelligent solutions are particularly encouraged.</p>

                    </div>

                    <div class="col-md-5 px-5 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <img loading="lazy" src="public/assets/img/about/about-icicc.png" class="w-100">
                    </div> 

                    <div class="col-md-12 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                         <p class="mt-3">The proceedings of <b>ICICC-2026</b> aim to publish high-quality, original, and unpublished research that advances theory, methodology, and applications aligned with the conference themes. <b>ICICC-2026</b> is scheduled to be held on <b>30<sup>th</sup> November - 1<sup>st</sup> December, 2026</b> at Bhubaneswar, Odisha , India India, providing an intellectually stimulating environment for knowledge exchange, collaboration, and future-ready innovation.</p>
                    </div>


                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-secondary">Submitted papers must be original, unpublished, and not under consideration elsewhere. All manuscripts will undergo a rigorous peer review process, and accepted papers must be registered to be included in the final proceedings. All accepted and registered papers shall be published in SPRINGER SCOPUS indexed book series.</p>
                    </div>


                    <div class="col-md-12 mt-0 wow fadeInUp" data-wow-delay="0.1s">

                        <p>All accepted and registered papers will be published the prestigious Lecture Notes in Networks and Systems (LNNS) series by Springer. The LNNS series is a renowned resource for researchers, and publication within it will ensure wide dissemination of the valuable findings presented at our conference. The details of LNNS are available at:<br/>
                            <a href="https://www.springer.com/series/15179">https://www.springer.com/series/15179</a></p>

                    </div>
                </div>
            </div>
        </div>
        <!-- Scope End -->


        <!-- Paper Submission -->
        <div class="container-fluid testimonial overflow-hidden bg-breadcrumb">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-md-8 mt-0 wow fadeInLeft" data-wow-delay="0.1s">
                        <H1 class="text-white">{!!env('CONF_NAME')!!}</H1>
                        <H4 class="text-white">{!!env('CONF_FULL_NAME')!!}</H4>
                        <br>
                        <A class="btn btn-primary py-3 px-5" href="{!!env('SUBMISSION_LINK')!!}" target="_blank">Submit Your Paper</A>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <img loading="lazy" src="public/assets/img/logo/logo-icicc.png" class="w-75">
                    </div>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class=" text-white">Declaration:</h6>

                        <p class="text-white mx-5"> <small>The Microsoft CMT service was used for managing the peer-reviewing process for this conference. This service was provided for free by Microsoft and they bore all expenses, including costs for Azure cloud services as well as for software development and support.</small></p>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Paper Submission End -->

        <!-- Countries Start -->
        <div class="container-fluid d-none">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInLeft" data-wow-delay="0.1s">
                        <h6 class="sub-title pe-3">{!!env('APP_NAME')!!} Global Participation</h6>
                        <h2 class="display-7 mb-4">Participating Countries</h2>
                    </div>
                </div>                

                <div class="row g-4 pt-3">
                    @php 
                        $countries = Config::get('app.countries');
                        sort($countries);
                    @endphp

                    @foreach( $countries as $c)
                    <div class="col-lg-1 col-md-2 col-3 mb-5 mb-xl-0">
                        <div class="country-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="country-flag">
                                <img loading="lazy" src="public/assets/img/countries/{{$c}}.png"  alt="Image" class="img-thumbnail rounded-circle1 border">
                            </div>
                            <div class="country-name text-center">
                                <a href="#" class="text-primary"><small><small>{{$c}}</small></small></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Countries End -->

        <!-- About Host Start -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="sub-title pe-3">About Srusti</h6>
                        <h2 class="display-7 mb-4">{!!env('CONF_HOST')!!}</h2>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <p>Srusti Academy of Management & Technology (Autonomous), Bhubaneswar, has established itself as a prominent centre for management and IT education in Eastern India over the last 23 years. Consistently recognized among leading B-Schools by reputed ranking agencies, the institute has been accredited with an “A” Grade by three cycles of the National Assessment & Accreditation Council (NAAC) since 2011, and its MBA programme holds accreditation for two cycles of the National Board of Accreditation (NBA). The institute was conferred autonomous status on the recommendation of the University Grants Commission (UGC).</P>

                        <p>The institute is an institutional life member of the All-India Management Association (AIMA) and the Association of Indian Management Schools (AIMS), and an active member of professional bodies such as CMAI and NHRD. In The Week B-School Ranking Survey 2022, Srusti Academy was ranked 161st nationally and 15th in Eastern India.</p>

                    </div>
                    <div class="col-md-6 text-center wow fadeInUp px-5" data-wow-delay="0.1s">
                        <img src="{{asset('public/assets/img/about/about-srusti.jpg')}}" class="img-responsive w-100">
                    </div>

                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">   

                        <p class="text-start">For more information about <b>{!!env('CONF_HOST')!!}</b>, please visit the site: <A class="text-secondary" href="{!!env('CONF_HOST_WEBSITE')!!}" target="_blank">{!!env('CONF_HOST_WEBSITE')!!}</A></p>
                    </div>

                    <div class="col-md-12 px-5 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe 
                         width="100%" style="aspect-ratio:16/9;" src="https://www.youtube.com/embed/flequYLlUwk?playlist=flequYLlUwk,NVRDWDRUoDc&loop=1&autoplay=1&mute=1"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Host End -->

        <!-- Feature Photo Slider -->
        <div class="container-fluid testimonial overflow-hidden bg-breadcrumb pt-3">
            <div class="container">       
                <H2 class="text-center text-white py-3">SRUSTI Image Gallery</H1>             
                <div class="owl-carousel testimonial-carousel bg-white1 wow zoomInDown" data-wow-delay="0.2s">
                @for($i=1;$i<5;$i+=2)
                    <div class="testimonial-item p-3">
                        <div class="d-flex row" style1="height: 330px;">
                            <div class="col-6">
                                <img loading="lazy" class="img-thumbnail w-100 border border-5 border-primary" src="public/assets/img/facilities/img{{$i}}.jpg" alt="img">
                            </div>
                            <div class="col-6">
                                <img loading="lazy" class="img-thumbnail w-100 border border-5 border-primary" src="public/assets/img/facilities/img{{$i+1}}.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                @endfor
                </div>
            </div>
        </div>
        <!-- Feature Photo Slider End -->

        <!-- About BPUT Start-->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="sub-title pe-3">About BPUT</h6>
                        <h2 class="display-7">Biju Patnaik University of Technology</h2>
                    </div>
                    <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="fontsize-1rem">As the College is affiliated to Biju Patnaik University of Technology, the present Hon’ble Vice Chancellor Prof. Amiya Kumar Rath is taking all futuristic initiatives in BPUT level which has direct impact and benefits in the institution level. The Key initiatives since his joining are Hosting of Sports meet, Industry Academia Conclave, promoting Start up and Incubation, Seminar/work shop on NBA,NAAC preparedness ,Human Values & Indian Knowledge system (IKS), Several FDP programs, Project exhibition & Presentation in institutions, conducting several Hackathons and many more. He is working hard doing several reforms in the university level to make the University a global standard so that all stake holders including institutions, students and faculty members will be benefited.</p>

                        <p class="text-start">For more information about BPUT please visit the site: <A class="text-secondary" href="https://www.bput.ac.in/" target="_blank">https://www.bput.ac.in</A></p>
                    </div>
                    <div class="col-md-4 wow fadeInUp text-center" data-wow-delay="0.5s">
                        <img loading="lazy" src="public/assets/img/about/about-bput.png" class="w-100 border-secondary">
                    </div>
                </div>
            </div>
        </div>
        <!-- About OpenRAG End -->

        <!-- About OpenRAG Start-->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="sub-title pe-3">About OpenRAG</h6>
                        <h2 class="display-7">OpenRAG.AI</h2>
                    </div>
                    <div class="col-md-9 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="fontsize-1rem"><b>OpenRAG</b>, is a trust infrastructure for AI that verifies whether an AI-generated answer is actually supported by its source context, highlights risky or contradictory claims, and refuses to blindly endorse hallucinations. As AI systems move into research, enterprise, finance, and policy decisions, the cost of incorrect or overconfident answers becomes critical. OpenRAG works as a model-agnostic verification layer that plugs into any LLM pipeline, API, or application. It breaks answers into claims, checks them against evidence, and generates human-readable trust reports with confidence and risk signals. Unlike chatbots or UI wrappers, OpenRAG is pure infrastructure designed for scale and integration. Users can access it via SDKs, APIs, web interfaces, or browser extensions. OpenRAG aims to become the default verification standard for AI-generated content, similar to how SSL became essential for web security.</p>

                        <p class="text-start">For more information about OpenRAG please visit the site: <A class="text-secondary" href="https://www.openrag.in" target="_blank">https://www.openrag.in</A></p>
                    </div>
                    <div class="col-md-3 wow fadeInUp text-center" data-wow-delay="0.5s">
                        <img loading="lazy" src="public/assets/img/logo/logo-openrag-square.png" class="w-100 border-secondary">
                    </div>
                </div>
            </div>
        </div>
        <!-- About OpenRAG End -->
        

        <!-- About Newgen Start -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="sub-title pe-3">About NRC</h6>
                        <h2 class="display-7">Newgen Research Consultancy</h2>
                    </div>
                    <div class="col-md-9 wow fadeInUp" data-wow-delay="0.1s">
                        <p><b>Newgen Research Consultancy</b> (Empowering Research, Innovation, and Startups) Newgen Research Consultancy is a dynamic IT consultancy firm committed to fostering research excellence, academic collaboration, and startup growth. We specialize in organizing international conferences, skill development workshops, and mentorship programs at universities and institutions, providing researchers and students with the platform to contribute to intellectual capital. Beyond academia, we actively support young startups, offering strategic guidance, funding, and handholding to help them build a strong foundation. With a network of like-minded professionals, we are dedicated to nurturing talent, fostering innovation, and creating societal impact.</p>

                        <p class="text-start">For more information about Newgen Research Consultancy please visit the site: <A class="text-secondary" href="https://www.new-gen.in" target="_blank">https://www.new-gen.in</A></p>
                    </div>
                    <div class="col-md-3 wow fadeInUp text-center" data-wow-delay="0.5s">
                        <img loading="lazy" src="public/assets/img/logo/logo-newgen-square.png" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Newgen End -->

        
        @include('inc.footer')
        @include('inc.script')
    
    </body>

</html>