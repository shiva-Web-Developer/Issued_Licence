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
                                            <div class="col-md-12">
                                         
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Your Profile </h4>
                    
                                                            <form action="{{ route('orgdataedit') }}" method="post">@csrf
                                                                
                    
                                                                @foreach($getorgdata as $getorgdataa)
                                                                <div class="row">
                                                                    <input type="hidden" class="form-control" name="id" value="{{$getorgdataa->id}}">

                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-email-input" class="form-label">Orgnization Name</label>
                                                                            <input type="text" class="form-control" name="org_name" value="{{$getorgdataa->org_name}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-password-input" class="form-label">Address</label>
                                                                            <input type="text" class="form-control" name="address" value="{{$getorgdataa->address}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-email-input" class="form-label">Mobile Number</label>
                                                                            <input type="number" class="form-control" name="mobile_number" value="{{$getorgdataa->mobile_number}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-password-input" class="form-label">User Name</label>
                                                                            <input type="text" class="form-control" name="username" value="{{$getorgdataa->username}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-email-input" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" name="email" value="{{$getorgdataa->email}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-password-input" class="form-label">Password</label>
                                                                            <input type="text" class="form-control" name="password" value="{{$getorgdataa->password}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="formrow-password-input" class="form-label">Status</label><br>
                                                                            @if($getorgdataa->status=='1')
                                                                            <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                                                            @else
                                                                            <span class="badge badge-pill badge-soft-danger font-size-11">Dactive</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div>
                                                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                                </div>

                                                                @endforeach
                                                            </form><br>
                                                            <p class="card-title-desc text-danger">You can update your profile details.</p>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                  
                    
                                                     
                                               
                                            </div>
                                            <!-- end row  -->

                    </div>
            <!-- container-fluid -->
        </div>
    <!-- End Page-content -->
@endsection