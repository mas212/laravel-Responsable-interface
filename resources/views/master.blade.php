<!DOCTYPE html>
<html>
<head>
	<title>Responsable interface</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css')  }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('custome/custome.css') }}"/>
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
 <!-- star header -->
@include('partials.nav')
 <!-- end header -->
 <!-- start form search -->
<div class="col-md-12 box_content col-sm-12">
	<!-- start content -->
	 @yield('content')
	<!-- end content -->
</div>
@include('partials.footer')