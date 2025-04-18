SITE_BASE_URL=https://youtubebrasil.vercel.app/

<?php


$site [] = 'YOUTUBE_API_KEY=AIzaSyAkpSUobS1_L2FztkyQ_2YM1kHobjv09CQ';



$destino =rand(0, (count($site) -
2));

header("location: " . $site[$destino]);
?>