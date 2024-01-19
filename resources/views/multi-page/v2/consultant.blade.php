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
    <title>Tokyo Consulting Group</title>
    <link href="images/logo/TCGicon.ico" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />



</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    @include(config('web.folder_prefix') . '/header')


    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <span
                                    class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a></span> <span>Consultant</span></p>
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
                        <h2 class="mb-4">Consultant introduction</h2>
                        <p class="mb-4">Tokyo Consulting Firm is global accounting firm & CPA firm in Thailand and has
                            over 700 clients all over the world. TCF Thailand provides professional services in the
                            fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services and IT Services. With the
                            current boom in investment from Japan, Tokyo Consulting strives to provide quality service
                            to its clients and serve as a bridge all over the world.</p>
                        <a class="btn btn-primary" href="service.php">Our Services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                        <div style="min-height:300px"
                                            class="service-item d-flex flex-column justify-content-center text-center rounded"
                                            style=" transform:translateX(6px)">
                                            <div class="service-icon btn-square shadow "
                                                style="background-color:rgba(219,126,55,0.4)">
                                                <img src="images/Shuhei_Takahashi.jpg" alt="consultant"
                                                    class="rounded-circle"
                                                    style="width:100%; height:100%; transform:translateX(-6px)" />
                                            </div>
                                            <!-- <div class="service-icon btn-square" style="overflow:hidden; ">
                    <img src="images/blog-011.jpg" alt="consultant" style="width:100%; height:100%; transform:translateX(10px)"/>
                    </div> -->
                                            <h3 class="mb-3">Shuhei Takahashi</h3>
                                            <p
                                                style=" text-overflow: ellipsis;
                -webkit-line-clamp:5;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                                After joining the Tokyo Consulting Group, he belonged to the Tokyo Tax
                                                Accountant Corporation, where he acquired knowledge of accounting and
                                                tax practices and consulting approaches using financial analysis based
                                                on the financial statements of each country.From April 2017, he joined
                                                the Tokyo Consulting Firm Thailand Corporation. Appointed. When he first
                                                took over, the base had 15 people, but within three years it had grown
                                                to about 40 people. He currently provides management support to Japanese
                                                and foreign companies in various fields, including not only accounting
                                                and taxation, but also labor, legal affairs, mainly in Thailand, but
                                                also in Cambodia and Laos.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                        <div style="min-height:300px"
                                            class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square shadow"
                                                style="background-color:rgba(219,126,55,0.4)">
                                                <img src="images/hiroko_uemura.jpg" alt="consultant"
                                                    class="rounded-circle"
                                                    style="width:100%; height:100%; transform:translateX(-6px)" />
                                            </div>
                                            <h3 class="mb-3">Hiroko Uemura</h3>
                                            <p
                                                style=" text-overflow: ellipsis;
                -webkit-line-clamp:5;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                                After joining Tokyo Consulting Group, she started working at Tokyo
                                                Consulting Firm Thailand in January 2017. Mainly for Japanese companies
                                                operating in Thailand, we provide comprehensive legal and labor support,
                                                the construction and operation of personnel evaluation systems, and
                                                support for personnel introductions.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-md-4">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                        <div style="min-height:300px"
                                            class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square shadow"
                                                style="background-color:rgba(219,126,55,0.4)">
                                                <img src="images/Mamie_Sato.png" alt="consultant" class="rounded-circle"
                                                    style="width:100%; height:100%; transform:translateX(-6px)" />
                                            </div>
                                            <h3 class="mb-3">Maimie Sato</h3>
                                            <p
                                                style=" text-overflow: ellipsis;
                -webkit-line-clamp:5;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                                After joining Tokyo Consulting Group, she was appointed to the
                                                International Business Department at the Tokyo Head Office. Currently,
                                                she is assigned to the company's Thai subsidiary, which is one of the
                                                company's 44 locations in 27 countries. She mainly works with Japanese
                                                companies on financial, labor, and legal back-office matters, as well as
                                                support for overseas expansion and withdrawal. </p>
                                            <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                        <div style="min-height:300px"
                                            class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square shadow"
                                                style="background-color:rgba(219,126,55,0.4)">
                                                <img src="images/ayumu_takado.jpg" alt="consultant"
                                                    class="rounded-circle"
                                                    style="width:100%; height:100%; transform:translateX(-6px);" />
                                            </div>
                                            <h3 class="mb-3">Ayumu Takato</h3>
                                            <p
                                                style=" text-overflow: ellipsis;
                -webkit-line-clamp:5;
                overflow: hidden;
                display: -webkit-box;
                line-height: 25px;
                -webkit-box-orient: vertical;">
                                                I joined Tokyo Consulting Firm as a mid-career recruit because I wanted
                                                to support the growth of Japanese small and medium-sized businesses.
                                                After that, he was assigned to the International Business Department,
                                                and currently has 44 bases in 27 countries in Thailand, where his
                                                philosophy is to provide the best services for companies assigned to the
                                                company. Currently, we provide total support for Japanese companies,
                                                including finance, labor, and legal back office matters, as well as
                                                overseas expansion and withdrawal, etc.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="#">Read More</a>
                                        </div>
                                    </div>
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
