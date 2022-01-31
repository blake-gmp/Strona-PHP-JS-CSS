<!DOCTYPE html>
<html>
    <head>

    <?php 
       require_once(dirname(__DIR__)."/header.php");
    ?>
    
    <link rel="stylesheet" href="/php1/src/css/bank.css">
    <link rel="stylesheet" href="/php1/src/fontello/css/fontello.css">
    <script type="text/javascript" src="/php1/src/timer.js"></script>
    </head>

<body onload="PierwszyJS(); MySlider();">

  <div class="wrapper">
    <div class="header">
      <div class="logo">
        <img src="/php1/src/images/bank.png" height="50" width="50" style='float: left;'>
        </img><span style="color: #092f80; ">BANK</span>internetowy.pl<div style='clear:both;'></div></div></div>
    <div class="nav">

      <ul>
        <li><a href="/php1/index.php">Strona główna</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Pomoc</a></li>
        <li><a href="/php1/src/logout.php">Wyloguj</a></li>
        </li>
      </ul>

    </div>

    <div id="slider">

      <div id="slider_bg"><img src="/php1/src/images/img1.jpg" width="750" height="350" style="border-radius: 7px;"/></div>
      <ul>
        <li onclick="changeSlider(1)">*</li>
        <li onclick="changeSlider(2)">*</li>
        <li onclick="changeSlider(3)">*</li>
      </ul>
    </div>
      
    <div class="contener">
      <div class="sidebar">
      <div class="sidebar_info">

      <?php     


 echo "Witaj ".$_SESSION["FNAME"]." ".$_SESSION["LNAME"]."!"; 

 echo "<br><br> <b>Twoje Dane:</b><br>
 Imie: ".$_SESSION["FNAME"]."<br>
 Nazwisko: ".$_SESSION["LNAME"]."<br>
 Data urodzenia: ".$_SESSION["BIRTHDAY"]."<br>
 Stan konta: ".$_SESSION["MONEY"]."<br>
 "; 
