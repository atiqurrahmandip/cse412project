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

        <footer  class="mt-1">
            <div class="container-fluid">
                <div class="row  text-white  pl-5  pr-5">

                    <div class=" footer_text col-lg-3  col-md-6  col-sm-12  p-5  pb-0 text-center">
                         <div class="title  pb-2">
                            <h4 class="pl-3  ff-secondary  footer-title">Company</h4>
                         </div>
                         <div  style="font-size:16px; font-family: montserrat;">
                            <a  class="footer-link">Home</a>
                            <a  class="footer-link">About us</a>
                            <a  class="footer-link" >Contact us</a>
                            <a  class="footer-link">Get start</a> 
                        </div>
                    </div>
                    <div class=" footer_text col-lg-3  col-md-6  col-sm-12  p-5  pb-0 text-center">
                         <div class="title  pb-2">
                            <h4 class="pl-3  ff-secondary  footer-title">Services</h4>
                         </div>
                         <div  style="font-size:16px; font-family: montserrat;">
                            <a  class="footer-link">Books</a>
                            <a  class="footer-link">Paper instruments</a>
                            <a  class="footer-link" >Office supplies</a>
                            <a  class="footer-link">Other</a> 
                        </div>
                    </div>
                    <div class="footer_text col-lg-3  col-md-6  col-sm-12  p-5  pb-0  text-center">
                        <div class="title  pb-2">
                            <h4 class="pl-3  ff-secondary  footer-title">Accounts</h4>
                        </div>
                        <div  style="font-size:16px; font-family: montserrat;">
                            <a  class="footer-link">Profile</a>
                            <a  class="footer-link">My account</a>
                            <a  class="footer-link" >Purchase</a>
                            <a  class="footer-link">Preference</a> 
                        </div>
                    </div>
                    <div class=" footer_text col-lg-3  col-md-6 col-sm-12  p-5  text-center">
                        <div class="title text-left  pb-2">
                        <h4 class="pl-3  ff-secondary  footer-title">Contact</h4>
                    </div>
                    <div   style="font-size:16px; font-family: montserrat;">
                        <div ><i class="fa-sharp fa-solid fa-house"></i><p class="d-inline">  Aftebnagar,Dhaka</p></div>
                        <div><i class="fa-sharp fa-solid fa-envelope"></i><p class="d-inline">  myshop@gmail.com</p></div>            
                        <div><i class="fa-sharp fa-solid fa-phone"></i><p class="d-inline">  +880765643343</p></div>           
                       <div><i class="fa-sharp fa-solid fa-paper-plane"></i><p class="d-inline"> @mystationaryshop</p></div>
                    </div>
                </div>
                </div>
                <div class="row  text-white   link-icon">
                    <div class="footer_icon col-sm-12  col-md-12 col-lg-12  text-center  pb-3">
                        <a class="btn text-white btn-floating m-1"style="background-color: #3b5998;  border-radius: 50%;" href="#!">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn text-white btn-floating m-1" style="background-color: #55acee;  border-radius: 50%;"href="#!" >
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a  class="btn text-white btn-floating m-1" style="background-color: #dd4b39; border-radius: 50%;"href="#!">
                            <i class="fab fa-google"></i>
                        </a>
                        <a  class="btn text-white btn-floating m-1" style="background-color: #ac2bac;  border-radius: 50%;"href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a  class="btn text-white btn-floating m-1" style="background-color: #0082ca; border-radius: 50%;"href="#!">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a  class="btn text-white btn-floating m-1" style="background-color: #333333; border-radius: 50%;" href="#!">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12  col-md-12  col-sm-12 text-muted  text-center  pt-3">
                        <div class="cpy_right">
                            <p> © Copyright 2023 Company Name. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    



        <!-- all script cdn link -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>

