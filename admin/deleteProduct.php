<?php
    
@include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
    
    $deleteQuery = "DELETE FROM product WHERE product_id = ?";

    $stmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script>
                window.location.href = "productShow.php";
                </script>';
        echo '<script>
               
                    alert("Product successfully deleted");
             
            </script>';
    } else {
        echo 'Deletion failed';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
