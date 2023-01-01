<?php

session_start();
$server = "localhost";
$user = "root";
$pass = "";
$database = "logininformation";
$conn = mysqli_connect($server, $user, $pass, $database);
    

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $password = $_POST['password'];
    
        $user_search = "SELECT * FROM users where username = '$user' ";
        $query = mysqli_query($conn, $user_search);

        $count = mysqli_num_rows($query);

        if($count){
            $user_pas = mysqli_fetch_assoc($query);

            $database_pass = $user_pas['password'];

            $_SESSION['username'] = $user_pas['username']; 
            

            $pass_match = password_verify($password, $database_pass);
            if($pass_match){
                ?>
                <script type="text/javascript">
                    console.log("Welcome");
                </script>
                <?php
                header('location: Respoinsive Slider (1)/index.html');
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Invalid username or password!");
                </script>
                <?php
            }
        }
    }    

?>