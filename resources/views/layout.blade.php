<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Blog')</title>
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }

    </style>
</head>
<body>
    @extends('parcials.nav')
    
    @yield('content')
    
</body>
</html>