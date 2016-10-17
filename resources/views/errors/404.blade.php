@extends('layouts.error')

@section('title', 'Prism - 404 Page Not Found')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-1 hidden-sm hidden-xs logo">
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="brand-name" src="{{ url('img/logo.jpg') }}">
            </div>
          </div>
        </div>
        <div class="visible-sm col-sm-1"></div>
        <div class="col-md-7 col-sm-10 cont">
            <div class="panel panel-default welcome">
              <div class="panel-body">
                <p class="welcome-title"><span class="glyphicon glyphicon-thumbs-down"></span> Page Not Found!</p>
                <hr>
                <h2><small>404 Error</small></h2>
                <p class="text-justify welcome-body">Sorry, the page your looking for is missing or removed by the user! We suggest that you should go home.</p>
              </div>
            </div>
            <div class="panel panel-default buttons">
              <div class="panel-body text-center">
                @if (Auth::guest())
                  <a class="home btn block" href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Home!</a>
                @else
                  <a class="home btn block" href="{{ url('home') }}"><span class="glyphicon glyphicon-home"></span> Home!</a>
                @endif
              </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 footer">
            <div class="panel panel-default">
              <div class="panel-body text-center">
                <p>Prism <span class="glyphicon glyphicon-copyright-mark"></span> 2016</p>
                <a target="_blank" href="https://www.facebook.com/davedane.hood">Dave Dane Pacilan</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
   <style media="screen">
     .logo .panel-body {
       padding: 5px;
     }
     .brand-name {
       width: 100%;
     }
     .cont .buttons > .panel-body {
       padding: 15px 0;
     }
     .welcome .welcome-title {
       margin: 0;
       color: #3fa6e8;
       font-size: 60px;
     }
     .welcome-body {
       margin: 0;
     }
     .panel-body > hr {
       margin-top: 0;
     }
     .block {
       display: inline-block;
     }
     .btn.home {
       border: 1px #64bde7 solid;
       border-radius: 30px;
       background: #62a9dd;
       color: #fff;
       font-size: 30px;
     }
     .footer .panel-body {
       padding: 5px 15px;
     }
     .footer p {
       margin: 0;
       color: #3fa6e8;
       font-size: 20px;
     }
     .footer a {
       color: #3fa6e8;
       font-size: 15px;
     }
   </style>
@endsection
