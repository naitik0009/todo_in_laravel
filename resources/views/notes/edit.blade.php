@extends('layout.out')
@section('content')

<div class="container text-center col-md">
 <form class="text-center" action="/index/update/{{$data->id}}" method="post" >
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Task</label>
    <input type="text" name="task" value="{{$data->task}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

  <div class="form-group">
 <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3" required>{{$data->des}}</textarea>
</div>

<button type="submit" class="btn btn-warning">update</button>
</form>
</div>


@endsection