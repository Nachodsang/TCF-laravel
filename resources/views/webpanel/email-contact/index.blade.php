<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <script>
        $(".loading").hide();

        if (document.getElementById('imgService')) {
            imgService.onchange = evt => {
                const [file] = imgService.files;
                if (file) {
                    imgPreview.src = URL.createObjectURL(file);
                }
            }
        }

        $('.status').on('click', function() {
            const cur = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: 'webpanel/service/status',
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

        $('#serviceAddForm').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                imgTitle: {
                    required: true
                },
                imgAlt: {
                    required: true
                },
                imgService: {
                    required: true,
                },
                service: {
                    required: true,
                },
                detail: {
                    required: true,
                },
                seo_description: {
                    required: true,
                },
                seo_keyword: {
                    required: true,
                },
            },
            messages: {
                imgTitle: {
                    required: "กรุณากรอกข้อมูล"
                },
                imgAlt: {
                    required: "กรุณากรอกข้อมูล"
                },
                imgService: {
                    required: "กรุณาเลือกรูปภาพ",
                },
                service: {
                    required: "กรุณากรอกข้อมูล"
                },
                detail: {
                    required: "กรุณากรอกข้อมูล"
                },
                seo_description: {
                    required: "กรุณากรอกข้อมูล"
                },
                seo_keyword: {
                    required: "กรุณากรอกข้อมูล"
                },
            },
            submitHandler: function(form) {
                inputs = $('#serviceAddForm')[0];
                const formData = new FormData(inputs);
                $.ajax({
                    method: 'POST',
                    url: 'webpanel/service/add',
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
                            title: "Service has been saved",
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            location.reload();
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
        })

        $('#serviceEditForm').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                imgTitle: {
                    required: true
                },
                imgAlt: {
                    required: true
                },
                service: {
                    required: true,
                },
                detail: {
                    required: true,
                },
                seo_description: {
                    required: true,
                },
                seo_keyword: {
                    required: true,
                },
            },
            messages: {
                imgTitle: {
                    required: "กรุณากรอกข้อมูล"
                },
                imgAlt: {
                    required: "กรุณากรอกข้อมูล"
                },
                service: {
                    required: "กรุณากรอกข้อมูล"
                },
                detail: {
                    required: "กรุณากรอกข้อมูล"
                },
                seo_description: {
                    required: "กรุณากรอกข้อมูล"
                },
                seo_keyword: {
                    required: "กรุณากรอกข้อมูล"
                },
            },
            submitHandler: function(form) {
                inputs = $('#serviceEditForm')[0];
                id = $('#serviceId').val();
                const formData = new FormData(inputs);
                $.ajax({
                    method: 'POST',
                    url: `webpanel/service/update/${id}`,
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
                            title: "service has been Updated",
                            showConfirmButton: false,
                            timer: 1500
                        }).then((result) => {
                            location.reload();
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

        $(".deleteService").on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            $.ajax({
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: `webpanel/service/delete/${id}`,
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
                        title: "Service has been Deleted",
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
        });
    </script>


</body>

</html>
