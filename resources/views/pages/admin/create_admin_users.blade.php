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
                {{-- <br><br> --}}
                {{-- <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if (session()->get('UserMandate') == 'NationalLevel')
                            <div class="alert alert-warning text-center" role="alert">
                                <i class="mdi mdi-alert-outline mr-2"></i> <strong>Create a National, Regional or
                                    Constituency User</strong>

                            </div>
                        @elseif(session()->get('UserMandate') == "RegionalLevel")
                            <div class="alert alert-warning text-center" role="alert">
                                <i class="mdi mdi-alert-outline mr-2"></i> <strong>Create a Regional or Constituency
                                    User</strong>

                            </div>
                        @elseif(session()->get('UserMandate') == "ConstituencyLevel")
                            <div class="alert alert-warning text-center" role="alert">
                                <i class="mdi mdi-alert-outline mr-2"></i> <strong>Create a Constituency
                                    User</strong>

                            </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div> --}}

                <div class="container">
                    {{-- <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @if (session()->get('UserMandate') == 'NationalLevel')
                                <div class="alert alert-warning text-center" role="alert">
                                    <i class="mdi mdi-alert-outline mr-2"></i> <strong>Create A Regional User</strong>

                                </div>
                            @elseif(session()->get('UserMandate') == "RegionalLevel")
                                <div class="alert alert-warning text-center" role="alert">
                                    <i class="mdi mdi-alert-outline mr-2"></i> <strong>Create A Constituency User</strong>

                                </div>
                            @endif
                        </div>
                        <div class="col-md-2"></div>
                    </div> --}}

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
                                                    @if (session()->get('UserMandate') == 'NationalLevel')
                                                        <select class="form-control" name="" id="user_mandate">
                                                            <option value="">-- Select User Mandate Level -- </option>
                                                            <option value="NationalLevel">National Level</option>
                                                            <option value="RegionalLevel">Regional Level</option>
                                                            <option value="ConstituencyLevel">Constituency Level</option>
                                                        </select>
                                                    @elseif(session()->get('UserMandate') == "RegionalLevel")
                                                        <select class="form-control" name="" id="user_mandate">
                                                            <option value="">-- Select User Mandate Level -- </option>
                                                            {{-- <option value="NationalLevel">National Level</option> --}}
                                                            <option value="RegionalLevel">Regional Level</option>
                                                            <option value="ConstituencyLevel">Constituency Level</option>
                                                        </select>
                                                        {{-- <input type="hidden" value="{{ session()->get('Region') }}"
                                                            id="my_region_name"> --}}
                                                    @elseif(session()->get('UserMandate') == "ConstituencyLevel")
                                                        <select class="form-control" name="" id="user_mandate" disabled>
                                                            <option value="ConstituencyLevel" selected>Constituency Level
                                                            </option>
                                                            {{-- <option value="NationalLevel">National Level</option> --}}
                                                            {{-- <option value="RegionalLevel">Regional Level</option> --}}
                                                            {{-- <option value="ConstituencyLevel">Constituency Level</option> --}}
                                                        </select>
                                                    @endif
                                                    {{-- <span class="text-danger" id="regional_user"
                                                        style="display: none">Please Select
                                                        Region</span> --}}
                                                </div>

                                                <div class="form-group mb-1 row">
                                                    <label for="simpleinput" class="h4 col-md-12">User
                                                        Constituency</label>

                                                    @if (session()->get('UserMandate') != 'ConstituencyLevel')

                                                        <select class="form-control col-md-10 ml-2" id="agent_constituency">
                                                            <option value="">-- Select Constituency--</option>
                                                        </select>
                                                        <div class="d-flex align-items-center ml-2">
                                                            <br>
                                                            <span class="spinner-border spinner-border-sm mr-1"
                                                                id="constituency_spinner" role="status" aria-hidden="true"
                                                                style="display:none"></span>
                                                        </div>
                                                    @elseif(session()->get('UserMandate') == "ConstituencyLevel")
                                                        <select class="form-control col-md-10 ml-2" id="agent_constituency"
                                                            style="background: #DCDCDC" disabled>
                                                            <option value="{{ session()->get('Constituency') }}" selected>
                                                                {{ session()->get('Constituency') }}</option>
                                                        </select>
                                                        {{-- <div class="d-flex align-items-center ml-2">
                                                            <br>
                                                            <span class="spinner-border spinner-border-sm mr-1"
                                                                id="constituency_spinner" role="status" aria-hidden="true"
                                                                style="display:none"></span>
                                                        </div> --}}

                                                    @endif

                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4 text-blue">User Default Password<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control readOnly" type="text" id="admin_password"
                                                        value="PASS1234" autocomplete="on" readonly placeholder="PASS1234"
                                                        style="background: #DCDCDC" autocomplete="off">

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

                                                    @if (session()->get('UserMandate') == 'NationalLevel')

                                                        <select class="form-control" id="agent_region">
                                                            <option value="">-- Select Region --</option>

                                                            {{-- <option value="Male" data-tokens="ketchup mustard">Male</option>
                                                        <option value="Female">Female</option> --}}
                                                        </select>
                                                    @elseif(session()->get('UserMandate') != "NationalLevel")
                                                        <select class="form-control" id="agent_region" disabled>
                                                            <option value="{{ session()->get('Region') }}">
                                                                {{ session()->get('Region') }}</option>

                                                            {{-- <option value="Male" data-tokens="ketchup mustard">Male</option>
                                                        <option value="Female">Female</option> --}}
                                                        </select>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-1">
                                                    <label for="user_name" class="h4 text-blue">User ID<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control readOnly" type="text" id="admin_user_id"
                                                        readonly style="background: #DCDCDC" autocomplete="off">
                                                </div>

                                                <div class="form-group mb-1" style="display: none">
                                                    <label for="user_name" class="h4 text-blue">Confirm Admin
                                                        Password<span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" id="confirm_admin_password"
                                                        style="background: #DCDCDC" required autocomplete="on"
                                                        value="PASS1234" autocomplete="off">
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

    <script>
        var my_mandate = "{{ session()->get('UserMandate') }}"
        var my_region = "{{ session()->get('Region') }}"
        var my_constituency = "{{ session()->get('Constituency') }}"
    </script>

@endsection
