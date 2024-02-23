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
    
    @livewireStyles
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

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
    
    <script>
        $(".loading").hide();

        document.addEventListener("click", function(e) {
            const addFilter = e.target.closest(".addMore");
            let type = document.getElementById("type");
            if (addFilter) {
                let item = document.createElement("div");
                item.setAttribute("class", "col-xl-12 filter-information");
                item.innerHTML = `
                <div class="card mb-3">
                    <div class="card-body p-2">
                        <div class="form-group m-0">
                            <div class="card-header-actions d-flex justify-content-between">
                                <small class="text-muted"><a  href="https://fontawesome.com/v5/search?o=r&m=free"
                                                                target=”_blank”>fontawesome.com</a></small>
                                <a href="javascript:0" class="deleteMore"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="input-group input-group-sm mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="icon">Icon</span>
                                </div>
                                <input class="form-control" id="icon" type="text" name="icon[]" ${type.value == 'industry'?``:`disabled`}>
                            </div>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="name">Name</span>
                                </div>
                                <input class="form-control required" id="name" type="text" name="name[]">
                            </div>
                        </div>
                    </div>
                </div>
                `;
                document.querySelector(".filter").appendChild(item);
            }

            const deleteMore = e.target.closest(".deleteMore");
            if (deleteMore) {
                deleteMore.closest(".filter-information").remove();
            }
        })

        document.addEventListener('change', function(e) {
            const typeBtn = e.target.closest("#type");
            if (typeBtn) {
                validator.resetForm();
                let type = typeBtn.value;
                let industryBtn = document.querySelector('select[name="industry"]');
                let icon = document.querySelectorAll('input[name="icon[]"]');
                let name = document.querySelectorAll('input[name="name[]"]');
                let addMore = document.querySelector('.addMore');
                name.forEach(el => {
                    el.classList.remove("is-invalid");
                    el.classList.remove("is-valid");
                    el.value = '';
                    el.disabled = false;
                });
                icon.forEach(el => {
                    el.classList.remove("is-invalid");
                    el.classList.remove("is-valid");
                    el.value = '';
                });
                if (addMore) {
                    addMore.disabled = false;
                }
                if (type == 'industry') {
                    icon.forEach(el => el.disabled = false);
                    industryBtn.disabled = true;
                    industryBtn.selectedIndex = 0;
                    industryBtn.classList.remove("is-invalid");
                    industryBtn.classList.remove("is-valid");
                } else {
                    industryBtn.disabled = false;
                    icon.forEach(el => el.disabled = true);
                }
            }
        })

        let validator = $('#filterFormAdd').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                type: {
                    required: true
                },
                industry: {
                    required: function(element) {
                        return $("#type").val() == 'product';
                    }
                },
                "icon[]": {
                    required: function(element) {
                        return $("#type").val() == 'industry';
                    }
                },
                "name[]": {
                    required: true,
                }
            },
            messages: {
                type: {
                    required: "กรุณาเลือกประเภท"
                },
                industry: {
                    required: "กรุณาเลือกหมวดหมู่"
                },
                "icon[]": {
                    required: "กรุณาเลือกไอคอน"
                },
                "name[]": {
                    required: "กรุณากรอกข้อมูล"
                }
            },
            submitHandler: function(form) {
                inputs = $('#filterFormAdd')[0];
                const formData = new FormData(inputs);
                $.ajax({
                    method: 'POST',
                    url: 'webpanel/ma/add',
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
                            title: "Filter has been saved",
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

        let validatorEdit = $('#filterFormEdit').submit(function(e) {
            e.preventDefault();
        }).validate({
            validClass: "is-valid",
            errorClass: "is-invalid",
            errorElement: "small",
            rules: {
                type: {
                    required: true
                },
                industry: {
                    required: function(element) {
                        return $("#type").val() == 'product';
                    }
                },
                icon: {
                    required: function(element) {
                        return $("#type").val() == 'industry';
                    }
                },
                name: {
                    required: true,
                }
            },
            messages: {
                type: {
                    required: "กรุณาเลือกประเภท"
                },
                industry: {
                    required: "กรุณาเลือกหมวดหมู่"
                },
                icon: {
                    required: "กรุณาเลือกไอคอน"
                },
                name: {
                    required: "กรุณากรอกข้อมูล"
                }
            },
            submitHandler: function(form) {
                inputs = $('#filterFormEdit')[0];
                let id = $('input[name="id"]').val();
                let type = $('input[name="type"]').val();
                const formData = new FormData(inputs);
                $.ajax({
                    method: 'POST',
                    url: `webpanel/ma/update`,
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
                    success: function(res) {
                        Swal.fire({
                            icon: res.status,
                            title: res.message,
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

        $(".deleteFilter").on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let type = $(this).attr('data-type');
            Swal.fire({
                title: "Do you want to Delete Filter ?",
                showCancelButton: true,
                confirmButtonText: "Confirm",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        url: `webpanel/ma/delete/${type}/${id}`,
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
                                title: "Filter has been Deleted",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                $(`.FilterRow_${type}_${id}`).remove();
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

        $('.status').on('click', function() {
            const cur = $(this);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: 'webpanel/ma/status',
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
    </script>
</body>

</html>
