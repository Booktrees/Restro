<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/business-casual.min.css')}}" rel="stylesheet">
    <script src="{{asset('css/feather.min.js')}}"></script>
  </head>
  <style>
  label.unique {
    text-transform: uppercase;
    letter-spacing: 0.2em;
    font-size: 1.2em;
    text-align: left;
    color: #7e7e7e;
    display: block;
    margin-top: 20px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }

  label.unique input, label.unique textarea {
    border-bottom: 1px solid #d0d0d0 !important;
    max-height: 200px;
    font-size: 1.3em;
    resize: vertical;
    padding: 10px 0;
    display: block;
    border: none;
    width: 100%;
    color: #333;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
  </style>
  <body>

@include('layouts.header')
  @include('partial._flash')
@yield('were')


 <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script>
      feather.replace()
    </script>


</body>

</html>