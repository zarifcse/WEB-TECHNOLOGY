<?php

Echo "<h1>Number Odd/EVEN</h1><br>";

$number = 400-30;
Echo "Number is $number<br>";

if($number % 2 ==0)
{
    echo "$number is Even";
}
else if($number % 2 != 0) 
{
    echo "$number is Odd";
}
else
{
    echo "$number can not recognized";
}

?>