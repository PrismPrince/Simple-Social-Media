<div class="col-sm-4">
    <div class="panel panel-info">
        <div class="panel-body clearfix">
          @if ($about->bio)
            <h4><b>Bio</b></h4>
            <p>{{ $about->bio }}</p>
          @endif
          @if ($about->sex)
            <h4><b>Sex</b></h4>
            <p>{{ $about->sex }}</p>
          @endif
          @if ($about->bday)
            <h4><b>Birthday</b></h4>
            <p>{{ date('M d, Y', strtotime($about->bday)) }}</p>
          @endif
          @if ($about->loc)
            <h4><b>Address</b></h4>
            <p>{{ $about->loc }}</p>
          @endif
          @if ($about->pref)
            <h4><b>Interested in</b></h4>
            <p>{{ $about->pref }}</p>
          @endif
          @if ($about->status)
            <h4><b>Status</b></h4>
            <p>{{ $about->status }}</p>
          @endif
          @if (!$about->bio &&
            !$about->sex &&
            !$about->bday &&
            !$about->loc &&
            !$about->pref &&
            !$about->status)
            <h1 class="text-center"><small>No details to show</small></h1>
          @endif
        </div>
    </div>
</div>
