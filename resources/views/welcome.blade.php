@extends('layouts.app')

@section('title', 'Prism')

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
                <p class="welcome-title"><span class="glyphicon glyphicon-ok"></span> Welcome!</p>
                <hr>
                <p class="text-justify welcome-body">The most easy and simple social media site to enteract with people globally. Post what's in your mind with or without a photo. It implements low privacy on posting so you can read and comment on any posts of all the users. You can also update your profile with some of your information and upload a profile picture and cover photo.<br><br>So what are you waiting for?<br>Join us!</p>
              </div>
            </div>
            <div class="panel panel-default buttons">
              <div class="panel-body text-center hidden-xs">
                <a class="login btn block" href="{{ url('register') }}"><span class="glyphicon glyphicon-pencil"></span> Join Now!</a>
                <span class="or block">or</span>
                <a class="reg btn block" href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
              </div>
              <div class="panel-body text-center visible-xs">
                <a class="login btn block" href="{{ url('register') }}"><span class="glyphicon glyphicon-pencil"></span> Join Now!</a>
                <span class="or block">or</span>
                <a class="reg btn block" href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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
     .hidden-xs > .or {
       margin: 0 30px;
     }
     .visible-xs > .block {
       display: block;
     }
     .visible-xs.panel-body {
       padding: 15px !important;
     }
     .or {
       font-size: 25px;
       color: #aaa;
     }
     .btn.login {
       border: 1px #b267f7 solid;
       border-radius: 30px;
       background: #c48ff9;
       color: #fff;
       font-size: 30px;
     }
     .btn.reg {
       border: 1px #af2678 solid;
       border-radius: 30px;
       background: #d5229a;
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
