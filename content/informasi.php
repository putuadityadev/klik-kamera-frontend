<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My HTML Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            padding: 20px;
        }
        .hero-section {
            background: url('asset/logo.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero-section">
            <div class="overlay p-4 text-white">
                <h1>Welcome to My Website</h1>
                <p class="lead">This is a sample HTML page using Bootstrap and Font Awesome</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-star"></i> Feature One</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-check-circle"></i> Feature Two</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-rocket"></i> Feature Three</h5>
                        <p class="card-text">Some quick example text to build on the card title.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
