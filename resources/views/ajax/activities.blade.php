@foreach ($activities as $activity)
    <div class="panel panel-info">
        <div class="panel-body clearfix">
            <div class="h-i col-xs-12">
                @if (Storage::exists('public/images/avatar/' . $activity->user->id . '.jpg'))
                    <img src="{{ url('images/avatar/' . $activity->user->id) }}" alt="">
                @else
                    <img src="{{ url('images/avatar/default') }}" alt="">
                @endif
                <h5 class="a-h">
                    <b class="a-h-n">{{ Html::link('profile/' . $activity->user_id . '/timeline', $activity->user->fname . ' ' . $activity->user->lname) }}</b>
                    <br><small class="a-h-d a-tt">{{ $activity->created_at }}</small>
                </h5>
            </div>
            <div class="a-i">
              <p class="col-xs-12">{!! str_limit(preg_replace('/(\r\n\r\n\r\n)+|(\r\r\r)+|(\n\n\n)+/', "<br><br>", htmlentities($activity->desc)), 500) !!}</p>
                  @if (Storage::exists('public/images/posts/' . $activity->id . '.jpg'))
                      <img src="{{ url('images/posts/' . $activity->id) }}">
                  @endif
            </div>
            <hr>
            <div class="col-xs-12 a-f">
                <a href="{{ url('posts/' . $activity->id) }}" class="btn btn-info btn-xs read-more" data-act-type="post" data-act-id="{{ $activity->id }}">Read More</a>
            </div>
        </div>
    </div>
@endforeach

@include('partials._scripts._activity')