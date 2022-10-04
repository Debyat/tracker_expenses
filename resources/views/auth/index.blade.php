<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracking Expenses || @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/auth/common.css') }}">
    @stack('css')
</head>
<body>
    <div class="wrapper">
        @yield('content')
    </div>
    @stack('js')
</body>
</html>
