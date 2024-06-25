<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include(config('web.folder_prefix') . '/seoTag')
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">

    <link href="{{ config('web.folder_prefix') }}/css/color.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <meta name="robots" content="max-image-preview:large" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="TCF Thailand -" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - TCF Thailand" />
    <meta property="og:description"
        content="Accounting Consulting Firms in Thailand: TCF Thailand provides professional services in the fields of Accounting, Taxation, Payroll, Audit, HR, Legal Services." />
    <meta property="og:url" content="https://tokyoconsulting-thailand.tokyoconsulting-group.com" />
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
                        </span> <span>Contact Us</span></p>
                    <h1 class="mb-0 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section c-bg-secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="contact-box">
                        <div class="row no-gutters">
                            <div class="col-xl-7 col-xl-7 d-flex align-items-stretch">
                                <div class=" w-100 mb-5 p-md-5 p-4">
                                    <h3 class="h3 mb-4">Get in touch</h3>

                                    <div class="alert d-none justify-content-center" style="border-radius: 10px">
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="companyName">Company Name</label>
                                                    <input type="text" class="form-control" name="companyName"
                                                        id="companyName" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Person In Charge Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="telephone">telephone</label>
                                                    <input type="text" class="form-control" name="telephone"
                                                        id="telephone" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="detail">Detail of Questions or
                                                        Concerns</label>
                                                    <textarea name="detail" class="form-control" id="detail" cols="30" rows="5" placeholder=""
                                                        style="height:100px;"></textarea>
                                                </div>
                                            </div>
                                            @if (env('GOOGLE_RECAPTCHA_KEY'))
                                                <div class="col-md-12 text-right form-group">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                                </div>
                                            @endif
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-5 d-flex align-items-stretch order-md-last">
                                <div class="info-wrap c-bg-primary w-100 p-md-5 p-sm-4 px-2 py-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">Tokyo Consulting Firm Co., Ltd.</p>
                                    <div class="dbox w-100 d-flex flex-sm-row  flex-column align-items-center">
                                        <div
                                            class="icon d-flex align-items-center justify-content-center mb-2 mb-sm-0">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text text-center text-sm-start pl-3">
                                            @if ($map->count() > 0)
                                                @foreach ($map as $k => $v)
                                                    <div>
                                                        <p><span>Address: </span>{{ $v->address }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex flex-sm-row  flex-column  align-items-center">
                                        <div
                                            class="icon d-flex align-items-center justify-content-center mb-2 mb-sm-0">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text text-center text-sm-start pl-3">
                                            <p><span>Phone: </span> <a href="tel:{{ @$contact->telephone }}">
                                                    {{ @$contact->telephone }}</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="dbox w-100 d-flex flex-sm-row  flex-column  align-items-center">
                                        <div
                                            class="icon d-flex align-items-center justify-content-center mb-2 mb-sm-0">
                                            <i class="far fa-paper-plane"></i>
                                        </div>
                                        <div class="text text-center text-sm-start pl-3">
                                            <p><span>Email:</span> <a
                                                    href="mailto:{{ @$contact->email }}">{{ @$contact->email }}</a>
                                            </p>
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.validate.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/alime.bundle.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/wow.min.js"></script>
    <!-- Active -->
    <script src="{{ config('web.folder_prefix') }}/js/active.js"></script>
    <!-- Breadcrumbs -->
    <script src="{{ config('web.folder_prefix') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ config('web.folder_prefix') }}/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

    <script>
        $('#contactForm').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                companyName: {
                    required: true
                },
                name: {
                    required: true
                },
                email: {
                    required: true
                },
                telephone: {
                    required: true,
                    number: true
                },
                detail: {
                    required: true,
                },
            },
            messages: {
                companyName: {
                    required: "Please fill in the blank"
                },
                name: {
                    required: "Please fill in the blank"
                },
                email: {
                    required: "Please fill in the blank",
                    email: "e-mail formet is required"
                },
                telephone: {
                    required: "Please fill in the blank",
                    number: "numbers only"
                },
                detail: {
                    required: "Please fill in the blank"
                },
            },
            submitHandler: function(form) {
                inputs = $('#contactForm')[0];
                const formData = new FormData(inputs);


                $.ajax({
                    method: 'POST',
                    url: 'api/contact/sendemail',
                    data: formData,
                    async: false,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.send-message').attr("disabled", true);
                    },
                    complete: function() {
                        $('.send-message').attr("disabled", false);
                    },
                    success: function(result) {
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
                            title: "Email Sent Successfully"
                        }).then(() => {
                            $('.alert').removeClass('d-none').removeClass(
                                    'alert-danger')
                                .addClass(`alert-${result.status}`).addClass('d-flex')
                                .html(
                                    result.msg);
                            $(inputs).find("input").removeClass("is-valid");
                            $(inputs).find("textarea").removeClass("is-valid");
                            inputs.reset();
                        });
                    },
                    error: function(result) {
                        Swal.fire({
                            icon: "error",
                            title: "Please try again later",
                            showConfirmButton: true,
                        }).then(() => {
                            $('.alert').removeClass('d-none').addClass('alert-danger')
                                .addClass('d-flex').html(
                                    'Failed, Please try again later')
                        });
                    }
                });

            }
        });
    </script>
</body>

</html>
