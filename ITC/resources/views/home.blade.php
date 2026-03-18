<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Poppins', sans-serif;
        }

        .home-card {
            border: none;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            background: white;
            text-align: center;
        }

        .btn {
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center h-100">

    <div class="home-card">

        <h2 class="font-weight-bold mb-3">Welcome 👋</h2>

        <p class="text-muted mb-4">
            You have successfully logged in as a User.
        </p>

        <a href="/logout" class="btn btn-danger">
            Logout
        </a>

    </div>

</div>

</body>
</html>