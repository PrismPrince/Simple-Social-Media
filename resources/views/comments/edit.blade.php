@extends('layouts.app')

@section('title', 'Edit Comment - ' . $comment->user->fname . ' ' . $comment->user->lname)

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-info">
            <div class="panel-body clearfix">
              <div class="h-i col-xs-12">
                @if (Storage::exists('public/images/avatar/' . $comment->user->id . '.jpg'))
                  <img src="{{ url('images/avatar/' . $comment->user->id) }}" alt="">
                @else
                  <img src="{{ url('images/avatar/default') }}" alt="">
                @endif
                <h5 class="a-h">
                  <b class="a-h-n">{{ Html::link('profile/' . $comment->user_id . '/timeline', $comment->user->fname . ' ' . $comment->user->lname) }}</b>
                  <br><small class="a-h-d a-tt">{{ $comment->created_at }}</small>
                </h5>
              </div>
              {!! Form::model($comment, [
                'route' => ['comments.update', $comment->id],
                'method' => 'PUT',
                'class' => 'form-edit',
                'role' => 'form',
                ]) !!}
                <div class="a-i">
                  <p class="cont col-xs-12">
                    {!! Form::hidden('post', $post) !!}
                    {!! Form::textarea('desc', old('desc'), [
                        'class' => 'd data-post-desc',
                        'required',
                        'rows' => '10',
                        'data-error' => 'Invalid input!',
                        'placeholder' => 'Enter post description...',
                    ]) !!}

                  </p>
                </div>
                <hr>
                <div class="col-xs-12 a-f">
                      {!! Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-success btn-xs']) !!}
                      <a href="{{ url('posts/' . $post) }}" class="btn btn-default btn-xs">Cancel</a>
                    {!! Form::close() !!}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
@endsection

@section('styles')
  @include('partials._style_a')
  @include('partials._style_c_c')
@endsection

@section('scripts')
  @include('partials._script_a_c')
@endsection
