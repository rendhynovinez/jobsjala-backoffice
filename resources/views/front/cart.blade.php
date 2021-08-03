<!DOCTYPE html>
<html lang="en">
<head>
<title>Philigrosir</title>
<link rel="shortcut icon" href="{{ asset('img/keranjang_philip.png')}}" type="image/x-icon">
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
      <a href="#">
        <img src="{{ asset('img/philips.jpg/')}}" width="150" height="50" alt="Instagram" class="logo-imagen">
        <!-- <img src="img/logo-letter.png" alt="" class="logo-texto"> -->
      </a>
    </div>
    <div class="search-container">
      <!-- <div class="search">
        <i class="fa fa-search"></i>
        <form id="form" class="listproduct" action="http://127.0.0.1:8000/customer/home">
          <input type="text" placeholder="  Search" id="search" name="keyword">
        </form>
      </div>
    </div> -->
    <div class="icons">

    </div>
  </header>
  
<div class="container-fluid">
	    <div class="row">
	        <aside class="col-lg-9">
	            <div class="card">
	                <div class="table-responsive">
	                    <table class="table table-borderless table-shopping-cart">
	                        <thead class="text-muted">
	                            <tr class="small text-uppercase">
	                                <th scope="col">Product</th>
	                                <th scope="col" width="120">Quantity</th>
	                                <th scope="col" width="120">Price</th>
	                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
	                            </tr>
	                        </thead>
	                        <tbody>
                            <div class="hidden" style="visibility: hidden;">
                            @php
                                $price_total = 0;
                                $qty_total = 0;
                            @endphp
                            @foreach($Product as $P)
                            </div>

                            <div class="hidden" style="visibility: hidden;">
                            {{$price_total += floatval(ltrim($P->price, '$')) * (int)$P->qty}}
                            {{$qty_total += $P->qty}}
                            </div>
                     
	                            <tr>
	                                <td>
	                                    <figure class="itemside align-items-center">
	                                        <div class="aside"><img src="{{ url('app/public/storage/'.$P->img) }}" class="img-sm"></div>
	                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$P->title}}</a>
	                                            <p class="text-muted small">Dimension : {{$P->height}} gr x {{$P->weight}} gr x {{$P->length}} cm x {{$P->width}} cm <br> Subtitle: {{$P->subtitle}}</p>
	                                        </figcaption>
	                                    </figure>
	                                </td>
	                                <td> 
                                    <input type="text" name="qty" id="qty" size="3" value="{{$P->qty}}" disabled>
                                        </td>
	                                <td>
	                                    <div class="price-wrap"> <var class="price">{{$P->price}}</var> <small class="text-muted"> -- each </small> </div>
	                                </td>
	                            </tr>
                                @endforeach
                          
                      
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </aside>
	        <aside class="col-lg-3">
	            <!-- <div class="card mb-3">
	                <div class="card-body">
	                    <form>
	                        <div class="form-group"> <label>Have coupon?</label>
	                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
	                        </div>
	                    </form>
	                </div>
	            </div> -->
	            <div class="card">
	                <div class="card-body">
	                    <dl class="dlist-align">
	                        <dt>Total price:</dt>
	                        <dd class="text-right text-dark b ml-3">$ <strong>{{$price_total}}</strong></dd>
	                    </dl>
	                    <!-- <dl class="dlist-align">
	                        <dt>Discount:</dt>
	                        <dd class="text-right text-danger ml-3">- $1.00</dd>
	                    </dl> -->
	                    <dl class="dlist-align">
	                        <dt>Total Quantity:</dt>
	                        <dd class="text-right text-dark b ml-3"><strong>{{$qty_total}}</strong></dd>
	                    </dl>
                        <input type="hidden" name="user" id="user" value="{{$user}}">
	                    <hr> <a onclick="order()" style='color:white;' class="btn btn-out btn-warning btn-square btn-main" data-abc="true"> Order </a> 
                        
                      <a href="{{route('customer.home')}}" class="btn btn-out btn-dark btn-square btn-main mt-2" data-abc="true">Go Back</a>
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
              window.location.href = "{{ route('customer.sukses_order')}}";
            }
          });
    
   }
</script>