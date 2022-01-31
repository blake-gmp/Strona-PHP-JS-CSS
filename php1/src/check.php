<?php

   // session_start();
   if(isset($_SESSION["LOGGED"]) && $_SESSION["LOGGED"])
      {
        header("Location: /php1/src/bank/bank.php");
        exit();
      }
?>
