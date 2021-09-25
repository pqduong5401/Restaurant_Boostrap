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
                            <a class="nav-link " href="#">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>

    </header>
    <div class="bg-light">
        <div class="container-fluid ">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5 mb-5 fs-1">Manager Order</h1>
                </div>
            </div>
        </div>
    </div>
    <table class="table mb-5">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Food</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Total</th>
      <th scope="col">Order</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Customer</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mixed Pizza</td>
      <td>10.00</td>
      <td>2</td>
      <td>20.00</td>
      <td>2020-11-30 04:07:17</td>
      <td class="Deliverd">Delivered</td>
      <td>Jana Bush</td>
      <td>+1(562)101-2028</td>
      <td>Phamquangduong542001@gmail.com</td>
      <td>Thai Binh Viet Nam</td>
      
      <td><a href="#" class=" text-dark text-decoration-none fw-bold Update-order">Update Order</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mixed Pizza</td>
      <td>10.00</td>
      <td>2</td>
      <td>20.00</td>
      <td>2020-11-30 04:07:17</td>
      <td class="Deliverd">Delivered</td>
      <td>Jana Bush</td>
      <td>+1(562)101-2028</td>
      <td>Phamquangduong542001@gmail.com</td>
      <td>Thai Binh Viet Nam</td>
      
      <td><a href="#" class=" text-dark text-decoration-none  fw-bold Update-order">Update Order</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mixed Pizza</td>
      <td>10.00</td>
      <td>2</td>
      <td>20.00</td>
      <td>2020-11-30 04:07:17</td>
      <td  class="Cancelled">Cancelled</td>
      <td>Jana Bush</td>
      <td>+1(562)101-2028</td>
      <td>Phamquangduong542001@gmail.com</td>
      <td>Thai Binh Viet Nam</td>
      
      <td><a href="#" class=" text-dark text-decoration-none fw-bold Update-order">Update Order</a></td>
    </tr>
    
  </tbody>
</table>
    <div class="text-lazy py-1 " style="background-color: #ff6b81; color :white;">
        All rights reserved. Designed By <a href="#" style="color: blue;"> PQD</a>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>