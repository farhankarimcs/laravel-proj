<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <table border="2">
       <tr>
           <td>ID</td>
           <td>Name</td>
           <td>Description</td>
           <td>Completed</td>
           <td>Actions</td>
       </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->completed}}</td>
        <td>
            <a href="/task/{{$item->id}}">Show</a>
            <a>Edit</a>
            <a>Delete</a>
        </td>
    </tr>
   @endforeach
</table>
</body>
</html>