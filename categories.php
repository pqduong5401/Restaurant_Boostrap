<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="Css/icons-1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Css/style.css">
    <title>Restaurant</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-md pb-5 navbar-light bg-light ">
        <div class="container-fluid">
            <div class="col-md-9">

                <img src="css/img/logo.png" alt="" class="nav-img">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="foods.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="row bg-search justify-content-around">

        <div class="col-md-6">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="nav justify-content-center mt-5 mb-5 ">Explore Foods</h1>
            </div>
        </div>

    </div>
    <div class="container-fluid ">
        <div class="row  mt-5 mb-5">
            <div class="col-md-4 position-relative">
                <img src="css/img/pizza.jpg" class=" img-fluid img-explore ">
                <a href="categories.php">
                    <p class="text-center mytext">Pizza</p>
                </a>

            </div>
            <div class="col-md-4 position-relative">
                <img src="css/img/burger.jpg" class=" img-fluid img-explore">
                <a href="categories.php">
                    <p class="text-center mytext">Burger</p>
                </a>
            </div>
            <div class="col-md-4 position-relative">
                <img src="css/img/momo.jpg" class=" img-fluid img-explore">
                <a href="categories.php">
                    <p class="text-center mytext">Momo</p>
                </a>
            </div>
        </div>
    </div>

    <div class="footer gt-4">
        <div class="container-footer pr-1 w-75 p-3 ">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-twitter"></i>
        </div>
        <div class="text-lazy">
            All rights reserved. Designed By <a href="#" style="color: #ff6b81;"> PQD</a>
        </div>
    </div>
</body>

</html>