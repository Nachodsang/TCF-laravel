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

        let successEvent = false

        if (document.getElementById('imgService')) {
            imgService.onchange = evt => {
                const [file] = imgService.files;
                if (file) {
                    imgPreview.src = URL.createObjectURL(file);
                }
            }
        }

        $(document).on('click', '.status', function() {
            const cur = $(this);
            let id = $(this).attr('data-id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: 'webpanel/email-contact/status',
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
                    $('#inbox-table').empty()
                    $.each(res?.email, function(k, v) {
                        const date = new Date(v?.created_at)
                        const formattedDate = date.toISOString().substring(0, 10) +
                            ' ' +
                            date.toLocaleTimeString([], {
                                hour12: false
                            });
                        $('#inbox-table').append(
                            `<tr class='emailRow-${v.id}'>
                                <td class='text-center'>${k + 1}</td>
                                <td>${v.email}</td>
                                <td>${v.company_name}</td>
                                <td>${v.name}</td>
                                <td>${v.phone}</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal${v.id}i'>
                                        See Detail
                                    </button>
                                    <div class='modal fade' id='exampleModal${v.id}i' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>From: ${v.company_name}</h1>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body row'>
                                                    <div class='col-12 mb-4' style="white-space: pre-line; overflow-wrap: break-word;">${v.details}</div>
                                                    <i><b>${v.name}</b></i>
                                                    <i>${v.email}</i>
                                                    <i>${v.phone}</i>
                                                    <i>${formattedDate}</i>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='text-left'>
                                    <a class='btn btn-success rounded-pill btn-sm status ' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>
                                    <a class='btn btn-primary btn-sm rounded-pill ' data-id='${v.id}' href='mailto:${v.email}' role='button'><i class='fas fa-paper-plane'></i></a>
                                    <a class='btn btn-warning rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>
                                </td>
                                <td class='text-center'>${formattedDate}</td>
                                <td>
                                    <a class='btn btn-danger btn-sm rounded-pill deleteItem' data-id='${v.id}' href='javascript:0' role='button'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>`
                        );
                    });

                    $('#favourite-table').empty()
                    $.each(res?.favourite, function(k, v) {
                        const date = new Date(v?.created_at)
                        const formattedDate = date.toISOString().substring(0, 10) +
                            ' ' +
                            date.toLocaleTimeString([], {
                                hour12: false
                            });
                        $('#favourite-table').append(
                            `
                            <tr class='emailRow-${v.id}' style= "${ k % 2 == 0 ? 'background-color:white' : 'background-color:#FFFEDF' }">
                                <td class=''>
                                    ${k + 1}
                                    ${v.status == 1 ? "<i class='far fa-check-circle fa-2x text-success'></i>" : ""}
                                </td>
                                <td>${v.email}</td>
                                <td>${v.company_name}</td>
                                <td>${v.name}</td>
                                <td>${v.phone}</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal${v.id}f'>
                                        See Detail
                                    </button>
                                    <div class='modal fade' id='exampleModal${v.id}f' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>From: ${v.company_name}</h1>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body row'>
                                                    <div class='col-12 mb-4'  style="white-space: pre-line;
                        overflow-wrap: break-word;">
                                                        ${v.details}
                                                    </div>
                                                    <i><b>${v.name}</b></i>
                                                    <i>${v.email}</i>
                                                    <i>${v.phone}</i>
                                                    <i>${formattedDate}</i>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='text-left'>
                                    <a class='btn ${ v.status == 1? 'btn-secondary' : 'btn-success' } rounded-pill btn-sm status ' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>
                                    <a class='btn btn-primary btn-sm rounded-pill ' data-id='${v.id}' href='mailto:${v.email}' role='button'><i class='fas fa-paper-plane'></i></a>
                                    <a class='btn btn-secondary rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>
                                </td>
                                <td class='text-center'>${formattedDate}</td>
                                <td>
                                    <a class='btn btn-danger btn-sm rounded-pill deleteItem' data-id='${v.id}' href='javascript:0' role='button'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>
                        `
                        );
                    });

                    $('#done-table').empty()
                    $.each(res?.done, function(k, v) {
                        const date = new Date(v?.created_at)
                        const formattedDate = date.toISOString().substring(0, 10) +
                            ' ' +
                            date.toLocaleTimeString([], {
                                hour12: false
                            });
                        $('#done-table').append(
                            `
                            <tr class='emailRow-${v.id}' style= "${ k % 2 == 0 ? 'background-color:white' : 'background-color:#E8F5E9' }">
                                <td class=''>${k + 1}${v.favourite == 1 ? " <i class='fas fa-star fa-2x text-warning'></i>" : ""}</td>
                                <td>${v.email}</td>
                                <td>${v.company_name}</td>
                                <td>${v.name}</td>
                                <td>${v.phone}</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal${v.id}d'>
                                        See Detail
                                    </button>
                                    <div class='modal fade' id='exampleModal${v.id}d' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>From: ${v.company_name}</h1>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body row'>
                                                    <div class='col-12 mb-4'  style="white-space: pre-line;
                        overflow-wrap: break-word;" >${v.details}</div>
                                                    <i><b>${v.name}</b></i>
                                                    <i>${v.email}</i>
                                                    <i>${v.phone}</i>
                                                    <i>${formattedDate}</i>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='text-left'>
                                    <a class='btn btn-secondary rounded-pill btn-sm status ' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>
                                    <a class='btn btn-primary btn-sm rounded-pill ' data-id='${v.id}' href='mailto:${v.email}' role='button'><i class='fas fa-paper-plane'></i></a>
                                    <a class='btn  ${ v.favourite == 1 ? 'btn-secondary' : 'btn-warning' } rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>
                                </td>
                                <td class='text-center'>${formattedDate}</td>
                                <td>
                                    <a class='btn btn-danger btn-sm rounded-pill deleteItem' data-id='${v.id}' href='javascript:0' role='button'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>`
                        );
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
        $(document).on('click', '.favourite', function() {
            const cur = $(this);
            let id = $(this).attr('data-id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: 'webpanel/email-contact/favourite',
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
                    })

                    $('#inbox-table').empty()
                    $.each(res?.email, function(k, v) {
                        const date = new Date(v?.created_at)
                        const formattedDate = date.toISOString().substring(0, 10) +
                            ' ' +
                            date.toLocaleTimeString([], {
                                hour12: false
                            });
                        $('#inbox-table').append(
                            `
                            <tr class='emailRow-${v.id}'>
                                <td class='text-center'>${k + 1}</td>
                                <td>${v.email}</td>
                                <td>${v.company_name}</td>
                                <td>${v.name}</td>
                                <td>${v.phone}</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal${v.id}i'>
                                        See Detail
                                    </button>
                                    <div class='modal fade' id='exampleModal${v.id}i' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>From: ${v.company_name}</h1>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body row'>
                                                    <div class='col-12 mb-4' style="white-space: pre-line;
                        overflow-wrap: break-word;" >${v.details}</div>
                                                    <i><b>${v.name}</b></i>
                                                    <i>${v.email}</i>
                                                    <i>${v.phone}</i>
                                                    <i>${formattedDate}</i>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='text-left'>
                                    <a class='btn btn-success rounded-pill btn-sm status ' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>
                                    <a class='btn btn-primary btn-sm rounded-pill ' data-id='${v.id}' href='mailto:${v.email}' role='button'><i class='fas fa-paper-plane'></i></a>
                                    <a class='btn btn-warning rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>
                                </td>
                                <td class='text-center'>${formattedDate}</td>
                                <td>
                                    <a class='btn btn-danger btn-sm rounded-pill deleteItem' data-id='${v.id}' href='javascript:0' role='button'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>
                        `
                        );
                    });

                    $('#favourite-table').empty()
                    $.each(res?.favourite, function(k, v) {
                        const date = new Date(v?.created_at)
                        const formattedDate = date.toISOString().substring(0, 10) +
                            ' ' +
                            date.toLocaleTimeString([], {
                                hour12: false
                            });
                        $('#favourite-table').append(
                            `
                            <tr class='emailRow-${v.id}' style= "${ k % 2 == 0 ? 'background-color:white' : 'background-color:#FFFEDF' }">
                                <td class=''>${k + 1}${v.status == 1 ? "<i class='far fa-check-circle fa-2x text-success'></i>" : ""}</td>
                                <td>${v.email}</td>
                                <td>${v.company_name}</td>
                                <td>${v.name}</td>
                                <td>${v.phone}</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal${v.id}f'>
                                        See Detail
                                    </button>
                                    <div class='modal fade' id='exampleModal${v.id}f' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>From: ${v.company_name}</h1>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body row'>
                                                    <div class='col-12 mb-4' style="white-space: pre-line;
                        overflow-wrap: break-word;" >${v.details}</div>
                                                    <i><b>${v.name}</b></i>
                                                    <i>${v.email}</i>
                                                    <i>${v.phone}</i>
                                                    <i>${formattedDate}</i>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='text-left'>
                                    ${ v.status == 1 ? ` <a class='btn btn-secondary  rounded-pill btn-sm status' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>` : ` <a class='btn btn-success  rounded-pill btn-sm status ' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>` }
                                
                                    <a class='btn btn-primary btn-sm rounded-pill ' data-id='${v.id}' href='mailto:${v.email}' role='button'><i class='fas fa-paper-plane'></i></a>
                                    <a class='btn btn-secondary rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>
                                </td>
                                <td class='text-center'>${formattedDate}</td>
                                <td>
                                    <a class='btn btn-danger btn-sm rounded-pill deleteItem' data-id='${v.id}' href='javascript:0' role='button'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>
                        `
                        );
                    });

                    $('#done-table').empty()
                    $.each(res?.done, function(k, v) {
                        const date = new Date(v?.created_at)
                        const formattedDate = date.toISOString().substring(0, 10) +
                            ' ' +
                            date.toLocaleTimeString([], {
                                hour12: false
                            });
                        $('#done-table').append(
                            `
                            <tr class='emailRow-${v.id}'  style= "${ k % 2 == 0 ? 'background-color:white' : 'background-color:#E8F5E9' }">
                                <td class=''>${k + 1}${v.favourite == 1 ? "<i class='fas fa-star fa-2x text-warning'></i>" : ""}</td>
                                <td>${v.email}</td>
                                <td>${v.company_name}</td>
                                <td>${v.name}</td>
                                <td>${v.phone}</td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal${v.id}d'>
                                        See Detail
                                    </button>
                                    <div class='modal fade' id='exampleModal${v.id}d' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h1 class='modal-title fs-5' id='exampleModalLabel'>From: ${v.company_name}</h1>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body row'>
                                                    <div class='col-12 mb-4' style="white-space: pre-line;
                        overflow-wrap: break-word;" >${v.details}</div>
                                                    <i><b>${v.name}</b></i>
                                                    <i>${v.email}</i>
                                                    <i>${v.phone}</i>
                                                    <i>${formattedDate}</i>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class='text-left'>
                                    <a class='btn btn-secondary rounded-pill btn-sm status ' role='button' data-id='${v.id}'><i class='far fa-check-square'></i></a>
                                    <a class='btn btn-primary btn-sm rounded-pill ' data-id='${v.id}' href='mailto:${v.email}' role='button'><i class='fas fa-paper-plane'></i></a>
                                    ${ v.favourite == 1 ? `<a class='btn btn-secondary rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>` : `<a class='btn btn-warning rounded-pill btn-sm favourite' role='button' data-id='${v.id}'><i class='fas fa-star'></i></a>` }  
                                </td>
                                <td class='text-center'>${formattedDate}</td>
                                <td>
                                    <a class='btn btn-danger btn-sm rounded-pill deleteItem' data-id='${v.id}' href='javascript:0' role='button'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>
                        `
                        );
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

        $(document).on('click', ".deleteItem", function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            Swal.fire({
                title: "Do you want to Delete Service ?",
                showCancelButton: true,
                confirmButtonText: "Confirm",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        url: `webpanel/email-contact/delete/${id}`,
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
                                title: "Item has been Deleted",
                                showConfirmButton: true,
                                timer: 1500
                            }).then(() => {
                                $(`.emailRow-${id}`).remove();
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
        });
    </script>

</body>

</html>
