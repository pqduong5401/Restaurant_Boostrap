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
    <div class=" bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="mt-5">Manager Category</h1>
            </div>
        </div>
        <button type="button" class="btn btn-primary mt-5 mb-5">Add Category</button>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col-1">S.N.</th>
                    <th scope="col-2">Tilte</th>
                    <th scope="col-2">Image</th>
                    <th scope="col-2">Featured</th>
                    <th scope="col-1">Active</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="border-style-none">
                <tr>
                    <th scope="row ">1</th>
                    <td >Pizza</td>
                    <td  class="p-0 col-2"><img src="Css/img/pizza.jpg" class = "img-admin"  ></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td> <a href="#" class=""><button type="button" class="btn btn-success">Update Category</button> </a> <a href="#"><button type="button" class="btn btn-danger">Delete Category</button> </a></td></td>
                    
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td >Burger</td>
                    <td  class="p-0 col-2"><img src="Css/img/burger.jpg" class = "img-admin"  ></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td> <a href="#"  class=""><button type="button" class="btn btn-success">Update Category</button> </a> <a href="#"><button type="button" class="btn btn-danger">Delete Category</button> </a></td></td>
                    
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td >Momo</td>
                    <td  class="p-0 col-2"><img src="Css/img/momo.jpg" class = "img-admin"  ></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td> <a href="#" class=""><button type="button" class="btn btn-success">Update Category</button> </a> <a href="#"><button type="button" class="btn btn-danger">Delete Category</button> </a></td></td>
                    
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td >Bún bò Huế full topping</td>
                    <td  class="p-0 col-2"><img src="Css/img/burger.jpg" class = "img-admin"  ></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td> <a href="#" class=""><button type="button" class="btn btn-success">Update Category</button> </a> <a href="#"><button type="button" class="btn btn-danger">Delete Category</button> </a></td></td>
                    
                </tr>

    </div>
</div>

    
    </tbody>
    </table>
    <div class="text-lazy py-1" style="background-color: #ff6b81; color :white;">
        All rights reserved. Designed By <a href="#" style="color: blue;"> PQD</a>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>