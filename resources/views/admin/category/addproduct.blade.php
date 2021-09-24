@extends('admin.layouts.admin_template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
	        <div class="col-md-12">
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Add New Product</h3>
	            </div>
	            <!-- form start -->
	    <form role="form" action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
	    @csrf
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
				<div class="form-group">
	                  <label for="product_name">Product Name</label>
	                  <input type="text"  class ="form-control" id="product_name" name="product_name" placeholder = "Enter product Name">
	                </div>
            </div>
              <!-- /.form-group -->
              	<div class="col-md-6">
					<div class="form-group">
	                  <label for="product_price">Product Price</label>
	                  <input type="number"  class ="form-control" id="product_price" name="product_price" placeholder = "Enter product price">
	                </div>
            	</div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->


			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="product_height">Product height</label>
						<input type="text"  class ="form-control" id="product_height" name="product_height" placeholder = "Enter Product height">
						</div>
				</div>
              	<div class="col-md-4">
					<div class="form-group">
	                  <label for="product_width">Product width</label>
	                  <input type="number"  class ="form-control" id="product_width" name="product_width" placeholder = "Enter Product width">
	                </div>
            	</div>
				<div class="col-md-4">
					<div class="form-group">
	                  <label for="product_weight">Product weight	</label>
	                  <input type="number"  class ="form-control" id="product_weight" name="product_weight" placeholder = "Enter product weight">
	                </div>
            	</div>
            </div>
            <!-- /.col -->



			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="category_row_id">Category row id </label>
						<input type="text"  class ="form-control" id="category_row_id" name="category_row_id" placeholder = "Enter category row id ">
						</div>
				</div>
              	<div class="col-md-3">
					<div class="form-group">
	                  <label for="product_sku">Product sku</label>
	                  <input type="number"  class ="form-control" id="product_sku" name="product_sku" placeholder = "Enter Product sku">
	                </div>
            	</div>
				<div class="col-md-3">
					<div class="form-group">
	                  <label for="exampleInputFile">Product Image</label>
	                  <input type="file" id="product_image" name="product_image">
	                  <p class="help-block"></p>
	                </div>
            	</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Is featured</label>
						<select class="form-control select2" style="width: 100%;">
						<option selected="selected">Yes</option>
						<option>No</option>
						</select>
					</div>
            	</div>
            </div>




			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="product_short_description">Product Short Description</label>
						<input type="text" style="height:120px; width:500px;" class ="form-control" id="product_short_description" name="product_short_description" placeholder = "Enter product short desrciption">
						</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="product_long_description">Product Long Description</label>
						<input type="text" style="height:120px; width:500px;" class ="form-control" id="product_long_description" name="product_long_description" placeholder = "Enter product long desrciption">
						</div>
				</div>
          </div>
	    </div>

       
      </div>
	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
		</form>
	          </div>
	      	</div>
  		</div>
	</section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection