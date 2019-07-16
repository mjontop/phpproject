<?php

$record = sizeof($_POST)/4;
$con = mysqli_connect('localhost', 'root', '', 'brm_db');

for($i=1; $i<=$record; $i++)
{
    $index1 = "bookid".$i;
    $bookid[$i] = $_POST[$index1];

    $index2 = "price".$i;
    $price[$i] = $_POST[$index2];

    $index3 = "title".$i;
    $title[$i] = $_POST[$index3];

    $index4 = "author".$i;
    $author[$i] = $_POST[$index4];


}


for($i=1; $i<=$record; $i++) {

$q = " UPDATE book SET title='$title[$i]', 
         price='$price[$i]', author='$author[$i]'
         where bookid= $bookid[$i]; ";

mysqli_query($con, $q);

}
mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/result.css">
    <title>Updation</title>
</head>
<body>
<h1>Books Record Management </h1>
   <p id="res"> <?php echo " Record(s) Updated"; ?> </p>

    <p id="act"> <a href="updateForm.php"> Update Again!</a> <br><br>
                <a href="home.php">Home</a></body>
</html>