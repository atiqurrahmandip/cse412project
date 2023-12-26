<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <title>admin dashboard</title>
        <link rel="stylesheet" href="../style.css">
        <link href="style.css" rel="stylesheet">

    </head>
    <body>
        
        <div class="container-xxl position-relative bg-white d-flex p-0">
            
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a  class="navbar-brand mx-4 mb-3"><h3 class="text-primary">Admin</h3></a>
                    <div class="navbar-nav w-100">
                        <a  class="nav-item nav-link active"    href="dashboard.php"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a class="nav-item nav-link"            href="productShow.php"><i class="fa fa-th me-2"></i>Product</a>
                        <a class="nav-item nav-link"     href="productAdd.php"><i class="fa fa-keyboard me-2"></i>Add product</a>
                        <a class="nav-item nav-link"     href="customerShow.php">
                        <a class="nav-item nav-link"     href="adminShow.php">
                            <i>
                               <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                            </i>Customer
                        </a>
                        <a  class="nav-item nav-link">
                            <i>
                              <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path opacity="1" fill="#1E3050" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                            </i>Admin
                        </a>
                        <a class="nav-item nav-link " href="orderShow.php"><i class="fa fa-tachometer-alt me-2"></i>Orders</a>

                    </div>
                </nav>
            </div>
       
            <div class="content  d-block">
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a class="navbar-brand d-flex d-lg-none me-4"><h2 class="text-primary mb-0">Admin</h2></a>
                    <a class="sidebar-toggler flex-shrink-0"   style="text-decoration:none;  font-size:30px; margin-left: 10px;"><i class="fa fa-bars"></i></a>
                    
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="d-none d-lg-inline-flex">My Profile</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a  class="dropdown-item"  href="../login.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </nav>







                <div class="container"  id="showProduct"  >
                    <div class="col-lg-12"><br><br>
                    <h1 class="text-warning text-center"> Product </h1><br>
                    
                    <table id="tabledata" class="table table-striped table-hover table-bordered">
                        <tr class="bg-dark text-white text-center">
                            <th> Id </th>
                            <th> Image </th>
                            <th> Title </th>
                            <th> Price</th>
                            <th> Delete </th>
                            <th> Update </th>
                        </tr>
                        
                        
                        <?php

                            @include '../connection.php';
                            
                            $sql = "select * from product ";
                            $query = mysqli_query($conn, $sql);
                            
                            while ($res = mysqli_fetch_array($query)) {
                                ?>
                                <tr class="text-center">
                                    <td> <?php echo $res['product_id'];  ?> </td>
                                    <td><img  style="width:60px; height:70px"   src="./store_image/<?php echo $res['image']; ?>" class="card-img-top" alt="Image"></td>                                   
                                    <td> <?php echo $res['title'];  ?> </td>
                                    <td> <?php echo $res['price'];  ?> </td>
                                    

                                    <td>
                                        <form
                                            action="deleteProduct.php"
                                            method="post"
                                            enctype="multipart/form-data"
                                            onsubmit="return confirm('Are you sure you want to delete this product?');">
        
                                            <input type="hidden" name="product_id" value="<?php echo $res['product_id']; ?>">
                                            <button type="submit"  class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="updateProduct.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="product_id" value="<?php echo $res['product_id']; ?>">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
                                        </form>
                                        
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">            
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update product</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                
                                                    <div class="modal-body">
                                                        <form action="updateProduct.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="product_id" value="<?php echo $res['product_id']; ?>">

                      
                                                            <label for="title" class="float-start">Product Title:</label>
                                                            <input type="text" name="title" id="title" class="form-control" value="<?php echo $res['title']; ?>" required>

                      
                                                            <label for="price"  class="float-start">Product Price:</label>
                                                            <input type="number" name="price" id="price" placeholder="Product Price..." step="0.01" value="<?php echo $res['price']; ?>" required>

                       
                       
                                                            <label for="uploadfile"  class="class="float-start"">Upload Product Image:</label>
                                                            <input type="file" class="form-control" name="uploadfile" id="uploadfile" accept="image/*">

                        
                                                            <img src="./store_image/<?php echo $res['image']; ?>" alt="Current Image" style="width: 100px; height: 100px;">
                    
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                    
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" onclick="updateProduct()">Save changes</button>
                                                </div>
            
                                            </div>
        
                                        </div>
    
                                    </div>
                                    <script>
                                        function updateProduct() {
            
                                            document.getElementById("exampleModal").querySelector("form").submit();
        
                                        }
                                    </script>
                                    </td>

                                </tr>
                            <?php
                            }
                        ?>
                    </table>
                    </div>
                </div>

        </div>  
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>

</html>