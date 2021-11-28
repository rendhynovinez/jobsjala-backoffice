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
            <h1>Management Administrator</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Management Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="download_pdf_data" class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-12">
            <div class="card card-danger">
              <div class="card-header back-ops-okp2p">
                <h3 class="card-title">Toolbox</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                    <a type='button' href="javascript:void(0)" class="btn btn-lg btn-danger" id="create-new-users"> <span><i class="fas fa-user-plus"></i>  Add User</span></a>
                    <a id="toolreset" type='button' href="javascript:void(0)" class="btn btn-lg btn-primary" id="reset-password" onclick="resetpassword($('#id').val())"> <span><i class="fas fa-undo"></i>  Reset Password</span></a>
                    <!-- <a id="toolhapus" type='button' href="javascript:void(0)" class="btn btn-lg btn-primary" id="hapus-user" onclick="deleteuser($('#id').val())"> <span><i class="fas fa-trash-alt"></i>  Delete User</span></a> -->
                </div>
            </div>
          </div>

          <!--/.col (right) -->
        </div>

        <div class ="row">
          <div class="col-md-12">
                  <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="tablelistuser">

                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Users </b></h3>
                            </div>

                            <div class="card-body">
                                    <table id="listusers" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="display: none">ID</th>
                                                <th>FULL NAME</th>
                                                <th>EMAIL</th>
                                                <th>ACCESS</th>
                                                <th style="display: none">ID ACCESS</th>
                                                <th style="display: none">STATUS</th>
                                                <th>STATUS</th>
                                                <th>UPDATED AT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="display: none">{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $privilege[$user->permission] }}</td>
                                                <td style="display: none">{{ $user->permission }}</td>
                                                <td style="display: none">{{ $user->is_active }}</td>
                                                <td><?php
                                                    if ($user->is_active) {
                                                        echo '<h6><span class="badge badge-success">Enabled</span></h6>';
                                                    } else {
                                                        echo '<h6><span class="badge badge-danger">Disabled</span></h6>';
                                                    }
                                                ?></td>
                                                <td>{{ date('d M Y H:i:s', strtotime($user->updated_at)) }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>

                        </div>

                    </div>
                      <!-- /.card-body -->

                      <!-- left column -->
                    <div class="col-md-4" id="detailuser">
                        <div class="card card-danger">
                        <div class="card-header back-ops-okp2p">
                            <h3 class="card-title">Detail User</h3>
                        </div>
                        <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="{{ route('user-edit') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-12 control-label">Full Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-12 control-label">Email</label>
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Mail" value="" maxlength="50" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="permission" class="col-sm-12 control-label">Access</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="permission" name="permission" required autocomplete="permission">
                                            <option value="" disabled selected>--choose--</option>
                                            <option value="1">Admin</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_active" class="col-sm-12 control-label">Status</label>
                                        <div class="col-sm-12">
                                            <select id="is_active" name="is_active" class="form-control">
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
                                        <label for="password" style="color: #dc3545!important" class="col-sm-12 control-label"><i class="fas fa-unlock-alt"></i> Change Password? (optional)</label>
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control is-invalid @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password" value="" maxlength="50">
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" value="create">Edit</button>
                                    </div>
                                </form>
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

    {{-- MODALS --}}
    <div class="modal fade" id="ajax-users-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="usersCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="usersForm" name="usersForm" class="form-horizontal" method="POST" action="{{ route('user-store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-sm-12 control-label">Full Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ old('name') }}" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-12 control-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Mail" value="{{ old('email') }}" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="permission" class="col-sm-12 control-label">Access</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="permission" required autocomplete="permission">
                                    <option value="" disabled selected>--choose Access--</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                        </div>

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
        $('#detailuser').hide()
        $('#toolreset').hide()
        $('#toolhapus').hide()
        document.getElementById("tablelistuser").className = "col-md-12";

        table = $('#listusers').DataTable();

        $('#listusers tbody').on( 'click', 'tr', function () {
debugger
            var datauser = table.row( this ).data()
            $('#detailuser').show()
            $('#toolreset').show()
            $('#toolhapus').show()
            document.getElementById("tablelistuser").className = "col-md-8";
            $('#id').val(datauser[1])
            $('#name').val(datauser[2])
            $('#email').val(datauser[3])
            $('#permission').val(datauser[5])
            var res = datauser[8].replace("%", "");

        } );

        $('#listusers tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('row_selected') ) {
                $(this).removeClass('row_selected')

                $('#detailuser').hide()
                $('#toolreset').hide()
                $('#toolhapus').hide()
                document.getElementById("tablelistuser").className = "col-md-12";
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

        /*  When user click add user button */
        $('#create-new-users').click(function () {
            $('#btn-save').val("create-users")
            $('#id').val('')
            $('#usersForm').trigger("reset")
            $('#usersCrudModal').html("Add User")
            $('#ajax-users-modal').modal('show')
        });
    });

    function deleteuser(id)
    {
        var uid = $('#uid').val()
        if (id == uid) {
            rejectdelete()
        } else {
            fixdelete(id)
        }
    }

    function fixdelete(id)
    {
        var name = $('#name').val()
        var email = $('#email').val()
        Swal.fire({
            title: 'Are you sure you are deleting this data?',
            html:
            "Nama : <b>"+name+"</b> </br> " +
            "Email : <b>"+email+"</b> </br>  </br> " +
            "You won't be able to return this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "users-list/delete/"+id,
                    success: function (data) {
                        Swal.fire(
                            'Deleted!',
                            'User data has been successfully deleted',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                location.reload()
                            }
                        })
                    },
                    error: function (data) {
                        Swal.fire(
                            'Error!',
                            'Failed to delete user data',
                            'error'
                        )
                        console.log('Error:', data);
                    }
                });
            }
        })
    }

    function rejectdelete()
    {
        Swal.fire(
            'Error!',
            'Cant delete your own account!',
            'error'
        )
    }

    function resetpassword(id)
    {
        var name = $('#name').val()
        var email = $('#email').val()
        Swal.fire({
            title: 'Reset the password for this data?',
            html:
            "Name : <b>"+name+"</b> </br> " +
            "Email : <b>"+email+"</b> </br>  </br> " +
            "Password to default!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, reset it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "users-list/resetpassword/"+id,
                    success: function (data) {
                        Swal.fire(
                            'Reset successfully!',
                            'User password has been successfully reset',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                location.reload()
                            }
                        })
                    },
                    error: function (data) {
                        Swal.fire(
                            'Error!',
                            'Failed to reset user password',
                            'error'
                        )
                        console.log('Error:', data);
                    }
                });
            }
        })
    }

</script>
