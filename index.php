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
      <div id="text">"Habe Mut, dich <?=$quotes[$index]?>."</div>
   </body>
</html>
