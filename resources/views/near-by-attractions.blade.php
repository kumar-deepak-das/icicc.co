<!doctype html>
<html lang="en">

    <head>
        @include('inc.head')
        <style>
            .blog-info{
                 display:flex; 
                 flex-direction:column;
                 min-height: 350px;
             }

             .blog-info .read-more{
              margin-top:auto;
            }
        </style>
    </head>

    <body>
        
        @include('inc.nav-bar')

        <!-- inner banner -->
        <section class="inner-banner py-5">
            <div class="w3l-breadcrumb py-lg-5">
                <div class="container pt-5 pb-sm-4">
                    <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Near by Attraction</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="./">Home</a></li>
                        <li class="active"><i class="fas fa-angle-right mx-2"></i>Near by Attraction</li>
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
                    <h3 class="title-style">Near by Attraction</h3>
                </div>
            </div>
        </div>

        <div class="w3l-blog-block-5" id="blog">
            <div class="container py-md-5 py-4">
                <div class="row justify-content-center">

                    <div class="col-md-6 pt-5">
                        <div class="blog-card-single">
                            <div class="grids5-info">
                                <a href="#blog"><img loading="lazy" src="public/assets/images/attractions/lingaraja-temple.jpg" alt="near by attractions" /></a>
                                <div class="blog-info">
                                    <h4><a target="_blank" href="https://bhubaneswartourism.in/lingaraja-temple-bhubaneswar">Lingaraj Temple, Bhubaneswar, Odisha</a></h4>
                                    <p>The Lingaraja Temple in Bhubaneswar, Odisha, is a monumental shrine dedicated to Lord Shiva as Harihara, a fusion of Shiva and Vishnu. Built in the 11th century AD under King Jajati Keshari, the temple showcases Kalinga architecture, with its towering vimana (55 meters) and intricate carvings. It holds profound religious significance, housing the Svayambhu Linga, a self-manifested Shiva idol believed to grant moksha.</p>
                                    <p class="read-more">Read more at:   <A href="https://bhubaneswartourism.in/lingaraja-temple-bhubaneswar">https://bhubaneswartourism.in/lingaraja-temple-bhubaneswar</A></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 pt-5">
                        <div class="blog-card-single">
                            <div class="grids5-info">
                                <a href="#blog"><img loading="lazy" src="public/assets/images/attractions/iskcon-temple.jpg" alt="near by attractions" /></a>
                                <div class="blog-info">
                                    <h4><A target="_blank" href="https://bhubaneswartourism.in/iskcon-temple-bhubaneswar">ISKCON Temple, Bhubaneswar, Odisha</A></h4>
                                    <p>The ISKCON Temple is located at the heart of the beautiful Bhubaneswar city, which is the capital of Odisha. It is also known as Sri Krishna Balaram Temple. Built by Sri Gaur Govinda Swami, this holy shrine is a great center for spiritual learning and discourse.</p>
                                    <p class="read-more">Read more at: <A href="https://bhubaneswartourism.in/iskcon-temple-bhubaneswar">https://bhubaneswartourism.in/iskcon-temple-bhubaneswar</A></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 pt-5">
                        <div class="blog-card-single">
                            <div class="grids5-info">
                                <a href="#blog"><img loading="lazy" src="public/assets/images/attractions/nandankanan-zoological-park.jpg" alt="near by attractions" /></a>
                                <div class="blog-info">
                                    <h4><A target="_blank" href="https://bhubaneswartourism.in/nandankanan-zoological-park-bhubaneswar">Nandankanan Zoological Park, Bhubaneswar, Odisha</A></h4>
                                    <p>Nandankanan Zoological Park is one of the biggest and famous zoos in India. Located in Bhubaneswar, this zoo, unlike others in the country, has been built inside a natural forest, which is moist deciduous in nature and remains semi-ever green.</p>
                                    <p class="read-more">Read more at: <A href="https://bhubaneswartourism.in/nandankanan-zoological-park-bhubaneswar">https://bhubaneswartourism.in/nandankanan-zoological-park-bhubaneswar</A></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 pt-5">
                        <div class="blog-card-single">
                            <div class="grids5-info">
                                <a href="#blog"><img loading="lazy" src="public/assets/images/attractions/shree-jagannath-temple.jpg" alt="near by attractions" /></a>
                                <div class="blog-info">
                                    <h4><A target="_blank" href="https://bhubaneswartourism.in/shree-jagannath-temple-puri">Shree Jagannath Temple, Puri, Odisha</A></h4>
                                    <p>Shree Jagannath Temple in Puri, considered to be one of the four dhams (pilgrimages) of India, is located in the ancient city of Puri, in the state of Odisha. Dedicated to Lord Jagannath – the Lord of the Universe, a form of Lord Vishnu, this ancient temple receives millions of devotees each year. This number goes up exponentially during the famous Rath Yatra festival</p>
                                    <p class="read-more">Read more at: <A href="https://bhubaneswartourism.in/shree-jagannath-temple-puri">https://bhubaneswartourism.in/shree-jagannath-temple-puri</A></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 pt-5">
                        <div class="blog-card-single">
                            <div class="grids5-info">
                                <a href="#blog"><img loading="lazy" src="public/assets/images/attractions/karnak-temple.jpg" alt="near by attractions" /></a>
                                <div class="blog-info">
                                    <h4><A target="_blank" href="https://www.konarksuntemple.org/">Sun Temple, Konark, Puri, Odisha</A></h4>
                                    <p>The magnificent Konark Sun Temple, also known as the konark mandir or konark surya mandir, built in the 13th century during the reign of King Narasimhadeva I of the Eastern Ganga Dynasty, stands as a testament to Odisha's rich cultural heritage and architectural brilliance.</p>
                                    <p class="read-more">Read more at: <A href="https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar">https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar</A></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 pt-5">
                        <div class="blog-card-single">
                            <div class="grids5-info">
                                <a href="#blog"><img loading="lazy" src="public/assets/images/attractions/dhauli-giri-hills.jpg" alt="near by attractions" /></a>
                                <div class="blog-info">
                                    <h4><A target="_blank" href="https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar">Dhauli Giri Hills, Bhubaneswar, Odisha</A></h4>
                                    <p>Dhauli Giri Hills, located on the bank of Daya River, is about 8 km away from Bhubaneswar, Odisha; however, it is considered a part of the city and one of its major tourist attractions. Surrounded by plains, forests and the Daya River, these hills hold high importance in the history of not only Odisha but India as well.</p>
                                    <p class="read-more">Read more at: <A href="https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar">https://bhubaneswartourism.in/dhauli-giri-hills-bhubaneswar</A></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('inc.footer')
    </body>

</html>