<?php

// Iteration 1

//1.1
function calculateArea($length, $witdh)
{
    return $length + $witdh;
};

echo calculateArea(5, 10)  . "\n \n";


//1.2

$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is ";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday";
        echo "Today is Wednesday";
        break;
    case "Thursday";
        echo "Today is Thursday";
        break;
    case "Friday";
        echo "Today is Friday";
        break;
    case "Saturday";
        echo "Today is Saturday";
        break;
    case "Sunday";
        echo "Today is Sunday";
        break;
};

echo $day . "\n \n";


// 1.3
function showProducts()
{
    $fruits = array("Apple", "Banana", "Orange");
    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    };
};
showProducts();
echo "\n";


// 1.4

function showProducts2($fruits)
{
    foreach ($fruits as $fruit) {
        echo $fruit . "\n";
    }
}
$fruits = array("Apple", "Banana", "Orange");
showProducts2($fruits);


// Iteration 2

// 2.1

$count = 1;

for ($count = 1; $count < 20; $count++) {
    echo $count . " ";
}
echo $count;
echo "\n \n";


//2.2

for ($odd = 1; $odd < 128; $odd += 2) {
    if ($odd % 3 == 0 && $odd % 5 != 0) {
        echo $odd . "\n";
    };
};


//2.3

// This code was not easy. There is part of it I do not understand speaking mostly about math. 
for ($exponent = 1; $exponent <= 10 && pow(2, $exponent) <= 1024; $exponent++) {
    $power = pow(2, $exponent);
    echo $power . "\n";
}
echo "\n";


//BONUS code

$numbers = array("a thing", "another thing", "one more thing", 1, 2, "extra Mayo", 5, 7, "Moon", "reboot", "oyster", "reboot", "Aladín", "reboot");
$count = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;

foreach ($numbers as $number) {
    $count4++;
    if (is_int($number)) {
        $count3++;
    }
    if (is_string($number)) {
        $count2++;
    }
    if (substr($number, -6) === "reboot") {
        $count++;
    }
}

echo "Bonus 1 - We have a total of " . $count . " 'Reboots' in the array" . "\n";
echo "Bonus 2 - We have a total of " . $count2 . " strings in the array" . "\n";
echo "Bonus 3 - We have a total of " . $count3 . " integers in the array" . "\n";
echo "Bonus 4 - We have a total of " . $count4 . " elements in the array" . "\n";