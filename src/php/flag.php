<?php
$host = gethostbyname('php');
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip."\n";
echo $host."\n";
if($ip === $host) echo "fl4g{t3st_flag}";
?>