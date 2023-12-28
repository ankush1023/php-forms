<?php

include "functions.php"; 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $website = "";

if (isset($_GET) && !empty($_GET)) {

    if( isset( $_GET['error']) && $_GET['error']== 'nameErr' ){
        $nameErr = "name is required";
    }

    if( isset( $_GET['error']) && $_GET['error']== 'emailErr' ){
        $emailErr = "email is required";
    }


    if( isset( $_GET['error'] ) &&  $_GET['error'] == 'websiteErr' ) {
        $websiteErr = "Website is required";
    }


    if( isset( $_GET['error'] ) &&  $_GET['error'] == 'genderErr' ) {
        $genderErr = "gender is required";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">

    </head>
    <body>
        <h1> form validation by get method.</h1>
        <p><span class="error">* Required field </span></p>
        <form method="get" action="submit.php">
            name:<input type="text" name="name">
            <span class="error">*
                <?php 
                echo $nameErr 
                ?>
            </span>
            <br><br>
            email:<input type="text" name="email">
            <span class="error">*
                <?php 
                echo $emailErr 
                ?>
            </span>
            <br><br>
            website:<input type="text" name="website">
            <span class="error">*
                <?php 
                 echo $websiteErr 
                ?>
                </span>
            <br><br>
            comment:<textarea name="comment" rows="7" cols="56"></textarea><br><br>
            gender:
            <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="other">other
            <span class="error">*
                <?php 
                echo $genderErr 
                ?>
                </span>
            <br><br>
            <input type="submit" value="submit">


            
        </form>
    </body>

</html>