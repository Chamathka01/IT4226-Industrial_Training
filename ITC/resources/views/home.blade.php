<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #a0a0a0, #7a7a7a);
            font-family: 'Poppins', sans-serif;
        }

        .btn-logout {
            position: absolute;
            top: 20px;
            right: 20px;
            border-radius: 10px;
        }

        .dashboard-container {
            padding: 40px;
            position: relative;
        }

        .welcome-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .info-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
            transition: transform 0.2s;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .row.mb-4 {
            margin-bottom: 30px !important;
        }
    </style>
</head>

<body>

<div class="container dashboard-container">

    <!-- Welcome Card -->
    <div class="welcome-card mb-5">
        <h2 class="font-weight-bold mb-2">Welcome, {{ Session::get('user')->firstname }}!</h2>
        <p class="text-muted mb-3">
            This is your student dashboard. Here you can check your attendance, assignments, and upcoming exams.
        </p>
        <a href="/logout" class="btn btn-danger btn-logout">Logout</a>
    </div>

    <!-- Sample Attendance / Exam / Assignment -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="info-card">
                <h5>Attendance</h5>
                <h3>92%</h3>
                <p class="text-muted">Your current attendance</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="info-card">
                <h5>Upcoming Exams</h5>
                <h3>2</h3>
                <p class="text-muted">Exams scheduled this month</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="info-card">
                <h5>Pending Assignments</h5>
                <h3>3</h3>
                <p class="text-muted">Assignments due soon</p>
            </div>
        </div>
    </div>

        <!-- Extra Cards: Grades / Notifications / Schedule -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="info-card">
                <h5>Latest Grades</h5>
                <h3>A-</h3>
                <p class="text-muted">Your most recent exam grade</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="info-card">
                <h5>Notifications</h5>
                <h3>5</h3>
                <p class="text-muted">Unread messages</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="info-card">
                <h5>Class Schedule</h5>
                <h3>Mon - Fri</h3>
                <p class="text-muted">Your weekly timetable</p>
            </div>
        </div>
    </div>

</div>

</div>
</body>
</html>