<?php
    
@include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
    
    $deleteQuery = "DELETE FROM customer WHERE customer_id = ?";

    $stmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $customer_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script>
                window.location.href = "CustomerShow.php";
                </script>';
        echo '<script>
               
                    alert("Customer successfully removed");
             
            </script>';
    } else {
        echo 'Deletion failed';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
