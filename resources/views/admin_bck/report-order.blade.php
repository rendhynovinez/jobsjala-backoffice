
@include('header.header')
<style>

.body {
  background: rgb(204,204,204);
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
  /* width: 32cm; */
  /* height: 29.7cm; */
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;
}
th {
        font-size: 9px;
        text-transform: uppercase;
    }
td {
        font-size: 9px;
        text-transform: uppercase;
    }


@page {
    size: 25cm 35.7cm;
    margin: 5mm 5mm 5mm 5mm; /* change the margins as you want them to be. */
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
  #printPageButton {
    display: none;
  }

}

* {
  box-sizing: border-box;
}

.fab-wrapper {
  position: fixed;
  bottom: 3rem;
  right: 3rem;
}
.fab-checkbox {
  display: none;
}
.fab {
  position: absolute;
  bottom: -1rem;
  right: -1rem;
  width: 4rem;
  height: 4rem;
  background: green;
  border-radius: 50%;
  background: green;
  box-shadow: 0px 5px 20px #81a4f1;
  transition: all 0.3s ease;
  z-index: 1;
  border-bottom-right-radius: 6px;
  border: 1px solid #0c50a7;
}

.fab:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.1);
}
.fab-checkbox:checked ~ .fab:before {
  width: 90%;
  height: 90%;
  left: 5%;
  top: 5%;
  background-color: rgba(255, 255, 255, 0.2);
}
.fab:hover {
  background: green;
  box-shadow: 0px 5px 20px 5px green;
}

.fab-dots {
  position: absolute;
  height: 8px;
  width: 8px;
  background-color: white;
  border-radius: 50%;
  top: 50%;
  transform: translateX(0%) translateY(-50%) rotate(0deg);
  opacity: 1;
  animation: blink 3s ease infinite;
  transition: all 0.3s ease;
}

.fab-dots-1 {
  left: 15px;
  animation-delay: 0s;
}
.fab-dots-2 {
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  animation-delay: 0.4s;
}
.fab-dots-3 {
  right: 15px;
  animation-delay: 0.8s;
}

.fab-checkbox:checked ~ .fab .fab-dots {
  height: 6px;
}

.fab .fab-dots-2 {
  transform: translateX(-50%) translateY(-50%) rotate(0deg);
}

.fab-checkbox:checked ~ .fab .fab-dots-1 {
  width: 32px;
  border-radius: 10px;
  left: 50%;
  transform: translateX(-50%) translateY(-50%) rotate(45deg);
}
.fab-checkbox:checked ~ .fab .fab-dots-3 {
  width: 32px;
  border-radius: 10px;
  right: 50%;
  transform: translateX(50%) translateY(-50%) rotate(-45deg);
}

@keyframes blink {
  50% {
    opacity: 0.25;
  }
}

.fab-checkbox:checked ~ .fab .fab-dots {
  animation: none;
}

.fab-wheel {
  position: absolute;
  bottom: 0;
  right: 0;
  border: 1px solid #;
  width: 10rem;
  height: 10rem;
  transition: all 0.3s ease;
  transform-origin: bottom right;
  transform: scale(0);
}

.fab-checkbox:checked ~ .fab-wheel {
  transform: scale(1);
}
.fab-action {
  position: absolute;
  background: green;
  width: 3rem;
  height: 3rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: White;
  box-shadow: 0 0.1rem 1rem rgba(24, 66, 154, 0.82);
  transition: all 1s ease;

  opacity: 0;
}

.fab-checkbox:checked ~ .fab-wheel .fab-action {
  opacity: 1;
}

.fab-action:hover {
  background-color: green;
}

.fab-wheel .fab-action-1 {
  right: -1rem;
  top: 0;
}

.fab-wheel .fab-action-2 {
  right: 3.4rem;
  top: 0.5rem;
}
.fab-wheel .fab-action-3 {
  left: 0.5rem;
  bottom: 3.4rem;
}
.fab-wheel .fab-action-4 {
  left: 0;
  bottom: -1rem;
}


</style>

<page size="A4">
    <body>
        <div style="padding-top:20px;">
            <center>
                <h5 style="color:green;"><b><img src="{{ asset('img/philips.jpg')}}" width="200" height="70" alt="Instagram" class="logo-imagen"></b></h4>
            </center>
            <hr>
            <p style="margin-left:30px; font-size:15px;"><b>ORDER NUMBER  &nbsp;: &nbsp;{{$order_numb}} </b></p>
            <p style="margin-left:30px; font-size:15px;"><b>USERNAME   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$store_name}}</b></p>
            <input type="hidden" name="ktp" id="ktp" value="">
            <input type="hidden" name="reason" id="reason" value="">
        </div>

        <section class="content" style="padding-top:30px;">
        <div class ="row">
          <div class="col-md-12">
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header bg-warning">
                        <h3 class="card-title"><b>DETAIL ORDER</b></h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

                            <table id="izidatatables1" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                        <th>No</th>
                                                        <th>Item</th>
                                                        <th>Price</th>
                                                        <th>Amount</th>
                                                        <th>Total ($)</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                          <tr>
                                            <td colspan = "3" style="backgroud-color:grey;"><b>Grand Total</b></td>
                                            <td colspan = "1"><b>$ {{$total_qty}}</b></td>
                                            <td colspan = "1"><b>$ {{$total}}</b></td>
                                          </tr>
                                      </tfoot>
                                        <tbody>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($cart as $cart)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $cart->title }}</td>
                                                <td>$ {{ str_replace('$', '', $cart->price) }}</td>
                                                <td>{{ $cart->qty }}</td>
                                                <td>$ {{  str_replace('$', '', $cart->price) * $cart->qty }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <t>
                                </tbody>
                            </table>

                      </div>
                      <!-- /.card-body -->
                    </div>
                      <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
        </body>
</page>




<!-- Floating Button -->

<div class="fab-wrapper" id="printPageButton">
  <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
  <label class="fab" for="fabCheckbox">
    <span class="fab-dots fab-dots-1"></span>
    <span class="fab-dots fab-dots-2"></span>
    <span class="fab-dots fab-dots-3"></span>
  </label>
  <div class="fab-wheel">
    <a class="fab-action fab-action-1">
      <i class="fas fa-file" onclick="window.print()"></i>
    </a>
    <a onclick="back()"class="fab-action fab-action-2">
      <i class="fas fa-arrow-left"></i>
    </a>
        <!-- <a class="fab-action fab-action-3">
      <i class="fas fa-arrow-left"></i> -->
    <!-- </a>
        <a class="fab-action fab-action-4">
      <i class="fas fa-info"></i>
    </a> -->
  </div>
</div>





@include('footer.footer')
<script>

function back(){
    location.href = '/list-order';
}


</script>
