@extends('layouts.app')

@section('title', $user->fname . ' ' . $user->lname)

@section('content')
    <div class="container">
        <div class="row">
            @include('partials._profile_head')
            <div id="p-c-a" class="row">
                <div class="col-sm-12">
                    @include('partials._profile_aside')
                    <div class="col-sm-8">
                        <div class="">
                            @yield('p-c')
                        </div>
                        <div class="activities"></div>
                        <div class="text-center more-activities"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
