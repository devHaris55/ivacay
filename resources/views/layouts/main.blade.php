<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('layouts.css')
  
  <title>Ivacy</title>
</head>

<body>

  <!-- @include('flash-message') -->
@include('layouts.header')


@yield('content')

@include('layouts.footer')

@include('layouts.js')

</body>

</html>