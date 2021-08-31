@extends("layouts.master")


@section('content')
    <br>

    <div class="container-fluid">
        <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
            <div class="card-body">
                <div class="___class_+?3___">
                    <h2 class="text-center">New Agent Form</h2>
                    <hr>

                    <div class="container">

                        <form action="" id="new_agent_form" autocomplete="off" aria-autocomplete="off">
                            <b><em class="text-danger h4">Personal Details</em></b>
                            <br>
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
                                            <label for="simpleinput" class="col-md-4 h4">First Name:</label>
                                            <input type="text" id="first_person" class="form-control col-md-8"
                                                placeholder="Enter Agent First Name">
                                        </div>
                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Middle Name:</label>
                                            <input type="text" id="middle_name" class="form-control col-md-8"
                                                placeholder="Enter Agent Middle Name">
                                        </div>
                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Surname:</label>
                                            <input type="text" id="surname" class="form-control col-md-8"
                                                placeholder="Enter Agent Surname">
                                        </div>
                                        <div class="form-group mb-1 row">
                                            <label for="example-select" class="col-md-4 h4">Select Gender:</label>
                                            <select class="form-control col-md-8" id="example-select">
                                                <option value="">-- Select Agent Gender --</option>
                                                <option value="001~Male">Male</option>
                                                <option value="002~Female">Female</option>

                                            </select>
                                        </div>
                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Date of Birth:</label>
                                            <input type="text" id="agent_dob" class="form-control col-md-8"
                                                placeholder="Enter Agent Date of Birth">
                                        </div>

                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Voter/National ID:</label>
                                            <input type="text" id="id_number" class="form-control col-md-8"
                                                placeholder="Enter Agent ID Number">
                                        </div>


                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Telephone Number:</label>
                                            <input type="text" id="telephone_number" class="form-control col-md-8"
                                                placeholder="Enter Agent Telephone Number">
                                        </div>
                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Educational Level:</label>
                                            <select class="form-control col-md-8" id="educational_level">
                                                <option value="">-- Select Educational Level --</option>
                                            </select>

                                        </div>

                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Year of Completion:</label>
                                            <input type="date" id="completion_year" class="form-control col-md-8"
                                                placeholder="Enter Agent Surname">
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-0" style="background-color: #ccc ; height:2px;border: none;">

                                <div class="row">
                                    <div class="col-md-12">
                                        <b><em class="text-danger h4">Agent Details</em></b>
                                        <br>
                                        {{-- <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Agent Code:</label>
                                            <input type="text" id="agent_code" class="form-control col-md-8">
                                        </div> --}}
                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Agent Region:</label>
                                            {{-- <input type="text" id="agent_region" class="form-control col-md-8"
                                                placeholder="Enter Agent Region"> --}}
                                            <select class="form-control col-md-8" id="agent_region">
                                                <option value="">-- Select Region --</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Agent Constituency:</label>
                                            {{-- <input type="text" id="agent_constituency" class="form-control col-md-8"
                                                placeholder="Enter Agent Constituency"> --}}
                                            <select class="form-control col-md-8" id="agent_constituency">
                                                <option value="">-- Select Constituency--</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-1 row">
                                            <label for="simpleinput" class="col-md-4 h4">Agent Electoral Area:</label>
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
                                                type="button" data-toggle="modal" data-target="#bs-example-modal-lg">
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


                        <!--  Modal content for the Large example -->
                        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="{{ asset('assets/js/add_agent.js') }}"></script>
@endsection
