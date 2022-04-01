<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
</head>
<body>
    <form action="{{ route('task.update',$task->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name"  value="{{$task->name}}"  id="name"><br/>
        <label for="name">Description</label>
        <input type="text" value="{{$task->description}}" name="description" id="description"><br/>
       <button type="submit">Submit</button>
    </form>
</body>
</html>