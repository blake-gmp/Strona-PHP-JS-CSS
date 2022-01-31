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
<form action="/php1/src/registered.php" method="post">

  <p>Panel Rejestracji</p>
    <input type="text" id="fname" name="fname" minlength = "5" maxlength="15" placeholder="Imie" onfocus="this.placeholder=''" onblur="this.placeholder='Imie'">

    <input type="text" id="lname" name="lname" minlength = "5" maxlength="15" placeholder="Nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Nazwisko'">

    <input type="email" id="email" name="email" minlength = "5" maxlength="25"  placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'">

    <input type="date" id="birthday" name="birthday" placeholder="Data urodzin" onfocus="this.placeholder=''" onblur="this.placeholder='Data urodzin'">

    <input type="password" id="password" name="password" minlength = "5" maxlength="15"  placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'">

    <input type="number" id="pin" name="pin" size="7"  placeholder="Kod PIN" onfocus="this.placeholder=''" onblur="this.placeholder='Kod PIN'">

    <input type="submit" value="Zarejestruj">
</form>
</div>
</body>

</html>