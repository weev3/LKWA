<?php
$a='{"table":"products","limit":10}';
$obj = json_decode($a, false);

echo "myFunc(".json_encode($obj).")";
?>
