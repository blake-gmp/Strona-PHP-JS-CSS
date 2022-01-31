<!DOCTYPE html>
<html>
    <head>

    <?php  
    include_once "header.php";
    session_unset();
    $_SESSION["INFO_LOGOUT"] = true;
    header("Location: /php1/index.php");
    ?>

    </head>
</html>
