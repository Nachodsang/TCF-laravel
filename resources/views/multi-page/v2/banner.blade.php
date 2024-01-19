{{-- <style>
    .swiper-pagination-bullet-active {
        background: var(--c-primary);
    }
</style>
<div class="swiper bannerSwiper">
    <div class="swiper-wrapper">
        @if ($cover)
            @foreach ($cover as $k => $v)
                <div class="swiper-slide">
                    @if ($v->url)
                        <a href="{{ url("$v->url") }}">
                            <img src="{{ url("/$v->image") }}" alt="{{ $v->alt }}" title="{{ $v->title }}"
                                loading="lazy">
                        </a>
                    @else
                        <img src="{{ url("/$v->image") }}" alt="{{ $v->alt }}" title="{{ $v->title }}"
                            loading="lazy">
                    @endif
                </div>
            @endforeach
        @else
            <div class="swiper-slide">
                <img src="{{ url('images/no-cover.jpg') }}">
            </div>
        @endif
    </div>
    <div class="swiper-pagination"></div>
</div> --}}

<section class="welcome-area">
    <div class="welcome-slides owl-carousel home-slider">
        <!-- Single Slide -->
        <div class="single-welcome-slide bg-img bg-overlay"
            style="background-image: url(/images/banner/surasak_sta1.jpg);">
            <div class="container h-100 position-relative">
                <div class=" pt-4 p-1 position-absolute rounded-bottom-3  top-0 end-0 c-bg-fouth shadow">
                    <img src="images/logo/logoTCF.png" class="w-100" />
                </div>
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInDown" data-delay="900ms">Welcome</h2>
                            <p data-animation="bounceInDown" data-delay="500ms">{{ $about->description_th }} </p>
                            <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                <a href="service.php" class="btn btn-primary mb-3 mb-sm-0 mr-4 btn-header">Our
                                    Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Single Slide -->
        <div class="single-welcome-slide bg-img bg-overlay"
            style="background-image: url(/images/banner/surasak_sta1.jpg);">
            <div class="container h-100 position-relative">
                <div class=" pt-4 p-1 position-absolute rounded-bottom-3  top-0 end-0 c-bg-fouth shadow">
                    <img src="images/logo/logoTCF.png" class="w-100" />
                </div>
                <div class="row h-100 align-items-center">
                    <!-- Welcome Text -->
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInDown" data-delay="900ms">Welcome</h2>
                            <p data-animation="bounceInDown" data-delay="500ms">{{ $about->description_th }} </p>
                            <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                <a href="service.php" class="btn btn-primary mb-3 mb-sm-0 mr-4 btn-header">Our
                                    Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-welcome-slide bg-img bg-overlay"
            style="background-image: url(/images/banner/surasak_sta1.jpg);">
            <div class="container h-100 position-relative">
                <div class=" pt-4 p-1  position-absolute rounded-bottom-3  top-0 end-0 c-bg-fouth shadow">
                    <img src="images/logo/logoTCF.png" class="w-100" />
                </div>
                <div class="row h-100 align-items-center"><!--right -->
                    <!-- Welcome Text -->
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text ">
                            <h2 data-animation="bounceInUp" data-delay="100ms">Welcome</h2>
                            <p data-animation="bounceInUp" data-delay="500ms">{{ $about->description_th }} </p>
                            <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                <a href="service.php" class="btn btn-primary mb-3 mb-sm-0 mr-4 btn-header">Our
                                    Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
