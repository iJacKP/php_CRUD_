<?php 
    require_once('db.php');
    if(isset($_POST['submitForm'])) {
        
        $name = $_POST['pname'];
        $price = $_POST['pprice'];
        $description = $_POST['pdescription'];

       $sql= "INSERT INTO `product`( `name`, `price`, `description`) 
              VALUES ('$name','$price','$description')";

            // echo  $sql;

              if ($con->query($sql) === TRUE) {
             echo "Added to DataBase";
              }else {
             echo "Something went wrong";    
              }
        
    } else {
        echo "no submit"; 
        //redirect to homepage
    }




?> 