<?php

include "functions.php";


$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $website = "";

if (isset($_GET) && !empty($_GET)) {

    if (empty($_GET["name"])) {

        header("location: index.php?error=nameErr");

    } else {

        $name = validateString($_GET["name"]);
    }

    if (empty($_GET["email"])) {

        header("location: index.php?error=emailErr");

    } else {

        $email = validateString($_GET["email"]);
    }

    if (empty($_GET["gender"])) {

        header("location: index.php?error=genderErr");

    } else {

        $gender = validateString($_GET["gender"]);
    }
    if (empty($_GET["website"])) {

        header("location: index.php?error=websiteErr");

    } else {

        $website = validateString($_GET["website"]);
        
    }
}

pr($_GET);
echo "<br><br>";

pr($_GET['name']);
echo "<br><br>";

pr($_GET['email']);
echo "<br><br>";

pr($_GET['gender']);
echo "<br><br>";

pr($_GET['website']);
echo "<br><br>";

pr($_GET['comment']);
echo "<br><br>";


