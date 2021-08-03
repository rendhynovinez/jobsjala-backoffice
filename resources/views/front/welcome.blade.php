<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Philigrosir</title>
  <link rel="shortcut icon" href="{{ asset('img/keranjang_philip.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('instagram/main.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<style>
		.quantity-control {
		display: flex;
		align-items: center;
		justify-content: space-between;
		width: fit-content;
		margin: 0 auto;
		background: #eaeaea;
		border-radius: 10px;
		padding: 10px.15px;
		margin-top: 9rem;
		}

		.quantity-btn {
		background: transparent;
		border: none;
		outline: none;
		margin: 0;
		padding: 0px 8px;
		cursor: pointer;
		}
		.quantity-btn svg {
		width: 15px;
		height: 15px;
		}
		.quantity-input {
		outline: none;
		user-select: none;
		text-align: center;
		width: 47px;
		display: flex;
		align-items: center;
		justify-content: center;
		background: transparent;
		border: none;
		}
		.quantity-input::-webkit-inner-spin-a,
		.quantity-input::-webkit-outer-spin-a {
		-webkit-appearance: none;
		margin: 0;
		}

		body{ margin: 0}


[nav-content]{
  display: none;
  &.active{
    display: block;
  }
}

.bottomNav{
  width: 100%;
  height: 60px;
  position: fixed;
  bottom: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
  &.fill{
    > [nav-id]{
       flex-grow: 1;
       min-width: 25%;
    }
  }
  > [nav-id]{
    min-width: 120px;
    height: 100%;
    margin: 0;
    border-radius: 0;
    line-height: 25px;
    text-align: center;
    text-align: center;
    padding: 8px;
    background: transparent;
    border: none;
    color: #757575;
    *{
      display: block;
    }
    &.active{
      color: inherit;
    }
    > i{
      font-size: 25px;
      text-align: center;
    }
  }
  &.no-label{
    > button {
      min-width: 80px;
      > span{
        height: 0px;
        overflow: hidden;
        transition: height .2s;
      }
      &.active{
        > span{
          height: 20px;
        }
      }
    }
  }
}

#overlay {
  position: fixed;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  display: none;
}

#popup {
  max-width: 600px;
  width: 80%;
  max-height: 500px;
  height: 80%;
  padding: 20px;
  /* position: relative; */
  background: #fff;
  margin-top: 90px ;
  margin-left: 70px ;
  
}

#close {
  /* position: absolute; */
  top: 10px;
  right: 10px;
  cursor: pointer;
  color: #000;
}

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#hello:hover {
  letter-spacing: 0.8em;
  background-color: #F08C99;
}

#hello {
  color: white;
}
button {
  height: 3em;
  width: 50%;
  padding: 1.5em auto;
  margin: 1em auto;
  background-color: grey;
  border: none;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 0.5em;
  transition: all 0.2s cubic-bezier(.4,0,.2,1);
 
}

.buttons {
  color: white;
  height: 3em;
  width: 90%;
  padding: 1em;
  margin: 1px auto;
  background-color: black;
  border: none;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  transition: all 0.2s cubic-bezier(.4,0,.2,1);
  text-align: left;
}


</style>

