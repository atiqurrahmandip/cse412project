<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["userType"];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    $sql = "";

    if (empty($name) || empty($username) || empty($email) || empty($phone) || empty($password)) {
        die('Error: All fields are required');
    }

    if ($selectedOption === 'customer') {
        $sql = "INSERT INTO customer (name, username, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    } elseif ($selectedOption === 'admin') {
        $code = 'dhaka54367';
        $admincode = $_POST['secureKey'];

        if ($admincode !== $code) {
            die('Error: Admin code is not correct');
        }

        $sql = "INSERT INTO admin (name, username, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    } else {
        die('Error: Invalid user type');
    }

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', $name, $username, $email, $phone, $password);

    if (!mysqli_stmt_execute($stmt)) {
        die('Error: ' . mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);

    // Display a success message using JavaScript
    echo '<script>alert("Registration successful!");</script>';
}

?>





<!DOCTYPE html>
<html  >
    <head>
        <title>home page</title>

        <link rel="stylesheet" href="style.css">
        <script src="index.js"></script>



    </head>
    <body>


        <?php include('components/header.php'); ?>
        
        
        <div class="container-fluid mt-2">
            <div class="row reg-login-page">
                <div class="col-lg-4">
                    <div class="container p-5">

                    </div>
                </div>
                

                <!--registration part start from here-->
                <div class="col-lg-8"    id="registrationform"  >
                    <div class="container p-5">
                        <div id="customer-signup-id" class="user-signup">
                            <div class="container-fluid signupForm p-3">

                                <form  action="" method="post"  onsubmit=" matchpass() && codeCheck() && validateForm();"
>
                                    <h3 class="text-center">Sign up</h3>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <input type="text"     id="name" name="name" class="form-control" placeholder="Full name..." required  autocomplete="off">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="text"     id="username"  name="username"  class="form-control" placeholder="User name..." required  autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <input type="email"    id="email"  name="email"  class="form-control" placeholder="Email..." required   autocomplete="off">
                                        </div>                                       
                                        <div class="col-lg-6 mb-3">
                                            <input type="text"     id="phone"   name="phone"  class="form-control" placeholder="Phone..." required   autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <label  style="color:red;  display:none"  id="match">Password is not match!</label>
                                        <div class="col-lg-6 mb-3">
                                            <input type="password"   id="password"  name="password"   class="form-control" placeholder="Password..." required   autocomplete="off">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <input type="password"   id="conpass"  name="conpass" class="form-control" placeholder="Confirm password..." required   autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-lg-12 mb-3">
                                            <label for="userType">Category Select</label>
                                            <select class="form-control" id="userType"  name="userType" onchange="toggleAdminCode()">
                                                <option  name="customer" id="customer"  value="customer" active >Customer</option>
                                                <option  name="admin" id="admin"  value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row" id="adminCodeContainer"  style="display:none">
                                        <div class="col-lg-12 mb-3">
                                            <label style="color:red;  display:none"  id="codetext"  >Code is not correct</label>
                                            <input type="text" class="form-control"  id="secureKey" name="secureKey"  placeholder="Admin code"   autocomplete="off">                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                                <label class="form-check-label" for="exampleCheckbox"  required>
                                                    I agree to the terms and conditions.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input id="regSubmit" type="submit" class="btn btn-warning" value="Sign up" >
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <label>Have you already an account? <a style="cursor:pointer; color:blue"  href="login.php">Sign in</a></label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('components/footer.php'); ?>


    



        <!-- all script cdn link -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>

