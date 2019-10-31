<?php
    $con=mysqli_connect("localhost", "root", "", "vigan");
    if(isset($_POST["register"])){
        
        $profession=$_POST["profession"];
        $company=$_POST["company"];
        $objective=$_POST["objective"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $middlename=$_POST["middlename"];
        $address=$_POST["address"];
        $contactn=$_POST["contactn"];
        $email=$_POST["email"];
        $age=$_POST['age'];
        $religion=$_POST["religion"];
        $status=$_POST["status"];
        $birthdate=$_POST["birthdate"];
         $skill=$_POST["skill"];
        $skill2=$_POST["skill2"];
        $skill3=$_POST["skill3"];
        $tertiary=$_POST["tertiary"];
        $shs=$_POST["shs"];
        $jhs=$_POST["jhs"];
        $elem=$_POST["elem"];
        
        
        $profession=stripslashes($profession);
        $company=stripslashes($company);
        $objective=stripslashes($objective);
        $firstname=stripslashes($firstname);
        $lastname=stripslashes($lastname);
        $middlename=stripslashes($middlename);
        $address=stripslashes($address);
        $contactn=stripslashes($contactn);
        $email=stripslashes($email);
        $age=stripslashes($age);
         $religion=stripslashes($religion);
        $status=stripslashes($status);
        $birthdate=stripslashes($birthdate);
         $skill=stripslashes($skill);
        $skill2=stripslashes($skill2);
        $skill3=stripslashes($skill3);
        $skill=stripslashes($skill);
        $skill2=stripslashes($skill2);
        $skill3=stripslashes($skill3);
         $tertiary=stripslashes($tertiary);
        $shs=stripslashes($shs);
        $jhs=stripslashes($jhs);
        $elem=stripslashes($elem);
        
        
        
        $profession=mysqli_real_escape_string($con, $profession);
        $company=mysqli_real_escape_string($con, $company);
        $objective=mysqli_real_escape_string($con, $objective);
        $firstname=mysqli_real_escape_string($con, $firstname);
        $lastname=mysqli_real_escape_string($con, $lastname);
        $middlename=mysqli_real_escape_string($con, $middlename);
        $address=mysqli_real_escape_string($con, $address);
        $contactn=mysqli_real_escape_string($con,$contactn);
        $email=mysqli_real_escape_string($con,$email);
        $age=mysqli_real_escape_string($con,$age);
        $religion=mysqli_real_escape_string($con,$religion);
        $status=mysqli_real_escape_string($con,$status);
    $birthdate=mysqli_real_escape_string($con,$birthdate);
        $skill=mysqli_real_escape_string($con,$skill);
        $skill2=mysqli_real_escape_string($con,$skill2);
        $skill3=mysqli_real_escape_string($con,$skill3); $tertiary=mysqli_real_escape_string($con,$tertiary);
        $shs=mysqli_real_escape_string($con,$shs);
        $jhs=mysqli_real_escape_string($con,$jhs);
        $elem=mysqli_real_escape_string($con,$elem);
        
        $sql=mysqli_query($con, "INSERT INTO resume (profession, company, objective, firstname,lastname, middlename, address,contactn, email,age, religion, status, birthdate,skill,skill2,skill3,tertiary,shs,jhs,elem ) VALUES ('$profession','$company','$objective','$firstname','$lastname','$middlename','$address','$contactn','$email','$age','$religion','$status','$birthdate','$skill','$skill2','$skill3','$tertiary','$shs','$jhs','$elem','$elem')");
        if(sql){
            header("location:apply.php?success");
            echo "succesful";
        }else{
            header("location:resume.php?failed");
            echo"failed";
        }
        
    }
?>