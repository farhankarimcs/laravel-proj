@extends('root')
@section('container')
<div class="col-12">
    @if ($message=Session::get('success'))
    <h4>{{$message}}</h4>
@endif
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add Task</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('task.store')}}" method="post">
        @csrf
        @method('POST')
      <div class="card-body">
      
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name">
            @if ($errors->has('name'))
            <div class="bg-danger color-palette">
                {{$errors->first('name')}}
            </div>
              @endif
          </div>

          <div class="form-group">
            <label for="description">Description</label>
<textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>            @if ($errors->has('description'))
<div class="bg-danger color-palette">
    {{$errors->first('description')}}
</div>
              @endif
          </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

</div>
  
@endsection