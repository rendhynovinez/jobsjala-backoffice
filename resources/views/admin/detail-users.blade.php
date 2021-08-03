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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Candidate details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header back-ops-okp2p">
            <h3 class="card-title" style="color:white;">Form data candidate from application</h3>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname"  value="{{$data->fullname}}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="text" class="form-control" id="dateofbirth" name="dateofbirth" value="{{$data->dateofbirth}}" disabled>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{$gender[$data->gender]}}" disabled>
                  </div>

                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{$data->phonenumber}}" disabled>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Etnics</label>
                    <input type="text" class="form-control" id="etnics" name="etnics" value="{{$Etnics}}" disabled>
                  </div>

                  <div class="form-group">
                    <label>Address</label>
                    <textarea rows="2" cols="20" class="form-control"  id="Address" name="Address" disabled>{{$data->address}}</textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Live In Area</label>
                    <input type="text" class="form-control" id="LiveInArea" name="LiveInArea" value="{{$LiveInArea}}" disabled>
                  </div>

                  <div class="form-group">
                    <label>Education</label>
                    <input type="text" class="form-control" id="Education" name="Education" value="{{$Education}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Organization</label>
                    <input type="text" class="form-control" id="Organization" name="Organization" value="{{$data->Organization}}" disabled>
                  </div>

                  <div class="form-group">
                    <label>Job Specialist</label>
                    <input type="text" class="form-control" id="JobSpecialist" name="JobSpecialist" value="{{$JobSpecialist}}" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <label>Skills</label>
                  <div class="form-group">
                    <textarea rows="6" cols="30" class="form-control"  id="Skills" name="Skills" disabled>{{$data->Skills}}</textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                @if($seg === 'incoming-job')
                  <div class="col-md-12">
                    <a type="button" href="{{ redirect()->getUrlGenerator()->previous()}}" class="btn btn-primary detailID" >Go Back</a>
                  </div>
                @else
                
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
            window.location.href = "detail-user-list/"+customer_id;
    });

    
    
   
</script>
