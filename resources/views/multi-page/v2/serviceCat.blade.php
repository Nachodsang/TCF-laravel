<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ url('/') }}">
    <title>Tokyo Consulting Group</title>
    <link href="images/logo/TCGicon.ico" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">




</head>

<body>
    @include(config('web.folder_prefix') . '/header')



    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->


    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2">
                            <a href="{{ url('/') }}">Home <span class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a>
                        </span> <span>{{ $service_cat->service_cat_name }}</span></p>
                    <h1 class="mb-0 bread">{{ $service_cat->service_cat_name }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Service Section ======= -->
    <section class="section c-bg-secondary">
        <div class="">
            <div class="container ">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 heading-section wow fadeIn" data-wow-delay="0.1s">
                        {!! $service_cat->service_cat_detail !!}
                    </div>
                    <!--  -->

                    @foreach ($services as $k => $v)
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    {!! $v->icon !!}
                                </div>
                                <h3 class="mb-3">{{ $v->service }}</h3>
                                <p>{{ $v->description }}</p>

                                <a class="btn px-3 mt-auto mx-auto" href="{{ url("/service/$v->url") }}">Read
                                    More</a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section><!-- End Service Section -->

    @include(config('web.folder_prefix') . '/footer')






    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>

</body>

</html>
