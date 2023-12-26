<?php

    @include 'connection.php';
    
    
    $empty_id = $empty_pass = '';
    
    if(isset($_POST['loginSubmit'])){
        
        $username = $_POST['username'];
        $pass = $_POST['password'];
        
        
        //check these are empty or not
        if(empty($username)){
            $empty_id = 'Fill in the gap';
        }
        if(empty($pass)){
            $empty_pass = 'Fill in the gap';
        }

        if(!empty($username) && !empty($pass)){
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password =  '$pass' ";
            $query = $conn->query($sql);
            
            if($query->num_rows >= 0){
                
                header('location:./admin/dashboard.php');
                echo "  
                    <script>
                        alert('Succesfull login');
                    </script>
               ";
            }

        else{           

           echo "
                <script>
                    alert('Cannot Entry');
               </script>
        ";

        }
    }
}
?>
<!DOCTYPE html>
<html  >
    <head>
        <title>login page</title>

        <link rel="stylesheet" href="style.css">
        <script src="index.js"></script>



    </head>
    <body>

        <nav  id="Navbar" class="   navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
            <div class="container-fluid">
                <a id="logo"  href="index.php"   class="navbar-brand ff-secondary" href="#"><i class="fa-solid fa-shop me-2 "></i> <strong>ewuSS</strong></a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto mr-2">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link mx-2 active" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2">About</a>
                        </li>
                        <li class="nav-item">                   
                            <a class="nav-link mx-2">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Join us
                            </a>
                            <ul class="dropdown-menu rounded-0 m-0" aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"  >Login</li>
                                <a class="dropdown-item"  href="signupLogin.php">Sign up</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="container-fluid mt-2">
            <div class="row reg-login-page">
                <div class="col-lg-6">
                    <div class="container p-5">

                    </div>
                </div>
                
                <!--login part start from here-->
                <div class="col-lg-6"    id="loginform"  >
                    <div class="container p-5">
                        <div id="customer-signup-id" class="user-signup">
                            <div class="container-fluid signupForm p-3">
                                <form  method="post" action="">
                                    <h3 class="text-center">Sign in</h3>
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="username..." required>
                                        </div>
                                    </div>
                                                                        
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password..." required>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-lg-12">

                                        <input type="submit" name="loginSubmit" value="Sign up" class="btn btn-warning" style="width:100%">

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <label>Haven't you already an account? <a style="cursor:pointer; color:blue"   href="signup.php">Sign up</a></label>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-check">

                                                    <a style="cursor:pointer; color:blue; margin-left:20%; ">Forget Password?</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        