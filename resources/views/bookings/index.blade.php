@extends('layouts.app')
@section('content')
	
<div class="container-narrow">
	<div class="row">
	<div class="col-mt-9">
		{!! Form::open(['url' => "events/$event_id/book", 'class' => 'form-horizontal']) !!}
		  <fieldset>
        	<legend>Book your stand</legend>
        	{!! Form::hidden('stand_id', $value=$stand_id) !!}
        	{!! Form::hidden('event_id', $value=$event_id) !!}
			
			<div class="form-group">
		    	{!! Form::label('email', 'Admin Email', ['class' => 'col-lg-3 control-label']) !!}
		    	<div class="col-lg-9">
		    		{!! Form::email('email', $value=null, ['class' => 'form-control']) !!}
		    	</div>
		    </div>	


			<div class="form-group">
		    	{!! Form::label('comapny_name', 'Comapny Name', ['class' => 'col-lg-3 control-label']) !!}
		    	<div class="col-lg-9">
		    		{!! Form::text('company_name', $value=null, ['class' => 'form-control']) !!}
		    	</div>
		    </div>	

			<div class="form-group">
		    	{!! Form::label('document', 'Marketing Document', ['class' => 'col-lg-3 control-label']) !!}
		    	<div class="col-lg-9">
		    		{!! Form::hidden('document') !!}
		    		<a class="btn btn-primary fp-button" data-fp-apikey="AOmmt9HQBSsY8jyctoK1Qz" data-fp-bucket="test" data-fp-store-path="test/" href="#">Upload Document</a>
		    		
		    		<span class="help-block"></span>
		    	</div>
		    </div>	


			<div class="form-group">
		    	{!! Form::label('logo', 'Upload Logo', ['class' => 'col-lg-3 control-label']) !!}
		    	<div class="col-lg-9">
		    		{!! Form::hidden('logo') !!}
		    		<a class="btn btn-primary fp-button" data-fp-apikey="AOmmt9HQBSsY8jyctoK1Qz" data-fp-bucket="test" data-fp-store-path="test/" href="#">Upload Logo</a>
		    		<span class="help-block"></span>
		    	</div>
		    </div>	


			<!-- Submit Button -->
	        <div class="form-group">
	            <div class="col-lg-10 col-lg-offset-2">
	                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
	            </div>
	        </div>



		  </fieldset>
		{!! Form::close() !!}
	</div>
	</div>
</div>	


<script type="text/javascript">
    (function(a){if(window.filepicker){return}var b=a.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===a.location.protocol?"https:":"http:")+"//api.filepicker.io/v2/filepicker.js";var c=a.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c);var d={};d._queue=[];var e="pick,pickMultiple,pickAndStore,read,write,writeUrl,export,convert,store,storeUrl,remove,stat,setKey,constructWidget,makeDropPane".split(",");var f=function(a,b){return function(){b.push([a,arguments])}};for(var g=0;g<e.length;g++){d[e[g]]=f(e[g],d._queue)}window.filepicker=d})(document);
</script>	

@endsection

@section('additional_js')
	{{ Html::script('js/file_picker.js') }}
@endsection

