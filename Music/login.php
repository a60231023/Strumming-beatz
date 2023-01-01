<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
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
                    <h2>Log In</h2>
                    <form action="copy.php" method="post">
                        <div class="inputBox">
                            <input type="text" placeholder="username"  name="username" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="password" name="password" required>
                        </div><br><br>
                        <input type="checkbox" class="check-box" checked><span>Remember Password</span>
                        <div class="inputBox">
                            <input class="submit-btn" type="submit" value="Login" name="submit">
                        </div>
                        <br>
            
                        <p class="forget">Don't have an account ?<a href="http://localhost/final/music/register.php">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    
    
    
</body>
</html>