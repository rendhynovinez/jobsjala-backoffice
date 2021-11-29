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
            <h1>Users Apply</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Apply</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="download_pdf_data" class="container-fluid">
        <div class="row">
        </div>

        <div class ="row">
          <div class="col-md-12">
                  <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="tablelistcustomer">

                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Customer </b></h3>
                            </div>
                            <div class="card-body">
                                    <table id="listcustomer" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="display: none">ID</th>
                                                <th>NAME</th>
                                                <th>PHONE</th>
                                                <th style="display: none">ID ACCESS</th>
                                                <th style="display: none">STATUS</th>
                                                <th>STATUS</th>
                                                <th>UPDATED AT</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="display: none">{{ $customer->customer_id }}</td>
                                                <td>{{ $customer->fullname }}</td>
                                                <td>{{ $customer->phone_number }}</td>
                                                <td style="display: none">{{ $customer->is_active }}</td>
                                                <td><?php
                                                    if ($customer->is_active) {
                                                        echo '<h6><span class="badge badge-success">Enabled</span></h6>';
                                                    } else {
                                                        echo '<h6><span class="badge badge-danger">Disabled</span></h6>';
                                                    }
                                                ?></td>
                                                <td>{{ date('d M Y H:i:s', strtotime($customer->updated_at)) }}</td>
                                                <td ><button type="button" class="btn btn-warning passingID" data-toggle="modal" data-id="{{ $customer->customer_id }}" data-target="#ajax-customers-modal">Edit</button>
                                                <button type="button" class="btn btn-primary detailID" data-id="{{ $customer->customer_id }}">Detail</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">
                    </div>

                   </div>
                </div>
            </div>
        </div>
              <!-- /.container-fluid -->
            </section>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    {{-- MODALS --}}
    <div class="modal fade" id="ajax-customers-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="customersCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="customersForm" name="customersForm" class="form-horizontal" method="POST" action="{{ route('customer-edit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="is_active" class="col-sm-12 control-label">Status</label>
                            <div class="col-sm-12">
                                <select name="is_active" class="form-control">
                                    <option value="">--- choose Status ---</option>
                                    <option value="0">Disabled</option>
                                    <option value="1">Enabled</option>
                                </select>

                                @error('is_active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                         <button type="submit" class="btn btn-danger" id="btn-save" value="create">Add
                         </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<script>
    var table

    $(document).ready( function () {
        $('#detailcustomer').hide()
        document.getElementById("tablelistcustomer").className = "col-md-12";

        table = $('#listcustomer').DataTable();

        $('#listcustomer tbody').on( 'click', 'tr', function () {
            var datacustomer = table.row( this ).data()
            $('#detailcustomer').show()
            document.getElementById("tablelistcustomer").className = "col-md-8";
            $(".modal-body #id").val( $('#id').val(datacustomer[1]) );
        } );

  
                
    });
    $(document).on("click", ".passingID", function () {
            var ids = $(this).data('id');
            $(".modal-body #id").val( ids );
    });

    $(document).on("click", ".detailID", function () {
            var customer_id = $(this).data('id');
            window.location.href = "customers-list/detail/"+customer_id;
    });

    
    
   
</script>
