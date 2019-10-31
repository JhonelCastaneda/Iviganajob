<?php
    $con = mysqli_connect("localhost","root","","vigan") or die("Connection Error");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);
        $sql = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
        if($sql){
            $num = mysqli_num_rows($sql);
            if($num > 0){
                header("location:menu.php");
            }else{
                header("location:index.php?failed");
            }
        }
    }   
?>