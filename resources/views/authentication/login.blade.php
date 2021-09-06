@extends('layouts.app')

@section('content')
    <br><br><br>

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern " style="background-color: rgba(245, 245, 245, 0.6);">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
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
                                </div>
                                <p class=" mb-4 mt-1 text-danger h4">Enter your User Id and Password to access admin
                                    panel.</p>
                            </div>

                            <form action="#" id="login_form">

                                <div class="alert alert-success" role="alert" id="success_alert" style="display: none;">
                                    <i class="mdi mdi-check-all mr-2 alert-success"></i>

                                </div>

                                <div class="alert alert-danger" role="alert" id="error_alert" style="display: none">
                                    <i class="mdi mdi-block-helper mr-2"></i>
                                    {{-- <span class="error_alert_message">Hello</span> --}}
                                </div>
                                <p class="error_alert_message"></p>
                                <div class="form-group mb-3">
                                    <label for="emailaddress" class="h4">User ID</label>
                                    <input class="form-control" type="email" id="user_id" required=""
                                        placeholder="Enter Your User Id">
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

                                {{-- <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div> --}}

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-info btn-block " type="submit" id="login_form_button">
                                        <span class="log_in_text"><b>Log In </b></span>
                                        <span class="spinner-border spinner-border-sm mr-1 spinner-text" role="status"
                                            aria-hidden="true"></span>
                                    </button>
                                </div>

                            </form>

                            {{-- <div class="text-center">
                                <h5 class="mt-3 text-muted">Sign in with</h5>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div> --}}

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    {{-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="auth-recoverpw.html" class="text-white-50 ml-1">Forgot your password?</a></p>
                            <p class="text-white-50">Don't have an account? <a href="auth-register.html" class="text-white ml-1"><b>Sign Up</b></a></p>
                        </div>
                    </div> --}}
                    <!-- end row -->

                </div> <!-- end col -->
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
