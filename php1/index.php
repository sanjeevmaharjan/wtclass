<?php

$name = "Stefanie Hatcher";
echo "Name : " . $name;
echo "<br />";

$length = strlen($name);
echo "Length : " . $length;
echo "<br />";

$cmp = strcmp ($name, "Stefanie Hatcher");
echo "Cmp : " . $cmp;
echo "<br />";

$index = strpos($name, 'e');
echo "Index : " . $index;
echo "<br />";

$first = substr($name, 9, 5);
$name = strtoupper($name);

echo "First : " . $first;
echo "<br />";
echo "Name : " . $name;
echo "<br />";

?>