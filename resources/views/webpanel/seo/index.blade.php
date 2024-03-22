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

                    <section>
                        <div class="row">
                            <div class="col ">
                                <h2 class="m-0"><span class="badge bg-main"># SEO</span></h2>


                            </div>
                        </div>
                        @if (Auth::user()->type == 'super')
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body row">
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2 d-flex flex-column  p-4">
                                                    <h2 class="text-white">#Home</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control" id="homeTitle"
                                                        value="{{ @$homeTag->title }} ">
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="homeDescription">{{ @$homeTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$homeTag->meta_keyword }}" id="homeKeyword" />
                                                    <button class="btn btn-success" id="homeSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#About Us</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control" value="{{ @$aboutTag->title }}"
                                                        id="aboutTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="aboutDescription">{{ @$aboutTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$aboutTag->meta_keyword }}" id="aboutKeyword" />
                                                    <button class="btn btn-success" id="aboutSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#All Service</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control" value="{{ @$serviceTag->title }}"
                                                        id="serviceTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="serviceDescription">{{ @$serviceTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$serviceTag->meta_keyword }}" id="serviceKeyword" />
                                                    <button class="btn btn-success" id="serviceSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#Service Category</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$serviceCatTag->title }}" id="serviceCatTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="serviceCatDescription">{{ @$serviceCatTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$serviceCatTag->meta_keyword }}"
                                                        id="serviceCatKeyword" />
                                                    <button class="btn btn-success" id="serviceCatSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#Consultant</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$consultantTag->title }}" id="consultantTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="consultantDescription">{{ @$consultantTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$consultantTag->meta_keyword }}"
                                                        id="consultantKeyword" />
                                                    <button class="btn btn-success" id="consultantSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#M&A</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control" value="{{ @$maTag->title }}"
                                                        id="maTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="maDescription">{{ @$maTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$maTag->meta_keyword }}" id="maKeyword" />
                                                    <button class="btn btn-success" id="maSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#Blogs</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control" value="{{ @$blogTag->title }}"
                                                        id="blogTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="blogDescription">{{ @$blogTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$blogTag->meta_keyword }}" id="blogKeyword" />
                                                    <button class="btn btn-success" id="blogSave">SAVE</button>
                                                </div>
                                            </div>
                                            <div class=" col-6 mb-2 p-4">
                                                <div class="bg-primary rounded-2  d-flex flex-column  p-4">
                                                    <h2 class="text-white">#Contact</h2>
                                                    <label class="text-white">Title</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$contactTag->title }}" id="contactTitle" />
                                                    <label class="text-white">Meta Description</label>
                                                    <textarea rows="5" class="mb-2 form-control" id="contactDescription">{{ @$contactTag->meta_description }}</textarea>
                                                    <label class="text-white">Meta Keyword</label>
                                                    <input class="mb-2 form-control"
                                                        value="{{ @$contactTag->meta_keyword }}"
                                                        id="contactKeyword" />
                                                    <button class="btn btn-success" id="contactSave">SAVE</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </section>


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


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
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

        const edit = (data) => {
            console.log(data)
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: 'webpanel/seo/edit',
                method: 'POST',
                async: false,
                data: data,
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
                        title: "Seo Data Saved"
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
        }

        $('#homeSave').on('click', function() {
            const data = {
                page: 'home',
                title: $('#homeTitle').val(),
                description: $('#homeDescription').val(),
                keyword: $('#homeKeyword').val()
            }
            edit(data)
        })
        $('#aboutSave').on('click', function() {
            const data = {
                page: 'about',
                title: $('#aboutTitle').val(),
                description: $('#aboutDescription').val(),
                keyword: $('#aboutKeyword').val()
            }
            edit(data)
        })
        $('#serviceSave').on('click', function() {
            const data = {
                page: 'service',
                title: $('#serviceTitle').val(),
                description: $('#serviceDescription').val(),
                keyword: $('#serviceKeyword').val()
            }
            edit(data)
        })
        $('#serviceCatSave').on('click', function() {
            const data = {
                page: 'serviceCat',
                title: $('#serviceCatTitle').val(),
                description: $('#serviceCatDescription').val(),
                keyword: $('#serviceCatKeyword').val()
            }
            edit(data)
        })
        $('#consultantSave').on('click', function() {
            const data = {
                page: 'consultant',
                title: $('#consultantTitle').val(),
                description: $('#consultantDescription').val(),
                keyword: $('#consultantKeyword').val()
            }
            edit(data)
        })
        $('#maSave').on('click', function() {
            const data = {
                page: 'ma',
                title: $('#maTitle').val(),
                description: $('#maDescription').val(),
                keyword: $('#maKeyword').val()
            }
            edit(data)
        })
        $('#blogSave').on('click', function() {
            const data = {
                page: 'blog',
                title: $('#blogTitle').val(),
                description: $('#blogDescription').val(),
                keyword: $('#blogKeyword').val()
            }
            edit(data)
        })
        $('#contactSave').on('click', function() {
            const data = {
                page: 'contact',
                title: $('#contactTitle').val(),
                description: $('#contactDescription').val(),
                keyword: $('#contactKeyword').val()
            }
            edit(data)
        })
    </script>


</body>

</html>
