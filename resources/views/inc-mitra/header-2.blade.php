<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



<!-- title -->
<title>Sadulur</title>

<!-- custom -->
<link href="{{ asset('mitra/css/bottom-tab.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> 


<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{ asset('mitra/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="{{ asset('mitra/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/> 
<script type = "text/javascript"  src = "{{ asset('mitra/js/jquery-2.1.1.min.js')}}"></script>   
<script type = "text/javascript"  src = "{{ asset('mitra/js/materialize.min.js')}}"></script>




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
        debugger

          
       if($('#isiSaldo').attr('id') =="isiSaldo"){
           return;
       }

       if($('#tarikSaldo').attr('id') =="isiSaldo"){
           return;
       }

       if($('#inbox').attr('id') =="inbox"){
           return;
       }

       if($('#unread').attr('id') =="unread"){
             return;
       }


    if(event.srcElement.className === "material-icons"){
        return;
    };
    $('#overlay').fadeIn().delay(500).fadeOut();
		//$('#overlay').fadeIn().delay(500).fadeOut();
   // $('#overlay').fadeIn();
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

	