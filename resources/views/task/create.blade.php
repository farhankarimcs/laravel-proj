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
    <form enctype="multipart/form-data" action="{{route('task.store')}}" method="post">
        @csrf
        @method('POST')
      <div class="card-body">
      
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            @if ($errors->has('name'))
            <div class="bg-danger color-palette">
                {{$errors->first('name')}}
            </div>
              @endif
          </div>

          <div class="form-group">
            <label for="description">Description</label>
<textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>           
@if ($errors->has('description'))
<div class="bg-danger color-palette">
    {{$errors->first('description')}}
</div>
  @endif
          </div>

          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
            <div class="custom-file">
            <input type="file" name="img_path" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
            <span class="input-group-text">Upload</span>
            </div>
            </div>
            @if ($errors->has('img_path'))
            <div class="bg-danger color-palette">
                {{$errors->first('img_path')}}
            </div>
              @endif
            </div>


          <div class="form-group">
            <label>Select</label>
            <select class="form-control" name="completed">
            <option value=""></option>
            <option value="0">No</option>
            <option value="1">Yes</option>
            </select>
            @if ($errors->has('completed'))
            <div class="bg-danger color-palette">
                {{$errors->first('completed')}}
            </div>
              @endif
            </div>
           
      


     
</div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>

</div>
</form>

@endsection