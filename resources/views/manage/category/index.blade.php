@extends('master')

@section('content')
	@include('manage.category.search')
	<div class="col-md-12 items_content">
		<div class="col-md-12 items_title">
			Category
		</div>
		<div class="col-md-12 item_content_wrapper">
			<div class="col-md-12" style="margin-bottom: 10px; padding-right: 0px; padding-left: 0px;">
				@include('partials.flashmessage')
			</div>
			<table class="table">
				<thead>
					<tr class="table_header">
						<th class="data_header">Name</th>
						<th class="data_header">Action</th>
					</tr>
				</thead>
				<tbody>
					@if(!$categorys->isEmpty())
						@foreach($categorys as $category)
							<tr>
								<td>{{ $category->name }}</td>
								<td>
			                        <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="btn btn-success">
			                        	Edit
			                        </a>
			                        {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'DELETE', 'style' => 'display:inline;']) !!}
			                        	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			                        {!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					@else
					   <div class="col-md-12 alert alert-danger">
					   	Data empty
					   </div>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@endsection