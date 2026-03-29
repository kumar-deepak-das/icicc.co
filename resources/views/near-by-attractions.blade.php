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
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Near By Attractions</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Near By Attractions</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden py-5">
        <div class="container ">
            <div class="office ">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                    </div>
                    <h2 class="display-7 mb-1">Near By Attractions</h2>
                    <H4 class="text-secondary">{!!env('CONF_HOST')!!}</H4>
                    <H6 class="text-primary">{!!env('CONF_HOST_ADD')!!}</H6>
                </div>

                <div class="row g-4 justify-content-center">

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/nandankanan-zoological-park.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 380px;">
                                <h6 class="mb-2 text-secondary">Nandankanan Zoological Park, Bhubaneswar, Odisha</h6>
                                <p class="mb-0">The magnificent Konark Sun Temple, also known as the konark mandir or konark surya mandir, built in the 13th century during the reign of King Narasimhadeva I of the Eastern Ganga Dynasty, stands as a testament to Odisha's rich cultural heritage and architectural brilliance.</p>
                                <p class="mt-3 text-secondary">Read more at:<br/><A class="text-primary"href="https://bhubaneswartourism.in/nandankanan-zoological-park-bhubaneswar">https://bhubaneswartourism.in/nandankanan-zoological-park-bhubaneswar</A></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/dhauli-giri-hills.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 380px;">
                                <h6 class="mb-2 text-secondary">Dhauli Giri Hills, Bhubaneswar, Odisha</h6>
                                <p class="mb-0">Dhauli Giri Hills, located on the bank of Daya River, is about 8 km away from Bhubaneswar, Odisha; however, it is considered a part of the city and one of its major tourist attractions. Surrounded by plains, forests and the Daya River, these hills hold high importance in the history of not only Odisha but India as well.</p>
                                <p class="mt-3 text-secondary">Read more at:<br/><A class="text-primary"href="https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar">https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar</A></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/lingaraja-temple.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 380px;">
                                <h6 class="mb-2 text-secondary">Lingaraj Temple, Bhubaneswar, Odisha</h6>
                                <p class="mb-0">The Lingaraja Temple in Bhubaneswar, Odisha, is a monumental shrine dedicated to Lord Shiva as Harihara, a fusion of Shiva and Vishnu. Built in the 11th century AD under King Jajati Keshari, the temple showcases Kalinga architecture, with its towering vimana (55 meters) and intricate carvings. It holds profound religious significance, housing the Svayambhu Linga, a self-manifested Shiva idol believed to grant moksha.</p>
                                <p class="mt-3 text-secondary">Read more at:<br/>  <A href="https://bhubaneswartourism.in/lingaraja-temple-bhubaneswar">https://bhubaneswartourism.in/lingaraja-temple-bhubaneswar</A></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/iskcon-temple.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 380px;">
                                <h6 class="mb-2 text-secondary">ISKCON Temple, Bhubaneswar, Odisha</h6>
                                <p class="mb-0">The ISKCON Temple is located at the heart of the beautiful Bhubaneswar city, which is the capital of Odisha. It is also known as Sri Krishna Balaram Temple. Built by Sri Gaur Govinda Swami, this holy shrine is a great center for spiritual learning and discourse.</p>
                                 <p class="mt-3 text-secondary">Read more at:<br/><A class="text-primary"href="https://bhubaneswartourism.in/iskcon-temple-bhubaneswar">https://bhubaneswartourism.in/iskcon-temple-bhubaneswar</A></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/shree-jagannath-temple.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 380px;">
                                <h6 class="mb-2 text-secondary">Shree Jagannath Temple, Puri, Odisha</h6>
                                <p class="mb-0">Shree Jagannath Temple in Puri, considered to be one of the four dhams (pilgrimages) of India, is located in the ancient city of Puri, in the state of Odisha. Dedicated to Lord Jagannath – the Lord of the Universe, a form of Lord Vishnu, this ancient temple receives millions of devotees each year. This number goes up exponentially during the famous Rath Yatra festival</p>
                                <p class="mt-3 text-secondary">Read more at:<br/><A class="text-primary"href="https://bhubaneswartourism.in/shree-jagannath-temple-puri">https://bhubaneswartourism.in/shree-jagannath-temple-puri</A></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/karnak-temple.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 380px;">
                                <h6 class="mb-2 text-secondary">Sun Temple, Konark, Puri, Odisha</h6>
                                <p class="mb-0">The magnificent Konark Sun Temple, also known as the konark mandir or konark surya mandir, built in the 13th century during the reign of King Narasimhadeva I of the Eastern Ganga Dynasty, stands as a testament to Odisha's rich cultural heritage and architectural brilliance.</p>
                                <p class="mt-3 text-secondary">Read more at:<br/><A class="text-primary"href="https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar">https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar</A></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row g-4 py-5 justify-content-center">
                    
                    <p>For more place you can visit official website of Odisha Tourism: <A target="_blank" href="https://odishatourism.gov.in/">https://odishatourism.gov.in/</A></p>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>