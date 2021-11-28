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
            <h1>Group</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Group</li>
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
                    <div class="col-12" id="tablelistgroup">

                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Group </b></h3>
                            </div>
                            <div class="card-body">
                                    <table id="listgroup" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="display: none">ID</th>
                                                <th>GROUP NAME</th>
                                                <th>NUMBER PHONE</th>
                                                <th style="display: none">ID ACCESS</th>
                                                <th style="display: none">STATUS</th>
                                                <th>STATUS</th>
                                                <th>UPDATED AT</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($groups as $group)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="display: none">{{ $group->id }}</td>
                                                <td>{{ $group->username }}</td>
                                                <td>{{ $group->number_phone }}</td>
                                                <td style="display: none">{{ $group->is_active }}</td>
                                                <td><?php
                                                    if ($group->is_active) {
                                                        echo '<h6><span class="badge badge-success">Accept</span></h6>';
                                                    } else {
                                                        echo '<h6><span class="badge badge-danger">Ignore</span></h6>';
                                                    }
                                                ?></td>
                                                <td>{{ date('d M Y H:i:s', strtotime($group->updated_at)) }}</td>
                                                <td ><button type="button" class="btn btn-warning passingID" data-toggle="modal" data-id="{{ $group->id }}" data-target="#ajax-groups-modal">Edit</button>
                                                <button type="button" class="btn btn-primary detailID" data-id="{{ $group->id }}">Detail</button></td>
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
    <div class="modal fade" id="ajax-groups-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="groupsCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="groupsForm" name="groupsForm" class="form-horizontal" method="POST" action="{{ route('group-edit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="is_active" class="col-sm-12 control-label">Status</label>
                            <div class="col-sm-12">
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="">--- choose Status ---</option>
                                    <option value="1">Accept</option>
                                    <option value="0">Ignore</option>
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
        $('#detailgroup').hide()
        document.getElementById("tablelistgroup").className = "col-md-12";

        table = $('#listgroup').DataTable();

        $('#listgroup tbody').on( 'click', 'tr', function () {
            var datagroup = table.row( this ).data()
            $('#detailgroup').show()
            document.getElementById("tablelistgroup").className = "col-md-8";
            $(".modal-body #id").val( $('#id').val(datagroup[1]) );
        } );

  
                
    });
    $(document).on("click", ".passingID", function () {
            var ids = $(this).data('id');
            $(".modal-body #id").val( ids );
    });

    $(document).on("click", ".detailID", function () {
            var group_id = $(this).data('id');
            window.location.href = "groups-list/detail/"+group_id;
    });

    
    
   
</script>
