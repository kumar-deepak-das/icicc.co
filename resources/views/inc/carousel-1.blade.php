        @php $k=9 @endphp
        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    @for($i=1;$i<$k;$i++)
                    <li data-bs-target="#carouselId" data-bs-slide-to="{{$i}}"></li>
                    @endfor
                </ol>
                <div class="carousel-inner" role="listbox">
                    @for($i=0;$i<$k;$i++)
                    <div class="carousel-item @if($i==0) active @endif">
                        <img src="public/assets/img/sliders/img{{$i}}.jpg" class="img-thumbnail" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4">
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="{!!env('SUBMISSION_LINK')!!}" target="_blank">Submit Your Paper</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->