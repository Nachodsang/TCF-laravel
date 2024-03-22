<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include(config('web.folder_prefix') . '/seoTag')
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
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
    {{-- @include(config('web.folder_prefix') . '/cookies') --}}

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
                        <p class="mb-4" style="white-space: pre-line; overflow-wrap: break-word;">
                            {{ @$about->consultant_page_description }}</p>
                        <a class="btn btn-primary" href="{{ url('/service') }}">Our Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4 card-collection">
                            @for ($i = 0; $i < count($consultants); $i++)
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div style="min-height:300px"
                                        class="service-item d-flex flex-column justify-content-center text-center rounded"
                                        style=" transform:translateX(6px)">
                                        <div class="service-icon btn-square shadow c-bg-primary">
                                            <img src="{{ $consultants[$i]->image }}"
                                                alt="{{ $consultants[$i]->image_alt }}" class="rounded-circle aspect1"
                                                style="width:100%; height:100%; transform:translateX(-6px)" />
                                        </div>
                                        <h3 class="h3">{{ $consultants[$i]->name }}</h3>
                                        <span class="">{{ $consultants[$i]->role }}</span>
                                        <p>{{ $consultants[$i]->description }}</p>
                                        <a class="btn px-3 mt-auto mx-auto"
                                            href="{{ url('/consultant/' . $consultants[$i]->url) }}">Read More</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="row g-4 card-collection-lg">
                            <div class="col-md-6">
                                <div class="row g-4 ">
                                    @for ($i = 0; $i < count($consultants); $i++)
                                        @if ($i % 2 == 0)
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                                <div style="min-height:300px"
                                                    class="service-item d-flex flex-column justify-content-center text-center rounded"
                                                    style=" transform:translateX(6px)">
                                                    <div class="service-icon btn-square shadow c-bg-primary">
                                                        <img src="{{ $consultants[$i]->image }}"
                                                            alt="{{ $consultants[$i]->image_alt }}"
                                                            class="rounded-circle aspect1"
                                                            style="width:100%; height:100%; transform:translateX(-6px)" />
                                                    </div>
                                                    <h3 class="h3">{{ $consultants[$i]->name }}</h3>
                                                    <span class="">{{ $consultants[$i]->role }}</span>
                                                    <p>{{ $consultants[$i]->description }}</p>
                                                    <a class="btn px-3 mt-auto mx-auto"
                                                        href="{{ url('/consultant/' . $consultants[$i]->url) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <div class="col-md-6 padding-top-10">
                                <div class="row g-4">
                                    {{-- @for ($i = round(count($consultants) / 2); $i < count($consultants); $i++) --}}
                                    @for ($i = 0; $i < count($consultants); $i++)
                                        @if ($i % 2 == 1)
                                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                                <div style="min-height:300px"
                                                    class="service-item d-flex flex-column justify-content-center text-center rounded"
                                                    style=" transform:translateX(6px)">
                                                    <div class="service-icon btn-square shadow c-bg-primary">
                                                        <img src="{{ $consultants[$i]->image }}"
                                                            alt="{{ $consultants[$i]->image_alt }}"
                                                            class="rounded-circle"
                                                            style="width:100%; height:100%; transform:translateX(-6px)" />
                                                    </div>
                                                    <h3 class="mb-3 h3">{{ $consultants[$i]->name }}</h3>
                                                    <span class="">{{ $consultants[$i]->role }}</span>
                                                    <p>{{ $consultants[$i]->description }}</p>
                                                    <a class="btn px-3 mt-auto mx-auto"
                                                        href="{{ url('/consultant/' . $consultants[$i]->url) }}">Read
                                                        More</a>
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

    @include(config('web.folder_prefix') . '/footer')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.validate.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>
</body>

</html>
