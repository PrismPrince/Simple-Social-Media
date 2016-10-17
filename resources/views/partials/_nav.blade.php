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

            @if (!Auth::guest())
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav nb-m-l">
                        <li>{!! Html::link('home', 'Home') !!}</li>
                </ul>
                <form method="get" action="{{ url('search') }}" class="navbar-form navbar-left" role="search">
                  <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><span style="background-color: rgba(0,0,0,0);color: #3b5998" class="glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right nb-u">

                <!-- Authentication Links -->
                @if(Auth::guest())
                    <li>{!! Html::link('#', 'Login', [
                        'data-toggle' => 'modal',
                        'data-target' => '#login'
                    ]) !!}</li>
                    <li>{!! Html::link('register', 'Register') !!}</li>
                @else
                    <li class="dropdown nb-d">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->fname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu nb-d-m" role="menu">
                            <li>{!! Html::link('profile/' . Auth::user()->id . '/timeline', 'Profile') !!}</li>
                            {{--<li class="dropdown-header">Hi</li>--}}
                            <li class="divider" role="separator"></li>
                            <li>{!! Html::link('logout', 'Logout') !!}</li>
                        </ul>

                    </li>
                @endif

            </ul>

        </div>
    </div>
</nav>

@if(Auth::guest())

    @if($errors->any())
        <script type="text/javascript">
            $(document).ready(function(){
                $('#login.login').modal('show');
            });
        </script>
    @endif

    <div id="login" class="modal fade login in" tabindex="-1" role="dialog" aria-labelledby="laginLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                {!! Form::open([
                    'class' => 'form-horizontal',
                    'data-toggle' => 'validator',
                    'role' => 'form',
                    'url' => 'login',
                ]) !!}

                <div class="modal-header">

                    {!! Form::button('&times;', ['class' => 'close', 'data-dismiss' => 'modal', 'aria-hidden' => 'true']) !!}

                    <h4 class="modal-title" id="laginLabel">Login</h4>

                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group has-feedback col-md-12{{ $errors->has('email') ? ' has-error has-danger' : '' }}">

                                {!! Form::label('email', 'E-mail Address', ['class' => 'control-label']) !!}

                                {!! Form::email('email', old('email'), [
                                    'class' => 'form-control',
                                    'required',
                                    'maxlength' => 255,
                                    'minlength' => 8,
                                    'data-error' => 'Please enter a valid e-mail address!',
                                    'placeholder' => 'Enter your e-mail address...',
                                ]) !!}

                                <div class="help-block with-errors">{{ $errors->has('email') ? $errors->first('email') : '' }}</div>

                            </div>

                            <div class="form-group has-feedback col-md-12{{ $errors->has('password') ? ' has-error has-danger' : '' }}">

                                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}

                                {!! Form::password('password', [
                                    'class' => 'form-control',
                                    'required',
                                    'minlength' => 8,
                                    'data-error' => 'Minimum of 8 characters!',
                                    'placeholder' => 'Enter a password...',
                                ]) !!}

                                <div class="help-block with-errors">{{ $errors->has('password') ? $errors->first('password') : '' }}</div>

                            </div>

                            <div class="form-group col-md-12">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('remember', null) !!} Remember Me
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">

                    {!! Html::link('password/reset', 'Forgot Your Password?', ['class' => 'btn btn-link pull-left']) !!}
                    {!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                    {!! Form::button('Login', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}

                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endif