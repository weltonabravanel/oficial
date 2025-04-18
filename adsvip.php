<?php


$site [] = 'https://youtubeplay.com.br/index11.html';
$site [] = 'https://youtubeplay.com.br/index8.html';
$site [] = 'https://youtubeplay.com.br/index9.html';
$site [] = 'https://youtubeplay.com.br/index10.html';


$destino =rand(0, (count($site) -
2));

header("location: " . $site[$destino]);
?>
