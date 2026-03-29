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

    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-7 mb-4 wow fadeInDown" data-wow-delay="0.1s">Accommodation</h3>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="./" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-secondary">Accommodation</li>
            </ol>    
        </div>
    </div> -->
    <!-- Header End -->
    
    <!-- Services Start -->
    <div class="container service py-5 overflow-hidden">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">{!!env('CONF_NAME')!!}</h5>
                </div>
                <h2 class="display-7 mb-4">Accommodation</h2>
            </div>
        </div>

        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.2s">
                    
                    <h5 class="sub-title pe-3">{!!env('CONF_NAME')!!}</h5>
                    <h3 class="display-7 mb-4">Accommodation near {!!env('CONF_HOST')!!}</h3>

                    <p>Bhubaneswar has a wide range of Hotels/Hotel Apartments suiting to the need of every individual. One can find good deals of options from various online websites/apps and can chose the stay based on individual preferences.</p>

                    <p>The public transport is very good in Bhubaneswar. Hence it would not be inconvenient to arrive at the Conference Venue from Airport, Railway Stations or any other part of Bhubaneswar.</p>
                </div>
            </div>

            <div class="row g-5 py-5">
                <div class="col-md-12 wow fadeInRight" data-wow-delay="0.3s">
                    <h6 class="text-primary">For ultimate convenience, consider these hotels located near to the conference venue:</h6>
                </div>

                <div class="col-md-5 wow fadeInRight" data-wow-delay="0.3s">
                    <iframe
                          class="w-100"
                          style="aspect-ratio:16/9;"
                          src="https://www.youtube-nocookie.com/embed/kjUUH_sBPlM?loop=1&autoplay=1&mute=1"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                </div>
                <div class="col-md-7 wow fadeInRight" data-wow-delay="0.3s">
                    <H5><A class="mt-5 text-secondary" target="_blank" href="https://www.swostihotels.com/swosti-premium-bhubaneswar/">Swosti Premium - Luxury 5-Star Hotel in Bhubaneswar, Odisha</A></H5>
                    <!-- <H6>ABR Tower, 47-10-2, Railway New Colony Rd, near Diamond Park Road, Dondaparthy, Dwaraka Nagar, Visakhapatnam, Andhra Pradesh</H6> -->
                    <p>Swosti Premium is a luxurious 5-star Deluxe business class hotel in Bhubaneswar that offers exceptional amenities and services. It features 147 well-appointed rooms with modern hotel facilities and amenities, 8 banquet halls and 1 outdoor venue, top-of-the-class facilities like a swimming pool, 1 immaculate multi-cuisine restaurant and a lounge bar, a health club and a spa. As an oasis of unparalleled luxury combined with excellent service, you can surely find a tranquil corner within the premises to enjoy your holiday retreat to its maximum. Here at Swosti Premium, the guests can find their way through the vast, intense and diversified culture of one of the oldest cities in India.</p>
                </div>

                <div class="col-md-5 wow fadeInRight" data-wow-delay="0.3s">
                   <iframe
                          class="w-100"
                          style="aspect-ratio:16/8;"
                          src="https://www.youtube-nocookie.com/embed/3A2lriBEuQ0?loop=1&autoplay=1&mute=1"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                </div>
                <div class="col-md-7 wow fadeInRight" data-wow-delay="0.3s">
                    <H5><A class="mt-5 text-secondary" target="_blank" href="https://www.mayfairhotels.com/">Mayfair Lagoon, Bhubaneshwar, Odisha</A></H5>
                    <!-- <H6>75 Feet Rd, Dolphin Area, Daba Gardens, 104 Area, Visakhapatnam, Andhra Pradesh</H6> -->
                    <p>The Mayfair Lagoon offers well-appointed accommodation with fine bedding and furnishings. Select rooms have separate living areas and balconies.</p>
                    <p>Recreational facilities include a a club featuring an in-house DJ and pool tables. Alternatively, there is an outdoor pool and a fitness centre on site.</p>
                    <p>Centrally located in Bhubaneswar, The Mayfair Lagoon Hotel is a stroll from shopping and entertainment options. The Tribal Museum is 2.4 km away and Biju Patnaik Airport is 6 km away.</p>
                </div>

                <div class="col-md-5 wow fadeInRight" data-wow-delay="0.3s">
                    <iframe
                          class="w-100"
                          style="aspect-ratio:16/8;"
                          src="https://www.youtube-nocookie.com/embed/w3W-v4R-kTM?loop=1&autoplay=1&mute=1"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                </div>
                <div class="col-md-7 wow fadeInRight" data-wow-delay="0.3s">
                    <H5><A class="pt-5 text-secondary" target="_blank" href="https://www.suryanshhotels.com/">Suryansh Hotels & Resorts, Bhubaneswar, Odisha</A></H5>
                    <!-- <H6>Plot No 6,7,15,&16, B Block, Auto Nagar, Gajuwaka, Visakhapatnam, Andhra Pradesh- 530012 , Gajuwaka, Visakhapatnam</H6> -->
                    <p>The hotel is surrounded by greenery and situated in the heart of the city. The hotel offers 49 beautifully crafted with rustic interiors,air-conditioned, rooms with 11 suites each having extra soft beds,lavishly furnished minibar, satellite channels, tea/coffee maker,direct dial telephone& internet access, 24 hour room service with round the clock menu,running hot & cold water,hair dryer,in-house laundry,left luggage room and safe deposit lockers. At Solariz our multi cuisine restaurant enjoy the perfect blend of style and taste, also complimented by a bar, a pool, meeting & banqueting spaces to host large events.</p>
                </div>

                <div class="col-md-5 wow fadeInRight" data-wow-delay="0.3s">
                    <iframe
                          class="w-100"
                          style="aspect-ratio:16/10;"
                          src="https://www.youtube-nocookie.com/embed/NcefgRwgvWM?loop=1&autoplay=1&mute=1"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                </div>
                <div class="col-md-7 wow fadeInRight" data-wow-delay="0.3s">
                    <H5><A class="pt-5 text-secondary" target="_blank" href="https://www.lemontreehotels.com/lemon-tree-premier/bhubaneswar/hotel-bhubaneswar">Lemon Tree Premier, Bhubaneswar</A></H5>
                    <!-- <H6>beside Bata Showroom, TSN Colony, Dondaparthy, Visakhapatnam, Andhra Pradesh</H6> -->
                    <p>Lemon Tree Premier, Bhubaneswar is located in the temple city of Bhubaneswar in Odisha. The ancient city, dotted with beautiful and historic temples, pulls in travellers and devotees from all over the world. Once renowned for its architecture and grand temples, is now also a vibrant trade and business hub. Modern Bhubaneswar, a smart city, has gained its reputation as a model conference and convention venue for its IT centre and software park</p>
                    <p>The hotel offers easy access to many eminent attractions, including the Jagannath Temple, Puri Beach, Konark Sun Temple, Udaygiri and Khandagiri Caves, Nandankanan Zoological park, Mukteshwara Temple and Lingaraj Temple. The hotel is also located opposite Tech Mahindra and is in close proximity to the IT hubs housing Infosys, Tata Consultancy Services and Mindtree, among others. The hotel’s strategic location offers multiple options to explore the city’s cultural and architectural marvels, as well as the business destinations and traditional markets.</p>
                </div>

                <div class="col-md-5 wow fadeInRight" data-wow-delay="0.3s">
                     <iframe
                          class="w-100"
                          style="aspect-ratio:16/10;"
                          src="https://www.youtube-nocookie.com/embed/wueGK2qIe6A?loop=1&autoplay=1&mute=1"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                </div>
                <div class="col-md-7 wow fadeInRight" data-wow-delay="0.3s">
                    <H5><A class="pt-5 text-secondary" target="_blank" href="https://www.lemontreehotels.com/lemon-tree-premier/bhubaneswar/hotel-bhubaneswar">Hotel Trident, Bhubaneswar, Odisha</A></H5>
                    <!-- <H6>beside Bata Showroom, TSN Colony, Dondaparthy, Visakhapatnam, Andhra Pradesh</H6> -->
                    <p>Trident Bhubaneswar is located in Bhubaneswar, 6 km from the city centre. It features an outdoor pool, 900 metres jogging trek and 24-hour front desk. All rooms overlook the pool or garden. Free WiFi is available in the rooms of the property.</p>
                    <p>Decorated in pleasant shades of pastel browns, rooms are fitted with a satellite TV, minibar and tea/coffee-making facilities. A hairdryer and personal safe are provided.</p>
                    <p>This hotel features interiors inspired by traditional temple architecture of Odisha. It has a concierge desk and 24-hour business centre. A doctor and babysitter are available on-call along with a boutique shop called Sandook.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    @include('inc.footer')
    @include('inc.script')

</body>

</html>