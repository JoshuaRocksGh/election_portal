@extends('layouts.app')

@section('content')
    <br><br><br>

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        <div class="container">
                            <div class="card"
                                style="background-color: rgba(255, 255, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                                <div class="">


                    <div class=" row">

                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class=" row ">

                                                <div class=" col-md-12 m-2 p-1">
                                                    <br><br>

                                                    <div class="text-center w-75 m-auto">
                                                        {{-- <div class="auth-logo">
                                    <a href="index.html" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="../assets/images/logo-dark.png" alt="" height="22">
                                        </span>
                                    </a>

                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="../assets/images/logo-light.png" alt="" height="22">
                                        </span>
                                    </a>
                                </div> --}}
                                                        <p class=" mb-4 mt-1 text-danger h4">Sign In</p>
                                                    </div>

                                                    <form action="#" id="login_form">

                                                        <div class="alert alert-success" role="alert" id="success_alert"
                                                            style="display: none;">
                                                            <i class="mdi mdi-check-all mr-2 alert-success"></i>

                                                        </div>

                                                        <div class="alert alert-danger" role="alert" id="error_alert"
                                                            style="display: none">
                                                            <i class="mdi mdi-block-helper mr-2"></i>
                                                            {{-- <span class="error_alert_message">Hello</span> --}}
                                                        </div>
                                                        <p class="error_alert_message"></p>
                                                        <div class="form-group mb-3">
                                                            <label for="emailaddress" class="h4">User ID</label>
                                                            <input class="form-control" type="email" id="user_id"
                                                                required="" placeholder="Enter Your User Id">
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label for="password" class="h4">Password</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" id="password" class="form-control"
                                                                    placeholder="Enter Your Password">
                                                                <div class="input-group-append" data-password="false">
                                                                    <div class="input-group-text">
                                                                        <span class="password-eye"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-0 text-center">
                                                            <button class="btn btn-blue btn-block " type="submit"
                                                                id="login_form_button">
                                                                <span class="log_in_text"><b>Log In </b></span>
                                                                <span
                                                                    class="spinner-border spinner-border-sm mr-1 spinner-text"
                                                                    role="status" aria-hidden="true"
                                                                    style="display: none"></span>
                                                            </button>
                                                        </div>
                                                        <br><br>

                                                    </form>

                                                </div> <!-- end card-body -->

                                                {{-- <div class="col-md-6">
                            <form action="">

                            </form>
                        </div> --}}
                                            </div>
                                        </div>

                                        <!-- end card -->
                                        <!-- end row -->

                                    </div> <!-- end col -->


                                    <div class="col-md-6 w-50">
                                        <div class=" h-100"
                                            style="background-image: url({{ asset('assets/images/bk2.jpg') }});background-repeat: no-repeat;background-size: cover;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10 text-center">
                                                        <br><br><br><br>
                                                        <img src="{{ asset('assets/images/Coat.png') }}" alt="">
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>



@endsection


@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="{{ asset('assets/js/login.js') }}"></script>

@endsection
