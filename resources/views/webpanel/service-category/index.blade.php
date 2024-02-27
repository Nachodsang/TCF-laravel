<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Webpanel</title>

    <base href="{{ url('/') }}">
    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="admin/css/style.css" rel="stylesheet">
    @if (@$css)
        @foreach ($css as $css)
            <link href="{{ $css }}" rel="stylesheet">
        @endforeach
    @endif
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('webpanel.layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <span class="loading"></span>
            <!-- Main Content -->
            <div id="content">

                @include('webpanel.layout.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @include("webpanel.$module.$page")

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('webpanel.layout.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>
    <script src="admin/js/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    @if (@$js)
        @foreach ($js as $js)
            <script src="{{ $js }}"></script>
        @endforeach
    @endif

    @if (Session::has('status'))
        <script type="text/javascript">
            let status = "{{ Session::get('status') }}";
            let message = "{{ Session::get('message') }}";

            function messageAlert() {
                Swal.fire({
                    icon: status,
                    title: message,
                    showConfirmButton: false,
                    timer: 1200
                });
            }
            window.onload = messageAlert;
        </script>
    @endif

    <script>
        $(".loading").hide();

        var token = "{{ csrf_token() }}"
        var area = $("#detail_th").closest('.row').find('.sk-area');

        $('#url').on('keydown', function(e) {
            if (e.keyCode == 32) {
                return false;
            }
        });

        function convertDetail() {
            const lang = area.attr('data-lang');
            if (window.location.href.indexOf("members") > -1) {
                text = document.querySelector(`.sk-area[data-lang="${lang}"]`).querySelector('.sk-body').innerText;
                if (text !== '') $(`textarea[name="detail_${lang}"]`).html(text.replace(/\s+/g, ' '));
            }

            $.each(area.find('.sk-panel'), function() {
                $(this).remove();
            });
            $.each(area.find('.col-img'), function() {
                $(this).removeAttr('style');
                $(this).find('h5').remove();
                $(this).find('.img-caption').removeAttr('contenteditable');
                $(this).find('.sk-img').each(function() {
                    let hyperlink = $(this).find('img').attr('data-href');
                    let img = $(this).find('img').remove('data-href');
                    if (typeof hyperlink !== typeof undefined) {
                        $(this).find('img').remove();
                        $(this).append('<a href="' + hyperlink + '"></a>');
                        $(this).find('a').append(img);
                    }
                })
            });
            area.find('.col-txt').removeAttr('style');
            $.each(area.find('.col-txt'), function() {
                $(this).removeAttr('contenteditable');
            });
            area.find('.col-img').find('.bg-light').removeClass('bg-light').addClass('img-');
            $("#detail_th").html(area.find('.sk-body').html());
        }

        $('.status').on('click', function() {
            const cur = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: 'webpanel/service-category/status',
                method: 'POST',
                async: false,
                data: {
                    id: cur.data('id')
                },
                success: (res) => {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top",
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "success",
                        title: "Change Status Success"
                    });
                },
                error: (res) => {
                    Swal.fire({
                        icon: "error",
                        title: "Please try again later",
                        showConfirmButton: true,
                    });
                }
            });
        })

        $('#serviceCategoryAddForm').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                name: {
                    remote: {
                        url: "{{ url('webpanel/service-category/check/name') }}",
                        data: {
                            _token: token
                        },
                        type: "post"
                    },
                    required: true,
                },
                icon: {
                    required: true
                },
                // type: {
                //     required: true,
                // },
                url: {
                    remote: {
                        url: "{{ url('webpanel/service-category/check/url') }}",
                        data: {
                            _token: token
                        },
                        type: "post"
                    },
                    required: true,
                },
                description: {
                    required: true,
                }
            },
            messages: {
                name: {
                    remote: 'ชื่อนี้ถูกใช้ไปแล้ว',
                    required: "กรุณากรอกข้อมูล"
                },
                icon: {
                    required: "กรุณากรอกข้อมูล"
                },
                // type: {
                //     required: "กรุณาเลือกรูปภาพ",
                // },
                url: {
                    remote: 'URL นี้ถูกใช้ไปแล้ว',
                    required: "กรุณากรอกข้อมูล"
                },
                description: {
                    required: "กรุณากรอกข้อมูล"
                }
            },
            submitHandler: function(form) {
                convertDetail();
                inputs = $('#serviceCategoryAddForm')[0];
                const formData = new FormData(inputs);
                $.ajax({
                    method: 'POST',
                    url: 'webpanel/service-category/add',
                    data: formData,
                    async: false,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('#loading').show();
                    },
                    complete: function() {
                        $('#loading').hide();
                    },
                    success: function() {
                        Swal.fire({
                            icon: "success",
                            title: "Data has been saved",
                            showConfirmButton: false,
                            timer: 1500
                        })

                        setTimeout(function() {
                            window.location.href =
                                "{{ url('/webpanel/service-category') }}";
                        }, 1000);
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Please try again later",
                            showConfirmButton: true,
                        });
                    }
                });
            }
        })

        $('#serviceCategoryEditForm').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                name: {
                    remote: {
                        url: "{{ url('webpanel/service-category/check/name') }}",
                        data: {
                            _token: token,
                            id: '{{ @$serviceCat->id }}'
                        },
                        type: "post"
                    },
                    required: true,
                },
                icon: {
                    required: true
                },
                // type: {
                //     required: true,
                // },
                url: {
                    remote: {
                        url: "{{ url('webpanel/service-category/check/url') }}",
                        data: {
                            _token: token,
                            id: '{{ @$serviceCat->id }}'
                        },
                        type: "post"
                    },
                    required: true,
                },
                description: {
                    required: true,
                }
            },
            messages: {
                name: {
                    remote: 'ชื่อนี้ถูกใช้ไปแล้ว',
                    required: "กรุณากรอกข้อมูล"
                },
                icon: {
                    required: "กรุณากรอกข้อมูล"
                },
                // type: {
                //     required: "กรุณาเลือกรูปภาพ",
                // },
                url: {
                    remote: 'URL นี้ถูกใช้ไปแล้ว',
                    required: "กรุณากรอกข้อมูล"
                },
                description: {
                    required: "กรุณากรอกข้อมูล"
                }
            },
            submitHandler: function(form) {
                convertDetail();
                inputs = $('#serviceCategoryEditForm')[0];
                id = $('#serviceCatId').val();
                const formData = new FormData(inputs);
                $.ajax({
                    method: 'POST',
                    url: `webpanel/service-category/update/${id}`,
                    data: formData,
                    async: false,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('#loading').show();
                    },
                    complete: function() {
                        $('#loading').hide();
                    },
                    success: function() {
                        Swal.fire({
                            icon: "success",
                            title: "Data has been Updated",
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            window.location.href =
                                "{{ url('/webpanel/service-category') }}";
                        }, 1000);
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Please try again later",
                            showConfirmButton: true,
                        });
                    }
                });
            }
        });

        $(".deleteService").on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            Swal.fire({
                title: "Do you want to Delete Service Category ?",
                showCancelButton: true,
                confirmButtonText: "Confirm",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        url: `webpanel/service-category/delete/${id}`,
                        data: {
                            _method: 'DELETE'
                        },
                        async: false,
                        beforeSend: function() {
                            $('#loading').show();
                        },
                        complete: function() {
                            $('#loading').hide();
                        },
                        success: function() {
                            Swal.fire({
                                icon: "success",
                                title: "Service Category has been Deleted",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                $(`.ServiceRow-${id}`).remove();
                            });
                        },
                        error: function() {
                            Swal.fire({
                                icon: "error",
                                title: "Please try again later",
                                showConfirmButton: true,
                            });
                        }
                    });
                }
            });
        });
    </script>


</body>

</html>
