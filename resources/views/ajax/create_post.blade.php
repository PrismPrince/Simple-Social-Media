{!! Form::open([
    'class' => 'form-post',
    'role' => 'form',
    'files' => true,
    'url' => 'posts',
]) !!}
    <div class="panel-body">
        <div class="img col-xs-1">
            @if (Storage::exists('public/images/avatar/' . Auth::user()->id . '.jpg'))
                <img src="{{ url('images/avatar/' . Auth::user()->id) }}" alt="">
            @else
                <img src="{{ url('images/avatar/default') }}" alt="">
            @endif
        </div>
        <div class="cont col-xs-11">
            {!! Form::textarea('desc', old('desc'), [
                'class' => 'd data-post-desc',
                'rows' => 3,
                'placeholder' => 'What\'s on your mind?',
            ]) !!}
            <div class="i-img">
                {!! Form::file('image', [
                    'class' => 'img-up data-post-image',
                    'accept' => 'image/*',
                ]) !!}
                <h4 class="img-drop text-center">Drop Photo</h4>
                {!! Form::button('&times;', ['class' => 'img-dismiss text-center']) !!}
            </div>
        </div>
    </div>
    <div class="panel-footer clearfix">
        {!! Form::button('Post', ['type' => 'submit', 'class' => 'btn btn-primary pull-right submit-idea', 'disabled']) !!}
    </div>
{!! Form::close() !!}

@include('partials._scripts._create_idea')
