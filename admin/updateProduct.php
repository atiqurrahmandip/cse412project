<?php
@include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    
    if ($_FILES['uploadfile']['error'] == 0) {
        $upload_dir = './store_image/';
        $image_name = $_FILES['uploadfile']['name'];
        $image_path = $upload_dir . $image_name;
        move_uploaded_file($_FILES['uploadfile']['tmp_name'], $image_path);

     
        $sql = "UPDATE product SET title='$title', price='$price', image='$image_name' WHERE product_id='$product_id'";
    } else {
   
        $sql = "UPDATE product SET title='$title', price='$price' WHERE product_id='$product_id'";
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("Product updated successfully!");</script>';
    } else {
        echo '<script>alert("Error updating product. Please try again.");</script>';
    }
}


echo '<script>window.location.href=document.referrer;</script>';
?>
