<?php
$fizz = "Fizz";
$buzz = "Buzz";
$fizzbuzz = "FizzBuzz";

for($i = 1; $i <= 50; $i++)
{
    if($i % 3 === 0 && $i % 5 === 0)
    {
        echo $fizzbuzz;
    }
    else if($i % 3 === 0){
        echo $fizz;
    }
    else if($i % 5 === 0){
        echo $buzz;
    }
    else{
        echo $i;
    }
}
echo "<br>";
for($i = 0; $i < 5; $i++)
{
    for($j = 0; $j < 5; $j++)
    {
        echo "●";
    }
    echo "<br>";
}
?>