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
    <title>View Book Records</title>
    <link rel="stylesheet" href="./css/formstyle.css" />
</head>

<body>
    <h1>Books Records Management</h1>
   <div id="dv">
    <form action="deletion.php" method="post">

   

    <table id="view_table">
        <tr>
            <th>Serial No.</th>
            <th>Title</th>
            <th>Price</th>
            <th>Author</th>
            <th> Select to Delete</th>
        </tr>
        <?php

        for ($i = 1; $i <=$num; $i++) {
            $row =  mysqli_fetch_array($result);

            ?>
            <tr>
                <td><?php echo $i."."; ?> </td>
                <td><?php echo $row['title']; ?> </td>
                <td><?php echo $row['price']; ?> </td>
                <td><?php echo $row['author']; ?> </td>
                <td> <input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i; ?>" /> </td>
            </tr>
        <?php } ?>


           
                
           
    </table>
    <input type="submit" value="Delete"> <br>
   

    </form>
    <br><a href="home.php"> Home</a>   
    </div>
</body>

</html>