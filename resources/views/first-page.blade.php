
<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>New Application Form</title>
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

                                @if(Session::has('message'))
                                    
                                    <div class="toast fade show" style="width:100%;" role="alert" aria-live="assertive" data-bs-autohide="false" aria-atomic="true">
                                        <div class="toast-header" style="background-color:#86acac;">
                                           
                                            <img src="{{url('')}}/assets/images/agreement.png" alt="" class="me-2" height="18">
                                            <strong class="me-auto">Issued License</strong>
                                            {{-- <small class="text-muted">just now</small> --}}
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body" style="background-color: #86acac;">
                                            {{ Session::get('message') }}  
                                        </div>
                                    </div>
                              
                                @endif


                                <div class="card">
                                    <div class="card-body">

                                        <form action="{{route('paymentpost')}}" method="post">@csrf
                                        <h4 class="card-title mb-4">Pay Your Trade License Amount</h4>

                                        <input type="hidden" class="form-control" name="orgnization_id"   id="orgnization_id">
                                        <input type="hidden" class="form-control" name="appi_id"   id="appi_id">



                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-expiration-input">Registration Number / Shop Name
                                                        <br>पंजीकरण संख्या / दुकान का नाम<span style="color:red;">*</span></label>
                                                        <input type="text" id="regnum" class="form-control" >
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="typeofshop" >


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-expiration-input">Select Finencial Year
                                                         <br>वित्तीय वर्ष का चयन करें <span style="color:red;">*</span></label>
                                                         <select class="form-control" name="finencial_year" id="finencial_year">
                                                            <option value="">Choose Finencial Year</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                          </select>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-expiration-input"> Payment 
                                                         <br> भुगतान <span style="color:red;">*</span></label>
                                                         <input type="text" name="payment" id="bbbamount" class="form-control" readonly>
                                                     
                                                    <span style="color:red;">यह भुगतान विभाग द्वारा निर्धारित हैं !</span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <span style="color:red;"><a href="Application-Form">
                                                        नया खाता बनाएँ ?
                                                    </a></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <button class="btn btn-info" type="submit">भुगतान करे</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3 text-center">
                                                    <span>Design & Develop by business innovation</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- end card body -->
                                </form >
                                
                                </div>
                                <!-- end card -->
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

      
<script type="text/javascript">

    $('#regnum').keyup(function(){
        var regnum = $('#regnum').val();
        // alert(regnum);

        $.ajax({
             url : "checknekay",
             type : "Post",
             data :
             {
                regnum:regnum, 
                _token: '{{csrf_token()}}'
             }, 
             dataType: 'json',
             
                    success: function (result) {
                    
                        $.each(result.states, function (key, value) {

							$('#typeofshop').val(value.shop_type); 
                            $('#orgnization_id').val(value.org_id); 
                            $('#appi_id').val(value.appi_id); 
                        });
                  
                    }
            });
    });


  
    $('#finencial_year').on('change', function () {
        var finencial_year = $('#finencial_year').val();

        
        var text1=document.getElementById("typeofshop").value;  

        // alert(finencial_year);
        // alert(text1);

        $.ajax({
             url : "getdataprice",
             type : "Post",
             data :
             {
                    finencial_year:finencial_year, 
                    text1:text1, 
                _token: '{{csrf_token()}}'
             }, 
             dataType: 'json',
             
                    success: function (result) {
                    
                        $.each(result.states, function (key, value) {

							$('#bbbamount').val(value.charge_amount);
                            
                            
                        
                        });
                  
                    }
            });
    });




</script>

    </body>
</html>
