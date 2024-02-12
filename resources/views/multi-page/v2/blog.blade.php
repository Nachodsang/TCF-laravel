<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="utf-8">
    <title>Nankai Express (Thailand) Co., Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="นำเข้า-ส่งออก, คลังสินค้า, การขนส่ง, บริการด้านโลจิสติกส์" name="keywords">
    <meta content="Is service facilitator about logistics (Import-Export, Warehouse,Transportation) and include about install machinery by specialist." name="description">
    <link href="{{ config('web.folder_prefix') }}/images/logo/logo-nankai-ico.ico" rel="icon">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ config('web.folder_prefix') }}/css/animated.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/custom.css" rel="stylesheet">
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Tokyo Consulting Firm</title>
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
                        </span> <span>Blogs</span></p>
                    <h1 class="mb-0 bread">Updated Contents for your Business</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Blog Section ======= -->
    <section class="section c-bg-secondary">

        <div class="container heading-section">
            <div class="mx-auto wow fadeIn" data-wow-delay="0.1s">
                <span class="subheading mb-2">Blog</span>
                <h2 class="h2 mb-4">Updated Content to boost your business growth</h2>
            </div>
            <div class="row g-5">
                @if (@$blogs->links->allPage > 0)
                    @foreach ($blogs->data as $i => $v)
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.{{ $i }}s">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <!-- <div class="corner-sale"><span>TO SALE</span></div> -->
                                    <img class="img-fluid" src="{{ $v->cover }}" alt="">
                                    <div class="blog-overlay">
                                        <a class="btn btn-square btn-primary rounded-circle m-1"
                                            href="{{ $v->url }}">
                                            {{-- <span class="material-symbols-outlined">
                                                visibility
                                            </span> --}}
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
                                        {{-- <span>September 25, 2023</span> --}}
                                        <span>{{ $formattedDate }}</span>
                                    </div>
                                    <a class="d-block" href="{{ $v->url }}">
                                        <h3>{{ $v->name }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.{{ $i }}s">
                            <a href="{{ $v->url }}" class="blog-img">
                                <div class="hover-14">
                                    <figure><img src="{{ $v->cover }}" class="img-fluid"></figure>
                                </div>
                                <h5 class="my-3">{{ $v->name }}</h5>
                            </a>
                        </div> --}}
                    @endforeach
                @else
                    <div class="col-lg-12 text-center">ไม่พบทความ</div>
                @endif

            </div>
            @php
                $page = Request::get('page');
                $prev = $page > 1 ? $page - 1 : 0;
                $next = $page == '' ? 2 : $page + 1;
                $prevPage = $page > 1 ? "blog?page=$prev" : 'javascript:';
                $nextPage = $page < @$blogs->links->allPage ? "blog?page=$next" : 'javascript:';
            @endphp
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-pagination text-center mt-5">
                        @if (@$blogs->links->allPage > 0)
                            {{-- Previous Page Link --}}
                            @if ($page > 1)
                                <a href="blog?page={{ $page - 1 }}" class="prev-page"><i
                                        class="fas fa-chevron-left"></i></a>
                            @endif

                            {{-- Pagination Links --}}
                            @for ($i = 1; $i <= $blogs->links->allPage; $i++)
                                <a href="blog?page={{ $i }}"
                                    class="@if (Request::get('page') == $i) active @endif">{{ $i }}</a>
                            @endfor

                            {{-- Next Page Link --}}
                            @if ($page < $blogs->links->allPage)
                                <a href="blog?page={{ $page + 1 }}" class="next-page"><i
                                        class="fas fa-chevron-right"></i></a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->





    @include(config('web.folder_prefix') . '/footer')

    {{-- <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/animation.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script> --}}

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

    <script>
        document.addEventListener('change', function(e) {
            const paginate = e.target.closest('.paginate');
            if (paginate) {
                window.location.href = paginate.value;
            }
        })
    </script>
</body>

</html>
