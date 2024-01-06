<?php
 $a = 5;
 $b = 6;
echo $a;
$number = [4.5,5,6,"Ankit Adhikari", [1,2,3]];
print_r($number);
echo "\n";
var_dump($number);

$firstName = "Ankit";
$lastName = "Adhikari";
echo "\n";
echo "My name is " . $firstName . " " . $lastName . ".";
echo "\n";
echo "My name is $firstName $lastName.";

$man = [
    "legs" => 2,
    "head" => 1,
    "clothes" => [
        "shirt" => 1,
        "pants" => 10,
        "shoes" => 100
    ]
];

echo"\n";
echo "This man has ";
echo $man["clothes"]['shirt'];
echo " shirts";
echo "\n";

include "functions.php";

echo add($firstName,$lastName);
?>