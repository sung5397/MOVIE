<?php
$filename = $_GET["filename"];
$path = "./movie/$filename";
$real_filename=urldecode("$filename");
header("Content_Type: application/x-octeststream");
header("Content-Disposition: attachment; filename=".$real_filename);
header("Content-Length: ". filesize($path));
header("Content-Transfer-Encoding: binary");
header("Pragma: no-cache");
header("Expires: 0");
flush();
$fp = fopen($path, "r");
fpassthru($fp);
fclose($fp);
?>


