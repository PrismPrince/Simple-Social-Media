<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body id="app-layout">

    @include('partials._nav')

    @yield('content')

    {{--@include('partials._footer')--}}

</body>

</html>