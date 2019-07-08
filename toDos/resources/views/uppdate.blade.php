@extends('layout')

@section('content')
<div class="row">
<div class="col-lg-6 col-lg-offset-2">
<form action="{{ route('todo.save',['id' => $todo->id] ) }}" method="post">
{{csrf_field()}}
<input type="text" class="form-control input-lg" placeholder="create a new to Do " name="todo" value="{{ $todo->todo }}">
<button class="btn btn-info"> update </button>
</form>
</div>
</div>
<br>
