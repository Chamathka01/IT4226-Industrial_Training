<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

     <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Poppins', sans-serif;
        }

        .container-box {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        table {
            border-radius: 10px;
            overflow: hidden;
        }

        .btn {
            border-radius: 10px;
        }
    </style>
</head>
<body>
   <div class="container mt-5">

    <div class="container-box">

        <div class="d-flex justify-content-between mb-4">
            <h3 class="font-weight-bold">All Users</h3>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>

        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->username }}</td>
                    <td>
                        @if($user->role == 'admin')
                            <span class="badge badge-danger">Admin</span>
                        @else
                            <span class="badge badge-primary">User</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>
</body>
</html>