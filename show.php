<?php
    require_once('db.php');

    $sql = "SELECT * FROM `product`"; // You can go to your sql DB and get this line of code on select
    $result = $con->query($sql);   


?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron">
        <h1 class="text-center">
            Product Company

        </h1>


    </div>

    <div class="conteiner">

    <table class="table table-striped borderrer">

        <tr>

        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>

        </tr>

        <?php 
        if($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo"<td>";
                echo"<div class='btn-group'>";
                echo"<a class='btn btn-secondary' href='./edit.php?id=" .$row['id']. "' > Edit</a>";
                echo"<a class='btn btn-warning' href='./delete.php?id=" .$row['id']. "' > Delete</a>";
                echo"</div>";
                echo"</td>";
                echo "</tr>";

            }

        }
        
        ?>

    </table>


    </div>

</body>    

</html>