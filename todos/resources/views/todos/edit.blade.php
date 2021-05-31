@extends("layouts.app")

@section("content")

	
		
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header">

				 Update Todos
			</div>
			<div class="card-body">
				@if ($errors->any())
    				<div class="alert alert-danger">
        				<ul>
	            			@foreach ($errors->all() as $error)
	                			<li>{{ $error }}</li>
	           				@endforeach
        				</ul>
    		</div>
@endif
				<form action="/todos/{{$todo->id}}/update-todos" method="POST">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Enter task name" value="{{$todo->name}}">
					</div>
					<div class="form-control">
						<textarea cols="5" rows="5" name="description" class="form-control" >{{$todo->description}}</textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Update Todo</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
	




@endsection
