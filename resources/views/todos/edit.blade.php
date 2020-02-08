@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justift-content-center">
        <div class="col-md-8">
        <h3>Edit Todo</h3>
            <form action="{{route('todos.update', ['todo'=>$todo->id])}}" method="POST">
            @csrf
            @method('put')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" id="title" type="text" value="{{$todo->title}}"  name="title" required>
                </div>
                <div class="form-group">
                    <label for="date">Due Date:</label>
                    <input class="form-control" id="date" type="date" value="{{$todo->due_date}}" name="due_date"  required>
                </div>
                <button type="submit" class="btn btn-secondary">Edit Todo</button>
            </form>
        </div>
    </div>
</div>
@endsection