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
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/custom.css" rel="stylesheet">
    <style>
        iframe {
            height: 200px !important;
        }
    </style>
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultants - TCF Thailand</title>
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
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
                        </span> <span>Consultant</span></p>
                    <h1 class="mb-0 bread">Consultant</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid c-bg-secondary section">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 heading-section wow fadeIn" data-wow-delay="0.1s">
                        <div class="subheading mb-2">Our Consultants</div>
                        <h2 class="mb-4 h2">Consultant Introduction</h2>
                        <p class="mb-4">{{ $about->consultant_page_description }}</p>
                        <a class="btn btn-primary" href="{{ url('/service') }}">Our Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    @for ($i = 0; $i < count($consultants) / 2; $i++)
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                            <div style="min-height:300px"
                                                class="service-item d-flex flex-column justify-content-center text-center rounded"
                                                style=" transform:translateX(6px)">
                                                <div class="service-icon btn-square shadow c-bg-primary">
                                                    <img src="{{ $consultants[$i]->image }}"
                                                        alt="{{ $consultants[$i]->image_alt }}" class="rounded-circle"
                                                        style="width:100%; height:100%; transform:translateX(-6px)" />
                                                </div>

                                                <h3 class="h3">{{ $consultants[$i]->name }}</h3>
                                                <span class="">{{ $consultants[$i]->role }}</span>

                                                <p
                                                    style=" text-overflow: ellipsis;
                -webkit-line-clamp:5;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                                    {{ $consultants[$i]->description }}</p>
                                                <a class="btn px-3 mt-auto mx-auto"
                                                    href="{{ url('/consultant/' . $consultants[$i]->url) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    @endfor


                                </div>
                            </div>
                            <div class="col-md-6 pt-md-4">
                                <div class="row g-4">
                                    @for ($i = count($consultants) / 2; $i < count($consultants); $i++)
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                            <div style="min-height:300px"
                                                class="service-item d-flex flex-column justify-content-center text-center rounded"
                                                style=" transform:translateX(6px)">
                                                <div class="service-icon btn-square shadow c-bg-primary">
                                                    <img src="{{ $consultants[$i]->image }}"
                                                        alt="{{ $consultants[$i]->image_alt }}" class="rounded-circle"
                                                        style="width:100%; height:100%; transform:translateX(-6px)" />
                                                </div>

                                                <h3 class="mb-3 h3">{{ $consultants[$i]->name }}</h3>
                                                <span class="">{{ $consultants[$i]->role }}</span>
                                                <p
                                                    style=" text-overflow: ellipsis;
                -webkit-line-clamp:5;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                                    {{ $consultants[$i]->description }}</p>
                                                <a class="btn px-3 mt-auto mx-auto"
                                                    href="{{ url('/consultant/' . $consultants[$i]->url) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    @endfor

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include(config('web.folder_prefix') . '/footer')

    {{-- <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script> --}}



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.validate.min.js"></script>

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




</body>

</html>
