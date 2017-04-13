


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
          @foreach($rooms as $room)
            <tr>
                <td width="10%">{{$room->room_no}}</td>
                 <td>{{$room->room_type}}</td>
                <td>{{$room->room_price}}</td>
                <td>Available</td>
                <td><button class="btn btn-xs btn-primary">Book</button></td>               
            
            </tr>
            @endforeach

        </tbody>
      
    </table>

   <script>
   $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );




</script>
          
     