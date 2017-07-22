<?php
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"http://".$_SERVER['HTTP_HOST']."/demo/curl/posttest.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "Hello=World&Foo=Bar&Name=Igor");

    curl_exec ($curl);
    curl_close ($curl);
?>