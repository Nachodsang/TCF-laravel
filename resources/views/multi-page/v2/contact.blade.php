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
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Tokyo Consulting Firm</title>
    <link href="images/logo/tcf-tab-logo.jpg" rel="icon">
    <link rel="canonical" href="https://www.at-once.info">
    <link href="{{ config('web.folder_prefix') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ config('web.folder_prefix') }}/css/style.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
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
                            <div class="col-lg-7 col-md-7 d-flex align-items-stretch">
                                <div class=" w-100 mb-5 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    {{-- <div id="form-message-warning" class="mb-4"></div> --}}
                                    {{-- <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div> --}}
                                    <div class="alert d-none justify-content-center" style="border-radius: 10px">
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
                                                    <label class="label" for="telephone">telephone</label>
                                                    <input type="text" class="form-control" name="telephone"
                                                        id="telephone" placeholder="telephone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="detail">Message</label>
                                                    <textarea name="detail" class="form-control" id="detail" cols="30" rows="4" placeholder="detail"></textarea>
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
                                            <i class="fas fa-map-marker-alt"></i>
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
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone: </span> <a href="tel://"> {{ @$contact->telephone }}</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <i class="far fa-paper-plane"></i>
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
                name: {
                    required: "กรุณากรอกข้อมูล"
                },
                email: {
                    required: "กรุณากรอกข้อมูล",
                    email: "กรุณากรอกอีเมลให้ถูกต้อง"
                },
                telephone: {
                    required: "กรุณากรอกข้อมูล",
                    number: "กรอกตัวเลขเท่านั้น"
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
                            timer: 1000,
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
                                    'ส่งอีเมลไม่สำเร็จ กรุณาลองอีกครั้ง')
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>
