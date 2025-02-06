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

echo "<br>";


$student= ["andi", "anik", "eden", "nili"];
array_push($student, "daris");
print_r ($student);

$count= count($student);

for($i=0; $i<$count; $i++){
    echo "<br>". $student[$i];
}

echo "<br>";

array_pop($student);
print_r($student);

echo "<br>";

 array_unshift($student, "erjon");
 print_r($student);
 echo "<br>";

 array_shift($student);
 print_r($student);
 echo "<br>";

 $student_slice = array_slice($student, 1,1);
 print_r($student_slice);


echo "<br>";

 $mosha= [15,14,13,15,16,14,15];
 $shuma= array_sum($mosha);
 $count= count($mosha);
.

print_r($shuma / $count );









?>