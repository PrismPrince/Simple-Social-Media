<div class="row" style="padding-top: 15px;border-top: 1px #e5e5e5 solid">
<div class="create-comment col-xs-12">
{!! Form::open([
    'class' => 'form-post',
    'role' => 'form',
    'files' => true,
    'url' => 'comments',
]) !!}
{!! Form::hidden('post_id', $post) !!}
    <div class="img col-xs-2">
        @if (Storage::exists('public/images/avatar/' . Auth::user()->id . '.jpg'))
            <img src="{{ url('images/avatar/' . Auth::user()->id) }}" alt="">
        @else
            <img src="{{ url('images/avatar/default') }}" alt="">
        @endif
    </div>
    <div class="cont col-xs-8">
        {!! Form::textarea('desc', old('desc'), [
            'class' => 'd',
            'rows' => 3,
            'placeholder' => 'Write a comment...',
        ]) !!}
    </div>
    <div class="col-xs-2">
        <button type="submit" class="submit-com btn btn-primary"><span class="glyphicon glyphicon-send"></span></button>
    </div>
{!! Form::close() !!}
</div>
</div>
@include('partials._scripts._create_idea')