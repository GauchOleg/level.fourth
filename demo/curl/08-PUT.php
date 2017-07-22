<?php 
$curl = curl_init(); 

$str = "Hello, world!"; 
$fp = tmpfile(); 
fwrite($fp, $str); 
fseek($fp, 0); 

curl_setopt($curl, CURLOPT_URL, "http://".$_SERVER['HTTP_HOST']."/demo/curl/upload/put.txt"); 
curl_setopt($curl, CURLOPT_PUT, true); 
curl_setopt($curl, CURLOPT_INFILE, $fp); 
curl_setopt($curl, CURLOPT_INFILESIZE, strlen($str)); 

$result = curl_exec($curl); 
fclose($fp); 
curl_close($curl); 
?>