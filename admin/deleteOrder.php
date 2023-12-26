<?php
    
@include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $product_id = isset($_POST['order_id']) ? $_POST['order_id'] : null;
    
    $deleteQuery = "DELETE FROM orders WHERE order_id = ?";

    $stmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $product_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script>
                window.location.href = "orderShow.php";
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
