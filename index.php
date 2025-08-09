<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 0;
            background-color: #f8f9fa;
        }
        .main-content {
            margin-top: 50px;
            max-width: 900px;
            width: 100%;
        }
        .main-content .card {
            border-radius: 8px;
        }
        .grid-item-content {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px; 
            padding: 24px; 
            margin-bottom: 16px; 
            text-align: center;
        }
        .grid-item-content h5 {
            color: #0d6efd;
            margin-bottom: 12px; 
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Connect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h1>Welcome to the Student Portal</h1>
                    </div>
                    <div class="card-body">
                        <p class="lead">Use the options below to efficiently manage student information and academic records.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4 d-flex flex-column">
                <div class="grid-item-content flex-grow-1">
                    <h5>New to our university?</h5>
                    <p>Start your academic journey by creating a new student account and enrolling in your first courses.</p>
                </div>
                <a href="registration.php" class="btn btn-primary btn-lg w-100 mt-auto">Register New Student</a>
            </div>
            <div class="col-4 d-flex flex-column">
                <div class="grid-item-content flex-grow-1">
                    <h5>Already a student?</h5>
                    <p>Access your personal details, academic transcripts, and enrollment history.</p>
                </div>
                <a href="info.php" class="btn btn-primary btn-lg w-100 mt-auto">View Student Information</a>
            </div>
            <div class="col-4 d-flex flex-column">
                <div class="grid-item-content flex-grow-1">
                    <h5>Explore our programs!</h5>
                    <p>Browse our comprehensive catalog of courses and find the perfect fit for your studies.</p>
                </div>
                <a href="#" class="btn btn-primary btn-lg w-100 mt-auto">View Courses</a>
            </div>
        </div>
    </div>
    
</body>
</html>

