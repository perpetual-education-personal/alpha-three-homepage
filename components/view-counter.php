<?php

$file = "views.txt";
$counter = 1;

if ( file_exists($file) ) {
  $contents = file_get_contents($file);
  $counter = $counter + $contents;
}

file_put_contents($file, $counter);

?>

<p class="views"><span class="view-counter"><?=$counter?></span></p>
