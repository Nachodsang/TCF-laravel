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



</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    @include(config('web.folder_prefix') . '/header')
    @include(config('web.folder_prefix') . '/banner')

    {{-- <section class="bg bg-01">
        <div id="about" class="about section">
            <div class="container-xxl py-6">
                {!! @$detail_first->detail !!}
            </div>
        </div>

        <div id="service" class="service section">
            <div class="container-xxl py-6">
                <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="text-uppercase">Service</h4>
                </div>
                <br />
                <div class="row g-5 d-flex justify-content-center">
                    @if ($service->count() > 0)
                        @foreach ($service as $k => $v)
                            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ url("$v->url") }}" class="service-img">
                                    <div class="hover-14">
                                        <figure><img src="{{ url($v->image) }}" class="img-fluid"
                                                alt="{{ $v->image_alt }}" title="{{ $v->image_title }}">
                                        </figure>
                                    </div>
                                    <h5 class="text-center my-3">{{ $v->service }}</h5>
                                </a>
                            </div>
                        @endforeach
                    @else
                        @for ($i = 0; $i < 3; $i++)
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="hover-14">
                                    <figure>
                                        <img src="{{ url('images/no-cover.jpg') }}" class="img-fluid"
                                            alt="Nankai Express(Thailand) Co., Ltd.">
                                    </figure>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ url('service') }}" class="btn btn-primary">View More>></a>
                </div>
            </div>
        </div>

        <div id="" class=" section">
            <div class="container-xxl py-6">
                <div class="">
                    {!! @$detail_secondary->detail !!}
                </div>
            </div>
        </div>

        @include(config('web.folder_prefix') . '/client')

        <div class="container-xxl">
            <hr>
        </div>

        <div id="blog" class="blog section">
            <div class="container-xxl py-6">
                <div class="section-heading wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="text-uppercase">blog</h4>
                </div>
                <br />
                <div class="row g-5 d-flex justify-content-center">
                    @if (@$blog)
                        @foreach ($blog->data as $k => $v)
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.{{ $k }}s">
                                <a href="{{ $v->url }}" class="blog-img">
                                    <div class="hover-14">
                                        <figure>
                                            <img src="{{ $v->cover }}" class="img-fluid">
                                        </figure>
                                    </div>
                                    <h5 class="my-3 text-center">{{ $v->name }}</h5>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ url('blog') }}" class="btn btn-primary">View More>></a>
                </div>
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container-fluid section">
            <div class="container ">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 heading-section wow fadeIn" data-wow-delay="0.1s ">
                        <div class="subheading mb-2">TOKYO CONSULTING GROUP</div>
                        <h2 class="mb-4">Our Services</h2>
                        <p class="mb-4">We have an integrated service philosophy which allows us to provide the best
                            service by selecting the exact expertise needed for each project from our experienced staff.
                            Thus, we can deliver the best service possible, from accounting and tax consulting work, to
                            legal and cultural education about customs and regulations in Thailand. Throughout the wide
                            range of services we provide, our commitment to our clients is absolute, and we focus on
                            providing additional value to every engagement. It is our ultimate goal and wish that our
                            clients become increasingly successful, and contribute to society in an effective way
                            through our support.</p>
                        <a class="btn btn-primary " href="service.php">All Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                        <div style="min-height:450px;"
                                            class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fas fa-handshake fa-3x"></i>
                                            </div>
                                            <h3 class="mb-3">Accounting & Tax</h3>
                                            <p>With our constant support your business in Thailand,we guarantee an
                                                accurate and timely provision of the records of all the transactions.
                                            </p>

                                            <a class="btn px-3 mt-auto mx-auto" href="m&a.php">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s ">
                                        <div style="min-height:450px;"
                                            class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fas fa-seedling fa-3x"></i>
                                            </div>
                                            <h3 class="mb-3">Legal Services</h3>
                                            <p> Tokyo Consulting Firm is composed of highly experienced professionals
                                                who specialize in establishing and registering offices and parent
                                                companies in Thailand.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="service-consulting.php">Read
                                                More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s ">
                                        <div style="min-height:450px;"
                                            class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fas fa-seedling fa-3x"></i>
                                            </div>
                                            <h3 class="mb-3">Audit</h3>
                                            <p> Tokyo Consulting Firm is composed of highly experienced professionals
                                                who specialize in establishing and registering offices and parent
                                                companies in Thailand.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="service-consulting.php">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-top-10">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s ">
                                        <div style="min-height:450px;"
                                            class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fas fa-file-invoice-dollar fa-3x"></i>
                                            </div>
                                            <h3 class="mb-3">Human Resource</h3>
                                            <p>We provide consulting and advising services in various types of
                                                businesses and industries for foreign and prospective entities setting
                                                business in Thailand. </p>

                                            <a class="btn px-3 mt-auto mx-auto" href="service-accounting.php">Read
                                                More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.7s ">
                                        <div style="min-height:450px;"
                                            class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fas fa-stream fa-3x"></i>
                                            </div>
                                            <h3 class="mb-3">M&A / IPO</h3>
                                            <p>Mergers and acquisitions have a profitable side that can create
                                                potentially enormous profits for a company, and expose the business to a
                                                myriad of financial resources. </p>
                                            <a class="btn px-3 mt-auto mx-auto" href="service.php">Read More</a>
                                        </div>
                                    </div>
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
                <a class="btn btn-primary" href="m&a.php">All M&A</a>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container-fluid   ">
            <div class="row d-flex align-items-center ">
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
                            <div class="col-md-12 heading-section">
                                <span class="subheading mb-2">Tokyo Consulting Group</span>
                                <h2 class="mb-4">Expanding into Thailand</h2>
                                <p>As a market opportunity, Thailand geographic has propelled the maquiladora industry
                                    near the U.S.- Thailand border and currently gives a vary of businesses an
                                    alternative to Asia-based manufacturing and opportunities to sell into the supply
                                    chain. Some of Thailand most promising sectors include: agribusiness; auto parts &
                                    services; education services; energy; environmental; franchising; housing &
                                    construction; packaging equipment; plastics and resins; security & safety equipment
                                    and services; technology sectors; transportation infrastructure equipment and
                                    services; travel & tourism services and the agricultural sector. To do business in
                                    Thailand it is key to develop and maintain close relationships with clients and
                                    partners. Thailand prefer direct communication such as telephone calls or
                                    face-to-face meetings.</p>
                                <p>Thailand is a signatory of at least fifteen international treaties, including the
                                    Paris Convention for the Protection of Industrial Property, NAFTA, and the WTO
                                    Agreement on Trade-related Aspects of Intellectual Property Rights. Although
                                    Thailand signed the Patent Cooperation Treaty in Geneva, Switzerland in 1994, which
                                    allows for simplified patent registration procedure when applying for patents in
                                    more than one country at the same time, it is necessary to register any patent or
                                    trademark in Thailand in order to claim an exclusive right to any given product.</p>
                                <p>Here, in “Doing Business in Thailand”, a highly experienced team of Thailand
                                    Certified Public Accountants and tax lawyers are happy to offer an assistance with
                                    establishing your company’s presence in the Thailand market. We will help you with
                                    the incorporation procedure and registration with the relevant government agencies.
                                    Our highly professional specialists in the area of Thailand accounting and tax
                                    compliance will provide you with the best services and support that you will need
                                    after establishing your company here in Thailand.</p>
                                <p>For a better understanding of our services and how our team can help your company to
                                    take advantage of the business opportunities in Thailand, please select one of our
                                    areas of expertise on the menu on the left. You can also contact us today to
                                    schedule a free consultation with one of our expert staff.</p>
                                <a href="about.php" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section>
        <div class="container-fluid c-bg-secondary  py-5">
            <div class="container pb-5 heading-section">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s">
                    <span class="subheading mb-2">Accounting Content</span>
                    <h2 class="mb-5">Blogs</h2>
                </div>
                <div class="row g-5 gx-4">
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative ">
                                <!-- <div class="corner-sale"><span>TO SALE</span></div> -->
                                <img class="img-fluid" src="images/blog-011.jpg" alt="">
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
                                    <h3>Decoding Debits and Credits: Navigating the Basics of Accounting</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <!-- <div class="corner-sale"><span>TO SALE</span></div> -->
                                <img class="img-fluid" src="images/blog-022.jpg" alt="">
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
                                    <h3>Beyond the Numbers: Unraveling the Stories Hidden in Financial Statements</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <!-- <div class="corner-buy"><span>TO BUY</span></div> -->
                                <img class="img-fluid" src="images/blog-033.jpg" alt="">
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
                                    <h3>Tax Talk: Demystifying the Complexities of Income Tax Accounting</h3>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="blogs.php">All Blogs</a>
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
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/active.js"></script>
    <script src="js/wow.min.js"></script>



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
