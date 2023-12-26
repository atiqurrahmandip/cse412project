<?php
include 'connection.php';

$result = mysqli_query($conn, "SELECT * FROM product");

$numProducts = mysqli_num_rows($result);
?>

<div class="product-container">
    <h1 class="text-center m-3">Our Products</h1>

    <div class="row">
        <?php
        // Loop through each product
        $cardsInRow = 0; // Counter for cards in the current row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($cardsInRow < 4) {
        ?>
                <div class="col col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card" style="height: 100%;">
                        <img src="admin/store_image/<?php echo $row['image']; ?>" class="card-img-top" alt="Image" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <h5 class="card-title"><?php echo $row['price']; ?></h5>
                            <p>This is a good product for you. You can buy it.</p>
                            <div style="width: 100%;" class="text-center">
                                <button class="btn btn-danger" style="width: 100%;">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
                $cardsInRow++;
            } else {
                break;
            }
        }
        ?>
    </div>

    <div class="purchase-now text-center">

        <a href="purchase/purchase_page.php" class="btn btn-warning" >Purchase Now</a>
        <p>Explore our products and make a purchase now!For you we provide quality full product which makes you delightful.</p>
        

    </div>
</div>
