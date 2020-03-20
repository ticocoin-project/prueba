<?php 

require_once 'jsonRPCClient.php';
 
$bitcoin = new jsonRPCClient('http://user:password@127.0.0.1:8332/');

echo "<pre>\n";
print_r($bitcoin->getinfo()); echo "\n";
echo "Received: ".$bitcoin->getreceivedbylabel("Your Address")."\n";
echo "</pre>";


?>