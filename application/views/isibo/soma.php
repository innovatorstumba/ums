<?php 
$link = @$data;

header("Content-Length: " . filesize ($link ) ); 
header("Content-type: application/pdf"); 
header("Content-disposition: inline;     
filename=".basename($link ));
header('Accept-Ranges: bytes');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
$filepath = readfile($link );




?>