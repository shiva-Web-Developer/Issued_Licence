
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


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('subbbdata')}}" method="post" enctype="multipart/form-data">@csrf
                                        <h4 class="card-title mb-4">Trade License New Application Form</h4>

                                        <div id="basic-example">
                                            <!-- Seller Details -->
                                            <h3>Genral-Details / सामान्य विवरण</h3>
                                            <section>
                                        
                                                    <input type="text" class="form-control" value="615060"   id="orgnization_id" name="org_id">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Legacy Number / लिगेसी नंबर</label>
                                                                <input type="text" class="form-control"  placeholder="Enter Legacy Number" name="legecy_type">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Trade Type / व्यापार प्रकार  <span style="color:red;">*</span></label>
                                                                <select  id="tradetype" class="form-control" name="trade_type"></select>
                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Ward / वार्ड  <span style="color:red;">*</span></label>
                                                                <select id="wardname" class="form-control" name="ward"></select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">Applicant First Name / आवेदक का पहला नाम <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="applicant_name_f" placeholder="Enter Applicant First Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Applicant Last Name / आवेदक का अंतिम नाम <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control"  name="applicant_name_l" placeholder="Enter Applicant Last Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Father/Husband First Name / पिता पति का पहला नाम <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="fh_f_name" placeholder="Enter Father/Husband First Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Father/Husband Last Name / पिता/पति का अंतिम नाम<span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="fh_l_name" placeholder="Enter Father/Husband Last Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input">City / शहर</label>
                                                                <input type="text" class="form-control" name="city" placeholder="Enter City Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Zone </label>
                                                                <input type="text" class="form-control" name="zone" placeholder="Enter Zone Name" value="000" readonly>
                                                            </div>
                                                        </div>
                                                     
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Mobile Number / मोबाइल नंबर <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="mobile_number" placeholder="Enter Mobile Number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Email ID / ईमेल आईडी</label>
                                                                <input type="text" class="form-control" name="email" placeholder="Enter Email ID">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Property ID / संपत्ति आईडी </label>
                                                                <input type="text" class="form-control" name="property_id" placeholder="Enter Property ID">
                                                            </div>
                                                        </div>
                                                     
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-address-input">Date Of Application / आवेदन की तारीख <span style="color:red;">*</span></label>
                                                                <input type="date" class="form-control" name="application_date" placeholder="Enter Your Last Name" required> 
                                                            </div>
                                                        </div>
                                                    </div>
                                             
                                            </section>

                                            <!-- Company Document -->
                                            <h3>Firm Details / फर्म का नाम और पता</h3>
                                            <section>
                                         
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-pancard-input">Messrs/Firm Name / मेसर्स / फर्म का नाम <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="firm_name" placeholder="Enter Messrs/Firm Name" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-vatno-input">Type of Firm / फर्म का प्रकार <span style="color:red;">*</span></label>
                                                                <select  id="firmtype" class="form-control" name="firm_type"></select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-pancard-input">House/Plot/Building Number / मकान/प्लॉट/बिल्डिंग नंबर <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="plot_number" placeholder="Enter House/Plot/Building Number" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-vatno-input">Street / सड़क <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="road"  placeholder="Enter Street Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-cstno-input">Pincode Number / पिन कोड नंबर <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode Number" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-servicetax-input">District / ज़िला <span style="color:red;">*</span></label>
                                                                <input type="text" class="form-control" name="district"  placeholder="Enter District Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-companyuin-input">Countary / देश</label>
                                                                <input type="text" class="form-control" name="countary" value="India" readonly >
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-declaration-input">Joint Partner Name (if any)</label>
                                                                <input type="text" class="form-control" name="join_partner" placeholder="Enter Joint Partner Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                          
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-expiration-input">Select Shop Type 
                                                                    <br>  दुकान का प्रकार चुनें<span style="color:red;">*</span></label>
                                                                    <select name="shop_type" id="" class="form-control" required>
                                                                        <option value="">Select Shop Type</option>
                                                                        <option value="College">College</option>
                                                                        <option value="School">School</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                            </section>

                                            <!-- Bank Details -->
                                            <h3>Documents / आवश्यक दस्तावेज</h3>
                                            <section>
                                                <div>
                                                
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-namecard-input">Proprietor / Owner photograph / मालिक / स्वामी फोटो <span style="color:red;">*</span></label>
                                                                    <input type="file" class="form-control" name="swami_img" required placeholder="Enter Your Name on Card">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-namecard-input">Firm /Office photograph/फर्म/ ऑफिस तस्वीर <span style="color:red;">*</span></label>
                                                                    <input type="file" class="form-control" name="officer_img" required placeholder="Enter Your Name on Card">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-cardno-input">Owned premises- Property tax receipt, Property registration details /
                                                                         स्वामित्व वाले परिसर संपत्ति कर रसीद, संपत्ति पंजीकरण <span style="color:red;">*</span></label>
                                                                    <input type="file" class="form-control" name="property_img" required  placeholder="Credit Card Number">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-card-verification-input">Self attested Rent agreement (If Rented property)
                                                                         and Property <br> tax receipt (If self own property)  <span style="color:red;">*</span></label>
                                                                    <input type="file" class="form-control" name="tax_img" required placeholder="Credit Verification Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-expiration-input"> Government ID proof (Voter ID/PAN Card/Driving license/Aadhar
                                                                         <br> Card/Rent Agreement / Partnership) <span style="color:red;">*</span></label>
                                                                    <input type="file" class="form-control" name="id_proof_img" required placeholder="Card Expiration Date">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-expiration-input">* Self Certificate/Affidavit
                                                                        <br>  स्व प्रमाणपत्र / एफिडेविट <span style="color:red;">*</span></label>
                                                                    <input type="file" class="form-control" name="affidevit_img" required placeholder="Card Expiration Date">
                                                                </div>
                                                            </div>
                                                        </div>

            
                                                  </div>
                                            </section>

                                            <!-- Confirm Details -->
                                            <h3>Confirm Detail</h3>
                                            <section>
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-6">
                                                        <div class="text-center">
                                                            <div class="mb-4">
                                                                <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                            </div>
                                                            <div>
                                                                <h5>Confirm Detail</h5>
                                                               
                                                            </div>
                                                            <div class="mb-4">
                                                               <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                            <span style="color:red;"><a href="Licence-Data"><u>
                                                                भुगतान करे 
                                                            </u></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </form>
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

                
           
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Form.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by business innovation
                                </div>
                            </div>
                        </div>
                    </div>
           
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
    function myFunction() {
        var getunicorgid = $('#orgnization_id').val();
            // alert(getunicorgid);
            $.ajax({
                    url: "{{url('gettradedata')}}",
                    type: "get",
                    data: {
                        getunicorgid: getunicorgid,
                        // _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#tradetype').html('<option value="">Select Name</option>');
                        $.each(result.feththesub, function (key, value) {

                            $("#tradetype").append('<option value="' + value
                                .trade_type + '">' + value.trade_type + '</option>');
                        });
                    }
                });

              

                $.ajax({
                    url: "{{url('getwarddata')}}",
                    type: "get",
                    data: {
                        getunicorgid: getunicorgid,
                        // _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#wardname').html('<option value="">Select Name</option>');
                        $.each(result.fetcthwardname, function (key, value) {

                            $("#wardname").append('<option value="' + value
                                .ward_name + '">' + value.ward_name + '</option>');
                        });
                    }
                });



                $.ajax({
                    url: "{{url('getfirmdata')}}",
                    type: "get",
                    data: {
                        getunicorgid: getunicorgid,
                        // _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#firmtype').html('<option value="">Select Name</option>');
                        $.each(result.fetcthfirmname, function (key, value) {

                            $("#firmtype").append('<option value="' + value
                                .firm_type + '">' + value.firm_type + '</option>');
                        });
                    }
                });
            }

</script>

    </body>
</html>
