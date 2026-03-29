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
                    <H3 class="text-secondary">{!!env('CONF_HOST_ADD')!!}</H3>
                </div>

                <div class="row g-4 justify-content-center">

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Simhachalam Temple.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Simhachalam Temple</h6>
                                <p class="mb-0">This is a temple for Lord Narasimha which attracts tourists from all over. The Simhachalam temple draws a large number of travelers. The grand majestic structure and the holy sacred temple is the reason people visit Vizag.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Yarada Beach.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Yarada Beach</h6>
                                <p class="mb-0">If you are looking for top places to visit in Vizag, then the Yarada beach is one of the best places to see in Visakhapatnam. Yarada Beach has Bay of Bengal on one side and magnificent hills on the other side. If you are looking for a relaxing beach vacation then this is the place to be.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Borra Caves.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Borra Caves</h6>
                                <p class="mb-0">Bora caves are the largest caves in the country situated at a height of 705 meters. Discovered in 1807 this is a popular tourist attraction. The caves are made of karstic limestone that has carved giant structures and are exposed via natural skylight. It is surrounded by evergreen forests, green landscape and the beautiful views.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Submarine Museum.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Submarine Museum</h6>
                                <p class="mb-0">The submarine museum is one of the top 10 places to see in Vizag. Situated within the naval submarine INS Kurusura you can see this on Rushikonda Beach. The museum consists artifacts that showcase the life of warriors.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Matsyadarshini Aquarium.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Matsyadarshini Aquarium</h6>
                                <p class="mb-0">Located on the Ramakrishna beach, this aquarium has many varieties of fishes. Kids love to visit this aquarium and explore the interesting marine life and gather all the information about the life underwater. This is one of the most visited aquariums in Vishakapatnam loved by both kids and adults.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Indira Gandhi Zoological Park.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Indira Gandhi Zoological Park</h6>
                                <p class="mb-0">Indira Gandhi Zoological Park was set up in 1977 and is the home to about 100 species of mammals, birds and reptiles. The zoo is located inside the lush greenery and vast acres of Kambalakonda reserve forest. This is the third largest zoo and it is named after the erstwhile Prime Minister of India, Indira Gandhi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/VUDA Park.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">VUDA Park</h6>
                                <p class="mb-0">Spread across 37 acres of land this park has 2500 trees and is the perfect place to take a quiet morning or evening walk with friends and family. This park has fitness centers, kids play area that keep the locals and tourists busy.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Dolphin’s Nose.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Dolphin’s Nose</h6>
                                <p class="mb-0">This is the perfect place to get the spectacular views of the city and its magnificent coastline. The Dolphin’s Nose has a large rock viewpoint looks like the shape of a dolphin’s nose and so it gets that name. Tourists also come here to get a glimpse of beautiful sunrise and sunsets.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Rishikonda Beach.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Rishikonda Beach</h6>
                                <p class="mb-0">Nestled on the Bay of Bengal, the Rishikonda beach is the Jewel of East Coast. It is a beach with beautiful lush greenery with the Rishikonda hill at the backyard. This is a famous place in Vizag, also known for water sports.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Bheemili Beach.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Bheemili Beach</h6>
                                <p class="mb-0">The Bhemili Beach is located at the meeting point of Bay of Bengal and Gosthani River. This place has the fort and cemetery and reflect the erstwhile Dutch influence. People come to take a break here away from the bustling city life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Gangavaram Beach.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Gangavaram Beach</h6>
                                <p class="mb-0">One of the most beautiful beaches in Vizag amidst swaying palm trees is the Gangavaram Beach. The beautiful soft sands make it the perfect relaxing retreat for tourists who are looking for a break. The rocky structures are also a major attraction that bring tourists here.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="public/assets/img/attractions/Ramakrishna Beach.jpg" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column" style="min-height: 250px;">
                                <h6 class="mb-2 text-secondary">Ramakrishna Beach</h6>
                                <p class="mb-0">The Rama Krishna Mission Beach named after Rama Krishna Mission ashram is a popular beach in Vizag. This is a perfect beach to unwind and relax. Submarine museum is also on Ramakrishna Beach. This is an ideal romantic beach for couples as well as you can take your friends along on this trip.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 py-5 justify-content-center">
                    
                    <p>For more place you can visit official website of Telangana Tourism: <A target="_blank" href="https://tourism.telangana.gov.in/">https://tourism.telangana.gov.in/</A></p>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>