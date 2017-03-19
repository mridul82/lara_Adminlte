@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Customer Information</h1>
@stop

@section('content')


	
        <a href="{{ route('customer.create') }}"><button class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</button></a>
          <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>               
                <tr>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email/Username</th>
                  <th>City</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($customers as $customer)
                <tr>
                  <td>{{$customer->cust_firstname}} {{$customer->cust_lastname}}</td>
                  <td>{{$customer->cust_no}}</td>
                  <td>{{$customer->user_id}}</td>
                  <td> {{$customer->cust_city}}</td>
                  <td>{{$customer->created_at}}</td>
                  <td><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></button>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    
    </section>
    <!-- /.content -->
    
@stop 

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>