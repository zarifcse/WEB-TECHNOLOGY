<?php
echo "<h1>Odd Between 10 to 100</h1><br>";

echo "Odd Numbers Are = ";

for($num = 10; $num <= 100; $num++)
{
    if($num % 2 != 0)
    {
        echo $num , " , "; 
    }
}

?>