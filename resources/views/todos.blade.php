@extends('layout')

@section('content')

<style type="text/css">

.todo-main {
    margin-top:10px;
}

</style>

<div class="container">


<h1>Todo app feat. Laravel</h1>
<p>created by - <a href="http://www.github.com/yashrajb">Yashraj basan</a></p>

 <div class="row">
        <div class="col-xl-12 col-lg-12">
                <form action="/create/todo" method="POST">
                    {{csrf_field ()}}
                    <input type="text" name="todo" class="form-control" placeholder="Work hard and get success"/>
                </form>
                

        </div>
    </div>

</div>
   
        <div class="todo-main">


            @foreach($todos as $todo)

            <p> 


                {{ $todo->todo }} <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">Delete</a>
            <a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-primary">Update</a>
            <a href="{{route('todo.complete',['id'=>$todo->id])}}">{{($todo->completed?"Completed :)" : "Uncompleted ")}}</a>



            </p>
           

                
            @endforeach
            

        </div>
                   
            

@stop