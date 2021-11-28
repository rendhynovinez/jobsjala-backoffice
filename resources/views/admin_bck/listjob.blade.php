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
            <h1>Job</h1>
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
            <div class="card card-danger">
              <div class="card-header back-ops-okp2p">
                <h3 class="card-title">Toolbox</h3>
              </div>
                <div class="card-body">
                    <a type='button' href="javascript:void(0)" class="btn btn-lg btn-danger" id="create-new-job"> <span><i class="fas fa-list-alt "></i>  Posting</span></a>
                </div>
            </div>
          </div>
        </div>

        <div class ="row">
          <div class="col-md-12">
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="tablelistjob">
                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Data </b></h3>
                            </div>
                            <div class="card-body">
                                    <table id="listjob" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="display: none">ID</th>
                                                <th>Company</th>
                                                <th style="display: none">Salary</th>
                                                <th style="display: none">Title</th>
                                                <th>Post Description</th>
                                                <th style="display: none">Detail Description</th>
                                                <th style="display: none">Address</th>
                                                <th style="display: none"></th>
                                                <th>Status</th>
                                                <th style="display: none">Category</th>
                                                <th style="display: none">Requirement</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($listJob as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="display: none">{{ $data->id }}</td>
                                                <td>{{ $data->itemCompany }}</td>
                                                <td style="display: none">{{ $data->itemSalary }}</td>
                                                <td style="display: none">{{ $data->itemTitle }}</td>
                                                <td>{{ $data->itemPostDescription }}</td>
                                                <td style="display: none">{{ $data->ItemDetailDescription }}</td>
                                                <td style="display: none">{{ $data->itemAdress }}</td>
                                                <td style="display: none">{{ $data->itemStatus }}</td>
                                                <td>
                                                <?php
                                                    if ($data->itemStatus) {
                                                        echo '<h6><span class="badge badge-success">Enabled</span></h6>';
                                                    } else {
                                                        echo '<h6><span class="badge badge-danger">Disabled</span></h6>';
                                                    }
                                                ?></td>
                                                <td style="display: none">{{ $data->ItemCategory }}</td>
                                                <td style="display: none">{{ $data->ItemRequirements }}</td>
                                                <td >
                                                    <button type="button" class="btn btn-primary historyID" data-id="{{ $data->id }}">History</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4" id="detailjob">
                        <div class="card card-danger">
                        <div class="card-header back-ops-okp2p">
                            <h3 class="card-title">Detail job</h3>
                        </div>
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="{{ route('job-edit') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="hidden" name="id" id="id">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Company</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemCompany') is-invalid @enderror" id="itemCompany" name="itemCompany" placeholder="Enter title" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Salary</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemSalary') is-invalid @enderror" id="itemSalary" name="itemSalary" placeholder="Enter Salary" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemTitle') is-invalid @enderror" id="itemTitle" name="itemTitle" placeholder="Enter Title" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Post Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemPostDescription') is-invalid @enderror" id="itemPostDescription" name="itemPostDescription" placeholder="Enter Post Description" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Detail Description</label>
                                        <div class="col-sm-12">
                                            <textarea rows="3" cols="30" class="form-control @error('ItemDetailDescription') is-invalid @enderror" id="ItemDetailDescription" name="ItemDetailDescription" placeholder="Enter Detail Description" value="" required=""></textarea>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Address</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemAdress') is-invalid @enderror" id="itemAdress" name="itemAdress" placeholder="Enter Address" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="is_active" class="col-sm-12 control-label">Status</label>
                                        <div class="col-sm-12">
                                        <select id="itemStatus" name="itemStatus" class="form-control">
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

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Category</label>
                                        <div class="col-sm-12">
                                        <div class="col-sm-12">
                                            <select id="ItemCategory" name="ItemCategory" class="form-control @error('ItemCategory') is-invalid @enderror" id="ItemCategory" name="ItemCategory" placeholder="Enter Category" value="" required="">
                                                    <option value="">--- choose Category ---</option>
                                                    <option value="1">Accounting</option>
                                                    <option value="2">Human Resources</option>
                                                    <option value="3">Sales / Marketing</option>
                                                    <option value="4">Arts/Media/Communications</option>
                                                    <option value="5">Hotel / Restaurant</option>
                                                    <option value="6">Education / Training</option>
                                                    <option value="7">Computer/Information Technology/IT</option>
                                                    <option value="8">Technical</option>
                                                    <option value="9">Manufacture</option>
                                                    <option value="10">Building/Construction</option>
                                                    <option value="11">Sains</option>
                                                    <option value="12">Health services</option>
                                                    <option value="13">Others</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Requirement</label>
                                        <div class="col-sm-12">
                                            <textarea rows="50" cols="50" class="form-control @error('ItemRequirements') is-invalid @enderror" id="ItemRequirements" name="ItemRequirements" placeholder="Enter Requirement" value="" required=""></textarea>

                                        </div>
                                    </div>
              
                                    <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" value="create">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="jobCrudModal"></h4>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <form id="listjobForm" name="listjobForm" class="form-horizontal" method="POST"  enctype="multipart/form-data" action="{{ route('job-store') }}">
                        {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="id" id="id">
                                        <label for="title" class="col-sm-12 control-label">Company</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('itemCompany') is-invalid @enderror" id="itemCompany" name="itemCompany" placeholder="Enter Company" value="" required="">
                                            </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title" class="col-sm-12 control-label">Category</label>
                                        <div class="col-sm-12">
                                            <select id="ItemCategory" name="ItemCategory" class="form-control @error('ItemCategory') is-invalid @enderror" id="ItemCategory" name="ItemCategory" placeholder="Choose Category" value="" required="">
                                                    <option value="">--- choose Category ---</option>
                                                    <option value="1">Accounting</option>
                                                    <option value="2">Human Resources</option>
                                                    <option value="3">Sales / Marketing</option>
                                                    <option value="4">Arts/Media/Communications</option>
                                                    <option value="5">Hotel / Restaurant</option>
                                                    <option value="6">Education / Training</option>
                                                    <option value="7">Computer/Information Technology/IT</option>
                                                    <option value="8">Technical</option>
                                                    <option value="9">Manufacture</option>
                                                    <option value="10">Building/Construction</option>
                                                    <option value="11">Sains</option>
                                                    <option value="12">Health services</option>
                                                    <option value="13">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title" class="col-sm-12 control-label">Salary</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemSalary') is-invalid @enderror" id="itemSalary" name="itemSalary" placeholder="Enter Salary" value="" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title" class="col-sm-12 control-label">Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemTitle') is-invalid @enderror" id="itemTitle" name="itemTitle" placeholder="Enter Title" value="" required="">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title" class="col-sm-12 control-label">Post Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('itemPostDescription') is-invalid @enderror" id="itemPostDescription" name="itemPostDescription" placeholder="Enter Post Description" value="" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title" class="col-sm-12 control-label">Detail Description</label>
                                        <div class="col-sm-12">
                                            <textarea rows="3" cols="30" class="form-control @error('ItemDetailDescription') is-invalid @enderror" id="ItemDetailDescription" name="ItemDetailDescription" placeholder="Enter Detail Description" value="" required=""></textarea>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="title" class="col-sm-12 control-label">Address</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control @error('itemAdress') is-invalid @enderror" id="itemAdress" name="itemAdress" placeholder="Enter Address" value="" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="itemStatus" class="col-sm-12 control-label">Status</label>
                                            <div class="col-sm-12">
                                                <select id="itemStatus" name="itemStatus" class="form-control">
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
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title" class="col-sm-12 control-label">Requirement</label>
                                        <div class="col-sm-12">
                                        <textarea rows="10" cols="20" class="form-control @error('ItemRequirements') is-invalid @enderror" id="ItemRequirements" name="ItemRequirements" placeholder="Enter Requirement" value="" required=""></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
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
        document.getElementById("tablelistjob").className = "col-md-12";

        table = $('#listjob').DataTable();

        $('#listjob tbody').on( 'click', 'tr', function () {
            debugger
            var datajob = table.row( this ).data()
            $('#detailjob').show()
            $('#toolreset').show()
            $('#toolhapus').show()
            document.getElementById("tablelistjob").className = "col-md-8";
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

        $('#listjob tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('row_selected') ) {
                $(this).removeClass('row_selected')

                $('#detailjob').hide()
                $('#toolreset').hide()
                $('#toolhapus').hide()
                document.getElementById("tablelistjob").className = "col-md-12";
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
            $('#listjobForm').trigger("reset")
            $('#jobCrudModal').html("New Data Posting")
            $('#ajax-job-modal').modal('show')
        });

        $(document).on("click", ".historyID", function () {
            var ids = $(this).data('id');
            window.location.href = "job-list/incoming-job/"+ids;
         });

    });

</script>
