@extends('admin.layout.master')
@section('title') {{'Admin | Dashboard'}}
@endsection
@section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Admin Dashboard
                                        <br> 
                                        <span style="font-size:10px;">Issued Licenses</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                      <!-- end page title -->

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


                                       <!-- row start  -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">ADMIN</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->




                        <!-- row start  -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Add Orgnization Details </h4>

                                        <form action="{{ route('orgadddata') }}" method="post" enctype="multipart/form-data">@csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Orgnization Logo</label>
                                                <div class="col-sm-9">
                                                  <input type="file" class="form-control" name="org_logo" >
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Orgnization Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="org_name" placeholder="Enter Orgnization Name">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Orgnization Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="org_address" placeholder="Enter Orgnization Address">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mobile Number</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" name="mobile_number" placeholder="Enter Mobile Number">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                          
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
            <!-- container-fluid -->
        </div>
    <!-- End Page-content -->
@endsection