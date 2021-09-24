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
      <a class="btn btn-primary mb-2" href="">Download All Orders</a>
      <div class="row">
          <div class="box">
            <div class="box-body">
          <table id="product_table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Customer Name</th>
                          <th>Shipping Address</th>
                          <th>Total Price</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                     <tbody>  
                          @foreach($order as $row)
                          @php
                          $shipping_info = json_decode($row->shiping_address, true); 
                          @endphp 
                         <tr>            
                         	<td>{{ 'ORD - ' .str_pad($row->order_row_id, 6, '0', STR_PAD_LEFT)  }}</td>

                             <td> {{ $shipping_info['name'].' '.$shipping_info['last_name'] }}</td>

                             <td>
                                <strong>Address: </strong> {{ $shipping_info['address'] }} <br> 
                                <strong>Mobile: </strong> {{ $shipping_info['phone_number'] }} <br> 
                                <strong>Email: </strong> {{ $shipping_info['email_address'] }}
                             </td>
                             <td><span>৳</span>{{ $row->total_price }}</td>

                             
                            <td>
                            <a href="{{ route('admin.orderdetails', $row->order_row_id) }}" class="btn btn-warning mb-2"> Details</a>
                            @if($row->order_status == 1)
                            <a href="{{ route('admin.orderapprove', $row->order_row_id) }}" class="btn btn-sucess mb-2"> Processing</a>
                            
                            @else
                            <a href="{{ route('admin.orderapprove', $row->order_row_id) }}" class="btn btn-warning mb-2"> Approve</a>
                             
                             @endif
                            @if($row->order_status == 2)
                            <a href="{{ route('admin.orderreject', $row->order_row_id) }}" class="btn btn-danger mb-2"> Rejected</a>
                            
                            @else
                            <a href="{{ route('admin.orderreject', $row->order_row_id) }}" class="btn btn-warning mb-2"> Reject</a>
                            
                            @endif
                            <button onclick="" class="btn btn-warning mb-2">Send SMS</button>
                              
                              <!-- <form id="" action="{{ url('/')}}/admin/product/{{$row->product_row_id}}" style="display: inline;" method="POST">
                                {{ method_field('DELETE') }}
                                @csrf 
                                <input class="btn btn-danger deleteLink" product_name="{{ $row->product_name }}" product_row_id="{{$row->product_row_id}}" data-toggle="modal" data-target="#modal-danger" deleteID="{{$row->product_row_id}}" value="Delete" style="width: 100px;">
                              </form> -->

                            </td>                         
                          </tr>
                        @endforeach
                    </tbody>
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