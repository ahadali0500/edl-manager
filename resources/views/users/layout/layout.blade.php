<!DOCTYPE html>
<html>
<head>
    @include('users.layout.link')
</head>
<body>
    @include('users.layout.navbar')
    @yield('content')
    @include('users.layout.footer')
    @include('users.layout.script')
</body>
</html>
