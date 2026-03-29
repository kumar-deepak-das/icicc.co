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
                <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Call for Papers</h3>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Call for Papers</li>
                </ol>    
            </div>
        </div> -->
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                    </div>
                    <h2 class="display-7 mb-4">Call for Papers</h2>
                </div>
            </div>
            <div class="container ">
                <div class="row g-5">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p>The conference papers will cover disciplines of Computing, Engineering and Technology. The topics of interest include, but are not limited to the following:</p>
                    </div>

                    <!-- <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p>The scope is intentionally designed to attract visionary, system-level, and high-impact research rather than incremental or narrowly scoped contributions. The conference shall have multiple tracks but not limited to the topics specified in the tracks.</p>
                    </div> -->

                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h4>
                        <h4 class="display-7">Conference Topics: (<small><small>Not Limited To</small></small>)</h3>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <H4 class="text-primary">Intelligent Computing & Artificial Intelligence</H4>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Machine Learning, Deep Learning, and Reinforcement Learning</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Soft Computing, Fuzzy Systems, and Evolutionary Algorithms</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Knowledge Representation, Reasoning, and Expert Systems</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Explainable AI, Trustworthy AI, and Ethical AI</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Intelligent Agents and Multi-Agent Systems</p>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <H4 class="text-primary">Communication, Networking & Cyber Systems</H4>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Next-Generation Communication Systems (5G/6G)</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Internet of Things (IoT), Industrial IoT, and Smart Sensors</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Edge, Fog, and Cloud Computing Architectures</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Cyber-Physical Systems and Digital Twins</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Network Security, Blockchain, and Secure Communications</p>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <H4 class="text-primary">Smart Systems & Engineering Applications</H4>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Smart Cities and Intelligent Infrastructure</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Intelligent Control Systems and Robotics</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Embedded Systems and Real-Time Computing</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Signal Processing and Image/Video Analytics</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Intelligent Instrumentation and Measurement Systems</p>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <H4 class="text-primary">Intelligent Systems for Management & Business Analytics</H4>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Business Intelligence and Decision Support Systems</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Predictive Analytics for Finance, Marketing, and Operations</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Supply Chain and Logistics Intelligence</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Human Resource Analytics and Workforce Intelligence</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>FinTech, InsurTech, and Intelligent Financial Systems</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Digital Transformation and Smart Governance</p>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <H4 class="text-primary">Intelligent Computing for Sustainability & Green Technologies</H4>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Green Computing and Energy-Efficient Algorithms</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Intelligent Energy Systems and Smart Grids</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Sustainable Manufacturing and Industry 4.0</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>AI for Environmental Monitoring and Climate Analytics</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Circular Economy Models and Resource Optimization</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>ESG Analytics and Sustainability Performance Measurement</p>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <H4 class="text-primary">Data, Optimization & Emerging Paradigms</H4>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Big Data Analytics and Data Mining</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Optimization Techniques and Metaheuristic Algorithms</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Natural Language Processing and Information Retrieval</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Intelligent Healthcare and Bio-Informatics Systems</p>
                        <p><i class="fa fa-check-circle text-secondary me-3"></i>Social Network Analysis and Computational Social Science</p>
                    </div>

                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-primary">ICICC-2026 encourages original, unpublished, and high-quality research that demonstrates interdisciplinary innovation, practical relevance, and societal impact, particularly studies that integrate intelligent computing with sustainable development goals and data-driven practices.</p>
                    </div>  

                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-secondary">Submitted papers must be original, unpublished, and not under consideration elsewhere. All manuscripts will undergo a rigorous peer review process, and accepted papers must be registered to be included in the final proceedings. All accepted and registered papers shall be published in SPRINGER SCOPUS indexed book series.</p>

                        <A class="btn btn-primary py-3 px-5 m-5" href="{!!env('SUBMISSION_LINK')!!}" target="_blank">Submit Your Paper</A>
                    </div>  
                </div>
            </div>
        </div>
        <!-- About End -->
        
        @include('inc.footer')
        @include('inc.script')
    
    </body>

</html>