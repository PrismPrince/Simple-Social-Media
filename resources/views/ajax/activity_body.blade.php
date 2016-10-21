<p class="col-xs-12">{{ $activity->desc }}</p>
<div class="a-i">
    @if (Storage::exists('public/images/posts/' . $activity->id . '.jpg'))
        <img src="{{ url('images/posts/' . $activity->id) }}">
    @endif
</div>