<!DOCTYPE html>
<html>
    <head>

    <?php 
       include_once "header.php";
       require_once "shared.php";
       require_once "check.php";
    ?>

    </head>

<body>
<?php

  $fname = $_POST["fname"]; $lname = $_POST["lname"]; $email = $_POST["email"]; $birthday = $_POST["birthday"]; $password = $_POST["password"]; $pin = $_POST["pin"];

  if(!isset($fname) || !isset($lname) || !isset($email) || !isset($birthday) || !isset($password) || !isset($pin))
  {
    $_SESSION["REGISTER_ISSET_ERROR"] = true;

    header("Location: /php1/src/register.php");
    exit();
  }
  else if(empty($fname) || empty($lname) || empty($email) || empty($birthday) || empty($password) || empty($pin))
  {
    $_SESSION["REGISTER_ISSET_ERROR"] = true;

    header("Location: /php1/src/register.php");
    exit(); 
  }

  
  if(strlen($fname) < $MINIMUM_LENGHT || strlen($lname) < $MINIMUM_LENGHT || strlen($email) < $MINIMUM_LENGHT || strlen($birthday) < $MINIMUM_LENGHT || strlen($password) < $MINIMUM_LENGHT || strlen($pin) < $MINIMUM_LENGHT)
  {
    $_SESSION["REGISTER_MIN_LENGHT_ERROR"] = true;

    header("Location: /php1/src/register.php");
    exit();
  }

  if(strlen($fname) > $MAX_LENGTH || strlen($lname) > $MAX_LENGTH || strlen($email) > $MAX_LENGTH || strlen($birthday) > $MAX_LENGTH || strlen($password) > $MAX_LENGTH || strlen($pin) > $MAX_LENGTH)
  {
    $_SESSION["REGISTER_MAX_LENGHT_ERROR"] = true;

    header("Location: /php1/src/register.php");
    exit();
  }

  $fname = htmlentities($fname, ENT_QUOTES, "UTF-8");
  $lname = htmlentities($lname, ENT_QUOTES, "UTF-8");
  $email = htmlentities($email, ENT_QUOTES, "UTF-8");
  $birthday = htmlentities($birthday, ENT_QUOTES, "UTF-8");
  $password = htmlentities($password, ENT_QUOTES, "UTF-8");
  $pin = htmlentities($pin, ENT_QUOTES, "UTF-8");

  require_once "connect.php";
  try
  {
    $qstring = sprintf("SELECT * FROM users WHERE email = '%s'", mysqli_real_escape_string($conn, $email));
      if($result = $conn->query($qstring))
      {
        if($users = $result->num_rows == 0)
        {
            $qstring = sprintf("INSERT INTO users (fname, lname, email, birthday, password, pin, money, admin) VALUES ('%s', '%s', '%s', '%s', '%s', %d, %f, %d)",
            mysqli_real_escape_string($conn, $fname),
            mysqli_real_escape_string($conn, $lname),
            mysqli_real_escape_string($conn, $email),
            mysqli_real_escape_string($conn, $birthday),
            mysqli_real_escape_string($conn, $password),
            mysqli_real_escape_string($conn, $pin),
            0.0,
            0);
           if($conn->query($qstring))
           {
            $qstring = sprintf("SELECT * FROM users WHERE email = '%s'", mysqli_real_escape_string($conn, $email));
               if($result = $conn->query($qstring))
               {
                   $_SESSION["REGISTER_SUCCESS"] = true;
                   header("Location: /php1/index.php");
                   $result->free_result();
                   $conn->close();

               }
           }
        }
        else
        {
           $_SESSION["REGISTER_FOUNDED_EMAIL"] = true;

           header("Location: /php1/src/register.php");
           $result->free_result();
           $conn->close();
           exit();
        }
      }
  }
  catch(Exception $error)
  {
    $result->free_result();
    require "connect_exception";
  }

?>
</body>
</html>