</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="#">
        <img src="{{ asset('img/philips.jpg')}}" width="200" height="50" alt="Instagram" class="logo-imagen">
        <!-- <img src="img/logo-letter.png" alt="" class="logo-texto"> -->
      </a>
    </div>
    <div class="search-container">
      <div class="search">
        <i class="fa fa-search"></i>
        <form id="form" class="listproduct" action="{{ url()->current() }}">
          <input type="text" placeholder="  Search" 	id="search"
						name="keyword">
        </form>
      </div>
    </div>
    <div class="icons">
      <a href="#"><i class="fa fa-dollar" aria-hidden="true" id="price_tot"> 0</i></a>
      <a onclick="redirectToCart()"><i class="fa fa-shopping-cart" aria-hidden="true" id="quantitys"> 0</i></a>
      <a href="#"></a>
      <!-- <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a> -->
    </div>
  </header>
  <section class="post-list">
    @foreach($Product as $P)
      <span class="post">
        <figure class="post-image">
          <img src="{{ url('app/public/storage/'.$P->img) }}" alt="">
        </figure>
        <div class="post-overlay">
            <div class="quantity-control" data-quantity="">
            <a class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
              <g>
              <g>
                <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
              </g>
              </g>
            </svg></a>
            <input type="number" class="quantity-input" data-quantity-target="{{$P->id}}" value="0" step="1" min="1" max="" name="quantity_{{$P->id}}" id="quantity_{{$P->id}}" disabled>
              <input type="hidden" class="price" data-price-target="{{$P->price}}" name="price_{{$P->id}}" id="price_{{$P->id}}" value="{{$P->price}}">
              <input type="hidden" class="save-quantity" name="save-quantity-{{$P->id}}" id="save-quantity-{{$P->id}}" value="0">
              <input type="hidden" class="save-all-data" name="save-all-data-{{$P->id}}" id="save-all-data-{{$P->id}}" value="{{$P}}">
              <input type="hidden" class="uid" name="uid" id="uid" value="{{Auth::user()->id}}">

              <a class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg>
              </a>
          </div>
    
          <p>
          {{$P->title}} | {{$P->price}}
          </p>
          <a id="trigger" onclick="trigger({{$P}})"><li class="fa fa-info-circle"></li> DETAIL</a>
        </div>
      </span>
    @endforeach
	{{ $Product->links() }} 
  </section>
  

  <div id="overlay">
      <div id="popup">
        <a onclick="closes()">X</a>
          <div class="row">
              <div class="column" >
                <h4><span id="title"></span></h4>
                <img id="img_det" style="border: 1px solid #383838;" width="250" height="250" src="{{ url('app/public/storage/'.$P->img) }}" alt="">
                <p>Description : <span id="subtitle"></span> / <span id="description"></span></p>
              </div>

              <div class="column">
                <button id="hello">Price</button>
                <p style="font-size:47px; font-weight:bold; color:grey; padding-left:15px; line-height: 20%;"> <span id="price"></span>,-</p>
                <br>
                  <button class="buttons text-left"><li class="fa fa-balance-scale"></li> Weight <span id="weight"></span> / gr</button>
                  <button class="buttons text-left"><li class="fa fa-balance-scale"></li> Length <span id="length"></span> / gr</button>
                  <button class="buttons text-left"><li class="fa fa-balance-scale"></li> Height <span id="height"></span> / cm</button>
                  <button class="buttons text-left"><li class="fa fa-balance-scale"></li> Width  <span id="width"></span> / cm</button>
              </div>

          </div>
       </div>
   </div>

</body>
</html>

<script>
var arrayAllData = [];
function redirectToCart(){
  debugger

  // Add To Cart Local app/public/storage
  localStorage.setItem("stateCart", arrayAllData);
    var uri = 'store';
    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      $.ajax({
            type:'POST',
            url : uri,
            data:{data:arrayAllData, uid:document.getElementById("uid").value},
            success:function(data){
              debugger
              window.location.href = "{{ route('customer.cart')}}";
            }
          });

  
  
}


// Pop Up Action-------------------------

  function trigger(p){
    var base_url = window.location.origin;
    $('#overlay').fadeIn(300);  
    document.getElementById("description").innerHTML =  p.description;
    document.getElementById("height").innerHTML = p.height;
    document.getElementById("img_det").src = base_url+'/app/public/storage/'+p.img;
    document.getElementById("length").innerHTML =  p.length;
    document.getElementById("price").innerHTML =  p.price;
    document.getElementById("title").innerHTML =  p.title;
    document.getElementById("weight").innerHTML =  p.weight;
    document.getElementById("width").innerHTML = p.width;
    document.getElementById("subtitle").innerHTML = p.subtitle;
  }

  function closes(p){
    $('#overlay').fadeOut(300);  
  }

// End Pop Up Action-------------------------




