<?php

$con = mysqli_connect('localhost', 'root', '', 'brm_db');
$q = "SELECT * FROM book ";
$result =  mysqli_query($con, $q);
$num = mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Book Records</title>
    <link rel="stylesheet" href="./css/formstyle.css" />
</head>

<body>
    <h1>Books Records Management</h1>
    <div id="dv">
    <form action="updation.php" method="post">
        <table id="view_table">
            <tr>
                <th>Serial No.</th>
                <th>Title</th>
                <th>Price</th>
                <th>author</th>
            </tr>
            <?php

            for ($i = 1; $i <= $num; $i++) {
                $row =  mysqli_fetch_array($result);

                ?>
                <tr>
                    <td> <?php echo $i ;?> 
                     <input type="hidden" name="bookid<?php echo "$i"; ?>"  value="<?php echo $i ?>;"/> </td>
                    <td><input type="text" name="title<?php echo "$i"; ?>" value="<?php echo $row['title']; ?>"> </td>
                    <td><input type="text" name="price<?php echo "$i"; ?>" value="<?php echo $row['price']; ?>"> </td>
                    <td><input type="text" name="author<?php echo "$i"; ?>" value="<?php echo $row['author']; ?> "></td>
                </tr>
            <?php } ?>



        </table><br>
        <input type="submit" value="Update" />
            </div>
    </form>
    <br> <a href="home.php">   Home</a>
</body>

</html>