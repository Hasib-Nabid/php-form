<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        .card {
            margin-top: 50px;
            max-width: 600px;
            width: 100%;
            border-radius: 0.5rem;
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

    <div class="card">
        <div class="card-header bg-success text-white">
            <h1>Welcome to the Student Portal</h1>
        </div>
        <div class="card-body">
            <p class="lead">Use the options below to efficiently manage student information and academic records.</p>
            <a href="registration.php" class="btn btn-primary btn-lg">Register New Student</a>
            <a href="info.php" class="btn btn-primary btn-lg">View Student Information</a>
        </div>
    </div>
    
</body>
</html>
