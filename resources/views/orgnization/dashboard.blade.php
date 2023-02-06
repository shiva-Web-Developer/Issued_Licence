@extends('orgnization.layout.master')
@section('title') {{'Orgnization | Dashboard'}}
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
                                <h3><b>Orgnization Dashboard</b> </h3>
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">{{$orgname}}</h4>
                               
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- row start  -->
                        <div class="row">
                        <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                            <a href="#">
                                            <div class="card-body">
                                                @foreach($getorgdata as $getorgdata)
                                                <img src="{{url('')}}/assets/orglogo/{{$getorgdata->org_logo}}" style="width:100%;height:100px;">
                                                @endforeach
                                            </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card mini-stats-wid">
                                        <a href="{{ route('orgpage') }}">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h3 class="text-muted fw-large">
                                                            <br>
                                                            ISSUED LICENSES
                                                            <br><br>
                                                        </h3>
                                                     
                                                    </div>

                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>

                    
                        </div>
                        <!-- end row  -->



                        <!-- row start  -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">
                                            <a href="#"> ISSUED LICENSES</a>
                                        </h4>

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