<!DOCTYPE html>
<html lang="en">
<head>
<title>Ivigan aJob</title>
    <link rel="stylesheet" href="../css/data.css">
</head> 
<body>
    
    <div class="container">
    <table class="container-fluid table-striped table-light table-bordered">
        <tr>
            <th>PROFESSION</th>
            <th>COMPANY</th>
            <th>OBJECTIVE</th>
            <th>FULL NAME / AGE</th>
            <th>ADDRESS</th>
            <th>CONTACT NUMBER</th>
            <th>EMAIL</th>
            <th>RELIGION</th>
            <th>STATUS</th>
            <th>BIRTHDATE</th>
            <th>SKILLS</th>
            <th>TERTIARY</th>
            <th>SENIOR HIGH SCHOOL</th>
            <th>JUNIOR HIGH SCHOOL</th>
            <th>ELEMENTARY</th>
        </tr>
    <?php
        $con = mysqli_connect("localhost", "root","","vigan");
          $sql = mysqli_query($con, "SELECT * FROM resume");
          while($row = mysqli_fetch_array($sql)){
            $profession=$row['profession'];
            $company=$row['company'];
            $objective=$row['objective'];
            $firstname=$row["firstname"];
		    $lastname=$row["lastname"];
            $middlename=$row["middlename"];
            $address=$row["address"];
            $contactn = $row['contact'];
            $email = $row['email'];
            $age = $row['age'];
            $religion = $row['religion'];
            $status = $row['status'];
            $birthdate = $row['birthdate'];
            $skill = $row['skill'];
            $skill2 = $row['skill2'];
            $skill3 = $row['skill3'];
            $tertiary = $row['tertiary'];
            $shs = $row['shs'];
            $jhs = $row['jhs'];
            $elem = $row['elem'];
            $pic = $row["pic"];
            $ID = $row["ID"];
        ?> 
            <tr>
        <td><?php echo $profession ?></td>
        <td><?php echo $company ?></td>
        <td><?php echo $objective ?></td>
        <td><?php echo "$firstname $lastname $middlename $age" ?></td>
        <td><?php echo $address ?></td>
        <td><?php echo $contactn ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $religion ?></td>
        <td><?php echo $status ?></td>
        <td><?php echo $birthdate ?></td>
        <td><?php echo "$skill $skill2 $skill3" ?></td>
        <td><?php echo $tertiary ?></td>
        <td><?php echo $shs ?></td>
        <td><?php echo $jhs ?></td>
        <td><?php echo $elem ?></td>
    <?php
          }
          ?>
        </tr>
        
        </table>
        <button>BackUp</button>
    </div>
    
    </body>
</html>