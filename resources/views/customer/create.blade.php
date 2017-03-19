@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
	
@stop

@section('content')
	<div class="col-md-12" >
			<!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Customer Information</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('customer.store') }}" method="POST">
                 {{ csrf_field() }}
                  <div class="box-body">
                  <div class="well">
                    <fieldset>
    					<legend>General Information</legend>
    				</fieldset>
                    <div class="form-group">
                      <label for="inputtext3" class="col-sm-2 control-label">First Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="cust_firstname" placeholder="First Name">
                      </div>
                      <label for="inputtext3" class="col-sm-2 control-label">Last Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="cust_lastname" placeholder="Last Name">
                      </div>
                    </div>
                           <div class="form-group">
                      <label for="inputtext3" class="col-sm-2 control-label">Email/ Username</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="user_id" placeholder="Email/ Username">
                      </div>
                      <label for="inputtext3" class="col-sm-2 control-label">Mobile No.</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="cust_no" placeholder="Mobile No.">
                      </div>
                    </div>
                     
                    </div>
                    <div class="well">
                    <fieldset>
    					<legend>Address</legend>
    				</fieldset>
            	   	<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Loaclity</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="cust_loc" placeholder="Loaclity">
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">City</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="cust_city" placeholder="City">
                      </div>
                      <label for="inputPassword3" class="col-sm-2 control-label">State</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="cust_state" placeholder="State">
                      </div>
                	</div>
                    </div>
                 
                  </div><!-- /.box-body -->
                  <div class="box-footer">                    
                    <button type="submit" class="btn btn-info btn-xs">Save</button> 
                    
                    <button  class="btn btn-success btn-xs">Reset</button>
                    <button type="submit" class="btn btn-warning btn-xs pull-right">Add Additional Info</button>

                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
		</div>

    
@stop 