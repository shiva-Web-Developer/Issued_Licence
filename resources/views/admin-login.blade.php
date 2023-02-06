
<!doctype html>
<html lang="en">

<head>  
        <meta charset="utf-8" />
        <title>Admin | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('')}}/assets/images/agreement.png">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{url('')}}/assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="{{url('')}}/assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="{{url('')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body class="auth-body-bg">
        
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">


                                                    @if(session('message'))
                                                    <script>
                                                        Swal.fire({
                                                        position: 'top-end',
                                                        icon: 'success',
                                                        title: '{{session('message')}}',
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                        })
                                                    </script>
                                                    @endif
                                                    @if(session('wrongmessage'))
                                                    <script>
                                                        Swal.fire({
                                                        position: 'top-end',
                                                        icon: 'error',
                                                        title: '{{session('wrongmessage')}}',
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                        })
                                                    </script>
                                                    @endif
                                                    
                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">Issued Licenses</span></h4>
                                                    
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">
                                                                        " Issuance of a license shall be considered as notice of approval of the application. Issuance of a license is considered on a case-by-case basis and the burden of proof rests with the individual applying for the license.
                                                                        {{--  Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p> --}}
    
                                                                    <div>
                                                                        {{-- <h4 class="font-size-16 text-primary">Abs1981</h4> --}}
                                                                        <p class="font-size-14 mb-0">- Admin User</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">
                                                                        " Issuance of a license shall be considered as notice of approval of the application. Issuance of a license is considered on a case-by-case basis and the burden of proof rests with the individual applying for the license.
                                                                        {{--  Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p> --}}
    
                                                                    <div>
                                                                        {{-- <h4 class="font-size-16 text-primary">Abs1981</h4> --}}
                                                                        <p class="font-size-14 mb-0">- Admin User</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="#" class="d-block auth-logo">
                                            <img src="{{url('')}}/assets/images/agreement.png" alt="" height="40" class="auth-logo-dark">
                                            <img src="{{url('')}}/assets/images/logo-light.png" alt="" height="18" class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        
                                        <div>
                                            <h5 class="text-primary">Issued Licenses </h5>
                                            <p class="text-muted">Sign in to continue to Admin.</p>
                                        </div>
            
                                        <div class="mt-4">
                                            <form action="{{ route('loginquerypost')}} " method="post">@csrf
                
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                </div>
                        
                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        {{-- <a href="auth-recoverpw-2.html" class="text-muted">Forgot password?</a> --}}
                                                    </div>
                                                    <label class="form-label">Password</label>
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light "  type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>
                                                </div>
                        
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>
                                                
                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                    

                                            </form>
                                          
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Admin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Business Innovation</p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{url('')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{url('')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{url('')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('')}}/assets/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="{{url('')}}/assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- auth-2-carousel init -->
        <script src="{{url('')}}/assets/js/pages/auth-2-carousel.init.js"></script>
        
        <!-- App js -->
        <script src="{{url('')}}/assets/js/app.js"></script>

    </body>

</html>
