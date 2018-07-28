<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Foodmin - A Restro on Your Hand</title>

    <!-- Bootstrap Core CSS -->
        <link href="{{asset('dashmin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
        <link href="{{asset('dashmin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
        <link href="{{asset('dashmin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
        <link href="{{asset('dashmin/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
        <link href="{{asset('dashmin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{asset('dashmin/home.css')}}">

</head>

<body>


    @include('admin.layouts.navbar')

         <div id="page-wrapper">

            @yield('content')
            @yield('body')
            

        </div>


    <!-- jQuery -->
    <script src="{{asset('dashmin/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('dashmin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('dashmin/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('dashmin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('dashmin/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('dashmin/data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('dashmin/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
