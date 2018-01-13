@extends('layout')



@section('content')


 <div class="container">

	<div class="container">

		<form action="{{ route('todo.Save',['id' => $todo->id]) }}" method="post">

			{{csrf_field()}}

			<input type="text" name="todo" value="{{ $todo->todo }}" placeholder="update it...."/>

		</form>

	</div>

</div>





@stop