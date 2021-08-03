<?php
   $title = "PROFIL";
   include('inc/header.php')
?>

<!-- nav -->
<nav class="bg-blue" role="navigation">
    <div class="nav-wrapper container"><a href="#" class="" id="nav-title">PROFIL</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Reservation List</a></li>
      </ul>
      <a href="#" onclick="goBack()" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
      
    </div>
  </nav>

<div class="container">

<div class="section">
  
    <div class="row">
		<div class="col s4"> 
         <img class="circle" src="img/logo.png" width="95px" alt=""/></div>	
    <div class="col s7"> 
        <div class="text-blue bold">Asep Suhendra</div>
        <div class="">asepsuhe@gmail.com</div>
		<div class="text-blue">08571312456</div>
		
	</div>
    </div>
   <div class="divider"></div>
 
</div>

<div class="section">
  
<!--   Konten Info Profil  -->
<div class="row">	
<div class="col s12 text-blue">Alamat
<a href="#" class="right waves-effect waves-light btn-small bg-yellow"><i class="material-icons">edit</i></a>
<div class="black-text">Jl. cinere gandul</div>
</div></div>

<div class="row">
<div class="col s6 text-blue">ID Customer
<div class="black-text">CST0001</div>
</div>

<div class="col s6 text-blue text-right">Gender
<div class="black-text">Pria</div>

</div>
</div>




<div class="gap"></div><div class="gap"></div>
</div>


</div>
<div class="bottomnavbar">
  <a href="home.php" class="font-11 active"><img class="ic-bottomnav" src="./img/ic-home-b.png">Home</a>
  <a href="massage.php" class="font-11"><img class="ic-bottomnav" src="./img/ic-mas.png">Massage</a>
  <a href="#home" class="font-11"><img class="ic-bottomnav" src="./img/ic-cle.png">Cleaning</a>
  <a href="#home" class="font-11"><img class="ic-bottomnav" src="./img/ic-edu.png">Education</a>
</div>

<?php
   include('inc/footer.php')
?>

