@extends("layouts.master")



@section('content')

    <div class="conatainer-fluid">
        <h3 class="">Settings &nbsp; > &nbsp; <span class=" text-danger">Profile</span> </h3>

        <div class="row">
            <div class="col-md-4">
                <div class="card"
                    style="border-radius: 10px;background-repeat: no-repeat;background-size: cover; background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <div class="row">


                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('assets/images/users/user-5.jpg') }}" alt="image"
                                    class="img-fluid rounded-circle img-thumbnail" width="180" />
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <div class="container">
                        <h3 class="text-center"
                            style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-size:24px">Joshua
                            Boamah Tetteh</h3>
                        <span style="display: block; width: 100% ; border-top: 1px solid #ccc"></span>
                        <br>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <a href="#" type="button"
                                    class="btn btn-outline-warning btn-rounded waves-effect waves-light mb-3"
                                    data-toggle="modal" data-target="#centermodal"
                                    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-size:20px">
                                    <b><i class="fe-unlock"></i> Edit Profile</b>
                                </a>
                                <br>
                                <a href="#" type="button"
                                    class="btn btn-outline-info btn-rounded waves-effect waves-light mb-3"
                                    data-toggle="modal" data-target="#centermodal"
                                    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-size:20px">
                                    <b><i class="fe-unlock"></i> Reset Password</b>
                                </a>
                                <br>
                                <a href="#" type="button"
                                    class="btn btn-outline-pink btn-rounded waves-effect waves-light mb-3"
                                    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-size:20px">
                                    <b><i class="fe-unlock"></i> Forgot Password</b>
                                </a>
                                <br><br><br><br><br><br>
                                <br><br><br><br><br><br>
                                <br><br>

                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        {{-- <span style="display: block; width: 100% ; border-top: 1px solid #ccc"></span> --}}

                        {{-- <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Contact Us
                        </p> --}}





                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card"
                    style="border-radius: 10px;background-repeat: no-repeat;background-size: cover;backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="  card-body">
                        <h4>Personal Details</h4>
                        <span style="display: block; width: 100% ; border-top: 1px solid #ccc"></span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-danger">First Name</th>
                                                <td class="float-left"><b>Mark</b></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-danger">Last Name</th>
                                                <td class="float-left"><b>Jacob</b></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-danger">Middle Name</th>
                                                <td class="float-left"><b>Larry</b></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div>
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-danger">Voter ID</th>
                                                <td class="float-left"><b> Mark</b></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-danger">Gender</th>
                                                <td class="float-left"><b>Jacob</b></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-danger">Date of Birth</th>
                                                <td class="float-left"><b>Larry</b></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card"
                    style="border-radius: 10px;background-repeat: no-repeat;background-size: cover;backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class=" card-body">
                        <h4>Contact Details</h4>
                        <span style="display: block; width: 100% ; border-top: 1px solid #ccc"></span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-danger">Primary Phone Number</th>
                                                <td class="float-left"><b>Mark</b></td>

                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-danger">Secondary Phone Number</th>
                                                <td class="float-left"><b>Jacob</b></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div>
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-danger">Other Phone Number</th>
                                                <td class="float-left"><b>Mark</b></td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card"
                    style="border-radius: 10px;background-repeat: no-repeat;background-size: cover;backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class=" card-body">
                        <h4>Mandate Details</h4>
                        <span style="display: block; width: 100% ; border-top: 1px solid #ccc"></span>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-danger">Mandate Details</th>
                                                <td class="float-left"><b>Mark</b></td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div>
                        </div>


                        <br><br><br><br><br><br>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Center modal content -->
    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Password Reset</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-1">
                        <label for="simpleinput"><b>User ID</b></label>
                        <input type="text" id="" class="form-control">
                    </div>

                    <div class="form-group mb-1">
                        <label for="simpleinput"><b>Old Password</b></label>
                        <input type="text" id="" class="form-control">
                    </div>

                    <div class="form-group mb-1">
                        <label for="simpleinput"><b>New Password</b></label>
                        <input type="text" id="" class="form-control">
                    </div>

                    <br>
                    <button type="button" class="btn btn-success waves-effect waves-light float-right">Success</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


@endsection


@section('scripts')



@endsection
