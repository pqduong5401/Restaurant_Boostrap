<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">
  <title>Admin</title>
</head>

<body>
  <header>
    <div class="container-fluid pt-5 fw-bold">
      <div class="row">
        <div class="col">
          <ul class="nav justify-content-center border-bottom border-bold">
            <li class="nav-item">
              <a class="nav-link " href="admin-home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin-categories.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-food.php">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin-order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Output</a>
            </li>

          </ul>
        </div>
      </div>

    </div>

  </header>
  <div class="bg-light">
  <div class="container-fluid mb-5">
      <div class="row">
        <div class="col">
          <h1 class="mt-5 mb-5">DashBoard</h1>
        </div>
      </div>
     
	<div class="row justify-content-between margin-inherit">
		<div class="col-md-3 bg-white text-center card text-board">
            <h2>4</h2>
            <p1>categories</p1>
		</div>
		<div class="col-md-3 bg-white text-center card text-board">
        <h2>6</h2>
            <p1>Foods</p1>
		</div>
		<div class="col-md-3 bg-white text-center card text-board">
        <h2>3</h2>
            <p1>Total Orders</p1>
		</div>
		<div class="col-md-3 bg-white text-center card text-board">
            <h2>$36.00</h2>
            <p1>Revenue Generated</p1>
		</div>
	</div>
</div>
      
    </div>
  </div>
    <div class="text-lazy py-1" style="background-color: #ff6b81; color :white;">
      All rights reserved. Designed By <a href="#" style="color: blue;"> PQD</a>
    </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>