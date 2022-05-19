<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>DC comics </title>
</head>
<body>

    <!-- here we integrate the header -->
    @include('partials.header')


    <!-- here we can extendes the content -->
    @yield('content')

</body>
</html>