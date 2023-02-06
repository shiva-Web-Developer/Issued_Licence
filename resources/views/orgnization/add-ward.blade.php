@extends('orgnization.layout.master')
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
                                    icon: 'success',
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
                                        <h4 class="card-title mb-4">Add Ward</h4>

                                        <form action="{{ route('wardaddsum') }}" method="post">@csrf
                                         
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">City </label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" value="{{$getorgaddress}}" name="city" readonly="">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Ward Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="ward_name" placeholder="Enter Ward Name">
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


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Orgnization List</h4>
                                      <br>
                                      <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            {{-- <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"> --}}
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Ward name</th>
                                                <th>Date</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @if(count($getorgward)>0)
                                                @php $sr = 1; @endphp
                                                    @foreach($getorgward as $getorgward)
                                            <tr>
                                                <td>@php echo $sr ++; @endphp</td>
                                                <td>{{$getorgward->ward_name}}</td>
                                                <td>{{$getorgward->current_timee}}</td>
                                           
                                                <td class="text-center">
                                                  <a href="{{url('')}}/orgwarddelete/{{$getorgward->id}}" onclick="return confirm('Are you sure you want to delete this item?');"> <i class="bx bx-trash"> </i></a>
                                                </td>
                                            </tr>
                                                    @endforeach
                                                @else 
                                                <tr>
                                                    <td colspan="8" class="text-center text-danger">Data Not Found !</td>
                                                </tr>
                                                @endif
                                       
              
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                    </div>
            <!-- container-fluid -->
        </div>
    <!-- End Page-content -->
@endsection