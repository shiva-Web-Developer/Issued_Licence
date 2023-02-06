
<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>Inovice File</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link  href="{{url('')}}/assets/images/agreement.png">

        <!-- Bootstrap Css -->
        <link href="{{ url('')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light" onload="myFunction()">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            {{-- <div class="main-content">

                <div class="page-content"> --}}

                    

                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                            
                                @foreach($getreiptdata as $getreiptdata)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <address>
                                                    <strong>{{$getreiptdata->firm_name}}</strong>
                                                </address>
                                            </div>
                                  
                                        </div>
                                        <hr>
                                        <div class="invoice-title">
                                      
                                            <h6 class="float-end font-size-16">Payment id: {{$getreiptdata->payment_id}}</h6>
                                            <div class="mb-4">
                                                <img src="{{url('')}}/assets/images/agreement.png" alt="logo" height="20">
                                            </div>
                                        </div>
                                        <hr>
                                       
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <address>
                                                    <strong>Billed To:</strong><br>
                                                    {{$getreiptdata->applicant_name_f}} {{$getreiptdata->applicant_name_l}}<br>
                                                    {{$getreiptdata->plot_number}}<br>
                                                    {{$getreiptdata->city}}<br>
                                                    {{$getreiptdata->district}}
                                                    
                                                </address>
                                            </div>
                                            {{-- <div class="col-sm-6 text-sm-end">
                                                <address class="mt-2 mt-sm-0">
                                                    <strong>Shipped To:</strong><br>
                                                    Kenny Rigdon<br>
                                                    1234 Main<br>
                                                    Apt. 4B<br>
                                                    Springfield, ST 54321
                                                </address>
                                            </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mt-3">
                                                <address>
                                                    <strong>Payment:</strong><br>
                                                    
                                                    {{$getreiptdata->mobile_number}}<br>
                                                    {{$getreiptdata->email}}
                                                </address>
                                            </div>
                                            <div class="col-sm-6 mt-3 text-sm-end">
                                                <address>
                                                    <strong>Payment Date:</strong><br>
                                                    {{$getreiptdata->current_timee}}<br><br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="py-2 mt-3">
                                            <h3 class="font-size-15 fw-bold">Payment summary</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 70px;">No.</th>
                                                        <th>Application id</th>
                                                        <th>Finencial Year</th>
                                                        <th class="text-end">Payment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>{{$getreiptdata->appi_id}}</td>
                                                        <td>{{$getreiptdata->finencial_year}}</td>
                                                        <td class="text-end">{{$getreiptdata->payment}}</td>
                                                    </tr>
{{--                                                   
                                                    <tr>
                                                        <td colspan="2" class="border-0 text-end">
                                                            <strong>Shipping</strong></td>
                                                        <td class="border-0 text-end">$13.00</td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td colspan="2" class="border-0 text-end">
                                                            <strong>Total</strong></td>
                                                        <td class="border-0 text-end"><h4 class="m-0">{{$getreiptdata->payment}}</h4></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                                <a href="javascript: void(0);" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                                @endforeach
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


           
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ url('')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ url('')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ url('')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('')}}/assets/libs/node-waves/waves.min.js"></script>

        <!-- jquery step -->
        <script src="{{ url('')}}/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="{{ url('')}}/assets/js/pages/form-wizard.init.js"></script>

        <script src="{{ url('')}}/assets/js/app.js"></script>

        <script src="{{ url('')}}/assets/js/custom.js"></script>

    </body>
</html>
