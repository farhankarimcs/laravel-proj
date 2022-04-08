
@extends('root')
@section('container')
<div class="col-12">
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Completed</td>
        </tr>
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->completed}}</td>
        
    </tr>
</table>
</div>

@endsection