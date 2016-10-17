@extends('layouts.app')

@section('title', 'Post - ' . $post->user->fname . ' ' . $post->user->lname)

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-info">
            <div class="panel-body clearfix">
              <div class="h-i col-xs-12">
                @if (Storage::exists('public/images/avatar/' . $post->user->id . '.jpg'))
                  <img src="{{ url('images/avatar/' . $post->user->id) }}" alt="">
                @else
                  <img src="{{ url('images/avatar/default') }}" alt="">
                @endif
                <h5 class="a-h">
                  <b class="a-h-n">{{ Html::link('profile/' . $post->user_id . '/timeline', $post->user->fname . ' ' . $post->user->lname) }}</b>
                  <br><small class="a-h-d a-tt">{{ $post->created_at }}</small>
                </h5>
              </div>
                <div class="a-i">
                  <p class="col-xs-12">{!! preg_replace('/(\r\n\r\n\r\n)+|(\r\r\r)+|(\n\n\n)+/', "<br><br>", htmlentities($post->desc)) !!}</p>
                  @if (Storage::exists('public/images/posts/' . $post->id . '.jpg'))
                    <img src="{{ url('images/posts/' . $post->id) }}">
                  @endif
                </div>
                @if($post->user->id == Auth::user()->id)
                <hr>
                <div class="col-xs-12 a-f">
                    {!! Form::open([
                      'method' => 'DELETE',
                      'route' => ['posts.destroy', $post->id],
                      'class' => 'form-horizontal'
                      ]) !!}
                      <a href="{{ url('posts/' . $post->id . '/edit') }}" title="Edit" class="act-edit btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                      {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'act-delete btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                </div>
              @endif
              </div>
            </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
          <div class="create-comment">
            {!! Form::open([
                'class' => 'form-post',
                'role' => 'form',
                'files' => true,
                'url' => 'comments',
            ]) !!}
            {!! Form::hidden('post_id', $post->id) !!}
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
                            'placeholder' => 'Write a comment...',
                        ]) !!}
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    {!! Form::button('Comment', ['type' => 'submit', 'class' => 'btn btn-primary pull-right submit-idea', 'disabled']) !!}
                </div>
            {!! Form::close() !!}
            </div>
            @include('partials._scripts._create_idea')

          </div>
        </div>
        </div>
        @if(count($comments) > 0)
          <div class="col-md-8 col-md-offset-2 bar title text-center">
            <div class="hr"></div>
            <div class="">Comments</div>
          </div>
        @else
          {{ '' }}
        @endif
        <div class="row">
          <div class="col-md-8 col-md-offset-2 comments">
            @foreach ($comments as $comment)
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
                        <div class="a-i">
                          <p class="col-xs-12">{!! preg_replace('/(\r\n\r\n\r\n)+|(\r\r\r)+|(\n\n\n)+/', "<br><br>", htmlentities($comment->desc)) !!}</p>
                        </div>
                        @if($comment->user->id == Auth::user()->id)
                        <hr>
                        <div class="col-xs-12 a-f">
                            {!! Form::open([
                              'method' => 'DELETE',
                              'class' => 'form-horizontal',
                              'url' => 'comments/' . $comment->id . '?post=' . $post->id,
                              ]) !!}
                              <a href="{{ url('comments/' . $comment->id . '/edit?post=' . $post->id) }}" title="Edit" class="act-edit btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                              {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'act-delete btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </div>
                      @endif
                    </div>
                </div>
            @endforeach
          </div>
          <div class="col-md-8 col-md-offset-2 text-center more-comments">
            <nav aria-label="paginator">
                <ul class="pager">
                    @if ($comments->previousPageUrl())
                        <li><a href="{{ $comments->previousPageUrl() }}">Previous</a></li>
                    @endif
                    @if ($comments->nextPageUrl())
                        <li><a href="{{ $comments->nextPageUrl() }}">Next</a></li>
                    @endif
                </ul>
            </nav>
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
