<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include(config('web.folder_prefix') . '/seoTag')
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="https://www.tokyoconsultingfirm.com/thailand/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="TCF Thailand -" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - TCF Thailand" />
    <meta property="og:description"
        content="Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services." />
    <meta property="og:url" content="https://www.tokyoconsultingfirm.com/thailand/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Home - TCF Thailand" />
    <meta name="twitter:description"
        content="Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services." />
    <script type="application/ld+json" class="aioseo-schema">
            {"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#website","url":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/","name":"TCF Thailand","inLanguage":"en-US","publisher":{"@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#organization"},"potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/?s={search_term_string}"},"query-input":"required name=search_term_string"}},{"@type":"Organization","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#organization","name":"TCF Thailand","url":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/"},{"@type":"BreadcrumbList","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#listItem","position":1,"item":{"@type":"WebPage","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/","name":"Home","description":"Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services.","url":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/"},"nextItem":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#listItem"},{"@type":"ListItem","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#listItem","position":2,"item":{"@type":"WebPage","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/","name":"Home","description":"Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services.","url":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/"},"previousItem":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#listItem"}]},{"@type":"WebPage","@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#webpage","url":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/","name":"Home - TCF Thailand","description":"Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services.","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#website"},"breadcrumb":{"@id":"https:\/\/www.tokyoconsultingfirm.com\/thailand\/#breadcrumblist"},"datePublished":"2014-04-30T15:47:48+00:00","dateModified":"2022-05-25T04:51:06+00:00"}]}
        </script>
</head>


<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    @include(config('web.folder_prefix') . '/header')
    @include(config('web.folder_prefix') . '/banner')
    {{-- @include(config('web.folder_prefix') . '/cookies') --}}

    <section>
        <div class="container-fluid section">
            <div class="container ">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 heading-section wow fadeIn" data-wow-delay="0.1s ">
                        <h1 class="subheading mb-2">TOKYO CONSULTING FIRM</h1>
                        <h2 class="h2 mb-4">Our Services</h2>
                        <p class="mb-4" style="white-space: pre-line; overflow-wrap: break-word;">
                            {{ trim(@$about_service->about_service_home) }}</p>
                        <a class="btn btn-primary " href="{{ url('/service') }}">All Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-collection">
                            <div class="row g-4">
                                {{-- @for ($i = 0; $i < count(@$service_cats) / 2; $i++) --}}
                                @for ($i = 0; $i < count(@$service_cats); $i++)
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                        <div style="min-height:200px;"
                                            class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                {!! $service_cats[$i]->icon !!}
                                            </div>
                                            <h3 class="h3 mb-3"> {{ $service_cats[$i]->name }}
                                            </h3>
                                            <p>{{ $service_cats[$i]->description }}</p>
                                            @if ($service_cats[$i]->type === 'sub-page')
                                                <a class="btn px-3 mt-auto mx-auto"
                                                    href="{{ url('/service/category/' . $service_cats[$i]->url) }}">Read
                                                    More</a>
                                            @else
                                                <a class="btn px-3 mt-auto mx-auto"
                                                    href="{{ url('/' . $service_cats[$i]->url) }}">Read
                                                    More</a>
                                            @endif
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                        <div class="row g-4 card-collection-lg">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    {{-- @for ($i = 0; $i < count(@$service_cats) / 2; $i++) --}}
                                    @for ($i = 0; $i < count(@$service_cats); $i++)
                                        @if ($i % 2 == 0)
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                                <div style="min-height:200px;"
                                                    class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                                    <div class="service-icon btn-square">
                                                        {!! $service_cats[$i]->icon !!}
                                                    </div>
                                                    <h3 class="h3 mb-3"> {{ $service_cats[$i]->name }}
                                                    </h3>
                                                    <p>{{ $service_cats[$i]->description }}</p>
                                                    @if ($service_cats[$i]->type === 'sub-page')
                                                        <a class="btn px-3 mt-auto mx-auto"
                                                            href="{{ url('/service/category/' . $service_cats[$i]->url) }}">Read
                                                            More</a>
                                                    @else
                                                        <a class="btn px-3 mt-auto mx-auto"
                                                            href="{{ url('/' . $service_cats[$i]->url) }}">Read
                                                            More</a>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endfor

                                </div>
                            </div>
                            <div class="col-md-6 padding-top-10">
                                <div class="row g-4">
                                    {{-- @for ($i = round(count(@$service_cats) / 2); $i < count($service_cats); $i++) --}}
                                    @for ($i = 0; $i < count(@$service_cats); $i++)
                                        @if ($i % 2 == 1)
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s ">
                                                <div style="min-height:200px;"
                                                    class="shadow service-item d-flex flex-column justify-content-center text-center rounded">
                                                    <div class="service-icon btn-square">
                                                        {!! $service_cats[$i]->icon !!}
                                                    </div>
                                                    <h3 class="h3 mb-3">
                                                        {{ $service_cats[$i]->name }}
                                                    </h3>
                                                    <p>{{ $service_cats[$i]->description }}</p>
                                                    @if ($service_cats[$i]->type === 'sub-page')
                                                        <a class="btn px-3 mt-auto mx-auto"
                                                            href="{{ url('/service/category/' . $service_cats[$i]->url) }}">Read
                                                            More</a>
                                                    @else
                                                        <a class="btn px-3 mt-auto mx-auto"
                                                            href="{{ url('/' . $service_cats[$i]->url) }}">Read
                                                            More</a>
                                                    @endif
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
                    <h2 class=" h2 mb-5">Mergers and Acquisitions (M&A)</h2>
                </div>

                <div class="row g-5 gx-4 hidden" id="ma-narrow">
                    @if (@$ma)
                        @foreach ($ma->data as $i => $v)
                            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp"
                                data-wow-delay="0.{{ $i }}s">
                                <div class="blog-item">
                                    <div class="position-relative">

                                        <img class="img-fluid blog-card-img" src="{{ $v->cover }}"
                                            alt="">
                                        <div class="blog-overlay">
                                            <a class="btn btn-square btn-primary rounded-circle m-1"
                                                href="{{ $v->url }}" target="_blank">

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
                                        <a class="d-block" href="{{ $v->url }}" target="_blank">
                                            <h3 class="h3">{{ $v->name }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="row g-5 gx-4 hidden" id="ma-wide">
                    @if (@$ma)
                        @foreach ($ma->data as $i => $v)
                            @if ($i < 3)
                                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp"
                                    data-wow-delay="0.{{ $i }}s">
                                    <div class="blog-item">
                                        <div class="position-relative">
                                            @if ($v->opportunity == 1)
                                                <div class='corner-buy'><span>TO BUY</span></div>
                                            @else
                                                <div class='corner-sale'><span>TO SELL</span></div>
                                            @endif
                                            <img class="img-fluid blog-card-img" src="{{ $v->cover }}"
                                                alt="">
                                            <div class="blog-overlay">
                                                <a class="btn btn-square btn-primary rounded-circle m-1"
                                                    target="_blank" href="{{ $v->url }}"> <i
                                                        class="far fa-eye fa-lg"></i></a>
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
                                            <a class="d-block" href="{{ $v->url }}" target="_blank">
                                                <h3 class="h3">{{ $v->name }}</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ url('/m&a') }}">All M&A</a>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container-fluid   ">
            <div class="row d-flex align-items-center container mx-auto " data-wow-delay="0.1s">



                <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="split-box  center-block container-padding equalheight template-container">
                        <div class="heading-title padding">
                            <div class="pb-5">

                                {!! @$detail_first->detail !!}
                            </div>

                            <div class=" text-center ">
                                <a href="{{ url('/about') }}" class="btn btn-primary">Learn More</a>
                            </div>

                        </div>
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
                    <h2 class="h2 mb-5">Blogs</h2>
                </div>
                <div class="row g-5 gx-4 hidden" id="blog-narrow">
                    @if (@$blog)
                        @foreach ($blog->data as $i => $v)
                            <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp"
                                data-wow-delay="0.{{ $i }}s">
                                <div class="blog-item">
                                    <div class="position-relative">

                                        <img class="img-fluid blog-card-img" src="{{ $v->cover }}"
                                            alt="">
                                        <div class="blog-overlay">
                                            <a class="btn btn-square btn-primary rounded-circle m-1"
                                                href="{{ $v->url }}" target="_blank">

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
                                        <a class="d-block" href="{{ $v->url }}" target="_blank">
                                            <h3 class="h3">{{ $v->name }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="row g-5 gx-4 hidden" id="blog-wide">

                    @if (@$blog)
                        @foreach ($blog->data as $i => $v)
                            @if ($i < 3)
                                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp"
                                    data-wow-delay="0.{{ $i }}s">
                                    <div class="blog-item">
                                        <div class="position-relative">

                                            <img class="img-fluid blog-card-img" src="{{ $v->cover }}"
                                                alt="">
                                            <div class="blog-overlay">
                                                <a class="btn btn-square btn-primary opacity-75  rounded-circle m-1"
                                                    href="{{ $v->url }}" target="_blank">

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
                                            <a class="d-block" href="{{ $v->url }}" target="_blank">
                                                <h3 class="h3">{{ $v->name }}</h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
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
            @if ($k < 1)
                {!! $v->map !!}
            @endif
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

    <script>
        const checkScreenWidth = () => {

            if (window.innerWidth > 990) {
                $("#blog-narrow").addClass('hidden')
                $("#blog-wide").removeClass('hidden')
                $("#ma-narrow").addClass('hidden')
                $("#ma-wide").removeClass('hidden')
            } else {
                $("#blog-narrow").removeClass('hidden')
                $("#blog-wide").addClass('hidden')
                $("#ma-narrow").removeClass('hidden')
                $("#ma-wide").addClass('hidden')
            }



        }
        window.addEventListener('resize', checkScreenWidth);
        window.onload = checkScreenWidth

        // check for cookie then
        // setTimeout(() => {
        //     $('#cookies').removeClass('d-none')
        //     $('#cookies').addClass('d-block')
        // }, 3000);

        // $('#cookiesBtn').on('click', (e) => {

        //     $('#cookies').removeClass('d-block')
        //     $('#cookies').addClass('d-none')
        // });
    </script>



</body>

</html>
