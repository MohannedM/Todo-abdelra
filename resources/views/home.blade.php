@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Your Todos</h3></div>
                <div class="card-body">
                <a href="{{route('todos.create')}}" class="btn btn-primary">Add a todo</a>
                    <ul class="list-group">
                    @foreach(Auth::user()->todos as $todo)
                        <li class="list-group-item">{{$todo->title}} - Due: {{$todo->due_date}} <br> <a href="{{route('todos.edit', ['todo'=>$todo->id])}}" class="btn btn-secondary">Edit</a> <form action="{{route('todos.destroy', ['todo'=>$todo->id])}}" method="POST"> @csrf @method('delete')  <button type="submit" href="" class="btn btn-danger">Delete</button></form> </li>
                    @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
