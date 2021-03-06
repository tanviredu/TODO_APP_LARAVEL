@extends("layouts.app")
@section("content")
<h1 class="text-center my-5">Todos application</h1>
    <div class="container justify-contant-center">
		
<div class="col-md-8 offset-md-2">
	<div class="card card-header">Todos</div>
	<div class="card-body">

		<ul class="list-group">
	 @foreach($todos as $todo)

	 		<li class="list-group-item" >
	 		{{ $todo->name}}
	 		<div class="float-right">
	 		<a href="/todos/{{$todo->id}}" class="btn btn-primary">view</a>

	 		@if(!$todo->completed)
	 		<a href="/todos/{{$todo->id}}/complete" class="btn btn-warning">completed</a>
	 		
	 		@endif

	 		</div>
	 		</li>
	 @endforeach

</ul>
		

	</div>

	
</div>	

</div>

@endsection