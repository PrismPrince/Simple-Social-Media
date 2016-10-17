@extends('layouts.app')

@section('title', $user->fname . ' ' . $user->lname . ' - About')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials._profile_head')
            <div id="p-c-a" class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="panel panel-info">
                  <div class="panel-body">

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
                    @if (Auth::user()->id == $user->id)
                      <hr>
                      <div class="col-xs-12 text-right">
                        <a href="{{ url('about/' . $user->id . '/edit') }}" class="btn btn-info btn-xs">Update your information</a>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')
    @include('partials._style_profile')
    @include('partials._style_p_a')
@endsection

@section('scripts')
    @include('partials._script_profile')
@endsection
