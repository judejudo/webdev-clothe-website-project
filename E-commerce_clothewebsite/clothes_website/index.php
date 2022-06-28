<?php
echo"Hello World" . " What a beautiful world";
// "<br>"

$a = 5;
$b = 7;
echo $a;

echo $a + $b;

$first_name = "Jane";
echo $first_name;

$number=10; //global scope variable

function num(){
    global $number;
echo $number;
}

num();

if ($a > 4) {
    echo "Variable A is higher than 4";

} else{
    echo "Variable B is lower than 6";
}


?>