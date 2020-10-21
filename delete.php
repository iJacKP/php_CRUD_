<?php
    require_once('db.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM `product` WHERE id= $id";
        if ($con->query($sql) === TRUE) {
            echo "Deleted from the Data";
            }else {
            echo "Something went wrong";    
            }

    } else {
        die('id not provided');
    }




?>