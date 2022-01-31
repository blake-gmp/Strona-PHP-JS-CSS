<?php
    
    session_start();

        if(isset($_SESSION["ADMIN"]) && $_SESSION["ADMIN"])
           $_SESSION["MYSQL_CONNECT_ERROR"] = $error;
        else
           $_SESSION["MYSQL_CONNECT_ERROR"] = true;
        
        $conn->close();
        header("Location: /php1/index.php");
        exit();
    
?>
