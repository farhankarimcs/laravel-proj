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
        </tr>
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->completed}}</td>
        
    </tr>
</table>
</body>
</html>