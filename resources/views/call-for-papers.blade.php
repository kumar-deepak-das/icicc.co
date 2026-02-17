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
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Call for Papers</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="./">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Call for Papers</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- Committees -->
    <div class="w3l-about-2 pt-5 pb-0">
        <div class="container py-lg-51 1py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">Call for Papers</h5>
                <h3 class="title-style">{!!env('CONF_NAME')!!}</h3>
            </div>
            <p>The conference papers will cover disciplines of Computing, Engineering and Technology. The topics of interest include, but are not limited to the following:</p>
        </div>
    </div>
    <!-- Committees End -->

    <!-- Committee -->
    <section class="w3l-about-2">
        <div class="container py-md-5">
            <div class="row align-items-center">
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">Intelligent Computing & Artificial Intelligence</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                        <li class="py-1"><i class="far fa-check-square"></i>Machine Learning, Deep Learning, and Reinforcement Learning</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Soft Computing, Fuzzy Systems, and Evolutionary Algorithms</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Knowledge Representation, Reasoning, and Expert Systems</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Explainable AI, Trustworthy AI, and Ethical AI</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Intelligent Agents and Multi-Agent Systems</li>
                    </ul>
                </div>
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">Communication, Networking & Cyber Systems</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                        <li class="py-1"><i class="far fa-check-square"></i>Next-Generation Communication Systems (5G/6G)</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Internet of Things (IoT), Industrial IoT, and Smart Sensors</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Edge, Fog, and Cloud Computing Architectures</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Cyber-Physical Systems and Digital Twins</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Network Security, Blockchain, and Secure Communications</li>
                    </ul>
                </div>
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">Smart Systems & Engineering Applications</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                        <li class="py-1"><i class="far fa-check-square"></i>Smart Cities and Intelligent Infrastructure</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Intelligent Control Systems and Robotics</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Embedded Systems and Real-Time Computing</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Signal Processing and Image/Video Analytics</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Intelligent Instrumentation and Measurement Systems</li>
                    </ul>
                </div>
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">Intelligent Systems for Management & Business Analytics</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                        <li class="py-1"><i class="far fa-check-square"></i>Business Intelligence and Decision Support Systems</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Predictive Analytics for Finance, Marketing, and Operations</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Supply Chain and Logistics Intelligence</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Human Resource Analytics and Workforce Intelligence</li>
                        <li class="py-1"><i class="far fa-check-square"></i>FinTech, InsurTech, and Intelligent Financial Systems</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Digital Transformation and Smart Governance</li>
                    </ul>
                </div>
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">Intelligent Computing for Sustainability & Green Technologies</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                        <li class="py-1"><i class="far fa-check-square"></i>Green Computing and Energy-Efficient Algorithms</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Intelligent Energy Systems and Smart Grids</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Sustainable Manufacturing and Industry 4.0</li>
                        <li class="py-1"><i class="far fa-check-square"></i>AI for Environmental Monitoring and Climate Analytics</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Circular Economy Models and Resource Optimization</li>
                        <li class="py-1"><i class="far fa-check-square"></i>ESG Analytics and Sustainability Performance Measurement</li>
                    </ul>
                </div>
                <div class="col-lg-12 about-2-secs-left">
                    <h5 class="small-title1 mb-2">Data, Optimization & Emerging Paradigms</h5>
                    <ul class="list-about-2 ms-5 mt-sm-4 m-3">
                        <li class="py-1"><i class="far fa-check-square"></i>Big Data Analytics and Data Mining</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Optimization Techniques and Metaheuristic Algorithms</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Natural Language Processing and Information Retrieval</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Intelligent Healthcare and Bio-Informatics Systems</li>
                        <li class="py-1"><i class="far fa-check-square"></i>Social Network Analysis and Computational Social Science</li>
                    </ul>
                </div>
                <div class="col-lg-12 about-2-secs-left">
                    <p><b>{!!env('CONF_NAME')!!}</b> encourages original, unpublished, and high-quality research that demonstrates interdisciplinary innovation, practical relevance, and societal impact, particularly studies that integrate intelligent computing with sustainable development goals and data-driven  practices.</p>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Committee End -->

    @include('inc.footer')

    @include('inc.script')

</body>

</html>