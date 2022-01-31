<html>
   <?php
       require_once "shared.php";
       
       if(isset($_SESSION["MYSQL_CONNECT_ERROR"]))
       {
           echo "<b>WYSTĄPIŁY CHWILOWE PROBLEMY TECHNICZNE - SPRÓBUJ PÓŹNIEJ </b><br><hr>";
           unset($_SESSION["MYSQL_CONNECT_ERROR"]);
       }
       else if(isset($_SESSION["REGISTER_ISSET_ERROR"]))
       {
           echo "<b>Musisz wypełnić wszystkie dane w formularzu rejestracji!</b><br><hr>";
           unset($_SESSION["REGISTER_ISSET_ERROR"]);
       }
       else if(isset($_SESSION["REGISTER_MIN_LENGHT_ERROR"]))
       {
        echo "<b>Minimalna ilość w każdym polu formularza wynosi ".$MINIMUM_LENGHT." znaków.</b><br><hr>";
        unset($_SESSION["REGISTER_MIN_LENGHT_ERROR"]); 
       }
       else if(isset($_SESSION["REGISTER_MAX_LENGHT_ERROR"]))
       {
        echo "<b>Maksymalna ilość znaków w każdym polu formularza wynosi ".$MAX_LENGTH." znaków.</b><br><hr>";
        unset($_SESSION["REGISTER_MAX_LENGHT_ERROR"]); 
       }
       else if(isset($_SESSION["REGISTER_FOUNDED_EMAIL"]))
       {
          echo "<b>Konto o takim adresie email istnieje już w bazie danych.</b><br><hr>";
          unset($_SESSION["REGISTER_FOUNDED_EMAIL"]);
       }
       else if(isset($_SESSION["REGISTER_SUCCESS"]))
       {
          echo "<b>Rejestracja przebiegła pomyślnie! Możesz się zalogować.</b><br><hr>";
          unset($_SESSION["REGISTER_SUCCESS"]);
       }
       else if(isset($_SESSION["LOGIN_ISSET_ERROR"]))
       {
          echo "<b>Musisz wypełnić wszystkie pola formularza logowania.</b><br><hr>";
          unset($_SESSION["LOGIN_ISSET_ERROR"]);
       }
       else if(isset($_SESSION["LOGIN_NOT_FOUNDED_EMAIL"]))
       {
          echo "<b>Nie znaleziono konta o takim adresie email.</b><br><hr>";
          unset($_SESSION["LOGIN_NOT_FOUNDED_EMAIL"]);
       }
       else if(isset($_SESSION["LOGIN_BAD_PASSWORD"]))
       {
          echo "<b>Podano zły email lub hasło.</b><br><hr>";
          unset($_SESSION["LOGIN_BAD_PASSWORD"]);
       }
       else if(isset($_SESSION["LOGIN_BAD_PIN"]))
       {
          echo "<b>Podano zły pin.</b><br><hr>";
          unset($_SESSION["LOGIN_BAD_PIN"]);
       }
       else if(isset($_SESSION["INFO_LOGOUT"]))
       {
          echo "<b>Wylogowano.</b><br><hr>";
          unset($_SESSION["INFO_LOGOUT"]);
       }
   ?>
</html>
