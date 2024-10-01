<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .active {
            color: royalblue;
            border-bottom: 1px solid black;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('layouts.partiers.header')
    @yield('content')
    @include('layouts.partiers.footer')

</body>

</html>
