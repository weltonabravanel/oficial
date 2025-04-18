<?php
$site [] = 'https://youtubeplay.com.br/aovivo/cnnbrasil.html';
$site [] = 'https://youtubeplay.com.br/aovivo/noticiascaracol.html';
$site [] = 'https://youtubeplay.com.br/aovivo/cancaonova.html';
$site [] = 'https://youtubeplay.com.br/aovivo/americatv.html';
$site [] = 'https://youtubeplay.com.br/aovivo/jovempan.html';

$destino =rand(0, (count($site) -
2));

header("location: " . $site[$destino]);
?>
