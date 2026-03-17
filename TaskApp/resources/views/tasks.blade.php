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
                <form method="post" action="/saveTask">
                <!--{{csrf_field()}}-->> 
                @csrf   
                <input type = "text" class="form-control" name="task" placeholder="Enter your task here">  
                </br>    
                <input type="submit" class="btn btn-primary" value="SAVE">
                <input type="button" class="btn btn-warning" value="CLEAR">
                </form>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completeed</th>
                    <tr>
                        <td>1</td>
                        <td>I have to Learn Laravel Today</td>
                        <td>Not Yet</td>
                    </tr>
            </div>
</body>
</html>
