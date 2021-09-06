@extends("layouts.master")


@section('content')
    <br>

    <div class="container-fluid">
        <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
            <div class="card-body">
                <div>

                    <h2 class="text-center">Search For Agent</h2>
                    <hr>

                    <div class="container">
                        <form action="#" id="search_agent_details" autocomplete="off" aria-autocomplete="off">
                            <div class=" ">
                                <div class="___class_+?6___">
                                    <b><em class="text-danger h4">Enter Agent Code</em></b>
                                    <br><br>
                                    <div class="form-group mb-1 row">
                                        <input type="text" id="first_person" class="form-control col-md-9"
                                            placeholder="Enter Agent Code">
                                        <div class="col-md-1"></div>
                                        <button type="submit"
                                            class="btn btn-info waves-effect waves-light btn-block col-md-2"><b>Search</b></button>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        {{-- <br> --}}
        <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
            <div class="card-body">

                <h2 class="text-center">Edit Agent Details</h2>
                <hr>

                <div class="container">
                    <form action="" id="new_agent_form" autocomplete="off" aria-autocomplete="off">
                        <b><em class="text-blue h3">Personal Details</em></b>
                        <b class="float-right"><em class="text-blue h3">Please fll fields marked with
                                &nbsp;</em><span class="text-danger h3">*</span></b>

                        <br><br><br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <img src="{{ url('assets/images/users/user.png') }}" alt="image"
                                            id="display_selected_id_image"
                                            class="img-fluid rounded-circle display_selected_id_image" width="200"
                                            style="border: groove" />
                                        <br><br>
                                        <input type="file" id="image_upload" class="form-control-file float-right">
                                        <input type="hidden" id="image_upload_">

                                    </div>
                                </div>
                                <div class="col-md-8 ">
                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">First Name:<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="first_name" class="form-control col-md-8" autocomplete="off"
                                            aria-autocomplete="off" placeholder="Enter Agent First Name">
                                    </div>
                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Middle Name:<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="middle_name" class="form-control col-md-8" autocomplete="off"
                                            aria-autocomplete="off" placeholder="Enter Agent Middle Name">
                                    </div>
                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Surname:<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="surname" class="form-control col-md-8" autocomplete="off"
                                            aria-autocomplete="off" placeholder="Enter Agent Surname">
                                    </div>
                                    <div class="form-group mb-1 row">
                                        <label for="example-select" class="col-md-4 h4">Select Gender:<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control col-md-8" id="select_gender">
                                            <option value="">-- Select Agent Gender --</option>
                                            <option value="001~Male">Male</option>
                                            <option value="002~Female">Female</option>

                                        </select>
                                    </div>
                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Date of Birth:<span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="agent_dob" class="form-control col-md-8" autocomplete="off"
                                            aria-autocomplete="off" placeholder="Enter Agent Date of Birth">
                                    </div>

                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Voter/National ID:<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="id_number" class="form-control col-md-8" autocomplete="off"
                                            aria-autocomplete="off" placeholder="Enter Agent ID Number">
                                    </div>


                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Telephone Number 1:<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="telephone_number_1" class="form-control col-md-8"
                                            autocomplete="off" aria-autocomplete="off"
                                            placeholder="Enter Agent Telephone Number">
                                    </div>
                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Telephone Number
                                            2:(optional)</label>
                                        <input type="text" id="telephone_number_2" class="form-control col-md-8"
                                            autocomplete="off" aria-autocomplete="off"
                                            placeholder="Enter Agent Telephone Number">
                                    </div>


                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Educational Level:<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control col-md-8" id="educational_level">
                                            <option value="">-- Select Educational Level --</option>
                                            <option value="JHS">JHS</option>
                                            <option value="SHS">SHS</option>
                                            <option value="Vocational">Vocational</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="HND">HND</option>
                                            <option value="Degree">Degree</option>
                                            <option value="Masters">Masters</option>
                                            <option value="PHD">PHD</option>
                                        </select>

                                    </div>

                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Institution Name:<span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="institution_name" class="form-control col-md-8"
                                            autocomplete="off" aria-autocomplete="off"
                                            placeholder="Enter Agent Institution Name">
                                    </div>

                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Year of Completion:<span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="completion_year" class="form-control col-md-8"
                                            autocomplete="off" aria-autocomplete="off" placeholder="Enter Agent Surname">
                                    </div>
                                </div>
                            </div>

                            <hr class="mt-0" style="background-color: #ccc ; height:2px;border: none;">

                            <div class="row">
                                <div class="col-md-12">
                                    <b><em class="text-blue h3">Agent Details</em></b>
                                    <br>
                                    {{-- <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Agent Code:</label>
                                            <input type="text" id="agent_code" class="form-control col-md-8">
                                        </div> --}}
                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Agent Region:<span
                                                class="text-danger">*</span></label>
                                        {{-- <input type="text" id="agent_region" class="form-control col-md-8"
                                                placeholder="Enter Agent Region"> --}}
                                        <select class="form-control col-md-8" id="agent_region">
                                            <option value="">-- Select Region --</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Agent Constituency:<span
                                                class="text-danger">*</span></label>
                                        {{-- <input type="text" id="agent_constituency" class="form-control col-md-8"
                                                placeholder="Enter Agent Constituency"> --}}
                                        <select class="form-control col-md-8" id="agent_constituency">
                                            <option value="">-- Select Constituency--</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 row">
                                        <label for="simpleinput" class="col-md-4 h4">Agent Polling Station:<span
                                                class="text-danger">*</span></label>
                                        {{-- <input type="text" id="agent_electoral_area" class="form-control col-md-8"
                                                placeholder="Enter Agent Polling Station"> --}}
                                        <select class="form-control col-md-8" id="agent_electoral_area">
                                            <option value="">-- Select Electoral Area--</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                            <hr class="mt-0" style="background-color: #ccc ; height:2px;border: none;">

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-info  btn-lg waves-effect waves-light btn-block"
                                            type="button" id="agent_submit_form" data-toggle="modal"
                                            data-target="#bs-example-modal-lg">
                                            <span id="log_in"><b>Submit</b> </span>
                                            <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                style="display: none" id="spinner" aria-hidden="true"></span>
                                        </button>
                                        <!-- Large modal -->
                                        {{-- <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#bs-example-modal-lg">Large Modal</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
