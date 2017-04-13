@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
	
@stop

@section('content')
<div class="col-md-12">
  <div class="col-md-12" >
      <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Search Room Availibity</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <!--  <form class="form-horizontal" action="reserve/searchRoom" method="POST"> -->
                 {{ csrf_field() }}
                  <div class="box-body">
                  <div class="well">
               
                    <div class="form-group ">
                          <label for="inputtext3" class="col-sm-2 control-label">Room Type</label>
                      <div class="col-sm-4">
                        
                              <select class="form-control" name="room_type" id="room_type">
                            <option >--Select--</option>
                            @foreach ($room_lists as $room_list)
                              <option value="{{ $room_list->id }}">{{ $room_list->room_type }}</option>
                            @endforeach
                          
                             
                            </select>
                      </div>
                     
                      <div class="col-sm-6">
                       <button  class="btn btn-info btn-lg" onclick="getRoom()">Search</button> 
                      </div>
                    </div>                
             
            
                 
                  </div><!-- /.box-body -->
                  <div class="box-footer">                    
                    
                    
                   
                  </div><!-- /.box-footer -->
              <!--   </form> -->
              </div><!-- /.box -->
    </div>
    <div class="col-md-12" id="result">
      <div class="box box-sucess">
           <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body" id="ajaxResponse">
              <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Room No.</th>
                <th>Room Type</th>
                <th>Room Price</th>
                <th>Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody >
           @foreach($room_lists as $room_list)
            <tr>
                <td>{{$room_list->room_no}}</td>
                 <td>{{$room_list->room_type}}</td>
                <td>{{$room_list->room_price}}</td>
                <td>Available</td>
                <td><button class="btn btn-xs btn-primary">Book</button></td>               
            
            </tr>
            @endforeach
        </tbody>
      
    </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
</div>
	
    
@stop 