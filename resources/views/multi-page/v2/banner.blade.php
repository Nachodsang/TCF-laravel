<section class="welcome-area">
    <div class="welcome-slides owl-carousel home-slider">

        @if ($cover)
            @foreach ($cover as $k => $v)
                @if ($k % 2 == 0)
                    <div class="single-welcome-slide bg-img bg-overlay"
                        style="background-image: url('{{ $v->image }}');">
                        <div class="container h-100 position-relative">
                            <div
                                class=" pt-3 p-1 position-absolute rounded-bottom-3  top-0 end-0 c-bg-primary shadow cover-logo">
                                <img src="images/logoTCF.png" class="w-100" />
                            </div>
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12 col-lg-8 col-xl-6">
                                    <div class="welcome-text">
                                        <h2 data-animation="bounceInDown" data-delay="900ms">Welcome</h2>
                                        <p data-animation="bounceInDown" data-delay="500ms">{{ $about->description_th }}
                                        </p>
                                        <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                            <a href="{{ url('/service') }}"
                                                class="btn btn-primary mb-3 mb-sm-0 mr-4 btn-header">Our
                                                Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="single-welcome-slide bg-img bg-overlay"
                        style="background-image: url('{{ $v->image }}');">
                        <div class="container h-100 position-relative">
                            <div
                                class=" pt-3 p-1 position-absolute rounded-bottom-3  top-0 end-0 c-bg-fouth shadow cover-logo">
                                <img src="images/logoTCF.png" class="w-100" />
                            </div>
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12 col-lg-8 col-xl-6">
                                    <div class="welcome-text">
                                        <h2 data-animation="bounceInDown" data-delay="900ms">Welcome</h2>
                                        <p data-animation="bounceInDown" data-delay="500ms">{{ $about->description_th }}
                                        </p>
                                        <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                            <a href="{{ url('/service') }}"
                                                class="btn btn-primary mb-3 mb-sm-0 mr-4 btn-header">Our
                                                Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div class="swiper-slide">
                <img src="{{ url('images/no-cover.jpg') }}">
            </div>
        @endif


    </div>
</section>
