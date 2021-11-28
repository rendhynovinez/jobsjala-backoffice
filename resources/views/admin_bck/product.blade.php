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
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
                    <a type='button' href="javascript:void(0)" class="btn btn-lg btn-danger" id="create-new-product"> <span><i class="fas fa-boxes"></i>  Add Product</span></a>
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
                    <div class="col-12" id="tablelistproduct">

                        <div class="card">
                            <div class="card-header bg-danger back-ops-okp2p">
                                <h3 class="card-title"><b>List Product </b></h3>
                            </div>

                            <div class="card-body">
                                    <table id="listproduct" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="display: none">ID</th>
                                                <th style="display: none">IMG</th>
                                                <th>Title</th>
                                                <th>Subtitle</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Updated At</th>
                                                <th style="display: none">Weight</th>
                                                <th style="display: none">Length</th>
                                                <th style="display: none">Height</th>
                                                <th style="display: none">Width</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="display: none">{{ $product->id }}</td>
                                                <td style="display: none">{{ $product->img }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->subtitle }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->updated_at }}</td>
                                                <td style="display: none">{{ $product->weight }}</td>
                                                <td style="display: none">{{ $product->length }}</td>
                                                <td style="display: none">{{ $product->height }}</td>
                                                <td style="display: none">{{ $product->width }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>

                        </div>

                    </div>
                      <!-- /.card-body -->

                      <!-- left column -->
                    <div class="col-md-4" id="detailproduct">
                        <div class="card card-danger">
                        <div class="card-header back-ops-okp2p">
                            <h3 class="card-title">Detail Product</h3>
                        </div>
                        <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="{{ route('product-edit') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="hidden" name="id" id="id">
                                    <!-- <div class="form-group">
                                        <label for="bg" class="col-sm-12 control-label">BG</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('bg') is-invalid @enderror" id="bg" name="bg" placeholder="Enter Bg" value="" maxlength="50" required="">
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="img" class="col-sm-12 control-label">Image</label>
                                        <div class="col-sm-12">
                                        <input type="file" id="img" name="img">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Subtitle</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" placeholder="Enter subtitle" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter subtitle" value="" required="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Price</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Enter price" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Weight</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" placeholder="Enter weight" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Length</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length" placeholder="Enter Length" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Height</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('height') is-invalid @enderror" id="height" name="height" placeholder="Enter Height" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Width</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('width') is-invalid @enderror" id="width" name="width" placeholder="Enter Width" value="" required="">
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
    <div class="modal fade" id="ajax-product-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="productCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal" method="POST"  enctype="multipart/form-data" action="{{ route('product-store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id">
                        <!-- <div class="form-group">
                                        <label for="bg" class="col-sm-12 control-label">BG</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('bg') is-invalid @enderror" id="bg" name="bg" placeholder="Enter Bg" value="" maxlength="50" required="">
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="img" class="col-sm-12 control-label">Image</label>
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img" placeholder="Enter img" value="" required=""> -->
                                            <input type="file" id="img" name="img">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Subtitle</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" placeholder="Enter subtitle" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter subtitle" value="" required="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Price</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Enter price" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Weight</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" placeholder="Enter weight" value="" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Length</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length" placeholder="Enter Length" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Height</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('height') is-invalid @enderror" id="height" name="height" placeholder="Enter Height" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-12 control-label">Width</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('width') is-invalid @enderror" id="width" name="width" placeholder="Enter Width" value="" required="">
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
        $('#detailproduct').hide()
        $('#toolreset').hide()
        $('#toolhapus').hide()
        document.getElementById("tablelistproduct").className = "col-md-12";

        table = $('#listproduct').DataTable();

        $('#listproduct tbody').on( 'click', 'tr', function () {
            debugger
            var dataproduct = table.row( this ).data()
            $('#detailproduct').show()
            $('#toolreset').show()
            $('#toolhapus').show()
            document.getElementById("tablelistproduct").className = "col-md-8";
            $('#id').val(dataproduct[1])
            $('#title').val(dataproduct[3])
            $('#subtitle').val(dataproduct[4])
            $('#description').val(dataproduct[5])
            $('#price').val(dataproduct[6])
            $('#weight').val(dataproduct[8])
            $('#length').val(dataproduct[9])
            $('#height').val(dataproduct[10])
            $('#width').val(dataproduct[11])
            
        } );

        $('#listproduct tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('row_selected') ) {
                $(this).removeClass('row_selected')

                $('#detailproduct').hide()
                $('#toolreset').hide()
                $('#toolhapus').hide()
                document.getElementById("tablelistproduct").className = "col-md-12";
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

        /*  When product click add Product button */
        $('#create-new-product').click(function () {
            $('#btn-save').val("create-product")
            $('#id').val('')
            $('#productForm').trigger("reset")
            $('#productCrudModal').html("Add Product Baru")
            $('#ajax-product-modal').modal('show')
        });
    });



</script>
