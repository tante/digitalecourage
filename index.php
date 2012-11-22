<?php

// slurp in quotes
$quotes = file("quotes.txt");

// pick random quote
$index = rand(0,count($quotes)-1);

print("Habe Mut, dich ".$quotes[$index]);


?>
