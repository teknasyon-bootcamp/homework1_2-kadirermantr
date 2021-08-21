<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */
 
if ($gender == "male") { // gender değeri male ise
    $bmrScore = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
} else { // gender değeri male değilse
    $bmrScore = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
}

echo "BMR: $bmrScore\n<br />";

if ($bmrScore < $guess) { // bmrScore değeri, guess değerinden düşükse
    echo "Tahmin değerinden düşük";
} elseif ($bmrScore > $guess) { // bmrScore değeri, guess değerinden büyükse
    echo "Tahmin değerinden büyük";
} else { // hiçbir şarta uymazsa
    echo "Tahmin değerine eşit";
}