<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ivigan ajob</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/apply.css?<?php echo time()?>">
        <link rel="shortcut icon" href="pics/logo.jpg">
    </head>
    <?php
    if(isset($_GET['success'])){
        echo'<script>alert("Registration Successful")</script>';
    }else if(isset($_GET['failed'])){
        echo '<script>alert("Registration Failed)</script>';
    }
    ?>
    <body>
        <header>
            <nav>
                <ul class="navbar-nav ml-auto">
                    <li><a href="../index1.php">HOME</a></li>
                    <li><a href="apply.php" class="active">APPLY</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </nav>
        </header>
        
        <div id="container">
            <h1>Application form</h1>
            
            <section class="opening">
                <p>Dear Sir/Ma'am,</p>
            </section>
            
            <form action="main.php" method="POST">
                <section class="input">
                    <textarea name="message" rows="5" cols="20"></textarea>
                </section>
                <section class="closing">
                    <p>Sincerely Yours,</p>
                    <input type="text" name="closing" placeholder="Full name" required>
                </section>
                <section class="button1">
                    <button type="submit" name="register">SUBMIT</button>
                </section>
            </form>
        </div>
        
    </body>
</html>