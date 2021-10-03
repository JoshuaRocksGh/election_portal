@extends("layouts.master")


@section('styles')

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link href="src/selectstyle.css" rel="stylesheet">



@section('content')
    <br>

    <div class="container-fluid">
        <h3 class="">User &nbsp; > &nbsp; <span class=" text-danger">Create User</span> </h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br><br>

                <div class="container">
                    <div class="card"
                        style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <div class="text-center">
                                        <p class=" mb-2 mt-1 h3">Enter User Details</p>
                                    </div>
                                    <hr class="mt-0">
                                    <form action="#">
                                        <div class="row mt-0">
                                            <div class="col-md-6">
                                                <div class="form-group mb-1">
                                                    <label class="h4">First Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="user_first_name" required
                                                        placeholder="Enter User First Name" autocomplete="off">
                                                </div>
                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4">Telephone Number<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="user_telephone_number"
                                                        placeholder="Enter User Telephone  Number" autocomplete="off">
                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4">User Mandate Type<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-control" name="" id="user_mandate">
                                                        <option value="">-- Select User Mandate Level -- </option>
                                                        <option value="NationalLevel">National Level</option>
                                                        <option value="RegionalLevel">Regional Level</option>
                                                        <option value="ConstituencyLevel">Constituency Level</option>
                                                    </select>
                                                    {{-- <span class="text-danger" id="regional_user"
                                                        style="display: none">Please Select
                                                        Region</span> --}}
                                                </div>

                                                <div class="form-group mb-1 row">
                                                    <label for="simpleinput" class="h4 col-md-12">User
                                                        Constituency</label>

                                                    <select class="form-control col-md-10 ml-2" id="agent_constituency">
                                                        <option value="">-- Select Constituency--</option>
                                                    </select>
                                                    <div class="d-flex align-items-center ml-2">
                                                        <br>
                                                        <span class="spinner-border spinner-border-sm mr-1"
                                                            id="constituency_spinner" role="status" aria-hidden="true"
                                                            style="display:none"></span>
                                                    </div>

                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4 text-blue">Admin Password<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="password" id="admin_password"
                                                        autocomplete="on" reqiured placeholder="Enter Admin Password"
                                                        autocomplete="off">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-1">
                                                    <label class="h4">Last Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="user_last_name" required
                                                        placeholder="Enter User Last Name" autocomplete="off">
                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4">Voters ID<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="user_voters_id"
                                                        placeholder="Enter User Voter Id Number" autocomplete="off">
                                                </div>

                                                <div class="form-group mb-1 agent_select">
                                                    <label for="simpleinput" class="h4">User Region</label>

                                                    <select class="form-control" id="agent_region">
                                                        <option value="">-- Select Region --</option>

                                                        {{-- <option value="Male" data-tokens="ketchup mustard">Male</option>
                                                        <option value="Female">Female</option> --}}
                                                    </select>
                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4 text-blue">User ID<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="admin_user_id"
                                                        placeholder="Enter User ID (eg. KAppiah)" autocomplete="off">
                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4 text-blue">Confirm Admin
                                                        Password<span class="text-danger">*</span></label>
                                                    <input class="form-control" type="password"
                                                        id="confirm_admin_password" required autocomplete="on"
                                                        placeholder="Confirm Admin Password" autocomplete="off">
                                                </div>


                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group mb-0 text-center">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-blue btn-block " type="submit" id="create_admin">
                                                        <span class="log_in_text"><b>Create User</b></span>
                                                        <span class="spinner-border spinner-border-sm mr-1 spinner-text"
                                                            role="status" aria-hidden="true" style="display: none"></span>
                                                    </button>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>

                                        </div>
                                        <br><br>
                                    </form>

                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

@endsection


@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>


    {{-- <script src="//code.jquery.com/jquery.min.js"></script> --}}

    {{-- <script src="src/selectstyle.js"></script> --}}



    <script src="{{ asset('assets/js/create_admin.js') }}"></script>

@endsection
