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

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                    
                                                                    <h4 class="card-title text-danger">Deleted Orgnization List</h4>
                                                                  <br>
                                    
                                                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>Orgnization Name</th>
                                                                            <th>User name</th>
                                                                           
                                                                            <th>Email</th>
                                                                            <th>Mobile Number</th>
                                                                            <th>Status</th>
                                                                            <th>Approvel</th>
                                                                            <th>Delete</th>
                                                                        </tr>
                                                                        </thead>
                                    
                                    
                                                                        <tbody>
                                                                            @if(count($getorgdata)>0)
                                                                            @php $sr = 1; @endphp
                                                                                @foreach($getorgdata as $getorgdata)
                                                                        <tr>
                                                                            <td>@php echo $sr ++; @endphp</td>
                                                                            <td>{{$getorgdata->org_name}}</td>
                                                                            <td>{{$getorgdata->username}}</td>
                                                                       
                                                                            <td>{{$getorgdata->email}}</td>
                                                                            <td>{{$getorgdata->mobile_number}}</td>
                                                                            <td>
                                                                                @if($getorgdata->status=='1')
                                                                                <span style="color:green;">Active</span>
                                                                                @else
                                                                                <span style="color:red;">Dactive</span>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <a href="{{url('')}}/orgrestore/{{$getorgdata->id}}" onclick="return confirm('Are you sure you want to Restore this Orgnization ?');" style="color:green;">Restore</a>
                                                                               
                                                                            
                                                                            </td>
                                                                            <td class="text-center">
                                                                              <a href="{{url('')}}/perddorgdata/{{$getorgdata->id}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="bx bx-trash" style="color:red;"> </i></a>
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