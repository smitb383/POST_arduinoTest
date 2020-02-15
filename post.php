<?php
$time = time(); 
$tempF = $_POST["temp"]; 
//can you send to a javascript file? 
$file = 'index.html'; 
$data = $time." - ".$tempF; 
file_put_contents($file, $data); 
?> 