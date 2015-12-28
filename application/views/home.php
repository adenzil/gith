<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Angular</title>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script type="text/javascript" src="/js/index.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/index.css"></link>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css">
</head>
<body>



<div class="container-fluid outerdiv" ng-app="myApp" ng-controller="MovieController">



  <noscript>
    <div class="nojs">Javascript is either disabled or not supported in your browser. Please enable it or use a Javascript enabled browser.</div>
  </noscript>

  <div class="animated zoomInRight">

  <div id="mul">

        <div id="1">
          <div class="input-group search-bar">
            <input type="text" ng-model="search" ng-change="change()" ng-keyup="enter($event)" onclick="select()" class="form-control" placeholder="Enter github username" autofocus />
            <span class="input-group-addon bar-style"><i class="glyphicon glyphicon-search"></i></span>
          </div>
          <div class="userdata"></div>
        </div>

  </div>

  <div class="fx-rotate-counterclock-up fx-speed-500 fx-trigger fx-easing-quad adduser ">ADD USER</div>

  </div>

</body>
</html>
