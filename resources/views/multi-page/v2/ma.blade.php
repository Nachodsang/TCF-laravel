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

    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2">
                            <a href="{{ url('/') }}">Home <span class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a>
                        </span> <span>Mergers & Acquisitions</span></p>
                    <h1 class="mb-0 bread">Mergers & Acquisitions</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section c-bg-secondary">

        <div class="container heading-section">
            <div class="mx-auto wow fadeIn" data-wow-delay="0.1s">
                {!! $service_cat->service_cat_detail !!}
            </div>
            <!-- filter -->
            <div class="px-4">

                <div class="w-75 mx-auto mb-4 p-4 rounded-3 bg-white gap-1 d-flex flex-column">
                    <div class="d-flex gap-1 align-items-center mb-2  c-primary">
                        <i class="fas fa-funnel-dollar fa-lg "></i>
                        <h3 style="margin-bottom:0;">Filter</h3>
                    </div>
                    <div class="d-flex w-100 gap-1">
                        <div class="dropdown nav-item rounded-2 px-4 c-bg-secondary py-2">

                            <div class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Opportunity
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($service_cats as $k => $v)
                                    @if ($v->type === 'sub-page')
                                        <li><a name="header-menu" class="dropdown-item text-muted"
                                                href="{{ url('/service/category/' . $v->url) }}">{{ $v->service_cat_name }}
                                            </a>
                                        </li>
                                    @else
                                        <li><a name="header-menu" class="dropdown-item text-muted"
                                                href="{{ url('/' . $v->url) }}">{{ $v->service_cat_name }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                <li><a name="header-menu" class="dropdown-item text-muted"
                                        href={{ url('/service') }}>All</a>
                                </li>
                            </ul>
                        </div>
                        <input class="w-100 rounded-2 c-bg-secondary px-4 py-2 " type="text"
                            placeholder="Search ..." />
                        {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Industry
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> --}}
                        <div class="dropdown nav-item rounded-2 px-4 c-bg-secondary py-2">

                            <div class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Industry
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                style="height: 250px; overflow:scroll;  ">
                                <li class="d-flex align-items-center  dropdown-item text-primary  " name="header-menu">


                                    <div style="width:30px">
                                        <i class="fas fa-cube"></i>
                                    </div>
                                    <span>All</span>
                                </li>
                                @foreach ($ma_industries as $k => $v)
                                    <li class="d-flex align-items-center  dropdown-item text-primary "
                                        name="header-menu">
                                        <div style="width:30px">
                                            {!! @$v->icon !!}
                                        </div>
                                        <span>
                                            {{ $v->name }}
                                        </span>
                                    </li>
                                @endforeach


                            </ul>
                        </div>


                    </div>
                    <div class="d-flex  w-100 gap-1 mb-3">
                        <div class="w-50 rounded-2 c-bg-secondary px-4 py-2">Product</div>
                        <div class="w-50 rounded-2 c-bg-secondary px-4 py-2">From 0</div>
                        <div class="w-50 rounded-2 c-bg-secondary px-4 py-2">To > 10 million</div>
                    </div>
                    <div class="d-flex  w-100 gap-1 justify-content-end gap-2">
                        <div class=" rounded-2 c-bg-primary btn btn-primary d-flex align-items-center">
                            <i class="fas fa-sync-alt fa-x"></i>
                            <span>
                                Clear
                            </span>
                        </div>
                        <div
                            class="w-25 rounded-2 c-bg-primary btn btn-secondary d-flex align-items-center justify-content-center">
                            <i class="fas fa-search-dollar fa-lg"></i>
                            <span>
                                Search
                            </span>
                        </div>

                    </div>

                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row g-5">
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <div class="corner-sale"><span>TO SALE</span></div>
                            <img class="img-fluid" src="images/robotic-hand.jpg" alt="">
                            <div class="blog-overlay">
                                <a class="btn btn-square btn-primary rounded-circle m-1" href="m&a-tech.php"><span
                                        class="material-symbols-outlined">
                                        visibility
                                    </span></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="meta mb-2">
                                <span>September 25, 2023</span>
                            </div>
                            <a class="d-block" href="m&a-tech.php">
                                <h3>TechInnovate Invites Strategic Acquisition Partners</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <div class="corner-sale"><span>TO SALE</span></div>
                            <img class="img-fluid" src="images/car-assembly1.jpg" alt="">
                            <div class="blog-overlay">
                                <a class="btn btn-square btn-primary rounded-circle m-1" href="m&a-auto.php"><span
                                        class="material-symbols-outlined">
                                        visibility
                                    </span></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="meta mb-2">
                                <span>September 25, 2023</span>
                            </div>
                            <a class="d-block" href="m&a-auto.php">
                                <h3> Anonymous Company Seeks Merger for Automotive Innovation</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <div class="corner-buy"><span>TO BUY</span></div>
                            <img class="img-fluid" src="images/doctor1.jpg" alt="">
                            <div class="blog-overlay">
                                <a class="btn btn-square btn-primary rounded-circle m-1"
                                    href="m&a-health-care.php"><span class="material-symbols-outlined">
                                        visibility
                                    </span></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="meta mb-2">
                                <span>September 25, 2023</span>
                            </div>
                            <a class="d-block" href="m&a-health-care.php">
                                <h3>Anonymous Company Open to Strategic Merger Opportunities</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <div class="corner-buy"><span>TO BUY</span></div>
                            <img class="img-fluid" src="images/clean-en.jpg" alt="">
                            <div class="blog-overlay">
                                <a class="btn btn-square btn-primary rounded-circle m-1" href="m&a-energy.php"><span
                                        class="material-symbols-outlined">
                                        visibility
                                    </span></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="meta mb-2">
                                <span>September 25, 2023</span>
                            </div>
                            <a class="d-block" href="m&a-energy.php">
                                <h3>Anonymous Company Explores M&A for Renewable Energy Solutions</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <div class="corner-buy"><span>TO BUY</span></div>
                            <img class="img-fluid" src="images/coins.jpg" alt="">
                            <div class="blog-overlay">
                                <a class="btn btn-square btn-primary rounded-circle m-1"
                                    href="m&a-financial.php""><span class=" material-symbols-outlined">
                                        visibility
                                    </span></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="meta mb-2">
                                <span>September 25, 2023</span>
                            </div>
                            <a class="d-block" href="m&a-financial.php">
                                <h3>Anonymous Company Paves the Way for M&A in Financial Services</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <div class="corner-sale"><span>TO SALE</span></div>
                            <img class="img-fluid" src="images/retail1.jpg" alt="">
                            <div class="blog-overlay">
                                <a class="btn btn-square btn-primary rounded-circle m-1" href="m&a-retail.php"><span
                                        class="material-symbols-outlined">
                                        visibility
                                    </span></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <div class="meta mb-2">
                                <span>September 25, 2023</span>
                            </div>
                            <a class="d-block" href="m&a-retail.php">
                                <h3>Anonymous Company Invites Merger Discussions in Retail Innovation</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-pagination  text-center mt-5">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">15</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
    <!-- ======= Blog Section ======= -->






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


    <script>
        $('#exampleModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
</body>

</html>