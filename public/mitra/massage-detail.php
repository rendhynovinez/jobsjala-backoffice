<?php
   $title = "DETAIL";
   include('inc/header.php')
?>

<!-- nav -->
<nav class="bg-blue" role="navigation">
    <div class="nav-wrapper container"><a href="#" class="" id="nav-title">DETAIL</a>
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
<div class="text-yellow">Layanan dipilih :</div>
<div class="text-blue bold">BODY MASSAGE KEROKAN</div>
<br>
<div class="text-yellow">Info :</div>
<div class="">Layanan pijat body massage yang dilengkapi dengan layanan kerokan ini diperuntukan bagi customer yang memiliki kendala pada tubuh seperti pegal-pegal, masuk angin, dan sebagiannya agar dapat fresh dan kembali segar bugar untuk dapat beraktifitas kembali.S</div>
<br>
<div class="text-yellow">Open Order :</div>
<div class="">24 Jam</div>
<br>
<div class="text-yellow">Referensi Mitra :</div>
<div class="">Customer pria - Pria. Customer wanita - wanita</div>
<br>
<div class="text-yellow">Pilih durasi :</div>
<form action="#">
<div class="row">
  <div class="col s6">
  <label>
    <input name="group1" type="radio" checked />
    <span>60 menit</span>
  </label>
</div>
<div class="col s6">
  <label>
    <input name="group1" type="radio" />
    <span>120 menit</span>
  </label>
</div>
<div class="col s6">
  <label>
    <input name="group1" type="radio" />
    <span>90 menit</span>
  </label>
</div>
</div>
</form>
<br>
<div class="text-yellow">Cara Pemabayaran :</div>
<div class=""></div>
<div class="input-field col s12">
    <select>
      <option value="" disabled selected>Pilih Cara Pembayaran</option>
      <option value="1">Cash</option>
      <option value="2">Transfer</option>
    </select>  
  </div>

  <a class="waves-effect waves-light btn w-100 bg-blue" href="detail-rincian.php">LANJUT</a>

</div>

</div>

<?php
   include('inc/footer.php')
?>

