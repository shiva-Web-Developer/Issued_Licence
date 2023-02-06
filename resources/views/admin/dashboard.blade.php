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
                                {{-- <h6 >Issued Licenses</h6> --}}
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



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
                    </div>
            <!-- container-fluid -->
        </div>
    <!-- End Page-content -->
@endsection