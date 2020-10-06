<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <!-- Navigation -->
    @include('inc.navbar')

    <div class="container pt-2 pb-2">
        @include('inc.messages')
        @yield('content')
    </div>
</body>

</html>
