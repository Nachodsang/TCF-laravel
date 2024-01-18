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
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ config('web.folder_prefix') }}/css/animated.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/custom.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/slick/slick.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/slick/slick-theme.css" rel="stylesheet">
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tokyo Consulting group</title>
    <link href="images/logo/TCGicon.ico" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    @include(config('web.folder_prefix') . '/header')

    {{-- <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax"
            data-bg-img="{{ config('web.folder_prefix') }}/images/image_12092023-1318481694499528684.jpeg"
            data-bg-opacity="1"
            style="background-image: url(&quot;images/image_12092023-1318481694499528684.jpeg&quot;); opacity: 1;">
        </div>
        <div class="overlay-color" data-bg-opacity=".75" style="opacity: 0.75;"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">About US</h1>
                <div class="row">
                    <div class="col-12 offset-lg-2 col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <p class="text-uppercase">{{ @$row->description_th }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg bg-02 pt-5">
        <div class="container-xxl py-6">
            {!! @$row->detail_th !!}
        </div>
        @include(config('web.folder_prefix') . '/client')
    </section> --}}


    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <span
                                    class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a></span> <span>About Us</span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section class="half-section">
        <div class="container-fluid">
            {!! @$row->detail_th !!}
            {{-- <div class="row">
                <div class="col-lg-6 p-0">
                    <div style="transform: translateX(20px); background-color:rgba(219,126,55,0.4);"
                        class="image hover-effect  rounded-circle img-container shadow">
                        <img style="transform: translateX(-20px);" alt="" src="images/about-us.jpg"
                            class="rounded-circle  img-fluid equalheight">
                    </div>
                </div>
                <div class="col-md-6 pr-md-5 py-md-5 order-first order-md-last section wow fadeIn"
                    data-wow-delay="0.5s">
                    <div class="split-box  center-block container-padding equalheight">
                        <div class="heading-title padding">
                            <div class="col-md-12 heading-section">
                                <span class="subheading mb-2">Tokyo consulting group</span>
                                <h2 class="">ABOUT US</h2>
                                <p class="mb-4">Tokyo Consulting Firm is global accounting firm & CPA firm in Thailand
                                    and has over 700 clients all over the world. TCF Thailand provides professional
                                    services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services
                                    and IT Services. With the current boom in investment from Japan, Tokyo Consulting
                                    strives to provide quality service to its clients and serve as a bridge all over the
                                    world.</p>
                                <h3 class="mb-2">WHAT IS OUR DIFFERENTIATION?</h3>
                                <p>We can support as the position of external CFO
                                    We can offer by overwhelmingly reasonable price than major audit firm in Thailand
                                    We can support one-stop service – accounting, taxation, labor and legal affairs.

                                </p>
                                <h3 class="">LEADING OVER 80% OF OUR CLIENTS TO POSITIVE CASH-FLOW.</h3>
                                <p class="mb-4">We always provide you up-to-date information by “Wiki-Investment”, the
                                    data base of foreign direct investment.
                                    Rapid response is possible.
                                    We lead your business to success by using our original Monthly Strategic Report
                                    We can help your reporting to the parent company.
                                    We can offer multi courtiers service because we have 44 locations in 27 countries.
                                    We can provide Employee Evaluation System that promote sales and productivity in
                                    organization.</p>
                                <h3 class="">BUSINESS IN THAILAND</h3>
                                <p class="mb-4">As a market opportunity, Thailand’s geographic has propelled the
                                    maquiladora industry near the U.S.- Thailand border and currently gives a vary of
                                    businesses an alternative to Asia-based manufacturing and opportunities to sell into
                                    the supply chain. Some of Thailand’s most promising sectors include: agribusiness;
                                    auto parts & services; education services; energy; environmental; franchising;
                                    housing & construction; packaging equipment; plastics and resins; security & safety
                                    equipment and services; technology sectors; transportation infrastructure equipment
                                    and services; travel & tourism services and the agricultural sector. To do business
                                    in Thailand it is key to develop and maintain close relationships with clients and
                                    partners. Thailand’s prefer direct communication such as telephone calls or
                                    face-to-face meetings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>


    <!-- ======= Why Us Section ======= -->
    <section class="why-us section  c-bg-secondary ">
        <div class="container" data-aos="fade-up">

            <div class="section-title heading-section">
                <span class="subheading mb-2">OUR ENGAGEMENT</span>
                <h3 class="h2 mb-5">Action Guidelines（Ten codes of a capable person）</h3>
            </div>

            <div class="row mb-4">

                <div class="col-lg-4">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>A person who can produce a consistent effort</h4>
                        <p>We learn throughout our entire life, so persistent effort is very important. No one should be
                            satisfied with what he or she has. Our business environment is ever-changing, and if we
                            cannot cope with such changes, it is time for us to retire as specialists.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>A person who is quick in responding to clients</h4>
                        <p>The reason why clients ask questions is because they want immediate advice. We must answer
                            the clients’ questions right then and there. For that, it is important to be sufficiently
                            prepared.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4>A person who is quick in taking decisions</h4>
                        <p>When people take a long time to make a decision, it means that they are perplexed. It often
                            happens that people take wrong decisions at such times. The appropriateness of a decision is
                            not proportional to the time taken to take said decision. It is very important to take
                            decisions immediately.</p>
                    </div>
                </div>

            </div>
            <div class="row mb-4">

                <div class="col-lg-4">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="100">
                        <span>04</span>
                        <h4>A person with strategy for work</h4>
                        <p>It is very important to have a strategy for any kind of work. If we do not have strategy, we
                            will only get swayed by the work, and we will eventually not be able to achieve anything. We
                            should always set our goals, and decide what we have to do to attain them. We should be
                            aware of the most suitable way of working in the present situation. A person with strategy
                            is a person who can do an excellent job in a short time.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="200">
                        <span>05</span>
                        <h4>A person who can positively face his or her first job</h4>
                        <p>Anyone can do work that they are experienced in. The real ability of a person will be tested
                            in his or her first job, and there will also be times when significant improvement will come
                            about. We cannot use inexperience as an excuse. A person who can face his or her first job
                            positively is a person who can develop faster than others.
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="300">
                        <span>06</span>
                        <h4> A person who can add value at work</h4>
                        <p>We cannot get rewards from work that has no added value. We should take high rewards by
                            giving high added value to our clients. The final evaluation from clients is the reward we
                            get. No matter how well we think we’ve done our job, if we do not get rewards from clients,
                            it means that we could not meet their needs and it becomes nothing more than
                            self-satisfaction.

                        </p>
                    </div>
                </div>

            </div>
            <div class="row mb-4">

                <div class="col-lg-4">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="100">
                        <span>07</span>
                        <h4>A person who can work enjoyably</h4>
                        <p>It is very important to find delight at work. If we cannot find delight, be it in any
                            difficult job, it is just a waste of time, and we end up getting nothing. A person with lots
                            of complaints is definitely not able to do his or her job properly. Among successful people,
                            there are not many who complain. This is because, upon facing difficulty, a successful
                            person immediately thinks of a solution to the problem, instead of complaining.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="200">
                        <span>08</span>
                        <h4>A person who knows his or her position</h4>
                        <p>We must be able to analyze our knowledge and level of competency objectively. Further, we
                            should always give 120% at work, compared to the present. We cannot get anything if we work
                            from within the limits of our knowledge and ability. We should objectively analyze whether
                            our present job will help developing our ability further, and must plan out ways to develop
                            our ability.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="300">
                        <span>09</span>
                        <h4> A person who can act differently than others</h4>
                        <p>We cannot do an original work just by imitating other people’s way of working. We should
                            discover the originality in ourselves, and in order to develop a product / service, we must
                            think with new ideas and not be stuck with stereotypical ones. We should not be satisfied
                            with the present situation, but instead constantly develop new ways and create new paths.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row mb-4">

                <div class="col-lg-4">
                    <div class="box card-about" data-aos="zoom-in" data-aos-delay="100">
                        <span>10</span>
                        <h4>A person with a philosophy for work</h4>
                        <p>Can we clearly define what we are working for, and what motives we are living with? People
                            ultimately live either for themselves or for others. People who have the belief, philosophy,
                            and will to live their lives for the sake of others (clients and society) can be said to be
                            the real professionals.</p>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Why Us Section -->

    @include(config('web.folder_prefix') . '/footer')


    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>

    <!-- Active -->

    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>

    <!-- Breadcrumbs -->

    <script src="{{ config('web.folder_prefix') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>


    <!--Equal-Heights-->
    <script src="{{ config('web.folder_prefix') }}/js/jquery.matchHeight-min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/functions.js"></script>



    {{-- <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/animation.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>
    <script type="text/javascript">
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
