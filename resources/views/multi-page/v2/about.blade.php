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
    <title>About Us - Tokyo Consulting Firm</title>
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    @include(config('web.folder_prefix') . '/header')

    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2">
                            <a href="{{ url('/') }}">Home <span class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a>
                        </span> <span>About Us</span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section class="half-section my-4">
        <div class="container-fluid template-container ">
            {!! @$row->detail_th !!}
        </div>

    </section>
    {{-- company philosophy --}}
    <section class="why-us section philosophy c-bg-secondary"
        style="background-image: url('images/bangkok-city.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center center; position: relative;">

        <!-- Dark overlay -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: -1;">
        </div>

        <div class="container" data-aos="fade-up">
            <div class="section-title heading-section d-flex flex-column align-items-center text-white">
                <span class=" mb-3">OUR PHILOSOPHY</span>
                <span class="h1 mb-2 text-uppercase font-weight-bold " style="font-weight: 300;">What we give is
                    What we get
                </span>
                <span class="h1 mb-2 text-uppercase font-weight-bold" style="font-weight: 300;">
                    Every issue comes from me
                </span>
                <span class="h1 mb-3 text-uppercase font-weight-bold" style="font-weight: 300;">
                    Expand our responsibility</span>
            </div>
        </div>
    </section>

    <!-- ======= Why Us Section ======= -->
    {{-- <section class="why-us section  c-bg-secondary ">
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
    </section> --}}

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







</body>

</html>
