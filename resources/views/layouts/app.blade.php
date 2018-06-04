<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
    @yield('head-addon')
</head>
<body>

    @include('layouts.partials.nav')

    <div id="content">

        @yield('content')
    </div>

        @include('layouts.partials.scripts')

        @yield('footer-addon')
</body>
</html>
