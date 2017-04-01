@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Room Price Information</h1>
@stop

@section('content')


	
       
          <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6" >
      <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Enter Room Price Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('price.store') }}" method="POST">
                 {{ csrf_field() }}
                  <div class="box-body">
                  <div class="well">
                    <fieldset>
             
            </fieldset>
                    <div class="form-group ">
                      
                      <label for="inputtext3" class="col-sm-3 control-label">Room Type</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="room_type" placeholder="Room Type">
                      </div>
                    </div>
                           <div class="form-group">
                      <label for="inputtext3" class="col-sm-3 control-label">Room Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="room_price" placeholder="Room Price">
                      </div>
                     
                    </div>
                     
                    </div>
                    
                 
                  </div><!-- /.box-body -->
                  <div class="box-footer">                    
                    <button type="submit" class="btn btn-info btn-xs">Save</button> 
                    
                    <button  class="btn btn-success btn-xs">Reset</button>

                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
    </div>
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              View Room Price Information
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>               
                <tr>
                 
                  <th>Room Type</th>
                  <th>Price</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($room_prices as $room_price)
                <tr>
                
                  <td>{{$room_price->room_type}}</td>
                  <td>Rs.{{$room_price->room_price}}</td>
                  
                  
                  <td> <a href="{{ route('price.edit', $room_price->id) }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i>Edit</button></a>
                
                </td>
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

