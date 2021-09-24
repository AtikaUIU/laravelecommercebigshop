@extends('admin.layouts.admin_template')

@section('content')
<!-- Datatable -->
<!-- <script src="{{ asset('js/admin/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.dataTables.min.js') }}"></script> -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Order Management</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- button order details pdf -->
      <a class="btn btn-primary mb-2" href="{{ route('download_order_details', $order->order_row_id) }}">Download Orders Details</a>
      
      <div class="row">
          <div class="box">
            <div class="box-body">
          <table id="product_table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Unit Price</th>
                          <th>Qty</th>
                          <th>Total</th>
                        </tr>
                    </thead>
                     <tbody>  
                      <tr>
                        @foreach ( json_decode($order['order_details']) as $row)
                         <td>{{ $row->product_name }}</td>
                         <!-- <td>{{ $row->product_image }}</td> -->
                         <td>
                          <img src="{{ asset('uploads/products').'/'.$row->product_row_id.'/thumbnail/'.$row->product_image }} " width="100px"> </td>
                         <td>{{ $row->product_price }}</td>
                         <td>{{ $row->product_qty }}</td>
                         <td>{{ $row->product_total_price }}</td>
                         </tr>
                         
                        @endforeach

                    </tbody>
                    <tr>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td>Total</td>
                       <td>{{ $order->total_price }}</td>
                    </tr>
                </table>
            </div>
          </div>
      </div>
  </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
	      
          
  	</div>
	</section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection