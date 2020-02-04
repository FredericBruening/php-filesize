<?php
include 'functions.php';

$ch = curl_init($argv[1]);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 curl_setopt($ch, CURLOPT_HEADER, TRUE);
 curl_setopt($ch, CURLOPT_NOBODY, TRUE);

 $data = curl_exec($ch);
 $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

 curl_close($ch);
 echo human_filesize($size);

