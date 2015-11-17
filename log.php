<html>

<body>


<?php

echo "Hello World";

echo $_GET["DATA"];

$temp= $_GET["DATA"];
$fd=fopen("welcome.xls","a+");


fwrite($fd,$temp."\n");
?>


</body>

</html>
