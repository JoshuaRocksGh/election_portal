<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>ELECTION PORTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico') }}">
    {{-- <link rel="stylesheet" type="text/css" href="selectize.css" /> --}}

    @include('snippets.style')

    <style type="text/css">
        /* Works on Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: rgb(221, 221, 223) rgb(217, 217, 216);
        }

        /* Works on Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 12px;
        }

        *::-webkit-scrollbar-track {
            background: rgb(217, 217, 216);
        }

        *::-webkit-scrollbar-thumb {
            background-color: rgb(230, 230, 231);
            border-radius: 20px;
            border: 3px solid rgb(217, 217, 216);
        }

        #datatable-buttons_filter {
            float: right;
        }

    </style>

    @yield('styles')
</head>

<body
    style="background-image: url({{ asset('assets/images/bk2.jpg') }}) ;background-repeat: no-repeat;background-size: cover;">
    {{-- style="background-image: url({{ asset('assets/images/bk2.jpg') }}); background-repeat: no-repeat; background-size: cover;" --}}
    {{-- class="loading" --}}
    {{-- data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}' --}}


    <!-- Pre-loader -->
    <div id="preloader" class="preloader">
        <div id="status" class="preloader">
            <img class="pulse" style="width: 100px; top: -50px;"
                src="{{ asset('assets/images/preloader.png') }}" />
        </div>
    </div> <!-- End Preloader-->

    <!-- Begin page -->
    <div id="wrapper" style="zoom: 0.9;">
        {{-- @include('sweetalert::alert') --}}

        @include('../snippets.nav')

        @include('../snippets.side-bar')

        @include('sweetalert::alert')
        <div class="content-page">
            <div class="content" style="zoom: 0.9 ;">
                @yield('content')
            </div>

            {{-- @include('../snippets.footer') --}}
        </div>
    </div>

    @include('../snippets.script')


    @yield('scripts')
    {{-- @include('sweetalert::alert') --}}

</body>

</html>
