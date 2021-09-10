@extends("layouts.master")


@section('content')
    <br>

    <div class="container-fluid">
        <h3 class="">Administration &nbsp; > &nbsp; <span class=" text-danger">Create Admin</span> </h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br><br><br><br>

                <div class="container">
                    <div class="card"
                        style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br><br>
                                            <div class="text-center">
                                                <p class=" mb-4 mt-1 h3">Enter Admin Details</p>


                                            </div>

                                            <form action="#">
                                                <div class="form-group mb-3">
                                                    <label for="user_name" class="h4">Admin User ID</label>
                                                    <input class="form-control" type="text" id="admin_user_id" required=""
                                                        placeholder="Enter Admin User Id">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="user_name" class="h4">Admin Password</label>
                                                    <input class="form-control" type="password" id="admin_password"
                                                        required="" placeholder="Enter Admin Password">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="user_name" class="h4">Confirm Admin
                                                        Password</label>
                                                    <input class="form-control" type="password"
                                                        id="confirm_admin_password" required=""
                                                        placeholder="Confirm Admin Password">
                                                </div>

                                                <div class="form-group mb-0 text-center">
                                                    <button class="btn btn-blue btn-block " type="submit" id="create_admin">
                                                        <span class="log_in_text"><b>Create Admin </b></span>
                                                        <span class="spinner-border spinner-border-sm mr-1 spinner-text"
                                                            role="status" aria-hidden="true" style="display: none"></span>
                                                    </button>
                                                </div>
                                                <br><br>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6" style="zoom:0.5;">
                                <div class="h-100"
                                    style="background-image: url({{ asset('assets/images/black_star_square.jpg') }});background-repeat: no-repeat;background-size: cover;zoom:0.5;">

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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="{{ asset('assets/js/create_admin.js') }}"></script>

@endsection
