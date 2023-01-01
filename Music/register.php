<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Register</h2>
                    <form action="connection.php" method="post">

                    <div class="inputBox">
                            <input type="text" placeholder="First Name" name="first_name" required>
                        </div>
						<div class="inputBox">
                            <input type="text" placeholder="Last Name" name="last_name" required>
                        </div>
					
                        <div class="inputBox">
                            <input type="text" placeholder="Username" name="username" required>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" name="password" required>    
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Confirm Password" name="confirmpassword" required>
                        </div><br><br>
                        <div class="inputBox">
                           <a href="login.php"><input class="submit-btn" type="submit" value="Register"></a> 
                        </div>
                        <p class="forget">Have an account ?<a href="login.php">Log IN</a></p>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    
    
    
</body>
</html>

<?php require_once("file/footer.php"); ?> 