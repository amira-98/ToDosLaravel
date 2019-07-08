@extends('layout')

@section('content')
<div class="row">
<div class="col-lg-6 col-lg-offset-2">
<form action="/create/todo" method="post">
{{csrf_field()}}
<input type="text" class="form-control input-lg" placeholder="create a new to Do " name="todo" >
<input type="submit" value="create" class="form-control"> 
</form>
</div>
</div>
<br>
@foreach($todos as $to)
{{ $to->todo}} <a href="{{ route('todo.delete',['id' => $to->id] ) }} " class="btn btn-danger"> X </a>
<a href="{{ route('todo.update',['id' => $to->id] ) }} " class="btn btn-success"> Modifier </a>
<hr>
@endforeach
@stop