<?php
$size = sizeof($_POST);
$j = 1;
for ($i = 1; $i <=$size; $i++, $j++) {
    $index = "b" . $j;
    if (isset($_POST[$index])) {
        $b_id[$i] = $_POST[$index];
    } else {
        $i--;
    }
}

$con = mysqli_connect('localhost', 'root', '', 'brm_db');
for($k=1; $k<=$size; $k++)
  {
    $q = "DELETE from book where bookid="."$b_id[$k]" ;
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
    <title>Deletion</title>
</head>

<body>
    <h1>Books Record Management </h1>
    <p id="res"><?php echo $size ." Record Deleted"; ?></p>

    <p id="act"> <a href="deleteForm.php"> Delete More Records </a> <br><br>
                <a href="home.php">   Home</a>
</body>

</html>