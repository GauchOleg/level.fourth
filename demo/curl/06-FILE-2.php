<?php
	$curl = curl_init();
    $fp = fopen("empty.txt", "w");
	$fh = fopen("headers.txt", "w");
    curl_setopt ($curl, CURLOPT_URL, "http://".$_SERVER['HTTP_HOST']."/demo/curl/test.txt");
    curl_setopt($curl, CURLOPT_FILE, $fp);
	
	curl_setopt($curl, CURLOPT_WRITEHEADER, $fh);
	
    curl_exec ($curl);
    curl_close ($curl);
?>