<?php
$title =  $_POST['title'];
$price = $_POST['price'];
$author = $_POST['author'];

$con = mysqli_connect('localhost', 'root', '', 'brm_db');

$q = " INSERT INTO book (title, price, author) values ('$title', '$price', '$author') ";

$status = mysqli_query($con, $q);
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/result.css">
    <title>Insertion</title>
</head>

<body>
    <h1>Book Record Management </h1>
    <p id="res"><?php if ($status == 1) echo "Record Inserted";
        else echo "Fail"; ?></p>

   <p id="act"> <a href="insertForm.php"> Insert More Records </a> <br><br>
                <a href="home.php">   Home</a>
</p>

</body>

</html>