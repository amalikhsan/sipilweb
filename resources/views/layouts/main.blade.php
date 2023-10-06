<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    @include('includes.main.style')
    @stack('mainStyles')
</head>

<body>
    @include('includes.main.navbar')
    @yield('mainContent')
    @include('includes.main.footer')

    @include('includes.main.script')
    @stack('mainScripts')
</body>

</html>
