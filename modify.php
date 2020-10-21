<?php

    require_once('db.php'); 

    if (isset($_GET['id'])&& isset ($_POST['editForm'])) {
        $id= $_GET['id'];         
        $name = $_POST['pname'];
        $price = $_POST['pprice'];
        $description = $_POST['pdescription'];

        $sql = "UPDATE `product` SET 
        `name`='$name',
        `price`='$price',
        `description`='$description'
         WHERE id = $id"; 

        if ($con->query($sql) === TRUE) {
            echo "Modified the DataBase";
            }else {
            echo "Something went wrong";    
            }
        
    } else {
        echo "invalid";
    }



?>