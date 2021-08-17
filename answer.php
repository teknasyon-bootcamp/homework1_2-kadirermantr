<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

$bmrScore = 0;

if ($gender == "male") {
    $bmrScore = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
} else {
    $bmrScore = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
}

echo "BMR: $bmrScore\n<br />";

if ($bmrScore < $guess) {
    echo "Tahmin değerinden düşük";
} elseif ($bmrScore > $guess) {
    echo "Tahmin değerinden büyük";
} else {
    echo "Tahmin değerine eşit";
}