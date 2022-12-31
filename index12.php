<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Whether Eligible for vote casting ot not.</title>
</head>
<body>
    <!-- 1. Write a php program to read the age of a candidate and determine whether it is eligible for casting his/her own vote.
    Test Data : 21
    Expected Output :
    Congratulation! You are eligible for casting -->
    <h1>Check Whether Eligible for Vote Casting or Not</h1>
    <form action="#" method="POST">
        <label>Enter your Age</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    if($n1 >= 18)
        echo "Congratulations! You are eligible for vote casting.";
    else if($n1 < 18)
        echo "Sorry, you are not eligible for vote casting.";
    }
?>
