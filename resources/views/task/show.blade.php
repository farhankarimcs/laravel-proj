
@extends('root')
@section('container')
 <div class=" "  >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">ID:: <strong>{{$data->id}}</strong></h5>
              {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <div class="row col-md-6">
                  <div class="row col-4"><p>Name</p></div>
                  <div class="col-md-8"><strong>{{$data->name}}</strong></div>
                </div>

                <div class="row col-md-6">
                  <div class="row col-4"><p>Description</p></div>
                  <div class="col-md-8"><strong>{{$data->description}}</strong></div>
                </div>

                <div class="row col-md-6">
                 <div class="row col-4"><p>Completed</p></div>
                  <div class="col-md-8"><strong>{{$data->completed}}</strong></div>
                </div> 


                <div class="modal-footer">
                 <form action="{{route('task.index')}}">
                <button type="submit" class="btn btn-secondary">Back</button>
              </form>
              <form action="{{route('task.edit',$data->id)}}">
                <button type="submit" class="btn btn-primary">Edit Record</button>
              </form>
            </div>
          </div>
        </div>
      </div> 
@endsection
