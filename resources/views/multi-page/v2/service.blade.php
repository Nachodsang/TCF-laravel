<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ url('/') }}">
    <title>Service - TCF Thailand</title>
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">

    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">

    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <meta name="keywords"
        content="accounting consulting firms in Thailand, consulting firm in Thailand, cpa firm in Thailand">
    <meta name="description"
        content="Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services." />
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
    @include(config('web.folder_prefix') . '/header')
    {{-- @include(config('web.folder_prefix') . '/cookies') --}}

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
                        </span> <span>Services</span></p>
                    <h1 class="mb-0 bread">All Services</h1>
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
                        {!! @$service_detail !!}

                    </div>
                    @foreach ($services as $k => $v)
                        <div class="col-xl-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    {!! @$v->icon !!}
                                </div>
                                <h3 class="mb-3 h3">{{ @$v->service }}</h3>
                                <p
                                    style=" text-overflow: ellipsis;
                -webkit-line-clamp:8;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                    {{ @$v->description }}</p>

                                <a class="btn px-3 mt-auto mx-auto" href="{{ url("/service/$v->url") }}">Read More</a>
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
