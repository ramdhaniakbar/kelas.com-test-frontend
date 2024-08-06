<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.meta')

    <title>@yield('title') || {{ config('app.name', 'Kelas.center') }}</title>

    @include('includes.style')

</head>

<body>

   @yield('content')

   @yield('scripts')
   @include('includes.script')

</body>

</html>
