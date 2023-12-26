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
                <a class="navbar-brand mx-4 mb-3"><h3 class="text-primary">Admin</h3></a>
                <div class="navbar-nav w-100">
                    <a class="nav-item nav-link active" href="dashboard.php"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a class="nav-item nav-link" href="productShow.php"><i class="fa fa-th me-2"></i>Product</a>
                    <a class="nav-item nav-link" href="productAdd.php"><i class="fa fa-keyboard me-2"></i>Add product</a>
                    <a class="nav-item nav-link" href="customerShow.php">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                             
                            </svg>
                        </i>Customer
                    </a>
                    <a class="nav-item nav-link" href="adminShow.php">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                            
                            </svg>
                        </i>Admin
                    </a>
                    <a class="nav-item nav-link " href="orderShow.php"><i class="fa fa-tachometer-alt me-2"></i>Orders</a>

                </div>
            </nav>
        </div>

        <div class="content d-block">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            
            </nav>

            <div class="container" id="showProduct">
                <div class="col-lg-12"><br><br>
                    <h1 class="text-warning text-center"> Customer </h1><br>

                    <table id="tabledata" class="table table-striped table-hover table-bordered">
                        <tr class="bg-dark text-white text-center">
                            <th> Order Id </th>
                            <th> Product Title </th>
                            <th> Price </th>
                            <th> Customer Name </th>
                            <th> Delete</th>
                            
                        </tr>

                        <?php
                        include '../connection.php';

                        $sql = "SELECT orders.order_id, product.title AS product_title, product.price, customer.name AS customer_name, customer.customer_id
                                FROM orders
                                JOIN customer ON orders.customer_id = customer.customer_id
                                JOIN product ON orders.product_id = product.product_id";

                        $query = mysqli_query($conn, $sql);

                        if (!$query) {
                            die('Error: ' . mysqli_error($conn));
                        }

                        while ($res = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text-center">
                                <td> <?php echo $res['order_id']; ?></td>
                                <td> <?php echo $res['product_title']; ?></td>
                                <td> <?php echo $res['price']; ?></td>
                                <td> <?php echo $res['customer_name']; ?></td>
                                <td>
                                    <form action="deleteOrder.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                        <input type="hidden" name="order_id" value="<?php echo $res['order_id']; ?>">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
