<?php 
function curlHeaderCallback($curl, $headers) { 
    if (preg_match('/^HTTP/i', $headers)) { 
        header($headers); 
        header('Content-Disposition: attachment; filename="file-name.zip"'); 
    } 
    return strlen($headers); 
} 

$str = 'http://'.$_SERVER['HTTP_HOST'].'/demo/curl/zip.php'; 
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $str); 
curl_setopt($curl, CURLOPT_BINARYTRANSFER, 1); 
curl_setopt($curl, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback'); 
curl_setopt($curl, CURLOPT_FAILONERROR, 1); 

curl_exec ($curl); 

$result = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
curl_close ($curl); 

if ($result != 200) { 
    print 'Ошибка: ' . $result; 
} 
?>