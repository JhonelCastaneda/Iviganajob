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
            <h1>Resume</h1>
            
            <form action="main2.php" method="POST">
             <div class="form">
                    <label for="">Picture 4</label>
                    <input type="file" name="picfour" id="" class="form-control">
                </div>
            <section class="one">
                <h3>1.</h3>
                <input type="text" name="profession" placeholder="PROFESSION" required>
                <select name="company">
                    <option value="company">Company Name</option>
                    <option value="school">Vigan Division Office(For Public)</option>
                    <option value="ldy">Lyceum de Ylocos, Inc.(school)</option>
                    <option value="sti">STI Vigan (school)</option>
                    <option value="dwcv">Divine Word College of Vigan (school)</option>
                    <option value="jol">Jollibee (Fastfood)</option>
                    <option value="mcdo">McDonalds (Fastfood)</option>
                    <option value="chow">Chowking (Fastfood)</option>
                    <option value="luna">Hotel Luna</option>
                    <option value="ciudad">Ciudad Fernandina Hotel</option>
                    <option value="salcedo">Hotel Salcedo de Vigan</option>
                    <option value="jtc">JTC Grocery (supermarket)</option>
                    <option value="ergo">ERGO Supermarket (supermarket)</option>
                    <option value="tb">Two Brothers (supermarket)</option>
                    <option value="se">Seven Eleven (convenience store)</option>
                    <option value="gabriela">Gabriela Silang (Hospital)</option>
                    <option value="rabara">Rabara Clinic (Clinic)</option>
                    <option value="subia">Subia Eye Clinic (Optical clinic) </option>
                </select>
                <input type="text" name="objective" placeholder="OBJECTIVES" required>
            </section>
                <section class="two">
                <h3>2.</h3>
                <input type="text" name="firstname" placeholder="FIRST NAME" required>
                <input type="text" name="lastname" placeholder="LAST NAME" required>
                <input type="text" name="middlename" placeholder="MIDDLE NAME" required>
                <input type="text" name="address" placeholder=" ADDRESS" REQUIRED>
                <input type="text" name="contactn" placeholder="CONTACT NUMBER" required>
                <input type="text" name="email" placeholder="EMAIL ADDRESS" REQUIRED>
                <input type="text" name="age" placeholder="AGE" required>
                <input type="text" name="religion" placeholder="RELIGION" required>
                <input type="text" name="status" placeholder="STATUS" required>
                <input type="text" name="birthdate" placeholder="MM/DD/YY" required>
                </section>
                 <section class="three">
                <h3>3.</h3>
                <h4>SKILLS</h4>
                <h5>Give at least three (3)</h5>
                <input type="text" name="skill" placeholder="SKILL #1" required>
                <input type="text" name="skill2" placeholder="SKILL #2" requred>
                <input type="text" name="skill3" placeholder="SKILL #3" required>
                     <h4>EDUCATIONAL BACKGROUND</h4>
                <h5>Type the name of your school</h5>
                <input type="text" name="tertiary" placeholder="TERTIARY" required>
                <input type="text" name="shs" placeholder="SENIOR HIGH SCHOOL">
                <input type="text" name="jhs" placeholder="JUNIOR HIGH SCHOOL" required>
                <input type="text" name="elem" placeholder="ELEMENTARY" required><h4>SEMINAR AND TRAININGS</h4>
                <h5>Give at least two (2)</h5>
                <input type="text" name="semester" placeholder="SEMINAR #1" required>
                <input type="text" name="semester   2" placeholder="SEMINAR #2" required>
                </section>
                
           
                
                <section class="button">
                    <button type="submit" name="register">SUBMIT</button>
                </section>
            </form>
            
        </div>
        
    </body>
</html>