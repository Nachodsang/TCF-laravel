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
    <style>
        .alert .btn-close {
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            height: 100%;
            position: absolute;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "
                                style="background-image: url('images/logoTCF-colored.png'); background-position: center;background-repeat: no-repeat;">

                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    @if (\Session::has('status'))
                                        <div class="alert alert-danger d-flex justify-content-center"
                                            style="border-radius: 10px">
                                            {{ \Session::get('message') }}
                                        </div>
                                    @endif
                                    <form class="user" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" require="true"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                require="true" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck"
                                                    name="remember_me" value="on">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" href="javascript:"
                                            class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        {{-- <hr> --}}
                                        {{-- <a href="javascript:" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="javascript:" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    {{-- <hr> --}}
                                    {{-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        var validate = (e, c, s) => {
            const form = document.querySelector(e);
            const config = c;
            const rules = form.querySelectorAll('[require="true"]');
            let error = true;
            let required, values;
            // const alert = document.createElement('div');
            // alert.setAttribute('class','alert alert-warning alert-dismissible d-none')
            // alert.innerHTML= `
        //     <strong class="mr-2">Holy guacamole!</strong><span>You should check in on some of those fields below.</span>
        //     <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        // `;
            // document.querySelector('.-alert').append(alert);
            form.addEventListener('submit', function(el) {
                el.preventDefault();
                required = [];
                values = {};
                Array.prototype.map.call(rules, function(e, i) {
                    if (e.value == '' | e.value == null) {
                        required.push(e.getAttribute('name'))
                        e.classList.remove(config.validClass)
                        e.classList.add(config.invalidClass)
                    } else {
                        delete required[i];
                        values[`${e.getAttribute('name')}`] = e.value;
                        e.classList.remove(config.invalidClass)
                        e.classList.add(config.validClass)
                    }
                });
                if (required.length < 1) {
                    form.submit();
                    //     setTimeout(() => {
                    //         login(values).then(res => {
                    //             document.querySelector('.alert') === null ? document.querySelector('.-alert').append(alert) : '';
                    //             let title = res.status === true ? 'Success!' : 'Opps!';
                    //             let newClass = res.status === true ? 'alert-success': 'alert-danger';
                    //             alert.querySelector('strong').innerHTML = title;
                    //             alert.querySelector('span').innerHTML = res.message;
                    //             alert.classList?.remove('alert-warning');
                    //             alert.classList?.remove('alert-success');
                    //             alert.classList.add(newClass)
                    //             alert.classList?.remove('d-none');
                    //             res.status === true ? window.location.href='webpanel':'';
                    //         });
                    //     }, 800);
                }
            })

            async function login(data) {
                const response = await fetch('webpanel/login', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: JSON.stringify(data)
                });
                const res = await response.json();
                return res;
            }
        }

        const form = validate('.user', {
            validClass: 'is-valid',
            invalidClass: 'is-invalid'
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>
