@extends('root')
@section('container')

            <div class="col-12 table-responsive">
                
                <table class="table table-striped" border="2">
                    <tr>
                        <td><strong>ID</strong></td>
                        <td><strong>Name</strong></td>
                        <td><strong>Description</strong></td>
                        <td><strong>Completed</strong></td>
                        <td><strong>Actions</strong></td>
                    </tr>
                   
                 @forelse ($data as $item)
                 <tr>
                     <td>{{$item->id}}</td>
                     <td>{{$item->name}}</td>
                     <td>{{$item->description}}</td>
                     <td>
                         @if ($item->completed==1)
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                         @else
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                         @endif
                      
                    </td>
                     <td>
                         
                         
                         <form action="{{ route('task.destroy',$item->id) }}" method="post">
                             @method('DELETE')
                             @csrf
                             <a class="btn btn-success" href="{{ route('task.show',$item->id) }}">Show</a>
                         <a  class="btn btn-warning"href="{{ route('task.edit',$item->id) }}">Edit</a>
                      
                             <button class="btn btn-danger" type="submit">Delete</button>
                         </form>
                        
                     </td>
                 </tr>
                 @empty
                 <tr>
                     <td colspan="5" align="center"><strong>No Task found</strong></td>
                 </tr>
                @endforelse
             </table>
             {{$data->links('pagination::bootstrap-4')}}
            </div>

@endsection