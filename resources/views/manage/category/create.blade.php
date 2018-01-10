@extends('master')

@section('content')
 	<div class="col-md-12 items_content col-sm-12">
 		<div class="col-md-12 items_title">
 			Category
 		</div>
 		<div class="col-md-12 item_content_wrapper">
	 		{!! Form::open(['route' => 'category.store']) !!}
	           <div class="col-md-12">
	           		<div class="col-md-12{{ $errors->has('name' ? 'has-error' : '') }}">
	           			{!! Form::label('name', 'Name', ['class' => 'col-md-2']) !!}
	           			<div class="col-md-10">
	           				{!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
	                        @if($errors->has('name'))
	                        	<span class="help-block">
	                        		<div class="alert alert-danger">
	                        			{{ $errors->first('name') }}
	                        		</div>
	                        	</span>
	                        @endif
	           			</div>
	           		</div>
	           </div>
	            <div class="col-md-12" style="margin-top: 10px;">
	                <div class="form-group">
	                    <div class="col-md-2"></div>
	                    <div class="col-md-10 boats_btn">
	                        <button type="submit" class="btn btn-primary">Save Data</button>
	                    </div>
	                </div> 
	            </div>
	 		{!! Form::close() !!}
	 	</div>
 	</div>
@endsection