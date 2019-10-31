<?php
    $con=mysqli_connect("localhost", "root", "", "vigan");
    if(isset($_POST["register"])){
        
        $body=$_POST["body"];
        $closing=$_POST["closing"];
        
        $body=stripslashes($body);
        $closing=stripslashes($closing);
        
        $body=mysqli_real_escape_string($con, $body);
        $closing=mysqli_real_escape_string($con, $closing);
        
        $sql=mysqli_query($con, "INSERT INTO appform (body, closing) VALUES ('$body','$closing')");
        if(sql){
            header("location:resume.php?success");
            echo "successful";
        }else{
            header("location:apply.php?failed");
            echo "failed";
        }
    }
?>