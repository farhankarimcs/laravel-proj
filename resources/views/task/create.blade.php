<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
</head>
<body>
  @if ($message=Session::get('success'))
        <h4>{{$message}}</h4>
  @endif
    <form action="{{route('task.store')}}" method="post">
        @csrf
         @method('POST')
        <label for="name">Name</label>
        <input type="text" name="name"  id="name">
        @if ($errors->has('name'))
        {{$errors->first('name')}}
        @endif
        <br/>
        <label for="name">Description</label>
        <input type="text" name="description" id="description">
        <br/>
        @if ($errors->has('description'))
        {{$errors->first('description')}}
        @endif
        <br/>
        <label for="completed">Completed?</label>
        <select name="completed" id="completed">
            <option value=""></option>
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
        @if ($errors->has('completed'))
        {{$errors->first('completed')}}
        @endif
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>