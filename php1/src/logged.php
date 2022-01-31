<!DOCTYPE html>
<html>
    <head>

    <?php 
    include_once "header.php";
    require_once "check.php";
    ?>

    </head>

<body>
<?php
    $email = $_POST["email"]; $password = $_POST["password"]; $pin = $_POST["pin"];

    if(!isset($email) || !isset($password) || !isset($pin))
    {
        $_SESSION["LOGIN_ISSET_ERROR"] = true;

        header("Location: /php1/src/login.php");
        exit();
    }
    else if(empty($email) || empty($password) || empty($pin))
    {
        $_SESSION["LOGIN_ISSET_ERROR"] = true;

        header("Location: /php1/src/login.php");
        exit();
    }

    require_once "connect.php";
    try{
        $qstring = sprintf("SELECT * FROM users WHERE email = '%s'", mysqli_real_escape_string($conn, $email));
        if($result = $conn->query($qstring))
        {
          if($users = $result->num_rows > 0)
          {
              $row = $result->fetch_assoc();

              if($row["password"] != $password)
              {
                $_SESSION["LOGIN_BAD_PASSWORD"] = true;
                header("Location: /php1/src/login.php");
                $result->free_result();
                $conn->close();
                exit();
              }
              else if($row["PIN"] != $pin)
              {
                $_SESSION["LOGIN_BAD_PIN"] = true;
                header("Location: /php1/src/login.php");
                $result->free_result();
                $conn->close();
                exit();
              }

              $_SESSION["EMAIL"] = $row["email"];
              $_SESSION["PASSWORD"] = $row["password"];
              $_SESSION["PIN"] = $row["PIN"];

              $_SESSION["ID"] = $row["id"];
              $_SESSION["LOGGED"] = true;

              $_SESSION["FNAME"] = $row["fname"];
              $_SESSION["LNAME"] = $row["lname"];
              $_SESSION["BIRTHDAY"] = $row["birthday"];
              $_SESSION["MONEY"] = $row["money"];
              $_SESSION["ADMIN"] = $row["admin"];

              header("Location: /php1/src/bank/bank.php");
              $result->free_result();
              $conn->close();
              exit();
          }
          else
          {
           $_SESSION["LOGIN_NOT_FOUNDED_EMAIL"] = true;

           header("Location: /php1/src/login.php");
           $result->free_result();
           $conn->close();
           exit();
          }
        }
    }
    catch(Exception $error)
    {
       // $result->free_result();
        require "connect_exception";
    }
?>
</body>

</html>