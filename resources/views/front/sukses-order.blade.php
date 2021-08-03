<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif;
    font-size: 14px
}

.container-fluid {
    margin-top: 70px
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.40rem
}

.img-sm {
    width: 80px;
    height: 80px
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.table-shopping-cart .price-wrap {
    line-height: 1.2
}

.table-shopping-cart .price {
    font-weight: bold;
    margin-right: 5px;
    display: block
}

.text-muted {
    color: #969696 !important
}

a {
    text-decoration: none !important
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 0px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.dlist-align {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

[class*="dlist-"] {
    margin-bottom: 5px
}

.coupon {
    border-radius: 1px
}

.price {
    font-weight: 600;
    color: #212529
}

.btn.btn-out {
    outline: 1px solid #fff;
    outline-offset: -5px
}

.btn-main {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 19px;
    cursor: pointer;
    color: #fff;
    width: 100%
}

.btn-light {
    color: #ffffff;
    background-color: #F44336;
    border-color: #f8f9fa;
    font-size: 12px
}

.btn-light:hover {
    color: #ffffff;
    background-color: #F44336;
    border-color: #F44336
}

.btn-apply {
    font-size: 11px
}
.header {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  height: 77px;
  background: white;
  display: grid;
  grid-template-columns: repeat(3, minmax(100px, 293px));
  justify-content: center;
  grid-gap: 28px;
  z-index: 2;
  border-bottom: 1px solid #c4c4c4; 
}
.header .search-container {
  display: flex;
  align-items: center;
  justify-content: center;
}
.header .search {
  color: rgb(189, 189, 189);
  position: relative;
}
.header .search .fa-search {
  position: absolute;
  top: 4px;
  left: 6px;
}
.header .search input {
  border-radius: 3px;
  border: 1px solid rgb(189, 189, 189);
  padding: 5px;
  padding-left: 23px;
}
.header .icons {
  display: flex;
  align-items: center;
  justify-content: flex-end;
}
.header .icons a {
  font-size: 20pt;
  margin-left: 25px;
  color: #868686;
}
.header .logo {
  display: flex;
  align-items: center;
}
.header .logo a {
  text-decoration: none;
 }

</style>
</head>

<header class="header">
    <div class="logo">
      <!-- <a href="#">
        <img src="img/logo.png" alt="Instagram" class="logo-imagen">
        <img src="img/logo-letter.png" alt="" class="logo-texto">
      </a> -->
    </div>
    <div class="search-container">
      <div class="search">
        <i class="fa fa-search"></i>
        <form id="form" class="listproduct" action="http://127.0.0.1:8000/customer/home">
          <input type="text" placeholder="  Search" id="search" name="keyword">
        </form>
      </div>
    </div>
    <div class="icons">

    </div>
  </header>
  
   <div class="container-fluid">
   <div class="row">
	        <aside class="col-lg-12">
	            <div class="card">
                       
                         <center>
                         <div style="padding-top:300px; padding-bottom:300px;">
                         <img src="{{url('img/happy-customer.png')}}" alt="User Avatar"  width="150" height="150">
                          <br><br>
                         <h2><b style="color:grey;">ORDER SUCCESS</b></h2></center>
                         <a href="{{route('customer.home')}}" class="btn btn-out btn-danger btn-square btn-main mt-2" data-abc="true">Go Back</a>
                         <br><br>

                         </div>
                </div>
            </aside>
    </div>
            
	</div>
</html>

<script>
   function order(){
       debugger
    var uri = 'ordersend';
    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      $.ajax({
            type:'POST',
            url : uri,
            data:{uid:document.getElementById("user").value},
            success:function(data){
              debugger
              //window.location.href = "{{ route('customer.cart')}}";
            }
          });
    
   }
</script>