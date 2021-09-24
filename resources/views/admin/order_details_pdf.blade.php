<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>All Oder Details</h2>

                <table >
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
                         <td>{{ $row->product_image }}</td>
                         <!-- <td
                         <!- <td> -->

                        <!-- <td> <img src="{{ public_path('uploads/products').'/'.$row->product_row_id.'/thumbnail/'.$row->product_image }} " width="50px" height="50px"> </td> -->
                        <!-- <td align="center">
                        @php
                        echo $row->product_image;
                        @endphp
                      </td> -->
                            <!-- @if($row->product_image != null)
                            <img src="#" alt="" width="80px">
                            @else
                            <img src="#" alt="" width="50px" height="50px">
                            @endif
                            </td> -->
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

</body>
</html>
