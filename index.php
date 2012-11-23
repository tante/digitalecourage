<?php

// slurp in quotes
$quotes = file("quotes.txt");

// pick random quote
$index = rand(0,count($quotes)-1);
?>
<html>
    <head>
        <title>Digitale Courage</title>
        <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id="distance"></div>
      <div id="text">"Habe Mut, <?php print(trim($quotes[$index]));?>."</div>
<div id="footer">Kontakt: <a href="http://twitter.com">@tante</a>, <a href="http://tante.cc/imprintimpressum/">Impressum</a>, <a href="https://github.com/tante/digitalecourage">Code</a>
</div>
   </body>
</html>
