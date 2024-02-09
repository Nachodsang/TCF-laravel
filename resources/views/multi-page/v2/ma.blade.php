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
    <title>M&A and IPO Tokyo Consulting Firm</title>
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}





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

                            <a href="{{ url('/service') }}">Services <span class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a>
                        </span> <span>Mergers - Acquisitions & IPO</span></p>
                    <h1 class="mb-0 bread">Mergers - Acquisitions & IPO</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section c-bg-secondary">

        <div class="container heading-section">
            <div class="mx-auto wow fadeIn" data-wow-delay="0.1s">
                {!! @$service_cat->detail !!}
            </div>
            <!-- filter -->
            <div class="px-4 row">
                <div
                    class= " mx-auto mb-4 p-4 rounded-3 bg-white d-flex flex-column shadow-md col-12 col-md-9 col-xl-8">
                    <div class="d-flex gap-1 align-items-center mb-2  c-primary">
                        <i class="fas fa-funnel-dollar fa-lg "></i>
                        <h3 style="margin-bottom:0;">Filter</h3>
                    </div>
                    <div class="row ">
                        <div class="col-lg-3  p-1">
                            <div class="dropdown rounded-2 c-bg-secondary w-100 p-2">
                                <a name="industry-name" href="#"
                                    class="nav-link dropdown-toggle overflow-hidden capitalize c-text-primary"
                                    type="button" id="industry-dropdown-name" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Industry
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="industry-dropdown-name"
                                    style="max-height:250px;overflow:scroll;">
                                    <li id={{ 'All' }} value="0"
                                        class=" industry-item cursor-pointer d-flex align-items-center  dropdown-item c-primary  cursor-pointer "
                                        name="header-menu">
                                        <div style="width:30px">
                                            <i class="fas fa-cube"></i>
                                        </div>
                                        <span>All</span>
                                    </li>
                                    @foreach ($ma_industries as $k => $v)
                                        <li class="capitalize industry-item cursor-pointer d-flex align-items-center   dropdown-item c-primary"
                                            value={{ $v->id }} id="{{ $v->name }}">
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
                        <div class="col-lg-6  p-1">
                            <input id="search-input" class="rounded-2 c-bg-secondary w-100 p-2" type="text"
                                placeholder="Search ..." />
                        </div>
                        <div class="col-lg-3  p-1">
                            <div class="dropdown nav-item rounded-2 c-bg-secondary w-100 p-2">
                                <a href="#" class="nav-link dropdown-toggle c-text-primary" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                    name="opportunity-name">
                                    Opportunity
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><span name="header-menu"
                                            class="dropdown-item opportunity-item c-primary cursor-pointer"
                                            value="1">Buy</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item opportunity-item  c-primary cursor-pointer"
                                            value="2">Sale</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item opportunity-item  c-primary cursor-pointer"
                                            value="0">All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none" id="advance-search">
                        <div class="col-lg-4 p-1 advance-search-item" id="modalButton">
                            <button class="product-modal rounded-2 c-bg-secondary text-start w-100 p-2"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Product</button>
                        </div>
                        <div class="col-lg-4 p-1 mb-1 advance-search-item income-drop">
                            <div class="dropdown nav-item rounded-2 c-bg-secondary w-100 p-2">
                                <a href="#" class="nav-link dropdown-toggle c-text-primary" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                    name="min-income">
                                    Minimum Yearly Income
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><span name="header-menu"
                                            class="dropdown-item min-income-item c-primary cursor-pointer"
                                            value="10000000">10 million
                                            Baht</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item min-income-item  c-primary cursor-pointer"
                                            value="100000000">100 million
                                            Baht</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item min-income-item  c-primary cursor-pointer"
                                            value="1000000000">1
                                            billion Baht</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-1 p-1 advance-search-item income-drop">
                            <div class="dropdown nav-item rounded-2 c-bg-secondary w-100 p-2">
                                <a href="#" class="nav-link dropdown-toggle c-text-primary" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                    name="max-income">
                                    Maximum Yearly Income
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><span name="header-menu"
                                            class="dropdown-item max-income-item  c-primary cursor-pointer"
                                            value="10000000">10 million
                                            Baht</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item max-income-item c-primary cursor-pointer"
                                            value="100000000">100 million
                                            Baht</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item max-income-item c-primary cursor-pointer"
                                            value="1000000000">1 Billion
                                            Baht</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-100  mt-3 row d-flex justify-content-end mx-0 p-0">
                        <div class="col-6 col-lg-3 px-1 ">
                            <button class=" rounded-2 c-bg-primary btn btn-primary  d-flex align-items-center w-100 "
                                id="clear-button">
                                <i class="fas fa-sync-alt fa-x"></i>
                                <span>
                                    Clear
                                </span>
                            </button>
                        </div>
                        <div class="col-6 col-lg-3 px-0 ">
                            <button id="search-button"
                                class=" rounded-2 c-bg-primary btn btn-secondary d-flex align-items-center justify-content-center w-100">
                                <i class="fas fa-search-dollar fa-lg"></i>
                                <span>
                                    Search
                                </span>
                            </button>
                        </div>



                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title fs-5 test" id="exampleModalLabel">Please Select Industry</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="product-list">
                                {{-- product list goes here --}}

                            </div>
                            <div class="modal-footer  ">
                                <div class="w-100 d-flex justify-content-between">

                                    <div>
                                        <button type="button" class="btn btn-primary" {{-- data-bs-dismiss="modal" --}}
                                            id="modal-clear">Clear</button>
                                        <button type="button" class="btn btn-secondary" id="modal-all">Select
                                            All</button>
                                    </div>
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                        id="modal-confirm">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="row g-5">
                @foreach ($ma_blogs as $k => $v)
                    @php
                        $dateString = $v->date;
                        $dateTime = new DateTime($dateString);
                        $formattedDate = $dateTime->format('F j, Y');
                    @endphp
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                @if ($v->opportunity == 2)
                                    <div class="corner-sale"><span>TO SALE</span></div>
                                @elseif($v->opportunity == 1)
                                    <div class="corner-buy"><span>TO BUY</span></div>
                                @endif
                                <img class="img-fluid" src="{{ $v->image }}" alt="">
                                <div class="blog-overlay">
                                    <a class="btn btn-square btn-primary rounded-circle m-1"
                                        href="{{ $v->url }}"> <i class="far fa-eye fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <div class="meta mb-2">
                                    <span>{{ $formattedDate }}</span>
                                </div>
                                <a class="d-block" href="{{ $v->url }}">
                                    <h3>{{ $v->title }}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
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




    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/owl.carousel.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/slick/slick.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script> --}}




    <script>
        document.addEventListener('change', function(e) {
            const paginate = e.target.closest('.paginate');
            if (paginate) {
                window.location.href = paginate.value;
            }
        })
    </script>

    <script>
        $(document).ready(function() {

            let industry, opportunity, min, max, search
            let products = []

            $('#clear-button').on('click', function() {
                $('[name="min-income"]').html("Minimum Yearly Income")
                $('[name="max-income"]').html("Maximum Yearly Income")
                $('#industry-dropdown-name').html("Industry");
                $('[name="opportunity-name"]').html("Opportunity");
                $('#advance-search').addClass('d-none');
                $('#search-input').val("")
                $('.dropdown-item').removeClass('dropdown-item-selected')
                industry = ""
                opportunity = ""
                min = ""
                max = ""
                search = ""
                products = []
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top",
                    showConfirmButton: false,
                    timer: 500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: `Cleared`
                });
            })

            $('#search-input').on('change', function() {
                search = $(this).val()
            })

            $('.min-income-item').on('click', function() {



                var minIncomeTitle = $(this).html();
                $('[name="min-income"]').html(minIncomeTitle)

                min = $(this).attr('value');

                $('.min-income-item').each(
                    function() {

                        $(this).attr('value') == min ? $(this).addClass(
                            'dropdown-item-selected') : $(this).removeClass(
                            'dropdown-item-selected')
                    })
            })
            $('.max-income-item').on('click', function() {
                var maxIncomeTitle = $(this).html();
                $('[name="max-income"]').html(maxIncomeTitle)
                max = $(this).attr('value');

                $('.max-income-item').each(
                    function() {

                        $(this).attr('value') == max ? $(this).addClass(
                            'dropdown-item-selected') : $(this).removeClass(
                            'dropdown-item-selected')
                    })
            })
            $('.opportunity-item').on('click', function() {
                var opportunityTitle = $(this).html();
                $('[name="opportunity-name"]').html(opportunityTitle)
                opportunity = $(this).attr('value')

                $('.opportunity-item').each(
                    function() {
                        $(this).attr('value') == opportunity ? $(this).addClass(
                            'dropdown-item-selected') : $(this).removeClass(
                            'dropdown-item-selected')
                    })
            })

            $('.test').on('click', function() {
                console.log("test click")
            })


            $('.industry-item').on('click', function() {

                // Get the value attribute of the clicked item
                var selectedValue = $(this).attr('value');
                let selectedName = $(this).attr('id').toString();
                industry = selectedValue



                $('#industry-dropdown-name').html(selectedName);
                $('#exampleModalLabel').html(selectedName);
                $('#advance-search').removeClass('d-none');



                $('.industry-item').each(
                    function() {

                        $(this).attr('value') == selectedValue ? $(this).addClass(
                            'dropdown-item-selected') : $(this).removeClass(
                            'dropdown-item-selected')
                    })



                if (selectedValue == 0) {
                    $('#modalButton').addClass('d-none')
                    $('.advance-search-item').removeClass('col-lg-4')
                    $('.income-drop').addClass('col-lg-6')

                } else {
                    $('#modalButton').removeClass('d-none')
                    $('.advance-search-item').removeClass('col-lg-4')
                    $('.advance-search-item').removeClass('col-lg-6')
                    $('.advance-search-item').addClass('col-lg-4')
                }


                $.ajax({
                    method: 'get',
                    url: `m&a/product/${selectedValue}`,


                    success: function(res) {
                        products = []
                        // console.log(res)
                        // Clear existing checkboxes
                        $('#product-list').html("");
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top",
                            showConfirmButton: false,
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: `${selectedName} Selected`
                        });

                        $.each(res, function(k, v) {
                            $('#product-list').append(
                                "<div class='d-flex gap-2 text-capitalize ' data-product-id='" +
                                v.id + "'>" +
                                "<input type='checkbox'  value='" + v.id +
                                "' class='cursor-pointer product-items'" +
                                " />" +
                                v.name +
                                "</div>"
                            );
                        });

                        $('.product-items').on('click', function() {

                            const productId = $(this).attr('value')
                            if ($(this).is(':checked')) {
                                // Perform actions when the checkbox is checked
                                products = [...products, productId]
                            } else {
                                // Perform actions when the checkbox is unchecked
                                products = products.filter((i) => i != productId)
                            }

                        })

                        $('#modal-clear').on('click', function() {
                            $('.product-items').prop('checked', false);
                            products = []

                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top",
                                showConfirmButton: false,
                                timer: 500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal
                                        .resumeTimer;
                                }
                            });
                            Toast.fire({
                                icon: "success",
                                title: `Cleared`
                            });

                        })

                        $('#modal-all').on('click', function() {
                            $('.product-items').prop('checked', true);
                            $('.product-items').each(function() {
                                if ($('.product-items').is(':checked')) {
                                    // Perform actions when the checkbox is checked
                                    const i = $(this)
                                    const productId = i.attr('value')

                                    if (!products?.includes(productId)) {
                                        products = [...(products || []),
                                            productId
                                        ];
                                    }
                                }
                            })
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top",
                                showConfirmButton: false,
                                timer: 500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal
                                        .resumeTimer;
                                }
                            });
                            Toast.fire({
                                icon: "success",
                                title: `Select all product from ${selectedName} `
                            });

                        })

                    },
                    error: function(error) {
                        console.error("Error fetching products:", error);
                    }
                });
            });

            $('#search-button').on('click', () => {
                // values to be used

                const data = {
                    industry,
                    opportunity,
                    products,
                    min,
                    max,
                    search
                }
                // console.log({
                //     data
                // })
                // var queryString = $.param(data);
                $.ajax({
                    method: 'get',
                    url: `m&a/filter/`,
                    dataType: 'json',
                    data: data,
                    success: function(res) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top",
                            showConfirmButton: false,
                            timer: 500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: `Searching`
                        });

                        console.log(res)
                    }
                })
            })
        });
    </script>
</body>

</html>
