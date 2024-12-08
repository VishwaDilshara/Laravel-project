<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>NoLimits.lk</title>
    <style>
        .custom-navbar {
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand img {
            transition: transform 0.3s ease;
        }
        .navbar-brand img:hover {
            transform: scale(1.05);
        }
        .nav-link {
            font-weight: 500;
            color: #333 !important;
            padding: 0.5rem 1rem !important;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff !important;
        }
        .search-form {
            position: relative;
        }
        .search-form .form-control {
            border-radius: 20px;
            padding-right: 40px;
        }
        .search-form .btn {
            border-radius: 20px;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="NoLimits.lk Logo" height="70" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gift Ideas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Today Deals</a>
                    </li>
                </ul>
                <form class="d-flex me-3 search-form">
                    <input class="form-control" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-outline-primary">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1> hello vishwa!</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>