@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Room Information</h1>
@stop

@section('content')


	
       
          <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <a href="{{ route('room.create') }}"><button class="btn btn-primary" ><i class="fa fa-plus"></i> Add New</button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>               
                <tr>
                  <th>Room No.</th>
                  <th>Room Type</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($rooms as $room)
                <tr>
                  <td>{{$room->room_no}}</td>
                  <td>{{$room->room_type}}</td>
                  <td>Rs.{{$room->room_price}}</td>
                  <td>{{ $room->room_status == 1 ? "Available" : "Reserve" }}
                  </td>
                  
                  <td> <a href="{{ route('room.edit', $room->id) }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i>Edit</button></a>
                <a ><button class="btn btn-danger btn-xs" onclick="del($room->id)">
               <i class="fa fa-trash"></i>Delete </button></a>
                      {{Form::open(['class' => 'del-user-btn', 'method' => 'delete','route' => ['room.destroy', $room->id]])}}
                      
                            {{Form::close()}}
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
    
    <!-- Modal -->
      <div class="modal fade" id="user-confirm-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Are You Sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <button id="user-confirm-delete-btn" class="btn btn-danger btn-xs" >YES</button>
          

              
             
            <button class="btn btn-info btn-xs pull-right">NO</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    
@stop 

