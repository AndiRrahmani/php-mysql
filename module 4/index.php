<?php

$nr1= 15;
$nr2= 30;

function findmax($nr1, $nr2){
    if($nr1 > $nr2){
        return $nr1;
    }
    else{
        return $nr2;
    }

    
}
echo findmax(15,30);

echo "<br>";
function andi($x){
    if($x%2==0){
        echo "$x thi number is even";
    }
    else{
        echo "$x this number is odd";
    }

    

}

andi(124);

echo "<br>";

$sum= 9876537864634 + 8753217352462;

echo $sum;

echo "<br>";

echo gettype($sum);

echo "<br>";


$studenti =["andi", "daris", "anik"];

print_r($studenti);

echo "<br>";

phpversion();







?>