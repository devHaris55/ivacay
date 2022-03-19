<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Dashboard</title>

    @include('guider.layouts.css')

  </head>
  <!-- NAVBAR
    ================================================== -->
  <body>
  @include('guider.layouts.header')


  @yield('content')

  @include('guider.layouts.footer')

  @include('guider.layouts.js')

  
  </body>
</html>
