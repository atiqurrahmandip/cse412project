<?php

    include '../connection.php';
    
    $result = mysqli_query($conn, "SELECT * FROM product");
    $numProducts = mysqli_num_rows($result);
?>

<div class="product-container">
    <h1 class="text-center m-3">Buy your Products</h1>
    <div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    
                    <img
                        id="productImage" 
                        src="../admin/store_image/<?php echo $row['image']; ?>"
                        data-image="../admin/store_image/<?php echo $row['image']; ?>"
                        class="card-img-top"
                        alt="Image"
                        style="object-fit: cover; height: 200px;"
                    >
                                        
                    <h5 class="card-title" id="productName_<?php echo $row['product_id']; ?>"><?php echo $row['title']; ?></h5>
                    <h5 class="card-title" id="price_<?php echo $row['product_id']; ?>"><?php echo $row['price']; ?></h5>
                    <div style="width: 100%;" class="text-center">
                        <button class="btn btn-danger" style="width: 100%;">Order now</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }?>
    </div>
</div>