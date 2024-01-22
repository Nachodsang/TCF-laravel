<!DOCTYPE html>
<html lang="en">

{{-- <head>
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
</head> --}}

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />



</head>

<body>
    @include(config('web.folder_prefix') . '/header')
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    {{-- <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
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
    </section> --}}

    {{-- <section class="bg bg-02">
        <div id="service" class="service section">
            <div class="container-xxl py-6">
                @if (@$links['allPage'] > 0)
                    @foreach ($service as $i => $v)
                        <div class="row g-5 d-flex justify-content-center py-4">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ url("service/$v->url") }}" class="service-img">
                                    <div class="hover-13 service-left">
                                        <figure>
                                            <img src="@if (@$v->image) {{ url("$v->image") }}@else{{ url('images/no-image.jpg') }} @endif"
                                                class="img-fluid" alt="{{ @$v->image_alt }}"
                                                title="{{ @$v->image_title }}">
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
                                    <a
                                        href="{{ $prevPage }}"class="prev-page @if ($prev == 0) d-none @endif">ก่อนหน้า</a>
                                </div>
                                <div class="col-auto">
                                    @if (@$links['allPage'])
                                        <select name="page" class="form-select form-select-sm paginate">
                                            @for ($i = 1; $i <= $links['allPage']; $i++)
                                                <option value="service?page={{ $i }}"
                                                    @if (Request::get('page') == $i) selected @endif>
                                                    {{ $i }}
                                                </option>
                                            @endfor
                                        </select>
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <a
                                        href="{{ $nextPage }}"class="next-page font-weight-bold @if ($page >= $links['allPage']) d-none @endif">ถัดไป</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section> --}}


    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2">
                            <a href="{{ url('/') }}">Home <span class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a>
                        </span> <span>Services</span></p>
                    <h1 class="mb-0 bread">Services</h1>
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
                        <div class="subheading mb-2">Our Services</div>
                        <h2 class="mb-4">Let us help you strengthen your business</h2>
                        <p class="mb-4">Our mission is to enhance our customer’s businesses through the incorporation
                            of our accounting services in Thailand. Our main services are business setup, book keeping,
                            accounting, audit, tax, labor & human resources (social insurance and payroll), and
                            outsourcing. Furthermore, we provide consulting and advising services in various types of
                            businesses and industries for foreign and prospective entities setting business in Thailand.
                            Our multicultural and multilingual staff is composed of experienced and qualified
                            professionals, many of them being Certified Public Accountants, USCPAs, and Social Insurance
                            and Labor Specialists.</p>
                        <p class="mb-4">We have an integrated service philosophy which allows us to provide the best
                            service by selecting the exact expertise needed for each project from our experienced staff.
                            Thus, we can deliver the best service possible, from accounting and tax consulting work, to
                            legal and cultural education about customs and regulations in Thailand. Throughout the wide
                            range of services we provide, our commitment to our clients is absolute, and we focus on
                            providing additional value to every engagement. It is our ultimate goal and wish that our
                            clients become increasingly successful, and contribute to society in an effective way
                            through our support.</p>
                        <p class="mb-0">For a detailed presentation of our services, please select one of our areas of
                            expertise below .</p>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <!-- <span class="material-symbols-outlined">
                   potted_plant
                </span> -->
                                <i class="fas fa-seedling fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Business Setup</h3>
                            <p> Tokyo Consulting Firm is composed of highly experienced professionals who specialize in
                                establishing and registering offices and parent companies in Thailand.</p>

                            <a class="btn px-3 mt-auto mx-auto" href="service-setup-business.php">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-file-invoice-dollar fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Tax Services</h3>
                            <p>Our local staff is specialized in Thailand-related tax matters. Thus, we can supply our
                                clients in Thailand with tax structures that support their proposed transactions, thus
                                allowing companies to reduce their tax exposure. </p>

                            <a class="btn px-3 mt-auto mx-auto" href="service-tax.php">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-wallet fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Accounting Services</h3>
                            <p>With our constant support your business in Thailand will be guaranteed an accurate and
                                timely provision of the records of all the transactions; additionally we will consult
                                you on any aspect of the local accounting standards. </p>

                            <a class="btn px-3 mt-auto mx-auto" href="service-accounting-service.php">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-key fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Internal Audit</h3>
                            <p>Associate staff have reliable professional and educational backgrounds, with high
                                experience in internal auditing, specifically tailored to the authorized system.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="service-internal-audit.php">Read More</a>
                        </div>
                    </div>


                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-clipboard-check fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Financial Audit</h3>
                            <p>Our auditors are professionally equipped to offer best audit services in Thailand that
                                add value to your business by providing regular feedback on your operations.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="service-financial-audit.php">Read More</a>
                        </div>
                    </div>


                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-money-check-alt fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Payroll Services</h3>
                            <p>Establishing a company payroll system in Thailand with the help of professionals from
                                certified firms is an important decision, with high potential gains in return.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="service-payroll.php">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Human Resources</h3>
                            <p>One of the main issues that companies face in their organizational development is
                                recruitment and education of new employees. Personnel training strategies, such as
                                on-the-job training and business manner education, can be achieved through thorough
                                knowledge and accumulated experience of HR Consultants in Thailand.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="service-hr.php">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-thumbs-up fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Social Insurance</h3>
                            <p>Whether it is accompanying our customers on a regular basis, or providing one-time
                                consulting services, we have the necessary resources to assist our foreign customers and
                                help the establishment and development of their business in Thailand.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="service-social-insurance.php">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-handshake fa-3x"></i>
                            </div>
                            <h3 class="mb-3">Mergers and Acquisitions</h3>
                            <p>Mergers and acquisitions have a profitable side that can create potentially enormous
                                profits for a company, and expose the business to a myriad of financial resources. </p>

                            <a class="btn px-3 mt-auto mx-auto" href="service-m&a.php">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon btn-square">
                                <i class="fas fa-cloud-upload-alt fa-3x"></i>
                            </div>
                            <h3 class="mb-3">HR Cloud Software</h3>
                            <p>HR Cloud Software helps in drive business results and improves the employee experience.
                                Give your HR department an advantage to automate manual processes. Human Resource cloud
                                software helps organization improve employee experience, transform working culture and
                                turn employee engagement into a business advantage.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="service-hr-cloud.php">Read More</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section><!-- End Service Section -->

    @include(config('web.folder_prefix') . '/footer')

    {{-- <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/animation.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>
    <script>
        document.addEventListener('change', function(e) {
            const paginate = e.target.closest('.paginate');
            if (paginate) {
                window.location.href = paginate.value;
            }
        })
    </script> --}}



    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>

</body>

</html>
