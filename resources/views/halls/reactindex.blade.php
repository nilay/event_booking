@extends('layouts.app')
@section('content')
	
<div class="container-narrow">
	<div class="row">
	<div class="col-mt-12">
		<div id="root">
		</div>
	</div>
	</div>
</div>	

<!-- Modal -->
<div id="book-stand-proceed" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Book Your Stand</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-default">Reserve</a>
      </div>
    </div>

  </div>
</div>


@endsection

@section('head_js')
	{{ Html::script('js/hall_map.jsx', ['type'=>'text/babel']) }}
@endsection

@section('additional_js')
<script>
//triggered when modal is about to be shown
$('#book-stand-proceed').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var standId = $(e.relatedTarget).data('stand-id');

    //set proceed booking url
    $(e.currentTarget).find('a').attr('href', '/events/'+standId + '/book');
});
</script>
@endsection
