@extends('layouts.error')

@section('title', 'Prism - Maintenance Mode')

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
                <p class="welcome-title"><span class="glyphicon glyphicon-cog"></span> Maintenance Mode!</p>
                <hr>
                <h2><small>503 Error</small></h2>
                <p class="text-justify welcome-body">Sorry, we'll be right back!</p>
              </div>
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
