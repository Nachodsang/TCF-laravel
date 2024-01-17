<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nankai Express (Thailand) Co., Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $detail->seo_keyword }}" name="keywords">
    <meta content="{{ $detail->seo_description }}" name="description">
    <base href="{{ url('/') }}">
    <link href="{{ config('web.folder_prefix') }}/images/logo/logo-nankai-ico.ico" rel="icon">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ config('web.folder_prefix') }}/css/animated.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/custom.css" rel="stylesheet">
</head>

<body>

    @include(config('web.folder_prefix') . '/header')

    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax"
            data-bg-img="{{ config('web.folder_prefix') }}/images/image_11092023-1421591694416919974.jpeg"
            data-bg-opacity="1"
            style="background-image: url(&quot;images/image_11092023-1421591694416919974.jpeg&quot;); opacity: 1;">
        </div>
        <div class="overlay-color" data-bg-opacity=".75" style="opacity: 0.75;"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">{{ $detail->service }}</h1>
                <div class="row">
                    <div class="col-12 offset-lg-2 col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <p class="text-uppercase">{{ $detail->seo_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg bg-02">
        <div id="service" class="service section">
            <div class="container-xxl py-6">
                <div class="row g-5">
                    <div class="col-12 offset-lg-3 col-lg-6 fadeInUp" data-wow-delay="0.1s">
                        <div>
                            <img src="@if(@$detail->image){{ url("$detail->image") }}@else{{ url("images/no-image.jpg") }}@endif" alt="{{ @$detail->image_alt }}" title="{{ @$detail->image_title }}"
                                class="img-fluid border-radius" width="100%">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="c-gray">
                            <p>{{ $detail->details }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @include(config('web.folder_prefix') . '/footer')

    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/animation.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>

</body>

</html>
