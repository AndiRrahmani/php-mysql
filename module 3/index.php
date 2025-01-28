<?php

$score = "72";

if( $score>=90){
    echo "You got a 5";
}
elseif($score <=89 &&$score >80){
    echo "you got a 4";
}
elseif($score <=79 && $score>70){
    echo "you got a 3";
}
elseif($score <=69 && $score>50){
    echo "you got a 2";
}
else{
    echo "you got a 1";
}


$day= "monday";

switch($day){
    case "Monday":
     echo "nuk ki kurs";
     break;
     case "Tuesday":
     echo "nuk ki kurs";
     break;
     case "Wednsesday":
     echo "nuk ki kurs";
     break;
     case "thursday":
     echo "nuk ki kurs";
     break;
     case "Friday":
     echo "nuk ki kurs";
     break;
     default:
     echo "weekend";
     break;

}







?>