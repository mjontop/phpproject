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
    <link rel="stylesheet" href= "./css/formstyle.css" />
</head>

<body>
    <h1>Books Records Management</h1>
    <p id="line2">Records Present In Database</p>
    <div id="dv">
        <table id="view_table">
        <tr>
            <th>Serial No.</th>
            <th>Title</th>
            <th>Price</th>
            <th>Author</th>
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
            </tr>
        <?php } ?>


    </table>
    <p id="lst">  <?php echo "Total $num records are shown"; ?> 
     <br><a href="home.php"> Home</a>            
</p>
           
    </div>
    

</body>

</html>
