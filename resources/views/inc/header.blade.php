<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   


    <!-- title -->
    <title>Sadulur</title>

    <!-- custom -->
    <link href="{{ asset('customers/css/bottom-tab.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> 


    <!-- CSS  -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('customers/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('customers/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> 


  <!-- GRecaptcha  -->	
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        

    <!-- Leaflet Maps -->
    <!-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
    <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
    <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->

    <!-- Leaflet Maps -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>


<!-- browser color  -->
	
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#223887">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#223887">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#223887">		
	
</head>

<style>
#overlay {
  background: #ffffff;
  color: #223887;
  position: fixed;
  height: 100%;
  width: 100%;
  z-index: 5000;
  top: 0;
  left: 0;
  float: left;
  text-align: center;
  padding-top: 25%;
  opacity: .80;
}

.spinner {
    margin: 0 auto;
    height: 64px;
    width: 64px;
    animation: rotate 0.8s infinite linear;
    border: 5px solid #223887;
    border-right-color: transparent;
    border-radius: 50%;
}
@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>

<div id="overlay" style="display:none;">
    <div class="spinner"></div>
    <br/>
    Memuat..
</div>

<script>
window.onload = function () {
  $('#overlay').fadeOut();
}



$(document).ready(function() {
    debugger
	$('a').click(function(){

    if(event.srcElement.className === "material-icons"){
        return;
    };
		//$('#overlay').fadeIn().delay(500).fadeOut();
    $('#overlay').fadeIn();
	});
    $('button').click(function(){
   
      if(event.srcElement.className === "material-icons"){
        return;
      };
      //$('#overlay').fadeIn();
		$('#overlay').fadeIn().delay(500).fadeOut();
	});
});

</script>


	