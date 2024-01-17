<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nankai Express (Thailand) Co., Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="นำเข้า-ส่งออก, คลังสินค้า, การขนส่ง, บริการด้านโลจิสติกส์" name="keywords">
    <meta content="Is service facilitator about logistics (Import-Export, Warehouse,Transportation) and include about install machinery by specialist." name="description">
    <meta content="{{ url('/') }}" name="base">
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
        <div class="overlay-photo-image-bg parallax" data-bg-img="images/image_11092023-1421591694416919974.jpeg"
            data-bg-opacity="1"
            style="background-image: url(&quot;images/image_11092023-1421591694416919974.jpeg&quot;); opacity: 1;">
        </div>
        <div class="overlay-color" data-bg-opacity=".75" style="opacity: 0.75;"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">SERVICE</h1>
                <div class="row">
                    <div class="col-12 offset-lg-2 col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <p class="text-uppercase">We have a global network to facilitate our customer. However, The
                            aim of company is develop about logistics service all the time for customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg bg-02">
        <div id="service" class="service section">
            <div class="container-xxl py-6">
                @if (@$links['allPage'] > 0)
                    @foreach ($service as $i => $v)
                        <div class="row g-5 d-flex justify-content-center py-4">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ url("service/$v->url") }}" class="service-img">
                                    <div class="hover-13 service-left">
                                        <figure>
                                            <img src="@if(@$v->image){{ url("$v->image") }}@else{{ url("images/no-image.jpg") }}@endif" class="img-fluid" alt="{{ @$v->image_alt }}" title="{{ @$v->image_title }}">
                                        </figure>
                                    </div>
                                </a>
                                <div class="post-logo">
                                    <img src="{{ config('web.folder_prefix') }}/images/logo/logo-nankai.png">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="section-heading mt-4">
                                    <a href="{{ url("service/$v->url") }}" class="service-img">
                                        <h4>{{ $v->service }}</h4>
                                    </a>
                                </div>
                                <p class="c-gray">{{ $v->details }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12 text-center">ไม่พบบริการ</div>
                @endif
                @php
                    $page = Request::get('page');
                    $prev = $page > 1 ? $page - 1 : 0;
                    $next = $page == '' ? 2 : $page + 1;
                    $prevPage = $page > 1 ? "service?page=$prev" : 'javascript:';
                    $nextPage = $page < $links['allPage'] ? "service?page=$next" : 'javascript:';
                @endphp
                @if (@$links['allPage'] > 1)
                    <div class="pagination-area mt-5">
                        <div class="container-xxl">
                            <div class="row d-flex justify-content-between">
                                <div class="col-auto">
                                    <a href="{{ $prevPage }}"class="prev-page @if ($prev == 0) d-none @endif">ก่อนหน้า</a>
                                </div>
                                <div class="col-auto">
                                    @if (@$links['allPage'])
                                        <select name="page" class="form-select form-select-sm paginate">
                                            @for ($i = 1; $i <= $links['allPage']; $i++)
                                                <option value="service?page={{ $i }}" @if (Request::get('page') == $i) selected @endif>
                                                    {{ $i }}
                                                </option>
                                            @endfor
                                        </select>
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <a href="{{ $nextPage }}"class="next-page font-weight-bold @if ($page >= $links['allPage']) d-none @endif">ถัดไป</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @include(config('web.folder_prefix') . '/footer')

    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/animation.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>
    <script>
        document.addEventListener('change',function(e){
            const paginate = e.target.closest('.paginate');
            if (paginate) {
                window.location.href = paginate.value;
            }
        })
    </script>

</body>

</html>
