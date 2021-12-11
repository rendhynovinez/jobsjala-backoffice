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
            <h1>List of applicants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">job</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div id="download_pdf_data" class="container-fluid">
        <div class="row">
          <div class="col-md-12">

          </div>
        </div>

        <div class ="row">
          <div class="col-md-12">
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="tableincomingjob">
                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Users </b></h3>
                            </div>
                            <div class="card-body">
                                    <table id="incomingjob" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($UsersHistoryJob as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->Customer->username }}</td>
                                                <td>{{ $data->Customer->email }}</td>
                                                <td><?php
                                                    if ($data->status == 1) {
                                                        echo '<h6><span class="badge badge-success">Complete</span></h6>';
                                                    } elseif ($data->status == 2){
                                                        echo '<h6><span class="badge badge-warning">Interview</span></h6>';
                                                    }elseif ($data->status == 3){
                                                        echo '<h6><span class="badge badge-danger">Unsuitable</span></h6>';
                                                    }else{
                                                        echo '<h6><span class="badge badge-success">Done</span></h6>';
                                                    }
                                                ?></td>
                                                <td >
                                                <button type="button" class="btn btn-warning passingID" data-toggle="modal" data-id="{{ $data->id }}" data-target="#ajax-job-modal">Status</button>
                                                    <button type="button" class="btn btn-primary customersID" data-id="{{ $data->user_id }}">Detail</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4" id="detailjob">
                    </div>
                 </div>
                </div>
                </div>
            </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    {{-- MODALS --}}
    <div class="modal fade" id="ajax-job-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="jobCrudModal">
                        Candidate Status
                    </h4>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form id="incomingjobForm" name="incomingjobForm" class="form-horizontal" method="POST"  enctype="multipart/form-data" action="{{ route('incoming-job-edit') }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="job_id" id="job_id" value="{{$job_id}}">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="is_active" class="col-sm-12 control-label">Status</label>
                                        <div class="col-sm-12">
                                        <select id="itemStatus" name="itemStatus" class="form-control">
                                                <option value="">--- choose Status ---</option>
                                                <option value="1">On Review</option>
                                                <option value="2">Interview</option>
                                                <option value="3">Unsuitable</option>
                                                <option value="4">Complete</option>
                                        </select>
                                            @error('is_active')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
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
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  

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
        $('#detailjob').hide()
        $('#toolreset').hide()
        $('#toolhapus').hide()
        document.getElementById("tableincomingjob").className = "col-md-12";

        table = $('#incomingjob').DataTable();

        $('#incomingjob tbody').on( 'click', 'tr', function () {
            debugger
            var datajob = table.row( this ).data()
            $('#detailjob').show()
            $('#toolreset').show()
            $('#toolhapus').show()
            document.getElementById("tableincomingjob").className = "col-md-12";
            $('#id').val(datajob[1])
            $('#itemCompany').val(datajob[2])
            $('#itemSalary').val(datajob[3])
            $('#itemTitle').val(datajob[4])
            $('#itemPostDescription').val(datajob[5])
            $('#ItemDetailDescription').val(datajob[6])
            $('#itemAdress').val(datajob[7])
            $('#itemStatus').val(datajob[8])
            $('#ItemCategory').val(datajob[10])
            $('#ItemRequirements').val(datajob[11])
        } );

        $('#incomingjob tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('row_selected') ) {
                $(this).removeClass('row_selected')

                $('#detailjob').hide()
                $('#toolreset').hide()
                $('#toolhapus').hide()
                document.getElementById("tableincomingjob").className = "col-md-12";
                $('#id').val('')
                $('#name').val('')
                $('#email').val('')
                $('#permission').val('')
            }
            else {
                table.$('tr.row_selected').removeClass('row_selected');
                $(this).addClass('row_selected')
            }
        } );

        /*  When job click Post Job button */
        $('#create-new-job').click(function () {
            $('#btn-save').val("create-job")
            $('#id').val('')
            $('#incomingjobForm').trigger("reset")
            $('#jobCrudModal').html("New Data Posting")
            $('#ajax-job-modal').modal('show')
        });

        $(document).on("click", ".passingID", function () {
            var ids = $(this).data('id');
            $(".modal-body #id").val( ids );
    });

        $(document).on("click", ".customersID", function () {
            debugger
            var job_id = $(this).data('id');
            window.location.href = "detail-requirement/"+job_id;
         });

    });

</script>
