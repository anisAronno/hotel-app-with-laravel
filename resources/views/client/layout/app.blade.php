<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hotel Blue Bird |  @yield('broadcramb')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('client') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/aos.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/featherlight.gallery.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/featherlight.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('client') }}/css/style.css" type="text/css">
    @yield('extra-css')


</head>

<body>



    <!-- Header Section Begin -->
    @include('client.layout.header')
    <!-- Header Section End -->




    @yield('content')







    <!-- Footer Section Begin -->
    @include('client.layout.footer')
    <!-- Footer Section End -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- @yield('script') -->
    <!-- Js Plugins -->
    <script src="{{ asset('client') }}/js/axios.min.js"></script>
    <script src="{{ asset('client') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('client') }}/js/popper.min.js"></script>
    <script src="{{ asset('client') }}/js/all.min.js"></script>
    <script src="{{ asset('client') }}/js/featherlight.gallery.min.js"></script>
    <script src="{{ asset('client') }}/js/featherlight.min.js"></script>
    <script src="{{ asset('client') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('client') }}/js/aos.js"></script>
    <script src="{{ asset('client') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('client') }}/js/main.js"></script>
    <script src="{{ asset('client') }}/js/custom.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

    @yield('script')

</body>

</html>
