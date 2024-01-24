<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="utf-8">
    <title>Nankai Express (Thailand) Co., Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="นำเข้า-ส่งออก, คลังสินค้า, การขนส่ง, บริการด้านโลจิสติกส์" name="keywords">
    <meta
        content="Is service facilitator about logistics (Import-Export, Warehouse,Transportation) and include about install machinery by specialist."
        name="description">
    <link href="{{ config('web.folder_prefix') }}/images/logo/logo-nankai-ico.ico" rel="icon">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/animated.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/custom.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/slick/slick.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/slick/slick-theme.css" rel="stylesheet">
    <link href='{{ config('web.folder_prefix') }}/css/swiper.min.css' rel='stylesheet'>
    <link href="{{ config('web.folder_prefix') }}/css/swiper-bundle.min.css" rel="stylesheet">
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tokyo Consulting Group</title>
    <link href="images/logo/TCGicon.ico" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />


</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    @include(config('web.folder_prefix') . '/header')
    @include(config('web.folder_prefix') . '/banner')



    <section>
        <div class="container-fluid section">
            <div class="container ">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 heading-section wow fadeIn" data-wow-delay="0.1s ">
                        <div class="subheading mb-2">TOKYO CONSULTING GROUP</div>
                        <h2 class="mb-4">Our Services</h2>
                        <p class="mb-4">{{ @$about_service->about_service_home }}</p>
                        <a class="btn btn-primary " href="{{ url('/service') }}">All Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    @for ($i = 0; $i <= count($service_cats) / 2; $i++)
                                        @if ($service_cats[$i]->type === 'sub-page')
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                                <div style="min-height:200px;"
                                                    class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                                    <div class="service-icon btn-square">
                                                        <i
                                                            class="fas {{ $service_cats[$i]->service_cat_icon }} fa-lg"></i>
                                                    </div>
                                                    <h3 class="mb-3">{{ $service_cats[$i]->service_cat_name }}</h3>
                                                    <p>{{ $service_cats[$i]->service_cat_description }}</p>

                                                    <a class="btn px-3 mt-auto mx-auto"
                                                        href="{{ url('/service/category/' . $service_cats[$i]->url) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                                <div style="min-height:200px;"
                                                    class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                                    <div class="service-icon btn-square">
                                                        <i
                                                            class="fas {{ $service_cats[$i]->service_cat_icon }} fa-lg"></i>
                                                    </div>
                                                    <h3 class="mb-3">{{ $service_cats[$i]->service_cat_name }}</h3>
                                                    <p>{{ $service_cats[$i]->service_cat_description }}</p>

                                                    <a class="btn px-3 mt-auto mx-auto"
                                                        href="{{ url('/' . $service_cats[$i]->url) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor

                                </div>
                            </div>
                            <div class="col-md-6 padding-top-10">
                                <div class="row g-4">
                                    @for ($i = count($service_cats) / 2 + 1; $i < count($service_cats); $i++)
                                        @if ($service_cats[$i]->type === 'sub-page')
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                                <div style="min-height:200px;"
                                                    class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                                    <div class="service-icon btn-square">
                                                        <i
                                                            class="fas {{ $service_cats[$i]->service_cat_icon }} fa-lg"></i>
                                                    </div>
                                                    <h3 class="mb-3">{{ $service_cats[$i]->service_cat_name }}</h3>
                                                    <p>{{ $service_cats[$i]->service_cat_description }}</p>

                                                    <a class="btn px-3 mt-auto mx-auto"
                                                        href="{{ url('/service/category/' . $service_cats[$i]->url) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                                <div style="min-height:200px;"
                                                    class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                                    <div class="service-icon btn-square">
                                                        <i
                                                            class="fas {{ $service_cats[$i]->service_cat_icon }} fa-lg"></i>
                                                    </div>
                                                    <h3 class="mb-3">{{ $service_cats[$i]->service_cat_name }}</h3>
                                                    <p>{{ $service_cats[$i]->service_cat_description }}</p>

                                                    <a class="btn px-3 mt-auto mx-auto"
                                                        href="{{ url('/' . $service_cats[$i]->url) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid c-bg-secondary  py-5">
            <div class="container pb-5 heading-section">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s">
                    <span class="subheading mb-2">Looking for new opportunity? Start from here.</span>
                    <h2 class="mb-5">Mergers and Acquisitions (M&A)</h2>
                    <!-- <span class="subheading mb-2">Mergers and Acquisitions (M&A)</span>
       <h2 class="mb-5">Looking for new opportunity? Start from here.</h2> -->
                </div>
                <div class="row g-5 gx-4">
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative ">
                                <div class="corner-sale"><span>TO SALE</span></div>
                                <img class="img-fluid" src="images/robotic-hand.jpg" alt="">
                                <div class="blog-overlay">
                                    <a class="btn btn-square btn-primary rounded-circle m-1" href="m&a-tech.php"><span
                                            class="material-symbols-outlined">
                                            visibility
                                        </span></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <div class="meta mb-2">
                                    <span>September 25, 2023</span>
                                </div>
                                <a class="d-block" href="m&a-tech.php">
                                    <h3>TechInnovate Invites Strategic Acquisition Partners</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <div class="corner-sale"><span>TO SALE</span></div>
                                <img class="img-fluid" src="images/car-assembly1.jpg" alt="">
                                <div class="blog-overlay">
                                    <a class="btn btn-square btn-primary rounded-circle m-1" href="m&a-auto.php"><span
                                            class="material-symbols-outlined">
                                            visibility
                                        </span></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <div class="meta mb-2">
                                    <span>September 25, 2023</span>
                                </div>
                                <a class="d-block" href="m&a-auto.php">
                                    <h3>Anonymous Company Seeks Merger for Automotive Innovation</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <div class="corner-buy"><span>TO BUY</span></div>
                                <img class="img-fluid" src="images/doctor1.jpg" alt="">
                                <div class="blog-overlay">
                                    <a class="btn btn-square btn-primary rounded-circle m-1"
                                        href="m&a-health-care.php"><span class="material-symbols-outlined">
                                            visibility
                                        </span></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <div class="meta mb-2">
                                    <span>September 25, 2023</span>
                                </div>
                                <a class="d-block" href="m&a-health-care.php">
                                    <h3>Anonymous Company Open to Strategic Merger Opportunities</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ url('/m&a') }}">All M&A</a>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container-fluid   ">
            <div class="row d-flex align-items-center " data-wow-delay="0.1s">



                <div class="col-md-6 p-0 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <div class="image hover-effect img-container  ">
                        <div style=" transform: translate(20px,10px);" class=" rounded-circle shadow c-bg-fouth">
                            <img style="transform: translate(-20px, -10px); " alt=""
                                src="images/bangkok_illus1.jpg" class="img-fluid rounded-circle ">
                        </div>
                    </div>
                </div>


                <div class="col-md-6 pr-md-5 py-md-5 order-first order-md-last section wow fadeIn"
                    data-wow-delay="0.5s">
                    <div class="split-box  center-block container-padding equalheight">
                        <div class="heading-title padding">
                            {!! @$detail_first->detail !!}
                            <a href="{{ url('/about') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
    </section>

    <section>
        <div class="container-fluid
                    c-bg-secondary py-5">
            <div class="container pb-5 heading-section">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s">
                    <span class="subheading mb-2">Updated Content to boost your business growth</span>
                    <h2 class="mb-5">Blogs</h2>
                </div>
                <div class="row g-5 gx-4">
                    @if (@$blog)
                        @foreach ($blog->data as $i => $v)
                            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp"
                                data-wow-delay="0.{{ $i }}s">
                                <div class="blog-item">
                                    <div class="position-relative">

                                        <img class="img-fluid" src="{{ $v->cover }}" alt="">
                                        <div class="blog-overlay">
                                            <a class="btn btn-square btn-primary rounded-circle m-1"
                                                href="{{ $v->url }}">

                                                <i class="far fa-eye fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center p-3 blog-card-text">
                                        <div class="meta mb-2">
                                            @php
                                                $dateString = $v->publish;
                                                $dateTime = new DateTime($dateString);
                                                $formattedDate = $dateTime->format('F j, Y');
                                            @endphp

                                            <span>{{ $formattedDate }}</span>
                                        </div>
                                        <a class="d-block" href="{{ $v->url }}">
                                            <h3>{{ $v->name }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href={{ url('/blog') }}>All Blogs</a>
            </div>
        </div>
    </section>
    @php
        $address = \App\Models\AddressMd::all();
    @endphp
    @if ($address->count() > 0)
        @foreach ($address as $k => $v)
            {!! $v->map !!}
        @endforeach
    @endif

    @include("$folder_prefix/footer")

    <!-- Scripts -->




    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>


    {{-- <script>
        const swiper = new Swiper('.bannerSwiper', {
            loop: true,
            speed: 500,

            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            }
        });

        $('.our_client').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4500,
            cssEase: 'linear',
            pauseOnHover: true,
            responsive: [{
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    </script> --}}
</body>

</html>
