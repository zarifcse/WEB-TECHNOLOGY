<?php
echo "<h1>Large Number Between Three</h1><br>";

$num1 = 50;
$num2 = 100;
$num3 = 25;

echo "Three Numbers Are ($num1,$num2,$num3) <br>";

if($num1>$num2 && $num1>$num3)
{
    echo "$num1 is The Large Number";
}
else if($num2>$num1 && $num2>$num3)
{
    echo "$num2 is The Large Number";
}
else
{
    echo "$num3 is The Large Number";
}

?>