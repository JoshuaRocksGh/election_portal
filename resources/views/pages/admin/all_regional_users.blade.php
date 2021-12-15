@extends('layouts.master')


@section('content')
    <div class="container-fluid">
        <h3 class=""><span class=" text-danger">Regional Users</span> </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <div class="row" id="agent_list_spinner" style="display: none">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center">
                            <br>
                            <div class="spinner-border avatar-lg text-primary m-2 text-dark" role="status"></div>
                            <br>
                        </div>
                        <div class="col-md-4 "></div>
                    </div>

                    <div class="card-body" id="all_regional_heads">
                        <h4 class="header-title mb-3">ALL REGIONAL HEADS</h4>

                        <div class="table-responsive">
                            <table
                                class="table table-borderless table-hover table-nowrap table-centered m-0 all_regional_heads_list">

                                <thead
                                    style="background-color: rgba(32, 185, 252, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        {{-- <th>Name</th> --}}
                                        <th>Phone Number</th>
                                        <th>User ID</th>
                                        <th>Region</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="national_details">




                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>



            <!--  Modal content for the Large example -->
            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Regional User Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <span style="display: block; width: 100% ; border-top: 1px solid #ccc"
                            class="mt-0"></span>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center user_image_id">

                                </div>
                                <div class="col-md-4"></div>
                                <hr>

                                <legend></legend>

                                <legend></legend>

                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <legend></legend>
                                    <div class="row user_buttons">

                                    </div>
                                    <legend></legend>


                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">

                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-danger">Name</th>
                                                    <td><b class="users_name"></b></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-danger">Phone Number</th>
                                                    <td><b class="user_telephone"></b></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-danger">Mandate Level</th>
                                                    <td><b class="user_mandate"></b></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-danger">Region</th>
                                                    <td><b class="user_region"></b></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-danger">User ID</th>
                                                    <td><b class="user_id"></b></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div>

                                <legend></legend>

                            </div>
                            <div class="col-md-1"></div>

                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    </div>

@endsection


@section('scripts')

    <!-- Datatables init -->
    {{-- <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> --}}

    <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    {{-- <script src="{{ assets('assets/js/all_regional_heads.js') }}"></script> --}}

    <script src="{{ asset('assets/js/all_regional_heads.js') }}"></script>

@endsection
