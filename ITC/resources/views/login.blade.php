<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
    body {
        height: 100vh;
        background: linear-gradient(135deg, #667eea, #764ba2);
        font-family: 'Poppins', sans-serif;
    }

    .login-card {
        border: none;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .form-control {
        border-radius: 10px;
    }

    .btn-primary {
        border-radius: 10px;
        font-weight: 600;
    }
</style>

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center h-100">
    <div class="card login-card text-center" style="width: 350px;">
        
        <h3 class="font-weight-bold mb-2">Welcome Back</h3>
        <p class="text-muted mb-4">Login to continue</p>

        <form method="POST" action="{{route('login.check')}}">
            @csrf

            <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <p class="mt-3">
            Don't have an account? <a href="#">Register</a>
        </p>
    </div>

</div> 
</body>
</html>