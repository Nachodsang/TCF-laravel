<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ url('/') }}">
    <title>Tokyo Consulting Firm</title>
    <link href="images/logo/TCGicon.ico" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
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
    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2">
                            <a href="{{ url('/') }}">Home <span class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a>
                        </span> <a href="{{ url('/consultant') }}">Our Consultants
                        </a></p>
                    <h1 class="mb-0 bread">{{ $consultant->name }}</h1>
                </div>
            </div>
        </div>
    </section>



    <!-- ======= Consultant Section ======= -->
    <section>
        <div class="section">
            <div class="container article">
                <div class="row justify-content-center align-items-stretch">
                    <article class="col-lg-8 order-lg-2 px-lg-5 ce-animate ">


                        {!! $consultant->detail !!}

                        <div class="post-single-navigation d-flex align-items-stretch">


                            @if ($next_consultant === $prev_consultant)
                                <a href="{{ url("/consultant/$next_consultant->url") }}"
                                    class="ml-2 w-50 text-right pl-4">
                                    <span class="d-block">Next Consultant <span class="material-symbols-outlined">
                                            arrow_forward_ios
                                        </span></span>
                                    {{ $next_consultant->name }}
                                </a>
                            @else
                                <a href="{{ url("/consultant/$prev_consultant->url") }}" class="mr-2 w-50 pr-4">
                                    <span class="d-block"><span class="material-symbols-outlined">
                                            arrow_back_ios
                                        </span> Previous Consultant</span>
                                    {{ $prev_consultant->name }}
                                </a>

                                <a href="{{ url("/consultant/$next_consultant->url") }}"
                                    class="ml-2 w-50 text-right pl-4">
                                    <span class="d-block">Next Consultant <span class="material-symbols-outlined">
                                            arrow_forward_ios
                                        </span></span>
                                    {{ $next_consultant->name }}
                                </a>
                            @endif

                        </div>

                    </article>



                    <div class="col-md-12 col-lg-1 order-lg-1 mt-4 mt-lg-0">
                        <div class="share sticky-share">
                            <div class="h6 ">Share</div>
                            <ul class="list-unstyled share-article">
                                <li>
                                    <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . url('/consultant/' . $consultant->url) }}"
                                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                            viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                        </svg></a>

                                </li>
                                <li>
                                    <a
                                        href="{{ 'https://twitter.com/intent/tweet?url=' . url('/consultant/' . $consultant->url) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" height="1em"
                                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                        </svg></a>
                                </li>
                                <li>
                                    <a
                                        href="{{ 'https://social-plugins.line.me/lineit/share?url=' . url('/consultant/' . $consultant->url) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" height="1em"
                                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0 order-lg-3">
                        <div class="text-center share contactus-block sticky-share">
                            <div class="h3 mb-3">Get a Quote</div>
                            <div class="mb-3">If You Have Any Query, Please Contact Us</div>
                            <form action="#">
                                <a href="{{ url('/contact') }}" value="Contact Us"
                                    class="btn btn-primary btn-block">Contact
                                    Us</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Detail Section -->


    @include(config('web.folder_prefix') . '/footer')

    <!-- Scripts -->


    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>


    <script src="{{ config('web.folder_prefix') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>

    <!-- Active -->
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>
    <!-- Breadcrumbs -->
    <script src="{{ config('web.folder_prefix') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>
    <!--Equal-Heights-->
    <script src="{{ config('web.folder_prefix') }}/js/jquery.matchHeight-min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/functions.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        < /body>

        <
        /html>
