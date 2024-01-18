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

    {{-- <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax"
            data-bg-img="{{ config('web.folder_prefix') }}/images/image_12092023-1318481694499528684adas.jpg"
            data-bg-opacity="1"
            style="background-image: url(&quot;images/image_12092023-1318481694499528684adas.jpg&quot;); opacity: 1;">
        </div>
        <div class="overlay-color" data-bg-opacity=".75" style="opacity: 0.75;"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Contact US</h1>
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
        <div id="blog" class="blog section">
            <div class="container-xxl py-6">
                <div class="row g-5">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        @if ($map->count() > 0)
                            @foreach ($map as $k => $v)
                                <div class="d-flex mt-0 mt-lg-4">
                                    <div>
                                        <span class="material-symbols-outlined point c-secondary">
                                            highlighter_size_3
                                        </span>
                                    </div>
                                    <div>
                                        <strong class="mb-2">{{ $v->name }}</strong>
                                        <div class="short-detail my-2 c-gray" style="max-width: 500px">
                                            {{ $v->address }}</div>
                                    </div>
                                </div>
                                <hr class="c-gray">
                            @endforeach
                        @endif
                        <div class="d-flex mt-4">
                            <div>
                                <span class="material-symbols-outlined point c-secondary">
                                    highlighter_size_3
                                </span>
                            </div>
                            <div>
                                <strong class="mb-2"> Contact</strong>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <div>
                                <span class="material-symbols-outlined icon-contact">
                                    call
                                </span>
                            </div>
                            <div>
                                <strong class="mb-2 c-gray"> Tel : {{ @$contact->telephone }}</strong>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <div>
                                <span class="material-symbols-outlined icon-contact">
                                    smartphone
                                </span>
                            </div>
                            <div>
                                <strong class="mb-2 c-gray"> Mobile : {{ @$contact->mobile }}</strong>
                            </div>
                        </div>
                        <div class="d-flex mt-4 mb-5">
                            <div>
                                <span class="material-symbols-outlined icon-contact">
                                    mail
                                </span>
                            </div>
                            <div>
                                <strong class="mb-2 c-gray"> Email : {{ @$contact->email }}</strong>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 mb-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <div class="h5 mb-1 text-uppercase c-primary">Get in touch</div>
                            <div class="h6 read-started">Ready To Get Started?</div>
                            <div class="alert d-none justify-content-center" style="border-radius: 10px">
                            </div>
                            <div class="c-gray mb-3">Your email address will not be published. Required fields are
                                marked *</div>
                            <form method="POST" id="contactForm" class="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="telephone" id="telephone"
                                                placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea name="detail" class="form-control" id="detail" cols="30" rows="4" placeholder="Details"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message"
                                                class="btn btn-primary send-message">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if ($map->count() > 0)
                        @foreach ($map as $k => $v)
                            <div class="col-lg-6 mb-4">
                                <div class="d-flex mt-0 mb-4">
                                    <div>
                                        <span class="material-symbols-outlined point c-secondary">
                                            highlighter_size_3
                                        </span>
                                    </div>
                                    <div>
                                        <strong class="">{{ $v->name }}</strong>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    {!! $v->map !!}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section> --}}
    <section class="breadcrumbs-wrap" style="background-image: url('images/downtown-bangkok2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ce-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <span
                                    class="icon material-symbols-outlined">
                                    arrow_forward_ios
                                </span></a></span> <span>Contact Us</span></p>
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
                            <div class="col-lg-7 col-md-7 d-flex align-items-stretch">
                                <div class=" w-100 mb-5 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 d-flex align-items-stretch order-md-last">
                                <div class="info-wrap c-bg-primary w-100 p-md-5 p-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">Tokyo Consulting Firm Co., Ltd.</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-outlined">
                                                location_on
                                            </span>
                                        </div>
                                        <div class="text pl-3">
                                            @if ($map->count() > 0)
                                                @foreach ($map as $k => $v)
                                                    <div>
                                                        <p><span>Address: </span>{{ $v->address }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-outlined">
                                                phone_in_talk
                                            </span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone: </span> <a href="tel://"> {{ @$contact->telephone }}</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="material-symbols-outlined">
                                                mail
                                            </span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a
                                                    href="{{ @$contact->email }}">{{ @$contact->email }}</a>
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



    <script>
        $('#contactForm').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true
                },
                telephone: {
                    required: true,
                },
                detail: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "กรุณากรอกข้อมูล"
                },
                email: {
                    required: "กรุณากรอกข้อมูล",
                    email: "กรุณากรอกอีเมลให้ถูกต้อง"
                },
                telephone: {
                    required: "กรุณากรอกข้อมูล"
                },
                detail: {
                    required: "กรุณากรอกข้อมูล"
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
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: "Send Email Success"
                        }).then(() => {
                            $('.alert').removeClass('d-none').removeClass('alert-danger')
                                .addClass(`alert-${result.status}`).addClass('d-flex').html(
                                    result.msg)
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
                                    'ส่งอีเมลไม่สำเร็จ กรุณาลองอีกครั้ง')
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>
