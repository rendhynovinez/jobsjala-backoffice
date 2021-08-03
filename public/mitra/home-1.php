<?php
   $title = "HOME MITRA";
   include('inc/header.php')
?>

<!-- nav -->
<nav class="bg-blue" role="navigation">
    <div class="nav-wrapper container"><a href="#" class="" id="nav-title">HOME</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Reservation List</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="#" data-target="#" class="sidenav-trigger right"><i class="material-icons">chat</i></a>
    </div>
  </nav>

<div class="container">

<div class="section">

<div class="row">

<div class="col s8" id="user-info"><i class="material-icons">account_balance_wallet</i><span>Rp 0</span></div>


<div class="col s4 text-right">
<a id="user-notif" href="#modal1" class="sidenav-trigger right"><div class="waves-effect waves-light btn-small">TOPUP</div></a></div>
</div>

<div class="row">
    <div class="col s12 center">
    <img class="mitra-img" src="img/mitra-img.png">
    </div>
    <div class="col s12 center">
   <h5 class="bold text-blue">TATANG SURATANG</h5>
   <h6 class="text-yellow">ID SH005</h6>
   </div>
</div>

<div class="divider"></div>
<div class="gap"></div>

<a href="orderan.php">
<div class="card-panel">
<div class="cardh1">
ORDERAN
</div><span class="right-arrow material-icons">
keyboard_arrow_right
</span>
</div>
</a>

<a href="aktivitas.php">
<div class="card-panel">
<div class="cardh1">
AKTIVITAS
</div><span class="right-arrow material-icons">
keyboard_arrow_right
</span>
</div>
</a>

<a href="profile-mitra.php">
<div class="card-panel">
<div class="cardh1">
AKUN SAYA
</div><span class="right-arrow material-icons">
keyboard_arrow_right
</span>
</div>
</a>

   
</div>

<div class="gap"></div><div class="gap"></div>

</div>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  

<?php
   include('inc/footer.php')
?>

