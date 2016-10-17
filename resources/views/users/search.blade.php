@extends('layouts.app')

@section('title', 'Search a User')

@section('content')
	<div class="container">
		<div class="col-sm-8 search col-sm-offset-2">
			@if ($users->count() != 0)
				<h3>Users</h3>
			@endif
			<ul class="list-group">
				@forelse ($users as $user)
					<li class="list-group-item"><a href="{{ url('profile/' . $user->id . '/timeline') }}">{{
						$user->fname . ' ' .
						$user->lname
					}}</a></li>
				@empty
					<div class="alert alert-warning" role="alert">
						No results for "{{ $key }}"
					</div>
				@endforelse
			</ul>
		</div>
	</div>
@stop

@section('styles')
	{{ Html::style('css/search.css') }}
@stop