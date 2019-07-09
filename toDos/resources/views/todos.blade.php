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
<table class="table table-striped">

@foreach($todos as $to)
<tr>
<td>

{{ $to->todo}}
</td>
<td>
 <a href="{{ route('todo.delete',['id' => $to->id] ) }} " class="btn btn-danger"> X </a>
 </td>
 <td>
<a href="{{ route('todo.update',['id' => $to->id] ) }} " class="btn btn-success"> Modifier </a>
<td>
@if($to->completed==0)
<td>
<a  href="{{ route('todo.completed',['id' => $to->id] ) }}"class="btn btn-xs btn-info"> completed </a>
<td>
@else
<td>
<span class="text-success">Completed !</span>
</td>
@endif
<hr>
</tr>
@endforeach
</table>
@endsection