<!DOCTYPE html>
<html>
    <head>

    <?php 

        include_once "header.php";
        include_once "shared_info.php";
        require_once "check.php";
        
    ?>

<link rel="stylesheet" href="/php1/src/css/login.css">

    </head>

<body>
<div id="contener">
<form action="/php1/src/logged.php" method="post">
    
    <p>Panel Logowania</p>

    <input type="email" id="email" name="email" minlength = "5" maxlength="25" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'">

    <input type="password" id="password" name="password" minlength = "5" maxlength="15" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'">


    <input type="number" id="pin" name="pin" size="7" placeholder="Kod PIN" onfocus="this.placeholder=''" onblur="this.placeholder='kod PIN'">

    <input type="submit" value="Zaloguj">
</form>
</div>

</body>

</html>