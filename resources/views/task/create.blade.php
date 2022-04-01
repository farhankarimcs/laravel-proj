<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
</head>
<body>
    <form action="/task" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br/>
        <label for="name">Description</label>
        <input type="text" name="description" id="description"><br/>
       <button type="submit">Submit</button>
    </form>
</body>
</html>