<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskApp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class = "container"> 
    <div class="text-center">
    <h1>Daily Tasks</h1>  
        <div class="row">
            <div class="col-md-12">

            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach

                <form method="post" action="/saveTask" class="mb-4">
                <!--{{csrf_field()}}--> 
                @csrf   
                <input type = "text" class="form-control" name="task" placeholder="Enter your task here">  
                </br>    
                <input type="submit" class="btn btn-primary" value="SAVE">
                <input type="button" class="btn btn-warning" value="CLEAR">
                </form>

                <div class="mt-3">
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completeed</th>
                    
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>

                            <td>
                            @if($task->iscompleted)
                            <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning">Not Completed</button>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
</body>
</html>
