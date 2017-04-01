@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
	
@stop

@section('content')
	<div class="col-md-12" >
			<!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Room Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('room.store') }}" method="POST">
                 {{ csrf_field() }}
                  <div class="box-body">
                  <div class="well">
                    <fieldset>
    					<legend>General Information</legend>
    				</fieldset>
                    <div class="form-group ">
                      <label for="inputtext3" class="col-sm-2 control-label">Room No.</label>
                      <div class="col-sm-4 {{ $errors->has('room_no') ? 'has-error' : '' }}">
                        <input type="text" class="form-control" name="room_no" placeholder="Room No">
                        <span class="text-danger">{{ $errors->first('room_no') }}</span>
                      </div>
                      <label for="inputtext3" class="col-sm-2 control-label">Room Type</label>
                      <div class="col-sm-4">
                        
                              <select class="form-control" id="room_type" name="room_type">
                            <option >--Select--</option>
                            @foreach ($room_lists as $room_list)
                              <option value="{{ $room_list->id }}">{{ $room_list->room_type }}</option>
                            @endforeach
                          
                             
                            </select>
                      </div>
                    </div>
                           <div class="form-group">
                      <label for="inputtext3" class="col-sm-2 control-label">Room Price</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="room_price" name="room_price" placeholder="Room Price" >
                      </div>
                      <label for="inputtext3" class="col-sm-2 control-label">Room Status</label>
                      <div class="col-sm-4">                      
                            
                            <select class="form-control" class="form-control" name="room_status" placeholder="Room Status">
                            <option >--Select--</option>
                              <option value="1">Available</option>
                              <option value="0">Reserved</option>
                             
                            </select>
                          
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

    
@stop 