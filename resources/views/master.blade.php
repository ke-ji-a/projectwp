<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Capybara</title>
</head>
<body style="background-color: #D5C4A1;">

    @if(Auth::user() && Auth::user()->roles == 'ADMIN')
        @include('admin.navbar')

    @elseif(Auth::user() && Auth::user()->roles == 'USER')
        @include('user.navbar')
    
    @else
        @include('navbar')

    @endif

      {{-- ------------------------------ --}}
      @yield('content')
      {{-- ------------------------------ --}}
</body>
</html>