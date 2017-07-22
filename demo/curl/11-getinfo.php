<?php
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"http://".$_SERVER['HTTP_HOST']."/demo/curl/test.txt");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_exec ($curl);
	
    var_dump(curl_getinfo($curl));
	
	curl_close ($curl);
	
?>