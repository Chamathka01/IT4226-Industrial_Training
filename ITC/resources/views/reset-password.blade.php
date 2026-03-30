<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center" style="height:100vh; background:#ccc;">

<div class="card p-4" style="width:400px;">
    <h4 class="text-center mb-3">Reset Password</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('password.reset') }}">
        @csrf

        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
        <input type="text" name="code" class="form-control mb-2" placeholder="Reset Code" required>

        <input type="password" name="password" class="form-control mb-2" placeholder="New Password" required>
        <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Confirm Password" required>

        <button class="btn btn-success btn-block">Reset Password</button>
    </form>
</div>

</body>
</html>
