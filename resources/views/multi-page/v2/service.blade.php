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
                        {!! $service_detail !!}

                    </div>

                    @foreach ($services as $k => $v)
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon btn-square">
                                    {!! $v->icon !!}
                                </div>
                                <h3 class="mb-3">{{ $v->service }}</h3>
                                <p>{{ $v->description }}</p>

                                <a class="btn px-3 mt-auto mx-auto" href="{{ url("/service/$v->url") }}">Read More</a>
                            </div>
                        </div>
                    @endforeach

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
