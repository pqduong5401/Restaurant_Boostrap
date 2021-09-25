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
  <nav class="navbar navbar-expand-md pb-5 navbar-light bg-light">
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
            <a class="nav-link active" href="#">Foods</a>
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
  
  <div class="col-12 foods-menu">
    <div class="row">
      <h2 class="text-center mt-5">Food Menu</h2>
    </div>
     
    <div class="row  justify-content-center">
      <div class="col-lg-4 col-11 d-flex card br-15 m-4" style="flex-direction: row;">
        <div class="food-menu-img mt-3">
          <img src="./Css/img/menu-momo.jpg" alt="" class="card-img-top br-15">
        </div>

        <div class="card-body">
          <h4>Dumpling Special</h4>
          <p class="card-text fs-5">$5.0</p>
          <p class="card-text fs-5">
            Chicken Dumpling with herbs from Mountains
          </p>

          <a href="order.php" class="btn btn-search btn-outline-success">Order Now</a>
        </div>
      </div>

      <div class="col-lg-4 col-11 d-flex card br-15 m-4" style="flex-direction: row;">
        <div class="food-menu-img mt-3">
          <img src="./Css/img/menu-burger.jpg" alt="" class="card-img-top br-15">
        </div>

        <div class="card-body">
          <h4>Best Burger</h4>
          <p class="card-text fs-5">$5.0</p>
          <p class="card-text fs-5">
            Burger with Ham, Pineapple and lots of Chesse
          </p>

          <a href="order.php" class="btn btn-search btn-outline-success">Order Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-11 d-flex card br-15 m-4" style="flex-direction: row;">
        <div class="food-menu-img mt-3">
          <img src="./Css/img/menu-momo.jpg" alt="" class="card-img-top br-15">
        </div>

        <div class="card-body">
          <h4>Sadeko Momo</h4>
          <p class="card-text fs-5">$6.0</p>
          <p class="card-text fs-5">
            Best Spicy Momo with Winter
          </p>

          <a href="order.php" class="btn btn-search btn-outline-success">Order Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-11 d-flex card br-15 m-4" style="flex-direction: row;">
        <div class="food-menu-img mt-3">
          <img src="./Css/img/menu-pizza.jpg" alt="" class="card-img-top br-15">
        </div>

        <div class="card-body">
          <h4>Mixed Pizza</h4>
          <p class="card-text fs-5">$10.0</p>
          <p class="card-text fs-5">
            Pizza with chiken, Ham , Buff , Mushroom and Vegetable
          </p>

          <a href="order.php" class="btn btn-search btn-outline-success">Order Now</a>
        </div>
        
      </div >
      <div class="col-lg-4 col-11 d-flex card br-15 m-4 float-left" style="flex-direction: row;">
        <div class="food-menu-img mt-3">
          <img src="./Css/img/menu-momo.jpg" alt="" class="card-img-top br-15">
        </div>

        <div class="card-body">
          <h4>Sadeko Momo</h4>
          <p class="card-text fs-5">$6.0</p>
          <p class="card-text fs-5">
            Best Spicy Momo with Winter
          </p>

          <a href="order.php" class="btn btn-search btn-outline-success">Order Now</a>
        </div>
      </div>
      <div class="col-lg-4 col-11 d-flex card br-15 m-4 float-left box-sceret" style="flex-direction: row; ">
      </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <a href="foods.php" class="nav justify-content-center mb-5 text-decoration-none" style="color: #ff6b81;">See All Foods</a>
          </div>
        </div>

      </div>
    
    </div>
   

  </div>

  </div>
  <div class="footer">
    <div class="container-footer pr-1 w-75 p-3">
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