<!DOCTYPE html>
<html>
    <head>

    <?php 
       require_once "src/header.php";
       include_once "src/shared_info.php";
    ?>
    
    <link rel="stylesheet" href="/php1/src/css/style.css">
    </head>

<body>

    <div id="container">
        <div id="info">[Komunikat] Strona w trakcie budowy...</div>
        <div id="logo"><span style="color: #AF0426; font-size:25px;">Bank</span> <span style="color: black; font-size:18px;">internetowy.pl</span></div>
        
        <div id="menu">
        <div id="leftbar">
            <div class="option">Strona Główna</div> 
            <div class="option">Forum</div>
            <div class="option">Zespół</div>
            <div class="option">Pomoc</div>
            <div class="option">Rekrutacja</div>
            <div style="clear:both;"></div>
            </div>
        <div id="rightbar">
            <?php
            if(!isset($_SESSION["LOGGED"]) || !$_SESSION["LOGGED"])
            echo "<div class='option_join'><a href='/php1/src/login.php'>Zaloguj się</a></div> 
            <div class='option_join'><a href='/php1/src/register.php'>Zarejestruj się</a></div> <div style='clear:both;'></div>";
            else
            echo "<div class='option_join'><a href='/php1/src/logout.php'>Wyloguj</a></div> 
            <div class='option_join'><a href='/php1/src/bank/bank.php'>Moje Konto</a></div> <div style='clear:both;'></div>";
          ?>
        </div>
        <div style="clear:both;"></div>
        </div>
        
        <div id="topbar">
          
          <div id="topbarLeft"><img src="/php1/src/images/bank.png" height="150" width="150"></img></div>
          <div id="topbarRight">
              Witaj na nowej stronie projketu!<br>
              Jest to pierwszy projekt css php html bank internetowy, Jest to pierwszy projekt css php html bank internetowy, Jest to pierwszy projekt css php html bank internetowy,
              Jest to pierwszy projekt css php html bank internetowy,Jest to pierwszy projekt css php html bank internetowy,Jest to pierwszy projekt css php html bank internetowy. 
          </div>
          <div style="clear:both;"></div>
        </div>

        <div id="sidebar">
        <div class="optionSB">Strona Główna</div> 
            <div class="optionSB">Forum</div>
            <div class="optionSB">Zespół</div>
            <div class="optionSB">Pomoc</div>
            <div class="optionSB">Rekrutacja</div>
            <div style="clear:both;"></div>
        </div>
        <div id="content">
        Witaj na nowej stronie projketu!<br>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        <br><br>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        </div>
        <div id="footer">Stopka strony 2022 | projekt 1.0 | Grzegorz Kardynał</div>
    </div>

</body>

</html>