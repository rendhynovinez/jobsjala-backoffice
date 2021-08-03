<?php
   $title = "NOTIFIKASI";
   include('inc/header.php')
?>

<!-- nav -->
<nav class="bg-blue" role="navigation">
    <div class="nav-wrapper container"><a href="#" class="" id="nav-title">NOTIFIKASI</a>
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

    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Berlangsung</a></li>
        <li class="tab col s3"><a href="#test2">Selesai</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Batal</a></li>
        
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>

</div>

<div class="gap"></div><div class="gap"></div>
</div>
<div class="bottomnavbar">
  <a href="home.php" class="font-11 active"><img class="ic-bottomnav" src="./img/ic-home-b.png">Home</a>
  <a href="massage.php" class="font-11"><img class="ic-bottomnav" src="./img/ic-mas.png">Massage</a>
  <a href="#home" class="font-11"><img class="ic-bottomnav" src="./img/ic-cle.png">Cleaning</a>
  <a href="#home" class="font-11"><img class="ic-bottomnav" src="./img/ic-edu.png">Education</a>
</div>

<?php
   include('inc/footer.php');

?>

<script>

var instance = M.Tabs.init(el, options);

// Or with jQuery

$(document).ready(function(){
  $('.tabs').tabs();
});


</script>


