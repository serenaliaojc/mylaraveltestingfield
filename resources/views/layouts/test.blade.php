<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        @yield('content')
    </div>
    
    <div>
        @section('advertisement')
            <p>Score some HackerPair swag in our store! </p>
        @endsection
        @yield('advertisement')
    </div>
</body>
</html>