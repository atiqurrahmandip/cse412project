<?php  include('customerLogin.php'); ?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Purchase Page</title>

    
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../style.css">
        <script   src="main2.js"></script>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    
    <body>


        <?php include('nav.php'); ?>
        <?php include('../components/header.php'); ?>

        <?php include('products.php'); ?>
        <?php include('loginModel.php');  ?>
        <?php include('order.php');  ?>
        
        <?php include('../components/footer.php'); ?>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




        <script>
            
            function handleLogout() {
                window.location.href = 'purchase_page.php?logout=true';
            }
            
            function showAlert(){
                alert('log in first with your id ')
            }
    
    
            function handleProductClick(productId) {
                
                var isLoggedIn = <?php echo isset($_SESSION['customer_id']) ? 'true' : 'false'; ?>;
        
                if (isLoggedIn) {
                    handleOrderClick(productId);
                } else {
                    showAlert();
                } 
            }


    
            function handleOrderClick(productId) {
        
                var productImage = $('#productName_' + productId).find('img').attr('data-image');
   
    
                var productName = $('#productName_' + productId).text();
                var productPrice = $('#price_' + productId).text();
                var productIdDisplay = $('#productIdDisplay');
                var totalQuantityDisplay = $('#totalQuantityDisplay');
                var productDescription = $('#productDescription_' + productId).text();

    
                $('#productImage').attr('src', productImage);
                $('#cartDetails').html('<h3>' + productName + '</h3>Price: ' + productPrice);
                $('#productIdDisplay').text(productId);
                $('#totalQuantityDisplay').val(1);
                $('#productDescription').text(productDescription);
                
                $('#orderModal').modal('show');
            }



            function updateNavbar() {

                var isLoggedIn = <?php echo isset($_SESSION['customer_id']) ? 'true' : 'false'; ?>;
                
                if (isLoggedIn) {       
           
                    $('#loginNavItem, .navbar-text,  #signupNavItem').hide();
                    $('#profileNavItem, #userLogoutNavItem, #loggedOut').show();
                    $('#loggedInUsername, signupNavItem').text('<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>');
        
                } else {
                    $('#loginNavItem, .navbar-text').show();
                    $('#profileNavItem, #historyNavItem, #userLogoutNavItem').hide();
                }
            }
            
            
            $(document).ready(function () {
                
                $('.btn-danger').on('click', function () {
           
                    var productId = $(this).closest('.card').find('[id^="price_"]').attr('id').split('_')[1];
                    handleProductClick(productId);       
                });


                updateNavbar();
                
                $('#loggedOut').on('click', function () {
                    handleLogout();
                });
             });
        </script>

    
    

    </body>
</html>




