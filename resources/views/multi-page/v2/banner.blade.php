@php
    $logoFooter = \App\Models\HomeMd::where('type', 'logo-footer')->first();
@endphp
<section class="welcome-area">
    <div class="welcome-slides owl-carousel home-slider">

        @if ($cover)
            @foreach ($cover as $k => $v)
                <div class="single-welcome-slide bg-img bg-overlay position-relative"
                    style="background-image: url('{{ $v->image }}');">
                    <div class="position-absolute top-0 bottom-0  w-100 banner-overlay-sm     ">
                    </div>
                    <div class="container h-100 position-relative ">
                        @if ($logoFooter)
                            <div data-animation="bounceInDown" data-delay="200ms"
                                class=" position-absolute   top-0 end-0  shadow cover-logo rounded-bottom-3">
                                <div class="position-relative w-100 h-100 pt-3 p-1 ">
                                    <div
                                        class="position-absolute w-100  h-100 top-0  end-0 c-bg-primary rounded-bottom-3 opacity-75 z-0 ">
                                    </div>
                                    <img src="{{ $logoFooter->detail }}" class="w-100 position-relative z-1" />
                                </div>
                            </div>
                        @endif
                        <div class="row h-100 align-items-center ">
                            <!-- Welcome Text -->
                            <div class="col-12 col-lg-8 col-xl-6 banner-overlay-lg d-flex align-items-center h-100 "
                                data-animation="bounceInDown" data-delay="500ms">
                                <div class="welcome-text d-flex flex-column rounded p-4  ">

                                    <div class=" ">
                                        <h2 class="c-primary ">Welcome</h2>

                                        <p class="c-fouth c-bg-fifth p-3 rounded  c-border-primary ">
                                            {{ $about->description }}
                                        </p>
                                    </div>
                                    <div class="hero-btn-group " data-animation="bounceInDown" data-delay="100ms">
                                        <a href="{{ url('/service') }}"
                                            class="btn btn-primary mb-3 mb-sm-0 mr-4 shadow-lg">Our
                                            Service</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="swiper-slide">
                <img src="{{ url('images/no-cover.jpg') }}">
            </div>
        @endif


    </div>
</section>
