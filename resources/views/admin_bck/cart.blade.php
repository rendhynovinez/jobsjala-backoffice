<!DOCTYPE html>
<html lang="en">
@include('header.header') 

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini" id="Identity-check">
<div class="wrapper">

@include('navbar.navbar')
  @include('sidebar.sidebar') 

  <div class="content-wrapper">

    <div id="loading"></div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="download_pdf_data" class="container-fluid">
        <div class="row">
<!-- 
          <div class="col-md-12">
            <div class="card card-danger">
              <div class="card-header back-ops-okp2p">
                <h3 class="card-title">Toolbox</h3>
              </div>
         
                <div class="card-body">
                </div>
            </div>
          </div> -->

          <!--/.col (right) -->
        </div>

        <div class ="row">
          <div class="col-md-12">
                  <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="tablelistproduct">

                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Order</b></h3>
                            </div>

                            <div class="card-body">
                                    <table id="listproduct" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Order Number</th>
                                                <th>Store</th>
                                                <th>Sales</th>
                                                <th>Total Qty</th>
                                                <th>Grand Total</th>
                                                <th>FEE</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($cart as $cart)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $cart->order_numb }}</td>
                                                <td>{{ $cart->store_name }}</td>
                                                <td>{{ $cart->GetUser->username }}</td> 
                                                
                                                <td>{{ $cart->sum_qty }}</td>
                                                <td style=" text-align: center;">$ {{ $cart->grand_total}} </td>   
                                                <td>${{$cart->grand_total * ($cart->percent /100)}} </td>                                        
                                                <td><a  target="_blank" href="{{url('report-order/'.$cart->order_numb.'/'.$cart->cus_name.'')}}" class="btn btn-warning btn-sm"><li class="fa fa-print"></li> Detail</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>

                        </div>

                    </div>


                    <!--/.col (left) -->

                </div>

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
    <!-- /.content -->

  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('footer.tag-footer')
</div>
@include('footer.footer')
</body>
</html>

@include('js.alert-toast')

@include('js.toast-info')