?>

        </div>
        <div class="sidebar_operation">
        Czas Lokalny: <div id="timer"></div>
        <br/>
        <input type="number" id="value5" placeholder="Liczba"/>
        <input type="number" id="value6" placeholder="Liczba"/>

        <input type="submit" onclick="sprawdzanie()" value="Sprawdź"/>
        <div id="resultt"></div>
        </div>
      </div>
      <div class="content">
     <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a luctus velit. Nam ultrices nibh ante, quis malesuada dolor pellentesque eu. Etiam maximus facilisis erat euismod ullamcorper. Nullam tortor risus, scelerisque eu mauris et, tincidunt iaculis leo. Sed at consequat lacus. In convallis ex sit amet velit lacinia, ut aliquam dolor scelerisque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

     <p>Aliquam blandit nec massa eget eleifend. Aliquam purus enim, viverra et nibh nec, gravida dignissim odio. Phasellus non nibh id diam interdum feugiat. Integer feugiat orci placerat nulla lobortis ornare. Donec interdum tellus eu quam auctor, id eleifend ante ornare. Integer a augue consectetur, lacinia sem eget, iaculis mi. Curabitur pharetra dignissim feugiat. Aliquam accumsan nisi non orci varius pharetra. Suspendisse a venenatis lacus. Donec pharetra sollicitudin sem vehicula hendrerit. Aliquam condimentum auctor velit, in accumsan orci elementum at. Suspendisse tincidunt ut quam in pretium. Aenean convallis diam est, dictum semper diam iaculis in. Fusce eu feugiat lacus, et tincidunt dolor. </p>

     <p>Proin sed nunc ac tellus cursus ornare. Etiam sed turpis arcu. Morbi vel pellentesque lacus. Aenean libero neque, placerat ac aliquet vel, tincidunt ut purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ex dolor, tincidunt ac commodo et, porttitor quis neque. Ut tincidunt ipsum erat, at posuere urna fringilla at. Vivamus aliquet imperdiet ligula, eu malesuada lorem sollicitudin ac. Quisque sit amet tincidunt nisi. Nullam pulvinar, lorem et vestibulum ultrices, orci purus commodo nulla, vel convallis lacus tortor at mi. Morbi cursus justo a nibh lobortis, sed egestas arcu efficitur. Praesent aliquet aliquam commodo. Mauris urna tortor, fermentum vel laoreet nec, tristique sed nisi. Donec in lectus nunc. Maecenas at nunc lectus.</p>

     <p>Pellentesque nec maximus lorem. Etiam quam erat, aliquam vel metus at, condimentum tempor ex. Vivamus eros arcu, finibus nec dui sit amet, fringilla vestibulum risus. Mauris vel lectus mattis, finibus ante id, pulvinar eros. Proin cursus enim non sapien commodo suscipit. Duis tempor consectetur ex vel consectetur. Cras metus nisl, fringilla sit amet sodales at, volutpat ac dui. Vestibulum pharetra ante id elit molestie, eget hendrerit ex porttitor. Curabitur aliquam orci tellus, in scelerisque sapien finibus vel. Ut erat nulla, egestas id nisl cursus, ultricies molestie urna. Fusce vestibulum, nibh eget cursus ultricies, quam odio convallis arcu, nec tincidunt massa diam at ex. Ut cursus ullamcorper ante sed bibendum. Nunc dapibus aliquet sapien sit amet tincidunt.</p>
     <p>Aliquam blandit nec massa eget eleifend. Aliquam purus enim, viverra et nibh nec, gravida dignissim odio. Phasellus non nibh id diam interdum feugiat. Integer feugiat orci placerat nulla lobortis ornare. Donec interdum tellus eu quam auctor, id eleifend ante ornare. Integer a augue consectetur, lacinia sem eget, iaculis mi. Curabitur pharetra dignissim feugiat. Aliquam accumsan nisi non orci varius pharetra. Suspendisse a venenatis lacus. Donec pharetra sollicitudin sem vehicula hendrerit. Aliquam condimentum auctor velit, in accumsan orci elementum at. Suspendisse tincidunt ut quam in pretium. Aenean convallis diam est, dictum semper diam iaculis in. Fusce eu feugiat lacus, et tincidunt dolor. </p>

     <p>Proin sed nunc ac tellus cursus ornare. Etiam sed turpis arcu. Morbi vel pellentesque lacus. Aenean libero neque, placerat ac aliquet vel, tincidunt ut purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ex dolor, tincidunt ac commodo et, porttitor quis neque. Ut tincidunt ipsum erat, at posuere urna fringilla at. Vivamus aliquet imperdiet ligula, eu malesuada lorem sollicitudin ac. Quisque sit amet tincidunt nisi. Nullam pulvinar, lorem et vestibulum ultrices, orci purus commodo nulla, vel convallis lacus tortor at mi. Morbi cursus justo a nibh lobortis, sed egestas arcu efficitur. Praesent aliquet aliquam commodo. Mauris urna tortor, fermentum vel laoreet nec, tristique sed nisi. Donec in lectus nunc. Maecenas at nunc lectus.</p>

     <p>Pellentesque nec maximus lorem. Etiam quam erat, aliquam vel metus at, condimentum tempor ex. Vivamus eros arcu, finibus nec dui sit amet, fringilla vestibulum risus. Mauris vel lectus mattis, finibus ante id, pulvinar eros. Proin cursus enim non sapien commodo suscipit. Duis tempor consectetur ex vel consectetur. Cras metus nisl, fringilla sit amet sodales at, volutpat ac dui. Vestibulum pharetra ante id elit molestie, eget hendrerit ex porttitor. Curabitur aliquam orci tellus, in scelerisque sapien finibus vel. Ut erat nulla, egestas id nisl cursus, ultricies molestie urna. Fusce vestibulum, nibh eget cursus ultricies, quam odio convallis arcu, nec tincidunt massa diam at ex. Ut cursus ullamcorper ante sed bibendum. Nunc dapibus aliquet sapien sit amet tincidunt.</p>
     <p>Proin sed nunc ac tellus cursus ornare. Etiam sed turpis arcu. Morbi vel pellentesque lacus. Aenean libero neque, placerat ac aliquet vel, tincidunt ut purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ex dolor, tincidunt ac commodo et, porttitor quis neque. Ut tincidunt ipsum erat, at posuere urna fringilla at. Vivamus aliquet imperdiet ligula, eu malesuada lorem sollicitudin ac. Quisque sit amet tincidunt nisi. Nullam pulvinar, lorem et vestibulum ultrices, orci purus commodo nulla, vel convallis lacus tortor at mi. Morbi cursus justo a nibh lobortis, sed egestas arcu efficitur. Praesent aliquet aliquam commodo. Mauris urna tortor, fermentum vel laoreet nec, tristique sed nisi. Donec in lectus nunc. Maecenas at nunc lectus.</p>

<p>Pellentesque nec maximus lorem. Etiam quam erat, aliquam vel metus at, condimentum tempor ex. Vivamus eros arcu, finibus nec dui sit amet, fringilla vestibulum risus. Mauris vel lectus mattis, finibus ante id, pulvinar eros. Proin cursus enim non sapien commodo suscipit. Duis tempor consectetur ex vel consectetur. Cras metus nisl, fringilla sit amet sodales at, volutpat ac dui. Vestibulum pharetra ante id elit molestie, eget hendrerit ex porttitor. Curabitur aliquam orci tellus, in scelerisque sapien finibus vel. Ut erat nulla, egestas id nisl cursus, ultricies molestie urna. Fusce vestibulum, nibh eget cursus ultricies, quam odio convallis arcu, nec tincidunt massa diam at ex. Ut cursus ullamcorper ante sed bibendum. Nunc dapibus aliquet sapien sit amet tincidunt.</p>

    </div><div style='clear:both;'></div>
      </div>

      <div class="socials">
        <div class="yt"><a href="#"><i class="icon-youtube"></i></a></div>
        <div class="fb"><a href="#"><i class="icon-facebook"></i></a></div>
        <div style='clear:both;'></div>
      </div>
  </div>
</body>

</html>