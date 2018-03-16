<!DOCTYPE html>
<html>
<body>

<?php
require "GetRequest.php";

$getRequest = new GetRequest($_SERVER);

var_dump($_SERVER);

echo "<p>Method - " . $getRequest->getMethod() . "</p>";
echo "<p>Path - " . $getRequest->getPath() . "</p>";
echo "<p>URL - " . $getRequest->getURL() . "</p>";
echo "<p>User agent - " . $getRequest->getUserAgent() . "</p>";

var_dump($getRequest->getData());
//echo "<p>Data - ".$getRequest->getData()."</p>";

?>
</body>
</html>