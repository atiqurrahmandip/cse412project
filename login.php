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