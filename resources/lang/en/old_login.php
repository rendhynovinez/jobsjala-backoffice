

<!DOCTYPE html>
<html>
<head>
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

    $('#overlay').fadeIn().delay(500).fadeOut();
	});
    $('button').click(function(){
   
      $('#overlay').fadeIn().delay(500).fadeOut();
	});
});

</script>
<body>
  <div class="section bg-blue">
   
      <h4 class="header center white-text bold pvh-10">LOGIN</h1>
  </div>

<div class="container">

<div class="section"> 
    <form class="col s12" method="POST" action="{{ route('login') }}">
    @csrf
    <p>{{ __('E-Mail Address') }}</p>      
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="email">Email Anda</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      <p>{{ __('Password') }}</p>  
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <label for="password">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
        <button type="submit" style="margin-bottom:20px" class="waves-effect waves-light btn w-100 bg-blue">{{ __('Login') }}</button>
      
        <!-- @if (Route::has('password.request'))
            <a class="waves-effect waves-light btn w-100 bg-blue" href="{{ route('password.request') }}">
                 {{ __('Forgot Your Password?') }}
            </a>
         @endif -->
    </form>
  </div>
    <a class="waves-effect waves-light btn w-100 bg-yellow"  href="{{ route('register') }}">{{ __('Register') }}</a>
  </div>

@include('inc.footer')

<script>
var fcm = "<?php echo $data ? $data : 0?>";

if(fcm == 0){
}else{
  localStorage.setItem("fcm", fcm);
  var fcm_res = localStorage.getItem("fcm");
}



</script>


