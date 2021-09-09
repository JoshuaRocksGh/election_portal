<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ELECTION PORTAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <style>
        /* CUSTOME STYLE GOES HERE */

    </style>

    @include('../snippets.style')
</head>


<body style=" background-image: linear-gradient(#eff5f9, #e0e8f9); ">


    @yield('content')

    @include('../snippets.script')

    @yield('scripts')
</body>

</html>
