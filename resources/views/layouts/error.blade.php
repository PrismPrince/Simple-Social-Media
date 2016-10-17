<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body id="app-layout">

    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle nb-btn collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                {!! Html::link('/', 'Prism', ['class' => 'navbar-brand nb-brnd']) !!}
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav nb-m-l">
                    @if (!Auth::guest())
                        <li>{!! Html::link('home', 'Home') !!}</li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>
