<?php
   $title = "LOGIN MITRA";
   include('inc/header.php')
?>
<body>
<!--
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
-->
  <div class="section bg-blue">
   
      <h4 class="header center white-text bold pvh-10">LOGIN</h1>
  </div>

  <div class="container">

<div class="section">
  <p>*Login Sebagai :</p>
  <form action="#">

    <div class="row">
      <div class="col s6">
      <label>
        <input name="group1" type="radio"  />
        <span>Customer</span>
      </label>
    </div>
    <div class="col s6">
      <label>
        <input name="group1" type="radio" checked />
        <span>Mitra</span>
      </label>
    </div>
    </div>
  </form>
 
    <form class="col s12">
      
      <p>Email :</p>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email Anda</label>
        </div>
      </div>
      <p>Password :</p>  
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

    </form>
    
    <a class="waves-effect waves-light btn w-100 bg-blue" href="login-mitra.php">MASUK</a>
  </div>
    <a class="waves-effect waves-light btn w-100 bg-yellow">REGISTER</a>
   
  </div>

<?php
   include('inc/footer.php')
?>

