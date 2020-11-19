@extends('layout.out')
 <input type="hidden" value="{{$i=0}}" name="">
@section('content')
<div  align="center" class="container ">
<h1><span class="badge badge-secondary">Todos</span></h1>
  <div class="container">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update the notes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-center" action="/index/upload" method="post" >
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Task</label>
    <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

  <div class="form-group">
 <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
		
	
</div>
<div class="container">
	<table class="table">
  <thead>

    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Task</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     
  		@foreach($data as $note)
      <input type="hidden" name="" value="{{$i++}}"> 
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$note->task}}</td>
      <td>{{$note->des}}</td>
      <td><a href="/edit/{{$note->id}}" class="btn btn-dark btn-sm"  >edit</a> <a class="btn btn-danger btn-sm" href="/delete/{{$note->id}}">delete</a></td>
     
        @if(!$note->completion)
         <td>
        <div class="form-group form-check">
    <input   type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><a href="/index/complete/{{$note->id}}" ><button type="submit"  class="btn btn-primary btn-sm">complete</button></a></label>
  </div>
</td>
@else
        <td>
        <div class="form-group form-check">
    <input   type="checkbox" class="form-check-input" id="exampleCheck1" checked>
    <label class="form-check-label" for="exampleCheck1"><a href="#" ><button type="submit"  class="btn btn-success btn-sm">completed</button></a></label>
  </div>
</td>
@endif
    </tr>
    @endforeach
  </tbody>

</table>
  <button class="btn btn-dark btn-sm col-md" data-toggle="modal" data-target="#exampleModal">
   <h4> create </h4>
  </button>
</div>
@endsection



