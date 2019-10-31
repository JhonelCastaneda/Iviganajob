<!DOCTYPE html>
<html lang="en">
<head>
<title>ivigan aJob</title>
    <link rel="stylesheet" href="../css/login.css?<?php echo time()?>">
</head>
 <body>
        <div class="login-box">
            <h1>Admin Login</h1>
    
            <form action="main.php" method="POST">
            <div class="textbox">
            <i class="far fa-user" ></i>
            <input type="text" placeholder="Username" name="username" required autocomplete="off">
            </div>
            <div class="textbox">
            <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="password" required>
        </div>
            <button type="submit" name="login">Sign In</button>
            </form>
        </div>
    </body>

</html>