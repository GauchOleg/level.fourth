<?php
$zip = new ZipArchive();
$filename = "test.zip";

if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

$zip->addFromString("testfilephp1.txt", "#1 This is a test string added as testfilephp1.txt.\n");
$zip->addFromString("testfilephp2.txt", "#2 This is a test string added as testfilephp2.txt.\n");
$zip->addFile("test.txt","testfromfile.txt");

$zip->close();
echo file_get_contents($filename);
?>