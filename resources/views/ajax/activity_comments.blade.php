@if(count($comments) > 0)
  <div class="col-xs-12 bar title text-center">
    <div class="hr"></div>
    <div style="background-color: #fff">Comments</div>
  </div>
@else
  {{ '' }}
@endif
@foreach ($comments as $comment)
    <div class="panel">
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
                  'url' => 'comments/' . $comment->id . '?post=' . $comment->post->id,
                  ]) !!}
                  <a href="{{ url('comments/' . $comment->id . '/edit?post=' . $comment->post->id) }}" title="Edit" class="act-edit btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'act-delete btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            </div>
          @endif
        </div>
    </div>
@endforeach