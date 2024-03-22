<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    @include(config('web.folder_prefix') . '/seoTag')
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
        <div class="container">
            <div class="mx-auto wow fadeIn" data-wow-delay="0.1s">
                {!! @$service_cat->detail !!}
            </div>
            <!-- filter -->
            <div class="px-4 row ">
                <div
                    class= " mx-auto mb-4 p-4 rounded-3 bg-white d-flex flex-column shadow-md col-12 col-md-9 col-xl-8">
                    <div class="d-flex gap-1 align-items-center mb-2  c-primary">
                        <i class="fas fa-funnel-dollar fa-lg "></i>
                        <h3 style="margin-bottom:0;">Filter</h3>
                    </div>
                    <div class="row  mx-0">
                        <div class="col-lg-3  pe-0 ps-1 ">
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
                                        <li class="capitalize industry-item cursor-pointer d-flex align-items-center dropdown-item c-primary"
                                            name="industry" value={{ $v->id }} id="{{ $v->name }}">
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
                        <div class="col-lg-6  pe-0 ps-1 mt-lg-0 mt-1 ">
                            <input id="search-input" class="rounded-2 c-bg-secondary w-100 p-2" type="text"
                                placeholder="Search ..." />
                        </div>
                        <div class="col-lg-3  pe-0 ps-1 mt-lg-0 mt-1">
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
                                            value="2">Sell</a>
                                    </li>
                                    <li><span name="header-menu"
                                            class="dropdown-item opportunity-item  c-primary cursor-pointer"
                                            value="">All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none  mx-0  mt-1" id="advance-search">
                        <div class="col-lg-4 pe-0 ps-1  advance-search-item" id="modalButton">
                            <button class="product-modal rounded-2 c-bg-secondary text-start w-100 p-2 "
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Product</button>
                        </div>
                        <div class="col-lg-4 pe-0 ps-1 mt-lg-0 mt-1  advance-search-item income-drop">
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
                        <div class="col-lg-4 mb-1 pe-0 ps-1 mt-lg-0 mt-1 advance-search-item income-drop ">
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
                    <div class="w-100  mt-3 row d-flex justify-content-end mx-0 p-0 ">
                        <div class="col-6 col-lg-3 px-1 ">
                            <button
                                class="rounded-2 c-bg-primary btn btn-primary d-flex justify-content-center align-items-center w-100"
                                id="clear-button">
                                <i class="fas fa-sync-alt fa-x"></i><span>Clear</span>
                            </button>
                        </div>
                        <div class="col-6 col-lg-3 px-0 ">
                            <button id="search-button"
                                class=" rounded-2 c-bg-primary btn btn-secondary d-flex align-items-center justify-content-center w-100">
                                <i class="fas fa-search-dollar fa-lg"></i><span>Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 blog-data">
                {{-- blog show here --}}
            </div>
            <div class="container middle mt-4 mb-3">
                <div class="pagination form-inline d-flex justify-content-between"></div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5 test" id="exampleModalLabel">Please Select Industry
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="product-list">
                    {{-- product list goes here --}}
                </div>
                <div class="modal-footer  ">
                    <div class="w-100 d-flex flex-column flex-sm-row  justify-content-between">
                        <div class="w-100 row m-0">
                            <div class="p-0 pe-1 col-6 col-sm-3">
                                <button type="button" class="btn btn-primary w-100" {{-- data-bs-dismiss="modal" --}}
                                    id="modal-clear">Clear</button>
                            </div>
                            <div class="p-0 ps-1 col-6 col-sm-5">
                                <button type="button" class="btn btn-secondary w-100  " id="modal-all">Select
                                    All</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success mt-1 mt-sm-0" data-bs-dismiss="modal"
                            id="modal-confirm">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="allIndustries" class="d-none" data-my-data="{{ json_encode($all_ma_industries) }}"></div>
    </div>
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
        let industry, opportunity, min, max, search;
        let products = [];
        const industries = JSON.parse($('#allIndustries')?.attr('data-my-data'))


        $('#clear-button').on('click', function() {

            $('[name="min-income"]').html("Minimum Yearly Income")
            $('[name="max-income"]').html("Maximum Yearly Income")
            $('#industry-dropdown-name').html("Industry");
            $('[name="opportunity-name"]').html("Opportunity");
            $('#advance-search').addClass('d-none');
            $('#search-input').val("")
            $('.dropdown-item').removeClass('dropdown-item-selected')
            industry = "";
            opportunity = "";
            min = "";
            max = "";
            search = "";
            products = [];
            getBlog().then(data => {
                loadItems(data);
                loadPaginate(data);
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
                    const sortedProducts = res.sort((a, b) => {

                        const nameA = a.name.toUpperCase()
                        const nameB = b.name.toUpperCase()

                        if (nameA < nameB) {
                            return -1;
                        }
                        if (nameA > nameB) {
                            return 1;
                        }
                        return 0;
                    })


                    products = []

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
                    sortedProducts.forEach(function(i) {

                        $('#product-list').append(
                            "<div class='d-flex gap-2 text-capitalize ' data-product-id='" +
                            i.id + "'>" +
                            "<input type='checkbox'  value='" + i.id +
                            "' class='cursor-pointer product-items'" +
                            " />" +
                            i.name +
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

        // fetch blogs //

        var rows = document.querySelector('.blog-data');
        var allPage = 0;
        var perPage = 15;
        var currentPage = 1;
        var cid = "{{ Config::get('web')['customerId'] }}";
        var type = ['ma'];
        let BLOG_API = "{{ env('BLOG_API') }}";
        getBlog().then(data => {
            loadItems(data);
            loadPaginate(data);
        });

        $('#search-button').on('click', (e) => {
            getBlog().then(data => {
                loadItems(data);
                loadPaginate(data);
            });
        });

        function getBlog(page) {
            const data = {
                id: cid,
                industry: industry,
                opportunity: opportunity,
                products: products,
                min: min,
                max: max,
                search: search,
                type: type,
                perPage: perPage,
                page: page ? page : 1
            }
            return res = $.ajax({
                method: 'get',
                url: BLOG_API + `api/blog/c`,
                dataType: 'json',
                data: data,
                async: false,
            });
        }

        document.addEventListener('change', function(e) {
            const select = e.target.closest('[name="pagination"]');
            if (select) {
                select.setAttribute('selected', true);
                lazyNext(select.value)
            }
        })

        function lazyNext(page) {
            getBlog(page).then(data => {
                loadItems(data);
                adjustPagination();
            });
        }

        function loadItems(res) {
            const mergeById = (a1, a2) =>
                a1.map((itm) => ({
                    ...a2.find((item) => item.id == itm.industry),
                    ...itm,
                }));
            const mergedArr = mergeById(res.data, industries);
            let blog = mergedArr.filter(e => {
                return e.status == 1;
            })
            let htmlItem = '';
            const onItem = `<div class="col-lg-12 text-center"><p>Item not Found</p></div>`;
            if (blog.length == 0) {
                rows.innerHTML = onItem;
            } else {
                blog.forEach(function(v) {
                    let originalDate = new Date(v.publish);
                    let formattedDate = originalDate.toLocaleDateString('en-US', {
                        month: 'long',
                        day: 'numeric',
                        year: 'numeric'
                    }).toUpperCase();
                    htmlItem += `
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                    ${v.opportunity == 1 ? "<div class='corner-buy'><span>TO BUY</span></div>" : "<div class='corner-sale'><span>TO SELL</span></div>"}
                                <img class="img-fluid blog-card-img" src="${v.cover}" alt="">
                                <div class="blog-overlay">
                                    <a class="btn btn-square btn-primary rounded-circle m-1" target="_blank" href="${v.url}"> <i class="far fa-eye fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <div class="meta mb-2">
                                    <span>${formattedDate}</span>
                                </div>
                                <a class="d-block" href="${v.url}" target="_blank">
                                    <h3>${v.name}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    `;
                });
                rows.innerHTML = htmlItem;
            }
        }

        function loadPaginate(e) {
            if (e.links.allPage == 0) return false;
            let select = `
                <div class="pagination-control prev-page invisible"><a href="javascript:" class="font-weight-bold control-item" action="prev">Previous</a></div>
                <div class="select-option d-flex align-items-center"><span class="mr-2">Page</span><select class="form-control pagination-select w-25" name="pagination">
            `;
            const links = e.links;

            for (let i = 0; i < links.allPage; i++) {
                select += `<option value="${i+1}">${i+1}</option>`;
            }
            select +=
                `
                        </select>
                    <span class="ml-2 width-100">of ${links.allPage}</span>
                </div>
            <div class="pagination-control next-page"><a href="javascript:" class="font-weight-bold control-item" action="next">Next</a></div>`;
            const paginateion = document.querySelector('.pagination');
            paginateion.innerHTML == '';
            paginateion.innerHTML = select;
            allPage = links.allPage;
            Array.prototype.map.call(document.querySelectorAll('.control-item'), (item) => {
                item.onclick = adjustPage;
            });
            adjustPagination();
        }

        function adjustPagination() {
            select = document.querySelector('.pagination-select');
            currentPage = select.selectedIndex + 1;
            const prev = document.querySelector('.prev-page');
            const next = document.querySelector('.next-page');
            if (currentPage > 1) prev.classList.remove('invisible');
            else prev.classList.add('invisible')
            if (currentPage == allPage) next.classList.add('invisible');
            else next.classList.remove('invisible');
        }

        function adjustPage() {
            pagination = document.querySelector('.pagination');
            const cur = this;
            const action = cur.getAttribute('action');
            const select = pagination.querySelector('select');
            let page = select.selectedIndex + 1;
            if (action == 'next') page++;
            else page--;
            select[(page - 1)].selected = 'selected';
            lazyNext(select[(page - 1)].value);
        }
    </script>
</body>

</html>
