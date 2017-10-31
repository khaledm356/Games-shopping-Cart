<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css\app.css">
  @yield('styles')

</head>
<body>
  @include('partials.header')
  <div class="container">
  @yield('content')
</div>

</body>
</html>