// Counter Cart-------------------------

  (function () {
    "use strict";
    var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
      return function (arg) {
        if (this.length > 0) {
          this.each(function () {
            var $this = $(this);

            if (!$this.data(ident)) {
              $this.data(ident, func($this, arg));
            }
          });

          return this;
        } else if (this.length === 0) {
          if (!this.data(ident)) {
            this.data(ident, func(this, arg));
          }

          return this.data(ident);
        }
      };
    });
  })();



  (function () {
    "use strict";
    var qty_total = 0;
    var price_total = 0;
    // var arrayAllData = [];

    function Guantity($root) {
      
      const element = $root;
      const quantity = $root.first("data-quantity");
      const quantity_target = $root.find("[data-quantity-target]");
      const price_target = $root.find("[data-price-target]");
      const quantity_minus = $root.find("[data-quantity-minus]");
      const quantity_plus = $root.find("[data-quantity-plus]");

      // Get Quantity
      var quantity_ = quantity_target.val();
      var str = quantity_target[0].id;
      var get_id = str.replace("quantity_", "");


      var price_ = price_target.val();
      var str = price_target[0].id;
      // var get_id = str.replace("price_", "");
      






      
      $(quantity_minus).click(function () {
        debugger
        if(quantity_ == 0){
          return alert('the quantity should not be less than 0')
        }
        var data_minus = --quantity_;
        qty_total -= 1;
        var price = price_.replace("$", "");
        price_total = price_total - parseInt(price);
        quantity_target.val(data_minus);
        document.getElementById("save-quantity-"+get_id).value = data_minus;


         // Get Id From Array New Cart
        var get_all_data = document.getElementById("save-all-data-"+get_id).value;
        var str = get_all_data.toString().replace(/\'/g, "'");
        var parsed = JSON.parse(str);


    
        // Find Id From Array Old Cart
        var index = arrayAllData.findIndex(x => x.id ===parseInt(get_id));
        if(index != -1){
          arrayAllData.splice(index, 1);
        }


        var set_all_data = {
            description: parsed.description,
            height: parsed.height,
            id: parsed.id,
            img: parsed.img,
            length:parsed.length,
            price: parsed.price,
            status:parsed.status,
            subtitle: parsed.subtitle,
            title: parsed.title,
            updated_at: parsed.updated_at,
            weight:parsed.weight,
            width: parsed.width,
            qty:data_minus
        }
        if(data_minus != 0){
          arrayAllData.push(set_all_data);
        }
        
        console.log(arrayAllData);
        document.getElementById("quantitys").innerHTML = qty_total;
        document.getElementById("price_tot").innerHTML = price_total;


      });














      $(quantity_plus).click(function () {
        debugger
        var data_plus = ++quantity_;
        qty_total += 1;
        var price = price_.replace("$", "");
        price_total = price_total + parseInt(price);
        quantity_target.val(data_plus);
        document.getElementById("save-quantity-"+get_id).value = data_plus;


         // Get Id From Array New Cart
        var get_all_data = document.getElementById("save-all-data-"+get_id).value;
        var str = get_all_data.toString().replace(/\'/g, "'");
        var parsed = JSON.parse(str);


        // Find Id From Array Old Cart
        var index = arrayAllData.findIndex(x => x.id ===parseInt(get_id));
        if(index != -1){
          arrayAllData.splice(index, 1);
        }

        // Set Id From add Cart
        var set_all_data = {
            description: parsed.description,
            height: parsed.height,
            id: parsed.id,
            img: parsed.img,
            length:parsed.length,
            price: parsed.price,
            status:parsed.status,
            subtitle: parsed.subtitle,
            title: parsed.title,
            updated_at: parsed.updated_at,
            weight:parsed.weight,
            width: parsed.width,
            qty:data_plus
        }


        arrayAllData.push(set_all_data);
        console.log(arrayAllData);
        document.getElementById("quantitys").innerHTML = qty_total;
        document.getElementById("price_tot").innerHTML = price_total;

      });
    }
    $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
    $("[data-quantity]").Guantity();
  })();

  // End Counter Cart----------------------
  


</script>