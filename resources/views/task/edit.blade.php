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
        @if ($errors->has('name'))
        {{$errors->first('name')}}
        @endif
        <label for="name">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">
            {{$task->description}}
        </textarea>
        @if ($errors->has('description'))
        {{$errors->first('description')}}
        @endif
        <br/>
        <label for="completed">Completed?</label>
        <select name="completed" id="completed">
            <option @if ($task->completed==0) selected @endif value="0">No</option>
            <option  @if ($task->completed==1) selected @endif  value="1">Yes</option>
        </select>
        @if ($errors->has('completed'))
        {{$errors->first('completed')}}
        @endif
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>