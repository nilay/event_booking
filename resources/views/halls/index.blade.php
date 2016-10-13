@extends('layouts.app')
@section('content')
<div class='container'>
	<div class="row">
		<div class="col-md-12">
			<center><p>Select your store</p></center>
		</div>
	</div>
	<div class="row">

		 <div class="col-md-12">
		 	<table class="table-responsive table">
		 		<tbody>
		 		@for($i=1; $i<= $event->hall->cells_y; $i++)
		 			<tr>
		 				@for($j=1; $j <= $event->hall->cells_x; $j++ )
		 					@if($hall_map_data["$i$j"]["is_stand"])
		 						@if($hall_map_data["$i$j"]["is_booked"])
		 							<td class="booked-stand" data-stand-id='{{$hall_map_data["$i$j"]["stand_id"]}}'>
		 								<img src='{{$hall_map_data["$i$j"]["booking"]->logo_url}}' width="40"/>
		 							</td>
		 						@else
		 							<td class="vacant-stand cursor-hand" data-stand-id='{{$hall_map_data["$i$j"]["stand_id"]}}'  data-toggle="modal" data-target="#myModal"></td>
		 						@endif		
		 					@else
		 						<td></td>
		 					@endif	
		 				@endfor
		 			</tr>
		 		@endfor
		 		</tbody>
		 	</table>
		 </div>
	</div>
</div>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Stand</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-default" data-dismiss="modal">Reserve</a>
      </div>
    </div>

  </div>
</div>




@endsection
