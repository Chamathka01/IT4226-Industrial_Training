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
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #a0a0a0, #7a7a7a);
        font-family: 'Poppins', sans-serif;
        margin: 0;
    }

    .login-card {
        border: none;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
            background-color: #fff;
            width: 100%;
            max-width: 450px;
    }

    .form-control {
        border-radius: 10px;
        height: 50px;
        margin-bottom: 20px;
    }

    .btn-primary {
        border-radius: 10px;
        font-weight: 600;
        height: 50px;
        font-size: 1.1rem;
        margin-top: 10px;
    }    

    h3 {
            font-size: 2rem; 
    }
</style>

</head>
<body>
    <div class="card login-card text-center">
        
        <h3 class="font-weight-bold mb-2">Welcome Back</h3>
        <p class="text-muted mb-4">Login to continue</p>

        <form method="POST" action="{{route('login.check')}}">
            @csrf

            <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <div class="mt-4">
            <p class="mb-0">Don't have an account? <a href="/">Register</a></p>
    </div>

</div> 
</body>
</html>