<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    @include('nav')
    @yield('content')

    @include('footer')
    @include('footer-scripts')
</body>

</html>