@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justift-content-center">
        <div class="col-md-8">
        <h3>Create a Todo</h3>
            <form action="{{route('todos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" id="title" name="title" type="text" required>
                </div>
                <div class="form-group">
                    <label for="date">Due Date:</label>
                    <input class="form-control" id="date" name="due_date" type="date" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Todo</button>
            </form>
        </div>
    </div>
</div>
@endsection